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
        // $this->fpdf->AddPage();
        // $this->fpdf->SetFont('Arial', 'B', 16);
        // $this->fpdf->Cell(40, 10, 'Hello from Laravel FPDF!');
        // $this->fpdf->Output();


        $this->fpdf->AddPage();
        $this->fpdf->SetFont('Arial', '', 14);
        $this->fpdf->Cell(40, 10, 'Hello from Laravel FPDF!');
        $this->fpdf->setXY(10, 50);
        $this->fpdf->SetWidths(array(10, 10));
        $this->fpdf->Row(array("sds", "sd"));
        $this->fpdf->Row(array("sds", "sd"));
        $this->fpdf->Row(array("sds", "sd"));
        $this->fpdf->Row(array("sds", "sd"));
        $this->fpdf->Output();
        exit;
    }
}
