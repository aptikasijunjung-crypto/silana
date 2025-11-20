<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB, Response, Storage};
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Str;
use App\Models\{Surat, User};
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SuratController extends Controller
{
    public function index()
    {

        $id = Auth::user()->id;
        $data = DB::select('SELECT a.nomor, b.tentang, b.files, b.origin_file, b.created_at, b.updated_at FROM setuju a, surat b WHERE 
                        a.nomor=b.nomor AND
                        a.user_id=?', [$id]);
        return view('modul.surat.home', ['data' => $data]);
    }

    public function create()
    {
        return view('modul.surat.form');
    }
    public function store(Request $request)
    {
        $data =  $request->validate([
            'nomor' => 'required|string',
            'tentang' => 'required|string',
            'files' => 'required|mimes:pdf|max:10000',
        ]);

        $data['files'] = $request->file('files')->store('sementara', 'local');

        Surat::create($data);

        return redirect()->route('form.surat');
    }

    function tampilPDF()
    {
        $contents = Storage::get('draft/7EC2h3elBOQbID5Su7JxnHa0Ror5NaweXOeoIoRA.pdf');
        return Response::make($contents, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="ddf.pdf',
        ]);
    }

    function tampilPDFDinamis()
    {
        $contents = Storage::get('draft/7EC2h3elBOQbID5Su7JxnHa0Ror5NaweXOeoIoRA.pdf');
        $data =  Response::make($contents, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="ddf.pdf',
        ]);

        $base64 = base64_encode($contents);

        return view('modul.surat.pdfdinamis', ['data' => $base64]);
        // return $data;
    }

    public function edit(Request $request)
    {
        $data = DB::select('select * from surat where nomor = ? LIMIT 1', [$request->id])[0];

        $data['files'] =  Storage::get($data->files);

        return $data;
        // dd($data);
    }

    public function tte(Request $request)
    {
        $data = DB::select('select * from surat where nomor = ? LIMIT 1', [$request->id])[0];

        $data->files = base64_encode(Storage::get($data->files));
        return view('modul.surat.boxtte', ['data' => $data]);
        // dd($data);
    }

    public function signature(Request $request)
    {
        $validasi = $request->validate(
            ['passhprase' => 'required|string']
        );

        $data = DB::select('select * from surat where nomor = ?', [$request->nomor])[0];


        $filenya = Storage::path($data->files);

        $namaqr = uniqid() . '.png';

        QrCode::format('png')->merge('/public/img/DtVw7MuU8AEPGlJ.jpg')->color(255, 0, 0)->size(100)->generate('Make me into a QrCode!', Storage::path('qr_codes/' . $namaqr));

        $pathqr = Storage::path('qr_codes/' . $namaqr);


        $hasil = tandatanganbiasa($filenya, $request->passhprase, $pathqr);
        $jd = json_decode($hasil);

        if (isset($jd->status_code)) {
            return back()->with('error_message', $jd->error)->with('kesalahan', 'sdsd');
        } else {
            $surat = Str::uuid() . '.pdf';
            $output_filename = Storage::path('surat/' . $surat);
            $fp = fopen($output_filename, 'w');
            fwrite($fp, $hasil);
            fclose($fp);
        }
    }

    public function viewdraft(Request $request)
    {
        $file = $request->file;
        return view('modul.surat.draft', compact('file'));
    }
}
