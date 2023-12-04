<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
 
class PdfGeneratorController extends Controller
{
    public function index(Request $request) 
    {
        $data = $request->all();
        $file_name = $data['file_name'].'.pdf';
        $pdf = PDF::loadView('pdfhtml', $data);
        $pdf->setPaper('a4', 'portrait');
        // return $pdf->stream('resume.pdf');
        return $pdf->download($file_name);
    }
}