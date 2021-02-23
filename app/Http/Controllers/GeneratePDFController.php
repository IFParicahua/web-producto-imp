<?php

namespace App\Http\Controllers;

use App\Models\PrintDetail;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class GeneratePDFController extends Controller
{
    public function generate($id){
        $collection = PrintDetail::where('print_label_id', $id)->get();
        $pdf = PDF::loadView('generatepdf', compact('collection'));
        $pdf->setPaper(array(0,0,198.425,374.1732), 'portrait');

        return $pdf->stream();
        //return view('generatepdf', compact('collection'));
    }
}
