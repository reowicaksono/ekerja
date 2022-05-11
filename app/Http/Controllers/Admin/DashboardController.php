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
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['auth','verified']);

    }
    public function index(){

        
        $peserta = DB::table('users')->where('level','user')->count();
        $mentor = DB::table('users')->where('level','admin')->count();
        $users = User::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->where('level','user')
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
        return view('dashboard.index',compact('peserta','mentor','users'));
    }
    public function covid(){
        $suspects = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        
        $labels = $suspects->flatten(1)->pluck('Provinsi');
        $data   = $suspects->flatten(1)->pluck('Kasus_Posi');
        $colors = $labels->map(function($item) {
            return $rand_color = '#' . substr(md5(mt_rand()), 0, 6);
        });

        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Kasus Positif', 'pie', $data)->backgroundColor($colors);
        return view('dashboard.covid',compact('chart'));

    }

}
