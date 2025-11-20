<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB, Storage};
use App\Models\{Setuju, Surat, User};
use App\Services\QrcodeServices;
use BaconQrCode\Encoder\QrCode;
use Carbon\Carbon;
use Illuminate\Support\Str;

use function Livewire\store;
use function Pest\Laravel\get;

class DocumentsController extends Controller
{
    public function index()
    {
        return view('modul.dokumen.home');
    }

    public function store(Request $request)
    {

        $output = null;
        $vid = $request->v_id;
        $vnik = $request->v_nik;
        $vnama = $request->v_name;
        $vjabatan = $request->v_jabatan;


        $file = $request->file('files');
        if (empty($request->tentang)) {
            $id = 0;
            $komen = "Isi Tentang Surat yang akan di tanda tangani";
        } else if (!isset($vid)) {
            $id = 0;
            $komen = "Pilih Penandatangan Surat";
        } else if (!isset($file)) {
            $id = 0;
            $komen = "File Belum dipilih";
        } else {
            $mimeType = $file->getClientMimeType();
            $ext = $file->getClientOriginalExtension();
            $size = $file->getSize();
            $namafile = $file->getClientOriginalPath();
            $lokasi = $file->getPathname();
            $formatfile   = array('pdf');
            $maximal = 200000;
            if (!in_array($ext, $formatfile)) {
                $id = 0;
                $komen = "Type File Tidak dibolehkan";
            } else if ($size > $maximal) {
                $id = 0;
                $komen = "File Terlalu Besar";
            } else {
                $id = 1;
                $komen = "File Berhasil di Unggah";
                $simpan = $file->store('sementara', 'local');
                for ($i = 0; $i < count($vid); $i++) {
                    $vid_ = $vid[$i];
                    $vnik_ = $vnik[$i];
                    $vnama_ = $vnama[$i];
                    $vjabatan_ = $vjabatan[$i];
                    $is_active =  ($i == 0) ? 1 : null;
                    Setuju::insert([
                        'nomor' => $request->nomor,
                        'user_id' => $vid_,
                        'nik' => $vnik_,
                        'nama' => $vnama_,
                        'jabatan' => $vjabatan_,
                        'urut' => $i,
                        'is_active' => $is_active,
                        'total' => count($vid)
                    ]);
                }
                Surat::insert([
                    'nomor' => $request->nomor,
                    'tentang' => $request->tentang,
                    'files' => $simpan,
                    'created_at' => Carbon::now(),
                    'on_check' => 0
                ]);
                $source = Storage::get($simpan);
                $output = '<div class="alert alert-primary" role="alert">Dokumen Berhasil di Upload!</div>
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
            'output' => $output
        ]);
    }

    public function pilih(Request $request)
    {

        $id = $request->id;

        if (!isset($request->v_id)) {
            $sama = 0;
        } else {
            $v_id = $request->v_id;
            $sama = in_array($id, $v_id);
        }


        if (empty($request->id)) {
            $kode = 0;
            $komen = 'Pilih Pejabat';
            $row = null;
        } else if ($sama >= 1) {
            $kode = 0;
            $komen = 'Data Sudah di pilih';
            $row = null;
        } else {

            $kode = 1;
            $komen = null;
            $data = DB::select('select * from users WHERE id=?', [$id])[0];
            $row = "
            <tr id='array-" . $data->id . "'>
                <td class='nomor text-center'></td>
                <td>" . $data->name . "</td>
                <td>" . $data->nik . "</td>
                <td>" . $data->jabatan . "</td>
                <td class='text-center'><span class='label mr-2'>
                    <i class='icon-2x text-dark-50 flaticon-close pointer hapus_array' id='" . $data->id . "'></i></span>
                </td>
                " . hilangClass('v_id[]', $data->id, 'v_id') . "
                " . hilang('v_nik[]', $data->nik) . "
                " . hilang('v_name[]', $data->name) . "
                " . hilang('v_jabatan[]', $data->jabatan) . "
                
            </tr>
            ";
        }


        return response()->json([
            'id' => $kode,
            'komen' => $komen,
            'row' => $row
        ]);
    }

    public function autopejabat(Request $request)
    {
        $term = '%' . $request->term . '%';
        $data = DB::select("select name AS label, id as value, jabatan, nik from users where CONCAT_WS(',', name, email) LIKE ? LIMIT 0,10", [$term]);
        return response()->json($data);
    }

