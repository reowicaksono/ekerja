<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\webdevs;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use App\Charts\CovidChart;
use Illuminate\Support\Facades\Http;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;
use Dompdf\Options;
class SertifikatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['auth','verified']);

    }
    public function certificate(){
        return view('dashboard.certificate');
    }
    public function print(){
        return view('dashboard.print');
    }
    public function printpdf(){
        $html = view('dashboard.printpdf');
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        $options = new Options();
        $options->setIsRemoteEnabled(true);

        $dompdf->setOptions($options);
        $dompdf->output();

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('certificate-E-kerja',array("Attachment" => 0));
    }
}
