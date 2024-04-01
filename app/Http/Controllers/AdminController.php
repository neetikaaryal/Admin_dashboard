<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Dompdf\Dompdf;

class AdminController extends Controller
{
    public function index()
    {
        return view('index');
    }

    // public function ticket()
    // {
    //     $dompdf = new Dompdf();

    //     // Load HTML content
    //     $dompdf->loadHtml(view('ticket')->render());

    //     // (Optional) Setup the paper size and orientation
    //     $dompdf->setPaper('A4', 'portrait');

    //     // Render the HTML as PDF
    //     $dompdf->render();

    //     // Output the generated PDF to Browser
    //     return $dompdf->stream();
    // }
        public function ticket()
        {
            return view('ticket');  
        } 
}
