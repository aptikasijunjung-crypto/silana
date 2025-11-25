<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB, Storage};
use App\Services\QrcodeServices;
use Carbon\Carbon;
use Illuminate\Support\Str;

class TteController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $data = DB::select('SELECT a.id, a.nomor, a.pejabat_nik, b.nama AS LAYANAN, a.created_at FROM dokumen a, layanan b WHERE 
        a.layanan_id=b.id AND
        a.pejabat_id= ? AND a.hasil IS NULL', [$id]);
        return view('modul.tte.home', ['data' => $data]);
    }

    public function modal(Request $request)
    {
        $data = DB::select('SELECT * FROM dokumen WHERE id=?', [$request->id])[0];

        return view('modul.tte.modal', ['data' => $data]);
    }

    public function proses(Request $request, QrcodeServices $qrcode_services)
    {

        $base64 = null;
        $data = DB::select('SELECT * FROM dokumen WHERE id=?', [$request->id])[0];
        $file = Storage::path('bahan/' . $data->bahan);
        $file_mime = Storage::mimeType('bahan/' . $data->bahan);

        $nomor = $data->nomor;
        $nik = $data->pejabat_nik;

        $qr = $qrcode_services->buatQR($nomor);

        if (empty($request->passhprase)) {
            $id = 0;
            $komen = "Masukkan Passhprase";
        } else {
            $response = TTESurat($file, $file_mime,  $qr['path'], $qr['mime'], $nik, $request->passhprase);
            $jd = json_decode($response);
            if (isset($jd->status_code)) {
                $id = 0;
                $komen = $jd->error;
            } else {
                $id = 1;
                $komen = "Data Berhasil di tanda tangani";
                $hasil = 'hasil/' . Str::uuid() . '.pdf';
                $output_filename = Storage::path($hasil);
                $fp = fopen($output_filename, 'w');
                fwrite($fp, $response);
                fclose($fp);
                DB::table('dokumen')->where('id', $request->id)->update([
                    'updated_at' => Carbon::now(),
                    'hasil' => $hasil
                ]);

                $source = Storage::get($hasil);
                $base64 = '<div class="alert alert-primary" role="alert">Dokumen Berhasil di tanda tangani!</div>
                            <iframe src="data:application/pdf;base64,' . base64_encode($source) . '"
                            width="100%" height="600px" frameborder="0">
                            Your browser does not support PDFs. Please download the PDF to view it: <a
                                href="data:application/pdf;base64,' . base64_encode($source) . '">Download
                                PDF</a>
                        </iframe>';
            }
        }
        return response()->json([
            'id' => $id,
            'komen' => $komen,
            'base' => $base64,
            'idx' => $request->id
        ]);
    }
}
