<?php

namespace App;

use Codedge\Fpdf\Facades\Fpdf;

class Mctables extends Fpdf
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        new Fpdf;
    }

    /**
     * Invoke the class instance.
     */
    public function __invoke(): void
    {
        //
    }
}
