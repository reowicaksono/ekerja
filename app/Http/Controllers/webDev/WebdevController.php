<?php

namespace App\Http\Controllers\webDev;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\webdevs;
use App\Models\users;
use App\Models\soals;
use App\Models\jawabans;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class WebdevController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $webdev = webdevs::all();
        $joinn = DB::table('webdevs')->join('users', 'webdevs.user_id','=','users.user_id')->select('webdevs.judul','users.level')->get();
        $user = DB::table('users')->select('nama_kategori')->where('nama_kategori','web-developer')->count();
        $id = auth()->user()->user_id;
        $mentor = DB::table('users')->where('level','admin')->count();
        $jawab = DB::table('jawabans')->where('user_id',$id)->select('skor')->get();

        return view('dashboard.webDeveloper.index',compact('webdev','joinn','user','mentor','jawab'));
    }
    
    public function create(){
        return view('dashboard.webDeveloper.webDev-create');
    }   

    public function store(Request $request){
        $validateData = $request->validate(
            [
                'nama' => 'required',
                'link' => '',
                'user_id' => '',
            ]
        );
        $webdev = new webdevs();
        $webdev->judul = $validateData['nama'];
        $webdev->alamat_course = $validateData['link'];
        $webdev->user_id = $validateData['user_id'];
        $webdev->save();

        return redirect()->route('webDev')->with('pesan',"Penambahan data {$validateData['nama']} berhasil");
    }

    public function edit($webdevs_id,webdevs $webdev){
        $web = DB::table('webdevs')->where('webdevs_id',$webdevs_id)->get();
        return view('dashboard.webDeveloper.webDev-edit',compact('web','webdev'));  
    }
    public function show(Request $request,$webdev){

        $jawab = DB::table('soals')->select('kunci_jawaban')->where('webdevs_id',$webdev)->get();
        $i = 21;
        $id = auth()->user()->user_id;
        $jumlah = DB::table('soals')->select('webdevs_id')->count();
        

        $id = auth()->user()->user_id;
        $web = DB::table('webdevs')->where('webdevs_id',$webdev)->get();
        $soal = DB::table('soals')->join('webdevs', 'soals.webdevs_id','=','webdevs.webdevs_id')->where('webdevs.webdevs_id',$webdev)->paginate(4);
        
        $jawaban = DB::table('jawabans')->get();
        return view('dashboard.webDeveloper.webDev-show',compact('web','soal','webdev','jawab','jumlah'));    
    }

    public function jawab($webdev){
        $jumlah = DB::table('soals')->select('webdevs_id')->count();
        $jawab = DB::table('soals')->select('kunci_jawaban')->where('webdevs_id',$webdev)->get();

        $id = auth()->user()->user_id;
        
        for($i=0;$i <= $jumlah;$i++){
            $jawabanSoal = new jawabans();
            if(isset($_GET["kuis{$i}"])){
                $kuis= $_GET["kuis{$i}"];
                
                $jawabanSoal->jawaban = $kuis;
                $jawabanSoal->user_id = $id;
                    if($jawab[$i]->kunci_jawaban == $kuis){
                        $jawabanSoal->skor = 1;
                    }else{
                        $jawabanSoal->skor = 0;
                    }
                 $jawabanSoal->save();
               
    
            }
            
        }
        
        $sess = session(['kuis' => 'hapus']);
        return redirect()->route('webDev')->with('as',"Selamat !! Anda telah menjawab kuis");
    }

    public function destroy($webdev, webdevs $webd){
        DB::table('webdevs')->where('webdevs_id',$webdev)->delete();
       
        return redirect()->route('webDev')->with('hapus',"Hapus data $webd->judul berhasil");
    }

    public function update($webdevs_id,webdevs $webdev,Request $request){
        $validateData = $request->validate(
            [
                'judul' => 'required',
                'alamat_course' => '',
                'user_id' => '',
            ]
        );

        DB::table('webdevs')->where('webdevs_id',$webdevs_id)->update($validateData);
        return redirect()->route('webDev')->with('update',"Uodate data {$validateData['judul']} berhasil");
    }


}
