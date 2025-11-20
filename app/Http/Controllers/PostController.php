<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Crypt, DB, Storage};
use Illuminate\Support\Str;
use App\Models\{Categories, Post_categories, Posts, User};
use Carbon\Carbon;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PostController extends Controller
{

    public function index()
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $posts = DB::select("SELECT id, title, created_at, categories, user_id, kelurahan_id FROM posts WHERE kelurahan_id=?", [$data->kelurahan_id]);
        return view('modul.posts.home', ['data' => $data, 'posts' => $posts]);
    }

    public function create()
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        return view('modul.posts.create', ['data' => $data]);
    }
    public function store(Request $request)
    {
        $id = 0;
        $notifikasi = null;
        $judul = $request->judul;
        $content = $request->content;
        $file = $request->file('files');

        if (empty($judul)) {
            $komen = "Judul Belum Diisi";
        } else if (empty($content)) {
            $komen = "Content Belum diisi";
        } else if (!isset($file)) {
            $komen = "Cover Belum di pilih";
        } else {

            $mime = $file->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->resize(width: 900, height: 500);
            $namafile = Str::uuid() . '.' . $mime;
            $image->save(Storage::path('gallery/' . $namafile));

            $image_large = $manager->read($file);
            $image_large->resize(width: 1200, height: 500);
            $nama_large = Str::uuid() . '.' . $mime;
            $image_large->save(Storage::path('gallery/' . $nama_large));

            $image_medium = $manager->read($file);
            $image_medium->scale(width: 500);
            $nama_medium = Str::uuid() . '.' . $mime;
            $image_medium->save(Storage::path('gallery/' . $nama_medium));

            $image_resize = $manager->read($file);
            $image_resize->resize(height: 50, width: 50);
            $nama_resize = Str::uuid() . '.' . $mime;
            $image_resize->save(Storage::path('gallery/' . $nama_resize));

            $posts = Posts::create([
                'user_id' => $request->user_id,
                'kelurahan_id' => $request->kelurahan_id,
                'title' => $judul,
                'content' => $content,
                'slug' => Crypt::encryptString($request->user_id . '---' . $judul),
                'image_large' => $nama_large,
                'image_middle' => $nama_medium,
                'image_default' => $namafile,
                'image_square' => $nama_resize,

            ]);

            $file_tags = $request->tags;
            $tags = json_decode($file_tags, true);
            for ($i = 0; $i < count($tags); $i++) {
                $name = $tags[$i]['value'];
                $data_categories = DB::table('categories')->where('name', $name)->count();
                if ($data_categories == 0) {
                    Categories::create(
                        [
                            'name' => $name
                        ]
                    );
                }

                $categories_id = DB::select('select id from categories where name = ?', [$name])[0];
                Post_categories::insert([
                    'categories_id' => $categories_id->id,
                    'posts_id' => $posts->id
                ]);
            }
            $id = 1;
            $komen = "Data Berhasil Disimpan";
            $notifikasi .= alertBody('Selamat Post Berhasil di posting');
            $notifikasi .= "<p>" . $content . "</p>";
        }


        return response()->json([
            'id' => $id,
            "komen" => $komen,
            'notifikasi' => $notifikasi
        ]);
    }

    public function modal(Request $request)
    {
        if (empty($request->id)) {
            $data = [];
        } else {
            $data = DB::select('select * from posts where id = ?', [$request->id])[0];
        }
        $var = [
            'id' => $request->id,
            'user_id' => $request->user_id,
            'kelurahan_id' => $request->kelurahan_id,
            'data' => $data
        ];
        return view('modul.posts.modal', ['var' => $var]);
    }

    public function storemodal(Request $request)
    {
        $id = 0;
        $notifikasi = null;
        $judul = $request->judul;
        $content = $request->content;
        $file = $request->file('files');

        if (empty($judul)) {
            $komen = "Judul Belum Diisi";
        } else if (empty($content)) {
            $komen = "Content Belum diisi";
        } else {
            if (empty($request->kode)) {
                if (!isset($file)) {
                    $komen = "Cover Belum di pilih";
                } else {
                    $mime = $file->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($file);
                    $image->resize(width: 900, height: 500);
                    $namafile = Str::uuid() . '.' . $mime;
                    $image->save(Storage::path('gallery/' . $namafile));

                    $image_large = $manager->read($file);
                    $image_large->resize(width: 1200, height: 500);
                    $nama_large = Str::uuid() . '.' . $mime;
                    $image_large->save(Storage::path('gallery/' . $nama_large));

                    $image_medium = $manager->read($file);
                    $image_medium->scale(width: 500);
                    $nama_medium = Str::uuid() . '.' . $mime;
                    $image_medium->save(Storage::path('gallery/' . $nama_medium));

                    $image_resize = $manager->read($file);
                    $image_resize->resize(height: 50, width: 50);
                    $nama_resize = Str::uuid() . '.' . $mime;
                    $image_resize->save(Storage::path('gallery/' . $nama_resize));

                    $posts = Posts::create([
                        'user_id' => $request->user_id,
                        'kelurahan_id' => $request->kelurahan_id,
                        'title' => $judul,
                        'content' => $content,
                        'slug' => Crypt::encryptString($request->user_id . '---' . $judul),
                        'image_large' => $nama_large,
                        'image_middle' => $nama_medium,
                        'image_default' => $namafile,
                        'image_square' => $nama_resize,

                    ]);

                    $file_tags = $request->tags;
                    $tags = json_decode($file_tags, true);
                    for ($i = 0; $i < count($tags); $i++) {
                        $name = $tags[$i]['value'];
                        $data_categories = DB::table('categories')->where('name', $name)->count();
                        if ($data_categories == 0) {
                            Categories::create(
                                [
                                    'name' => $name
                                ]
                            );
                        }

                        $categories_id = DB::select('select id from categories where name = ?', [$name])[0];
                        Post_categories::insert([
                            'categories_id' => $categories_id->id,
                            'posts_id' => $posts->id
                        ]);
                    }
                }
                $id = 1;
                $komen = "Data Berhasil Disimpan";
                $tabelpost = DB::select('select * from posts where kelurahan_id = ?', [$request->kelurahan_id]);
                $notifikasi = tabelPosts($tabelpost);
            } else {
                if (!isset($file)) {

                    $posts = DB::table('posts')->where('id', $request->kode)->update([
                        'title' => $request->judul,
                        'content' => $request->content
                    ]);

                    DB::table('posts_categories')->where('posts_id', $request->kode)->delete();
                    $file_tags = $request->tags;
                    $tags = json_decode($file_tags, true);
                    for ($i = 0; $i < count($tags); $i++) {
                        $name = $tags[$i]['value'];
                        $data_categories = DB::table('categories')->where('name', $name)->count();
                        if ($data_categories == 0) {
                            Categories::create(
                                [
                                    'name' => $name
                                ]
                            );
                        }
                        $categories_id = DB::select('select id from categories where name = ?', [$name])[0];
                        Post_categories::insert([
                            'categories_id' => $categories_id->id,
                            'posts_id' => $request->kode
                        ]);
                        $id = 1;
                        $komen = "Data Berhasil Disimpan";
                        $notifikasi = null;
                        $tabelpost = DB::select('select * from posts where kelurahan_id = ?', [$request->kelurahan_id]);
                        $notifikasi = tabelPosts($tabelpost);
                    }
                } else {

                    unlink(Storage::path('gallery/' . $request->image_large));
                    unlink(Storage::path('gallery/' . $request->image_middle));
                    unlink(Storage::path('gallery/' . $request->image_default));
                    unlink(Storage::path('gallery/' . $request->image_square));

                    $mime = $file->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($file);
                    $image->resize(width: 900, height: 500);
                    $namafile = Str::uuid() . '.' . $mime;
                    $image->save(Storage::path('gallery/' . $namafile));

                    $image_large = $manager->read($file);
                    $image_large->resize(width: 1200, height: 500);
                    $nama_large = Str::uuid() . '.' . $mime;
                    $image_large->save(Storage::path('gallery/' . $nama_large));

                    $image_medium = $manager->read($file);
                    $image_medium->scale(width: 500);
                    $nama_medium = Str::uuid() . '.' . $mime;
                    $image_medium->save(Storage::path('gallery/' . $nama_medium));

                    $image_resize = $manager->read($file);
                    $image_resize->resize(height: 50, width: 50);
                    $nama_resize = Str::uuid() . '.' . $mime;
                    $image_resize->save(Storage::path('gallery/' . $nama_resize));

                    $posts = DB::table('posts')->where('id', $request->kode)->update([
                        'title' => $request->judul,
                        'content' => $request->content,
                        'image_large' => $nama_large,
                        'image_middle' => $nama_medium,
                        'image_default' => $namafile,
                        'image_square' => $nama_resize,

                    ]);

                    DB::table('posts_categories')->where('posts_id', $request->kode)->delete();
                    $file_tags = $request->tags;
                    $tags = json_decode($file_tags, true);
                    for ($i = 0; $i < count($tags); $i++) {
                        $name = $tags[$i]['value'];
                        $data_categories = DB::table('categories')->where('name', $name)->count();
                        if ($data_categories == 0) {
                            Categories::create(
                                [
                                    'name' => $name
                                ]
                            );
                        }

                        $categories_id = DB::select('select id from categories where name = ?', [$name])[0];
                        Post_categories::insert([
                            'categories_id' => $categories_id->id,
                            'posts_id' => $request->kode
                        ]);
                    }

                    $id = 1;
                    $komen = "Data Berhasil Disimpan";
                    $tabelpost = DB::select('select * from posts where kelurahan_id = ?', [$request->kelurahan_id]);
                    $notifikasi = tabelPosts($tabelpost);
                }
            }
        }


        return response()->json([
            'id' => $id,
            "komen" => $komen,
            'notifikasi' => $notifikasi
        ]);
    }
}
