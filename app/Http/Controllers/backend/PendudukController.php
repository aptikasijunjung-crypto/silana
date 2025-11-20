<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\{Auth, DB, Storage};
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\{Penduduk as ModelsPenduduk, penduduk};
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Facades\Image;


class PendudukController extends Controller
{
    public function index()
    {
        $id = Auth::user()->kelurahan_id;
        $data = DB::select('select * from warga where kelurahan_id = ?', [$id]);
        return view('modul.penduduk.home', ['data' => $data]);
    }

    public function box(Request $request)
    {

        $data = DB::select('select * from warga WHERE id = ?', [$request->id])[0];
        $tabel = DB::select('select * FROM penduduk WHERE warga_id=?', [$request->id]);
        return view('modul.penduduk.box', ['data' => $data, 'tabel' => $tabel]);
    }

    public function modal(Request $request)
    {
        $data = [
            'warga_id' => $request->warga_id,
            'id' => $request->id,
            'data' => $request->id == 0 ? '' : DB::select('select * from penduduk WHERE id=?', [$request->id])[0]
        ];
        return view('modul.penduduk.modal', compact('data'));
    }

    public function store(Request $request)
    {
        $id = 0;
        $tabel = null;
        $file = $request->file('files');
        if (empty($request->nik)) {
            $komen = "NIK Harus Diisi ";
        } else if (empty($request->nama)) {
            $komen = "Nama Harus Diisi";
        } else {
            if (empty($request->kode)) {
                if (!isset($file)) {
                    ModelsPenduduk::insert([
                        'nik' => $request->nik,
                        'nokk' => $request->nokk,
                        'nama' => $request->nama,
                        'warga_id' => $request->warga_id,
                        'tempat' => $request->tempat,
                        'tanggal' => $request->tanggal,
                        'sex_id' => $request->sex_id,
                        'agama_id' => $request->agama_id,
                        'pekerjaan_id' => $request->pekerjaan_id,
                        'pendidikan_id' => $request->pendidikan_id,
                        'kawin_id' => $request->kawin_id,
                        'telp' => $request->telp,
                        'kedudukan_id' => $request->kedudukan_id,
                        'penghasilan' => $request->penghasilan,
                    ]);
                    $id = 1;
                    $komen = "Data Berhasil Disimpan";
                    $data = DB::select('select * from penduduk WHERE warga_id=?', [$request->warga_id]);
                    $tabel = tabelPenduduk($data);
                } else {


                    $mime = $file->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($file);
                    $image->scale(width: 100);
                    $namafile = Str::uuid() . '.' . $mime;
                    $image->save(Storage::path('photos/' . $namafile));

                    ModelsPenduduk::insert([
                        'nik' => $request->nik,
                        'nokk' => $request->nokk,
                        'nama' => $request->nama,
                        'warga_id' => $request->warga_id,
                        'tempat' => $request->tempat,
                        'tanggal' => $request->tanggal,
                        'sex_id' => $request->sex_id,
                        'agama_id' => $request->agama_id,
                        'pekerjaan_id' => $request->pekerjaan_id,
                        'pendidikan_id' => $request->pendidikan_id,
                        'kawin_id' => $request->kawin_id,
                        'telp' => $request->telp,
                        'kedudukan_id' => $request->kedudukan_id,
                        'penghasilan' => $request->penghasilan,
                        'photo' => $namafile,
                    ]);
                    $id = 1;
                    $komen = "Data Berhasil Disimpan";
                    $data = DB::select('select * from penduduk WHERE warga_id=?', [$request->warga_id]);
                    $tabel = tabelPenduduk($data);
                }
            } else {
                if (!isset($file)) {
                    $edit = DB::table('penduduk')->where('id', $request->kode)->update([
                        'nik' => $request->nik,
                        'nama' => $request->nama,
                        'tempat' => $request->tempat,
                    ]);
                    $id = 1;
                    $komen = "Data Berhasil Update";
                    $data = DB::select('select * from penduduk WHERE warga_id=?', [$request->warga_id]);
                    $tabel = tabelPenduduk($data);
                } else {
                    $mime = $file->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($file);
                    $image->scale(width: 100);
                    $namafile = Str::uuid() . '.' . $mime;
                    $image->save(Storage::path('photos/' . $namafile));
                    $edit = DB::table('penduduk')->where('id', $request->kode)->update([
                        'nik' => $request->nik,
                        'nama' => $request->nama,
                        'tempat' => $request->tempat,
                        'photo' => $namafile
                    ]);
                    $id = 1;
                    $komen = "Data Berhasil Update";
                    $data = DB::select('select * from penduduk WHERE warga_id=?', [$request->warga_id]);
                    $tabel = tabelPenduduk($data);
                }
            }
        }

        return response()->json([
            'id' => $id,
            'komen' => $komen,
            'tabel' => $tabel
        ]);
    }
}
