<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AutoController extends Controller
{
    public function autoperangkat(Request $request)
    {
        $term = '%' . $request->term . '%';
        $kelurahan_id = $request->kelurahan_id;
        $data = DB::select("SELECT name AS label, id as value, jabatan, nik 
                            FROM users where CONCAT_WS(',', name, email) LIKE ? AND kelurahan_id = ? LIMIT 0,10", [$term, $kelurahan_id]);
        return response()->json($data);
    }
    public function autopenduduk(Request $request)
    {
        $term = '%' . $request->term . '%';
        // $kelurahan_id = $request->kelurahan_id;
        $data = DB::select("SELECT a.nama AS label, a.id as value, a.nik, a.tempat, a.tanggal,
                            b.nama AS sex_name,
                            b.id AS sex_id,
                            c.nama AS kawin_name,
                            c.id AS kawin_id,
                            d.nama AS pekerjaan_name,
                            d.id AS pekerjaan_id, 
                            e.warga_name,
                            f.kelurahan_name,
                            g.kecamatan_name
                            FROM penduduk a, sex b, kawin c, pekerjaan d, warga e, kelurahan f, kecamatan g WHERE
                            a.sex_id=b.id AND
                            a.kawin_id = c.id AND
                            a.pekerjaan_id=d.id AND
                            a.warga_id=e.id AND
                            e.kelurahan_id=f.kelurahan_id AND
                            f.kecamatan_id=g.kecamatan_id AND
                            f.kelurahan_id=? AND
                            CONCAT_WS(',', a.nama, a.nik) LIKE ? LIMIT 0,10", [$request->kelurahan_id, $term]);
        return response()->json($data);
    }
}
