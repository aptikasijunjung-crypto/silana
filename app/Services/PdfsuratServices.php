<?php

namespace App\Services;

use Codedge\Fpdf\Fpdf\{Fpdf as FpdfFpdf, Mc_tables};
use Illuminate\Support\Facades\{Auth, DB, Storage};
use Illuminate\Support\Str;

class PdfsuratServices
{
    protected $fpdf;

    public function __construct(Mc_tables $fpdf)
    {
        $this->fpdf = $fpdf;
    }
    // public function PDFTidakMampu($file, $pemda, $kecamatan, $nagari)
    // {

    //     $this->fpdf->AddPage();
    //     $this->fpdf->SetFont('Arial', '', 14);
    //     $this->fpdf->logoNagari($pemda, $kecamatan, $nagari);

    //     // $this->fpdf->Output(Storage::path('draft/' . Str::uuid() . '.pdf'), 'f');
    //     $this->fpdf->Output($file, 'f');
    // }
    public function PDFTidakMampu($data)
    {

        $this->fpdf->AddPage();
        $this->fpdf->logoNagari($data['kota'], $data['kecamatan'], $data['kelurahan'], $data['alamat'], $data['email'], $data['website']);
        $this->fpdf->SetFont('times', 'b', 12);
        $this->fpdf->ln();
        $this->fpdf->Cell('190', 5, 'SURAT KETERANGAN TIDAK MAMPU/MISKIN', 0, 1, 'C');
        $this->fpdf->SetFont('times', '', 10);
        $this->fpdf->Cell('190', 5, 'Nomor : ' . $data['nomor'], 0, 1, 'C');

        $this->fpdf->SetWidths(array(50));
        $this->fpdf->SetAligns(array('C'));
        $this->fpdf->NoBaris(array("\n\n\n^"));


        // $this->fpdf->Output(Storage::path('draft/' . Str::uuid() . '.pdf'), 'f');
        $this->fpdf->Output($data['file'], 'f');
    }
}
