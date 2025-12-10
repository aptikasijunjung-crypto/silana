<?php

namespace App\Http\Controllers\surat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB, Storage};
use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use App\Services\PdfsuratServices;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UsahaController extends Controller
{
    public function index(Request $request)
    {
        $id = Auth::user()->id;
        $data = DB::table('users')->where('id', $id)
            ->leftJoin('kelurahan', 'users.kelurahan_id', '=', 'kelurahan.kelurahan_id')
            ->get()->first();
        $tabel = DB::table('dokumen')->where('kelurahan_id', $data->kelurahan_id)
            ->where('layanan_id', 2)
            ->get();
        return view('surat.usaha.home', ['data' => $data, 'tabel' => $tabel]);
    }

    public function modal(Request $request)
    {
        $data = DB::table('kelurahan')->where('kelurahan_id', $request->kelurahan_id)->get()->first();
        return view('surat.usaha.modal', ['data' => $data]);
    }


    public function store(Request $request, PdfsuratServices $pdfsurat_services)
    {
        $komen = null;
        $tabel = null;
        if (empty($request->ortu_name)) {
            $id = 0;
            $komen = "Pilih Pelaku Usaha " . $request->tags;
        } else {
            $data_kecamatan = DB::select('SELECT a.kelurahan_name, a.alamat, a.keterangan AS NAMAKELURAHAN,
                            a.email, a.website, a.tempat,
                            b.kecamatan_name, b.keterangan AS NAMAKECAMATAN,
                            c.keterangan AS NAMAKOTA FROM kelurahan a, kecamatan b, kota c WHERE 
                            a.kecamatan_id=b.kecamatan_id AND
                            b.kota_id=c.kota_id AND
                            a.kelurahan_id=?', [$request->kelurahan_id])[0];

            $file = Str::uuid() . '.pdf';
            $data = [
                'nomor' => $request->nomor,
                'kota' => $data_kecamatan->NAMAKOTA,
                'kecamatan' => $data_kecamatan->NAMAKECAMATAN,
                'kelurahan' => $data_kecamatan->NAMAKELURAHAN,
                'alamat' => $data_kecamatan->alamat,
                'email' => $data_kecamatan->email,
                'website' => $data_kecamatan->website,
                'kepala' => $request->pejabat_name,
                'jabatan' => $request->jabatan,
                'ortu_name' => $request->ortu_name,
                'ortu_nik' => $request->ortu_nik,
                'ortu_tempat' => $request->ortu_tempat,
                'ortu_tanggal' => $request->ortu_tanggal,
                'ortu_sex_name' => $request->ortu_sex_name,
                'ortu_kawin_name' => $request->ortu_kawin_name,
                'ortu_pekerjaan_name' => $request->ortu_pekerjaan_name,
                'ortu_alamat' => $request->ortu_alamat,

                'tags' => $request->tags,
                'tempat' => $data_kecamatan->tempat,
                'created_at' => tgl_indonesia(date('Y-m-d')),
                'file' => Storage::path('bahan/' . $file)
            ];

            Dokumen::insert([
                'kelurahan_id' => $request->kelurahan_id,
                'layanan_id' => $request->layanan_id,
                'nomor' => $request->nomor,
                'pejabat_name' => $request->pejabat_name,
                'pejabat_id' => $request->pejabat_id,
                'jabatan' => $request->jabatan,
                'pejabat_nik' => $request->pejabat_nik,

                'ortu_name' => $request->ortu_name,
                'ortu_id' => $request->ortu_id,
                'ortu_nik' => $request->ortu_nik,
                'ortu_tempat' => $request->ortu_tempat,
                'ortu_tanggal' => $request->ortu_tanggal,
                'ortu_sex_name' => $request->ortu_sex_name,
                'ortu_sex_id' => $request->ortu_sex_id,
                'ortu_kawin_name' => $request->ortu_kawin_name,
                'ortu_kawin_id' => $request->ortu_kawin_id,
                'ortu_pekerjaan_name' => $request->ortu_pekerjaan_name,
                'ortu_pekerjaan_id' => $request->ortu_pekerjaan_id,
                'ortu_alamat' => $request->ortu_alamat,

                'created_at' => Carbon::now(),
                'bahan' => $file,
                'tahun' => Carbon::now()->year,
                'bulan' => Carbon::now()->month
            ]);
            $pdfsurat_services->PDFKetaranganUsaha($data);
            $id = 1;
            $komen = "Data Berhasil di simpan";

            $data_tabel = DB::table('dokumen')->where('kelurahan_id', $request->kelurahan_id)
                ->where('layanan_id', 2)
                ->get();
            $tabel = tabelKeteranganUsaha($data_tabel);
        }
        return response()->json([
            'id' => $id,
            "komen" => $komen,
            'tabel' => $tabel
        ]);
    }
}
