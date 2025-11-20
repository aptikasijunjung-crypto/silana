<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB, Hash, Storage};
use Illuminate\Support\Str;
use App\Models\{Akses, User};
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PerangkatController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $data = DB::select('SELECT a.id, a.name, a.nik, a.jabatan, a.email, a.kelurahan_id, a.tempat, a.tanggal, a.telp, a.photo from users a where 
                                    a.kelurahan_id=?', [$user->kelurahan_id]);

        return view('modul.perangkat.home', ['data' => $data, 'kelurahan_id' => $user->kelurahan_id]);
    }

    public function add()
    {
        $data_akses = Akses::all();
        return view('modul.perangkat.add', ['data_akses' => $data_akses]);
    }

    public function store(Request $request)
    {
        $id = 0;
        $tabel = null;
        $file = $request->file('files');
        if ($request->akses_id == '#') {
            $komen = "Pilih Akses ID";
        } else if (empty($request->nik)) {
            $komen = "NIK Harus Diisi";
        } else if (empty($request->tanggal)) {
            $komen = "Isi Tanggal Lahir";
        } else if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $request->email)) {
            $komen = "Email Tidak Valid";
        } else if (empty($request->telp)) {
            $komen = "Telp Harus Diisi";
        } else {
            if (empty($request->kode)) {
                $email_baru = DB::select('select count(id) as jumlah from users where email = ?', [$request->email])[0];
                if ($email_baru->jumlah > 0) {
                    $komen = "Email tidak bisa digunakan";
                } else if (strlen($request->password) < 8) {
                    $komen = "Password Terlalu Singkat ";
                } else if (!isset($file)) {
                    $komen = "Photo Belum Dipilih";
                } else {

                    $mime = $file->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($file);
                    $image->scale(width: 100);
                    $namafile = Str::uuid() . '.' . $mime;
                    $image->save(Storage::path('photos/' . $namafile));

                    $password  = Hash::make($request->password);
                    $simpan = DB::insert(
                        'insert into users (kelurahan_id,akses_id, nik, jabatan, name, tempat, tanggal, email, password, is_active, photo, telp ) 
                            values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                        [
                            $request->kelurahan_id,
                            $request->akses_id,
                            $request->nik,
                            $request->jabatan,
                            $request->name,
                            $request->tempat,
                            $request->tanggal,
                            $request->email,
                            $password,
                            1,
                            $namafile,
                            $request->telp
                        ]
                    );

                    $data = DB::select('select a.id, a.name, a.nik, a.jabatan, a.email, a.tempat, a.tanggal,
                                    a.kelurahan_id, a.photo, a.telp from users a where 
                                    a.kelurahan_id=?', [$request->kelurahan_id]);
                    $tabel = tabelPerangkat($data, csrf_token(), route('modal.perangkat'));
                    $id = 1;
                    $komen = "Data Berhasil di tambahkan";
                }
            } else {
                $email_baru = DB::select('select count(id) as jumlah from users where email = ? and email not in ( ? )', [$request->email, $request->email_])[0];
                if ($email_baru->jumlah > 0) {
                    $komen = "Email Tidak Dapat Digunakan";
                } else {
                    if (empty($request->password)) {
                        // jika password kosong
                        if (!isset($file)) {
                            DB::table('users')->where('id', $request->kode)->update([
                                'nik' => $request->nik,
                                'name' => $request->name,
                                'jabatan' => $request->jabatan,
                                'email' => $request->email,
                                'tempat' => $request->tempat,
                                'tanggal' => $request->tanggal,
                                'telp' => $request->telp
                            ]);
                        } else {
                            $mime = $file->getClientOriginalExtension();
                            $manager = new ImageManager(new Driver());
                            $image = $manager->read($file);
                            $image->scale(width: 100);
                            $namafile = Str::uuid() . '.' . $mime;
                            $image->save(Storage::path('photos/' . $namafile));
                            DB::table('users')->where('id', $request->kode)->update([
                                'nik' => $request->nik,
                                'name' => $request->name,
                                'jabatan' => $request->jabatan,
                                'email' => $request->email,
                                'tempat' => $request->tempat,
                                'tanggal' => $request->tanggal,
                                'photo' => $namafile,
                                'telp' => $request->telp
                            ]);
                        }
                        $id = 1;
                        $komen = "Data Sukses Dirubah";
                        $data = DB::select('select a.id, a.name, a.nik, a.jabatan, a.email, a.tempat, a.tanggal,
                                    a.kelurahan_id, a.photo, a.telp from users a where 
                                    a.kelurahan_id=?', [$request->kelurahan_id]);
                        $tabel = tabelPerangkat($data, csrf_token(), route('modal.perangkat'));
                    } else {
                        // jika merubah password
                        if (strlen($request->password) < 8) {
                            $komen = "Password Terlalu Singkat";
                        } else {
                            $password  = Hash::make($request->password);
                            if (!isset($file)) {
                                DB::table('users')->where('id', $request->kode)->update([
                                    'nik' => $request->nik,
                                    'name' => $request->name,
                                    'jabatan' => $request->jabatan,
                                    'email' => $request->email,
                                    'tempat' => $request->tempat,
                                    'tanggal' => $request->tanggal,
                                    'password' => $password,
                                    'telp' => $request->telp
                                ]);
                            } else {
                                $mime = $file->getClientOriginalExtension();
                                $manager = new ImageManager(new Driver());
                                $image = $manager->read($file);
                                $image->scale(width: 100);
                                $namafile = Str::uuid() . '.' . $mime;
                                $image->save(Storage::path('photos/' . $namafile));

                                DB::table('users')->where('id', $request->kode)->update([
                                    'nik' => $request->nik,
                                    'name' => $request->name,
                                    'jabatan' => $request->jabatan,
                                    'email' => $request->email,
                                    'tempat' => $request->tempat,
                                    'tanggal' => $request->tanggal,
                                    'password' => $password,
                                    'photo' => $namafile,
                                    'telp' => $request->telp
                                ]);
                            }
                            $id = 1;
                            $komen = "Data Berhasil di Perbaharui";
                            $data = DB::select('select a.id, a.name, a.nik, a.jabatan, a.email, a.tempat, a.tanggal,
                                    a.kelurahan_id, a.photo, a.telp from users a where 
                                    a.kelurahan_id=?', [$request->kelurahan_id]);
                            $tabel = tabelPerangkat($data, csrf_token(), route('modal.perangkat'));
                        }
                    }
                }
            }
        }
        return response()->json([
            'id' => $id,
            'komen' => $komen,
            'tabel' => $tabel
        ]);
    }


    public function modal(Request $request)
    {
        $data_akses = Akses::all();
        $kode = $request->id;
        $kelurahan_id = $request->kelurahan_id;
        if (empty($kode)) {
            $data = [];
        } else {
            $data  = DB::select('select * from users WHERE id=?', [$kode])[0];
        }
        return view(
            'modul.perangkat.modal',
            ['data_akses' => $data_akses, 'kode' => $kode, 'data' => $data, 'kelurahan_id' => $kelurahan_id]
        );
    }
}
