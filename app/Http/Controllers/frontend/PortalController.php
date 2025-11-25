<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortalController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::select('SELECT 
                            a.kelurahan_id, a.kelurahan_name, a.sebutan, a.kepala, a.banner, a.logo, a.komitmen,
                            b.photo
                            FROM kelurahan a 
                            LEFT JOIN users b ON a.kepalaid=b.id
                            WHERE  a.slug = ?', [$request->id])[0];
        $session = [
            'logo' => 'logo',
            'kelurahan' => $data
        ];
        $logo = session(['logo' => $session]);
        $berita6 = DB::select('SELECT a.id, a.title, a.image_default, a.content, a.slug
        FROM posts a WHERE a.kelurahan_id=? ORDER BY a.created_at DESC LIMIT 0,6', [$data->kelurahan_id]);

        $berita74 = DB::select('SELECT a.id, a.title, a.image_default, a.content, a.image_large, a.slug
        FROM posts a WHERE a.kelurahan_id = ? ORDER BY a.created_at DESC LIMIT 7,4', [$data->kelurahan_id]);

        $popular = DB::select('SELECT a.id, a.title, a.image_square, a.content, a.created_at, a.slug
        FROM posts a WHERE a.kelurahan_id = ? ORDER BY baca DESC LIMIT 0,5', [$data->kelurahan_id]);

        $recent = DB::select('SELECT a.id, a.title, a.image_square, a.content, a.created_at, a.slug
        FROM posts a WHERE a.kelurahan_id = ? ORDER BY rand() DESC LIMIT 0,5', [$data->kelurahan_id]);

        $featured = DB::select('SELECT a.id, a.title, a.image_large, a.content, a.created_at, a.slug
        FROM posts a WHERE ulang=1 AND a.kelurahan_id = ?', [$data->kelurahan_id]);

        $categories = DB::select('select * from categories where id IN (select a.categories_id FROM posts_categories a, posts b WHERE
                                    a.posts_id=b.id GROUP BY a.categories_id) ');
        return view('portal.index', [
            'data' => $data,
            'logo' => $logo,
            'berita6' => $berita6,
            'berita74' => $berita74,
            'popular' => $popular,
            'recent' => $recent,
            'ulang' => $featured,
            'categories' => $categories
        ]);
    }

    public function singlepost(Request $request)
    {
        $data = DB::select('SELECT a.id, a.image_large, a.title, a.content, a.categories,
                        b.name 
                        FROM posts a LEFT JOIN users b ON a.user_id=b.id
                        where a.slug = ?', [$request->id])[0];

        return view('portal.single', ['data' => $data]);
    }
}
