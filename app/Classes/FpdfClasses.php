<?php

namespace App\Classes;

namespace Codedge\Fpdf\Fpdf;

class FpdfClasses extends FPDF
{
    protected $widths;
    protected $aligns;

    function logoNagari($pemda, $kecamatan, $nagari, $alamat, $email, $website)
    {
        $this->image(public_path('img/logo.png'), 97, 10, 15);
        $this->SetFont('times', '', 11);
        $this->SetY(29);
        $this->Cell(190, 4, $pemda, 0, 1, 'C');
        $this->Cell(190, 4, $kecamatan, 0, 1, 'C');
        $this->SetFont('times', 'B', 11);
        $this->Cell(190, 4, $nagari, 0, 1, 'C');
        $this->SetFont('times', '', 10);
        $this->Cell(190, 4, $alamat, 0, 1, 'C');
        $this->SetFont('times', 'i', 10);
        $this->Cell(190, 4, "Email : " . $email . "  Website : " . $website, 0, 1, 'C');
        $this->line(15, 50, 190, 50);
        $this->line(15, 50.2, 190, 50.2);
        $this->line(15, 51, 190, 51);
    }

    function Footer()
    {
        // Go to 1.5 cm from bottom
        $this->SetY(-15);
        // Select Arial italic 8
        $this->SetFont('times', 'I', 7);
        // Print centered page number
        $this->Cell(3, 3, '1.', 0, 0, 'L');
        $this->Cell(3, 3, 'UU. ITE No. 11 Tahun 2008 Pasal 5 Ayat 1 (Informasi Elektronik dan/atau Dokumen elektronik dan/atau hasil cetakannya merupakan alat bukti hukum yang sah)', 0, 1, 'L');
        $this->Cell(3, 3, '2.', 0, 0, 'L');
        $this->Cell(3, 3, 'Surat ini di tandatangani secara elektronik menggunakkan sertifikat elektronik yang diterbitkan BSrE', 0, 1, 'L');
        $this->Cell(3, 3, '3.', 0, 0, 'L');
        $this->Cell(3, 3, 'Surat ini dapat dibuktikan keasliannya di https://tte.kominfo.go.id/verifyPDF', 0, 1, 'L');
        $this->image('img/logo-bsre.png', 180, $this->setY(-17), 27);
        $this->line(10, 342, 210, 342);
    }

    function SetLineStyle($style)
    {
        extract($style);
        if (isset($width)) {
            $width_prev = $this->LineWidth;
            $this->SetLineWidth($width);
            $this->LineWidth = $width_prev;
        }
        if (isset($cap)) {
            $ca = array('butt' => 0, 'round' => 1, 'square' => 2);
            if (isset($ca[$cap]))
                $this->_out($ca[$cap] . ' J');
        }
        if (isset($join)) {
            $ja = array('miter' => 0, 'round' => 1, 'bevel' => 2);
            if (isset($ja[$join]))
                $this->_out($ja[$join] . ' j');
        }
        if (isset($dash)) {
            $dash_string = '';
            if ($dash) {
                // if (ereg('^.+, ', $dash))
                if (preg_match('/^.+,/', $str))
                    $tab = explode(', ', $dash);
                else
                    $tab = array($dash);
                $dash_string = '';
                foreach ($tab as $i => $v) {
                    if ($i > 0)
                        $dash_string .= ' ';
                    $dash_string .= sprintf('%.2f', $v);
                }
            }
            if (!isset($phase) || !$dash)
                $phase = 0;
            $this->_out(sprintf('[%s] %.2f d', $dash_string, $phase));
        }
        if (isset($color)) {
            list($r, $g, $b) = $color;
            $this->SetDrawColor($r, $g, $b);
        }
    }

    function Line($x1, $y1, $x2, $y2, $style = null)
    {
        if ($style)
            $this->SetLineStyle($style);
        parent::Line($x1, $y1, $x2, $y2);
    }

    function Rect($x, $y, $w, $h, $style = '', $border_style = null, $fill_color = null)
    {
        if (!(false === strpos($style, 'F')) && $fill_color) {
            list($r, $g, $b) = $fill_color;
            $this->SetFillColor($r, $g, $b);
        }
        switch ($style) {
            case 'F':
                $border_style = null;
                parent::Rect($x, $y, $w, $h, $style);
                break;
            case 'DF':
            case 'FD':
                if (!$border_style || isset($border_style['all'])) {
                    if (isset($border_style['all'])) {
                        $this->SetLineStyle($border_style['all']);
                        $border_style = null;
                    }
                } else
                    $style = 'F';
                parent::Rect($x, $y, $w, $h, $style);
                break;
            default:
                if (!$border_style || isset($border_style['all'])) {
                    if (isset($border_style['all']) && $border_style['all']) {
                        $this->SetLineStyle($border_style['all']);
                        $border_style = null;
                    }
                    parent::Rect($x, $y, $w, $h, $style);
                }
                break;
        }
        if ($border_style) {
            if (isset($border_style['L']) && $border_style['L'])
                $this->Line($x, $y, $x, $y + $h, $border_style['L']);
            if (isset($border_style['T']) && $border_style['T'])
                $this->Line($x, $y, $x + $w, $y, $border_style['T']);
            if (isset($border_style['R']) && $border_style['R'])
                $this->Line($x + $w, $y, $x + $w, $y + $h, $border_style['R']);
            if (isset($border_style['B']) && $border_style['B'])
                $this->Line($x, $y + $h, $x + $w, $y + $h, $border_style['B']);
        }
    }










    function SetWidths($w)
    {
        //Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a)
    {
        //Set the array of column alignments
        $this->aligns = $a;
    }

    function Row($data)
    {
        //Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border
            $this->Rect($x, $y, $w, $h);
            //Print the text
            $this->MultiCell($w, 5, $data[$i], 0, $a);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function NoBaris($data)
    {
        //Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        $style5 = array(
            'L' => 0,
            'T' => 0,
            'R' => 0,
            'B' => 0
        );
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'J';
            //Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border
            //Rect($x, $y, $w, $h, $style = '', $border_style = null, $fill_color = null) {
            $this->Rect($x, $y, $w, $h, 'DF', $style5, array(999, 999, 900));
            //Print the text
            $this->MultiCell($w, 5, $data[$i], 0, $a);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h)
    {
        //If the height h would cause an overflow, add a new page immediately
        if ($this->GetY() + $h > $this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt)
    {
        //Computes the number of lines a MultiCell of width w will take
        $cw = &$this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', $txt);
        $nb = strlen($s);
        if ($nb > 0 and $s[$nb - 1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l += $cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }
}
