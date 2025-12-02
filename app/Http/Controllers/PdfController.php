<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mctables;
use FPDF;
use Codedge\Fpdf\Fpdf\{Fpdf as FpdfFpdf, Mc_tables};




class PdfController extends Controller
{
    protected $fpdf;

    public function __construct(Mc_tables $fpdf)
    {
        $this->fpdf = $fpdf;
    }
    public function index()
    {
        $response = TTESurat(
            "/Users/fitriadi/Desktop/bc silana/silana/storage/app/private/bahan/aa9f0524-c871-4316-917f-720c331eeb1e.pdf",
            "application/pdf",
            "/Users/fitriadi/Desktop/bc silana/silana/storage/app/private/qr_codes/0527282812.png",
            "image/png",
            "1371026505830006",
            "2020%Asli"
        );
        return $response;
    }
}
