<?php

namespace App\Services;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class QrcodeServices
{
    public function buatQR($nomor)
    {
        $namaqr = $nomor . '.png';
        $pathqr = Storage::path('qr_codes/' . $namaqr);
        $mime = Storage::mimeType('qr_codes/' . $namaqr);
        if (!file_exists($pathqr)) {
            QrCode::format('png')->merge('/public/img/DtVw7MuU8AEPGlJ.jpg')->color(255, 0, 0)->size(100)->generate($nomor, Storage::path('qr_codes/' . $namaqr));
        }

        $data = [
            'path' => $pathqr,
            'mime' => $mime
        ];
        return $data;
    }
}
