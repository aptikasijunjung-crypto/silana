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
        $berita6 = DB::select('SELECT a.id, a.title, a.image_default, a.content
        FROM posts a ORDER BY a.created_at DESC LIMIT 0,6');

        $berita74 = DB::select('SELECT a.id, a.title, a.image_default, a.content, a.image_large
        FROM posts a ORDER BY a.created_at DESC LIMIT 7,4');

        $popular = DB::select('SELECT a.id, a.title, a.image_square, a.content, a.created_at
        FROM posts a ORDER BY baca DESC LIMIT 0,5');

        $recent = DB::select('SELECT a.id, a.title, a.image_square, a.content, a.created_at
        FROM posts a ORDER BY rand() DESC LIMIT 0,5');

        $featured = DB::select('SELECT a.id, a.title, a.image_large, a.content, a.created_at
        FROM posts a WHERE ulang=1');

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
}
