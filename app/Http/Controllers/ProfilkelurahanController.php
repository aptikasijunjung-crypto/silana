<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Http\Request;

class ProfilkelurahanController extends Controller
{
    public function index()
    {
        $id = Auth::user()->kelurahan_id;
        $data = DB::select('select a.kelurahan_id, a.kelurahan_name, b.kecamatan_name, c.kota_name,
                                a.website, a.email, a.alamat, a.kepala, a.kepalaid, a.nik, a.jabatan,
                                a.banner, a.logo
                                FROM kelurahan a, kecamatan b, kota c WHERE
                                a.kecamatan_id=b.kecamatan_id AND
                                b.kota_id=c.kota_id AND
                                a.kelurahan_id  = ?', [$id])[0];
        return view('modul.profil.home', ['data' => $data]);
    }

    public function update(Request $request)
    {

        $update = DB::table('kelurahan')->where('kelurahan_id', $request->kelurahan_id)->update([
            'website' => $request->website,
            'email' => $request->email,
            'alamat' => $request->website,
            'kepala' => $request->kepala,
            'kepalaid' => $request->kepalaid,
            'nik' => $request->nik,
            'jabatan' => $request->jabatan,

        ]);


        return redirect()->back();
    }

    public function gantibanner(Request $request)
    {
        DB::table('kelurahan')->where('kelurahan_id', $request->kelurahan_id)->update([
            'banner' => $request->file
        ]);
        return response()->json([
            'id' => 0,
            'komen' => 'Data Success di masukkan ' . $request->kelurahan_id
        ]);
    }
    public function gantilogo(Request $request)
    {
        DB::table('kelurahan')->where('kelurahan_id', $request->kelurahan_id)->update([
            'logo' => $request->file
        ]);
        return response()->json([
            'id' => 0,
            'komen' => 'Logo Berhasil di ganti'
        ]);
    }
}
