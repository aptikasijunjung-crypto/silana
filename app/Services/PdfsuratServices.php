<?php

namespace App\Services;

use Codedge\Fpdf\Fpdf\FpdfClasses;

class PdfsuratServices
{
    protected $fpdf;

    public function __construct(FpdfClasses $fpdf)
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
        $this->fpdf->SetFont('times', '', 12);
        $this->fpdf->Cell('190', 5, 'Nomor : ' . $data['nomor'], 0, 1, 'C');
        $this->fpdf->Cell('190', 5, 'Yang Bertanda tangan di bawah ini :', 0, 1, 'L');
        $this->fpdf->setWidths(array(10, 7, 50, 5, 120));
        $this->fpdf->NoBaris(array('', 'a.', 'Nama', ':', $data['kepala']));
        $this->fpdf->NoBaris(array('', 'a.', 'Jabatan', ':', $data['jabatan']));
        $this->fpdf->ln();
        $this->fpdf->Cell('190', 5, 'Menerangkan Bahwa :', 0, 1, 'L');
        $this->fpdf->setWidths(array(10, 7, 50, 5, 120));
        $this->fpdf->NoBaris(array('', 'a.', 'Nama', ':', $data['ortu_name']));
        $this->fpdf->NoBaris(array('', 'b.', 'NIK', ':', $data['ortu_nik']));
        $this->fpdf->NoBaris(array('', 'c.', 'Tempat/Tanggal Lahir', ':', $data['ortu_tempat'] . " / " . tgl_indonesia($data['ortu_tanggal'])));
        $this->fpdf->NoBaris(array('', 'd.', 'Jenis Kelamin', ':', $data['ortu_sex_name']));
        $this->fpdf->NoBaris(array('', 'e.', 'Status', ':', $data['ortu_kawin_name']));
        $this->fpdf->NoBaris(array('', 'f.', 'Pekerjaan', ':', $data['ortu_pekerjaan_name']));
        $this->fpdf->NoBaris(array('', 'g.', 'Alamat', ':', $data['ortu_alamat']));
        $this->fpdf->ln();
        $this->fpdf->Cell('190', 5, 'Adalah Orang Tua Dari :', 0, 1, 'L');
        $this->fpdf->setWidths(array(10, 7, 50, 5, 120));
        $this->fpdf->NoBaris(array('', 'a.', 'Nama', ':', $data['anak_name']));
        $this->fpdf->NoBaris(array('', 'b.', 'NIK', ':', $data['anak_nik']));
        $this->fpdf->NoBaris(array('', 'c.', 'Tempat/Tanggal Lahir', ':', $data['anak_tempat'] . " / " . tgl_indonesia($data['anak_tanggal'])));
        $this->fpdf->NoBaris(array('', 'd.', 'Jenis Kelamin', ':', $data['anak_sex_name']));
        $this->fpdf->NoBaris(array('', 'e.', 'Status', ':', $data['anak_kawin_name']));
        $this->fpdf->NoBaris(array('', 'f.', 'Pekerjaan', ':', $data['anak_pekerjaan_name']));
        $this->fpdf->NoBaris(array('', 'g.', 'Alamat', ':', $data['anak_alamat']));
        $this->fpdf->ln();
        $this->fpdf->SetWidths(array(190));
        $this->fpdf->NoBaris(array('Menurut sepengetahuan kami orang tersebut diatas benar kurang mampu'));
        $this->fpdf->NoBaris(array('Surat Keterangan ini dipergunakan untuk :'));
        $this->fpdf->SetFont('times', 'BI', 12);
        $this->fpdf->ln();
        $this->fpdf->Cell('190', 5, strtoupper($data['alasan_name']), 0, 1, 'C');
        $this->fpdf->ln();
        $this->fpdf->SetFont('times', '', 12);
        $this->fpdf->SetWidths(array(190));
        $this->fpdf->NoBaris(array('Demikian surat keterangan ini dikeluarkan untuk dapat dipergunakan dengan semestinya.'));


        $this->fpdf->SetWidths(array(110, 30, 5, 45));
        $this->fpdf->SetAligns(array('C', 'L', 'L', 'L'));
        $this->fpdf->ln();
        $this->fpdf->NoBaris(array("", "Dikeluarkan di", ":",  $data['tempat']));
        $this->fpdf->NoBaris(array("", "Pada Tanggal", ":", $data['created_at']));
        $this->fpdf->SetWidths(array(100, 80));
        $this->fpdf->SetAligns(array('C', 'C'));
        $this->fpdf->NoBaris(array("", "\n\n\n^\n\n\n\n" . strtoupper($data['kepala']) . "\n" . strtoupper($data['jabatan'])));


        // $this->fpdf->Output(Storage::path('draft/' . Str::uuid() . '.pdf'), 'f');
        $this->fpdf->Output($data['file'], 'f');
    }
}
