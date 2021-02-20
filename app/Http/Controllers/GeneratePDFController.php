<?php

namespace App\Http\Controllers;

use App\Models\PrintDetail;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class GeneratePDFController extends Controller
{
    public function generate(){
        $collection = PrintDetail::all();
        $pdf = PDF::loadView('generatepdf', compact('collection'));
        $pdf->setPaper('a4');

        return $pdf->stream();
        //return view('generatepdf', compact('collection'));
    }
}