    public function notifikasi()
    {
        $id = Auth::user()->id;

        $data = DB::select('SELECT a.id, a.nomor, b.tentang, b.files FROM setuju a, surat b
                                WHERE 
                                a.nomor=b.nomor AND
                                a.user_id=? and a.urut=b.on_check
                                AND b.selesai IS NULL', [$id]);
        return view('modul.dokumen.notifikasi', ['data' => $data]);
    }

    public function modaltte(Request $request)
    {
        $id = $request->id;
        $data = DB::select('SELECT a.id, a.nomor, b.tentang, b.files, (a.total - a.urut) AS TTE
                                FROM setuju a
                                LEFT JOIN surat b ON a.nomor=b.nomor
                                WHERE 
                                a.id=?', [$id])[0];
        $pdf = base64_encode(Storage::get($data->files));
        return view('modul.dokumen.modaltte', ['id' => $id, 'data' => $data, 'pdf' => $pdf]);
    }

    public function prosestte(Request $request, QrcodeServices $qrcode_services)
    {
        $id = 0;
        $umpan_balik = null;
        $judul = null;
        if ($request->terima_id == '#') {
            $komen = "Pilih Tindakan ";
        } else if (empty($request->keterangan)) {
            $komen = "Isi Keterangan";
        } else {
            if ($request->kode != 1) {
                DB::table('setuju')
                    ->where('id', $request->id)
                    ->update([
                        'keterangan' => $request->keterangan,
                        'created_at' => Carbon::now(),
                        'is_active' => null,
                        'setuju_id' => $request->terima_id
                    ]);
                $id = 1;
                $komen = "Verifikasi Berhasil";
                $umpan_balik = umpanKeterangan(
                    $request->terima_id == 1 ? 'Selamat, Anda Berhasil verifikasi Dokumen ini' : 'Anda tidak menyetujui dokumen ini'
                );
                $judul = $request->terima_id == 1 ? 'Success' : 'Waduh';
            } else {
                if ($request->terima_id == 1) {
                    if (empty($request->passhprase)) {
                        $komen = "Isi Passhrase Anda";
                    } else {
                        $data_perangkat = DB::select("SELECT b.files, a.nik, b.nomor FROM setuju a, surat b 
                                                WHERE 
                                                a.nomor=b.nomor AND
                                                a.id=?", [$request->id])[0];

                        $file = Storage::path($data_perangkat->files);
                        $file_mime = Storage::mimeType($data_perangkat->files);

                        $nomor = $data_perangkat->nomor;
                        $nik = $data_perangkat->nik;

                        $qr = $qrcode_services->buatQR($nomor);


                        $response = TTESurat($file, $file_mime,  $qr['path'], $qr['mime'], $nik, $request->passhprase);
                        $jd = json_decode($response);
                        if (isset($jd->status_code)) {
                            $komen = $jd->error;
                        } else {
                            $id = 1;
                            $komen = "Data Berhasil di tanda tangani";
                            $surat = 'surat/' . Str::uuid() . '.pdf';
                            $output_filename = Storage::path($surat);
                            $fp = fopen($output_filename, 'w');
                            fwrite($fp, $response);
                            fclose($fp);
                            DB::table('setuju')
                                ->where('id', $request->id)
                                ->update([
                                    'keterangan' => $request->keterangan,
                                    'created_at' => Carbon::now(),
                                    'is_active' => null,
                                    'setuju_id' => $request->terima_id,
                                    'origin_file' => $surat
                                ]);
                            $umpan_balik = tampilPDF(base64_encode(Storage::get($surat)));
                            $judul = "Selamat Data Berhasil di tanda tangani";
                        }
                    }
                } else {
                    $id = 1;
                    $komen = "Anda Sudah membatalkan surat ini";
                    DB::table('setuju')
                        ->where('id', $request->id)
                        ->update([
                            'keterangan' => $request->keterangan,
                            'created_at' => Carbon::now(),
                            'is_active' => null,
                            'setuju_id' => $request->terima_id
                        ]);
                }
            }
        }

        return response()->json([
            'id' => $id,
            'komen' => $komen,
            'umpan' => $umpan_balik,
            'judul' => $judul
        ]);
    }


    public function buatqr(Request $request, QrcodeServices $qrcode_services)
    {
        if ($request->id == 1) {
            $qrcode_services->buatQR($request->nomor);
        } else {

            if (file_exists(Storage::path('qr_codes/' . $request->nomor . '.png'))) {
                unlink(Storage::path('qr_codes/' . $request->nomor . '.png'));
            }
        }
    }
}
