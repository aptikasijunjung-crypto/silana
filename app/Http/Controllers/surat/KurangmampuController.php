<?php

namespace App\Http\Controllers\surat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB, Storage};
use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use App\Services\PdfsuratServices;
use Carbon\Carbon;
use Illuminate\Support\Str;

class KurangmampuController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $data = DB::select('select a.id, a.kelurahan_id, b.kelurahan_name from users a, kelurahan b where 
                        a.kelurahan_id=b.kelurahan_id AND
                        a.id = ?', [$id])[0];
        $tabel = DB::select('SELECT a.id, a.nomor, a.pejabat_name, a.pejabat_nik, a.jabatan, a.bahan, 
        a.hasil, a.created_at, a.updated_at, a.ortu_name, a.anak_name,
        b.nama AS alasan_name
         FROM dokumen a, alasan b 
         WHERE 
         a.alasan_id=b.id AND
         a.kelurahan_id=? AND a.layanan_id=1', [$data->kelurahan_id]);
        return view('surat.kurangmampu.home', ['data' => $data, 'tabel' => $tabel]);
    }

    public function modal(Request $request)
    {

        $data = DB::table('kelurahan')->where('kelurahan_id', $request->kelurahan_id)->get()->first();
        return view('surat.kurangmampu.modal', ['data' => $data]);
    }

    public function modaldelete(Request $request)
    {


        return view('surat.kurangmampu.modaldelete', ['id' => $request->id]);
    }

    public function prosesdelete(Request $request)
    {
        $data = DB::table('dokumen')->where('id', $request->id)->get()->first();
        if (file_exists(Storage::path('bahan/' . $data->bahan))) {
            unlink(Storage::path('bahan/' . $data->bahan));
        }

        if (empty($data->hasil)) {
        } else {
            if (file_exists(Storage::path($data->hasil))) {
                unlink(Storage::path($data->hasil));
            }
        }
        DB::table('dokumen')->where('id', $request->id)->delete();


        return response()->json([
            'id' => $request->id,
            'kode' => null
        ]);
    }

    public function store(Request $request, PdfsuratServices $pdfsurat_services)
    {

        $id = 0;
        $tabel = null;
        if (empty($request->ortu_id)) {
            $komen = "Pilih Orang Tua";
        } else if (empty($request->anak_id)) {
            $komen = "Pilih Anak";
        } else if ($request->alasan_id == '#') {
            $komen = "Pilih Alasan Pembuatan Surat";
        } else {
            $data_kecamatan = DB::select('SELECT a.kelurahan_name, a.alamat, a.keterangan AS NAMAKELURAHAN,
                            a.email, a.website,
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
                'file' => Storage::path('bahan/' . $file)
            ];
            $pdfsurat_services->PDFTidakMampu($data);

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
                'anak_name' => $request->anak_name,

                'anak_id' => $request->anak_id,
                'anak_nik' => $request->anak_nik,
                'anak_tempat' => $request->anak_tempat,
                'anak_tanggal' => $request->anak_tanggal,
                'anak_sex_name' => $request->anak_sex_name,
                'anak_sex_id' => $request->anak_sex_id,
                'anak_kawin_name' => $request->anak_kawin_name,
                'anak_kawin_id' => $request->anak_kawin_id,
                'anak_pekerjaan_name' => $request->anak_pekerjaan_name,
                'anak_pekerjaan_id' => $request->anak_pekerjaan_id,
                'anak_alamat' => $request->anak_alamat,
                'alasan_id' => $request->alasan_id,
                'created_at' => Carbon::now(),
                'bahan' => $file,
                'tahun' => Carbon::now()->year,
                'bulan' => Carbon::now()->month
            ]);
            $query = DB::select('SELECT a.id, a.nomor, a.pejabat_name, a.pejabat_nik, a.jabatan, a.bahan, 
                                a.hasil, a.created_at, a.updated_at, a.ortu_name, a.anak_name,
                                b.nama AS alasan_name
                                FROM dokumen a, alasan b 
                                WHERE 
                                a.alasan_id=b.id AND
                                a.kelurahan_id=? AND a.layanan_id=1', [$request->kelurahan_id]);
            $tabel = tabelLayananKurangMampu($query);
            $id = 1;
            $komen = "Data Sukses Disimpan";
        }
        return response()->json([
            'id' => $id,
            'komen' => $komen,
            'tabel' => $tabel
        ]);
    }
}
