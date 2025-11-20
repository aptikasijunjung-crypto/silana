<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class KiercodeController extends Controller
{
    public function index()
    {
        QrCode::format('png')->merge('/public/img/DtVw7MuU8AEPGlJ.jpg')->color(255, 0, 0)->size(200)->generate('Make me into a QrCode!', Storage::path('qr_codes/' . uniqid() . '.png'));
        return "dff";
    }
}
