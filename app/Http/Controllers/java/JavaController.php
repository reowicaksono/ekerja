<?php

namespace App\Http\Controllers\java;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\javas;
use Illuminate\Support\Facades\DB;

class JavaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $java = javas::all();
        $joinn = DB::table('javas')->join('users', 'javas.user_id','=','users.user_id')->select('javas.judul','users.level')->get();
        $user = DB::table('users')->select('nama_kategori')->where('nama_kategori','java-oop')->count();
        $mentor = DB::table('users')->where('level','admin')->count();
        return view('dashboard.Java.index',compact('java','joinn','user','mentor'));
    }
    
    public function create(){

    }   
    public function store(Request $request){
        $validateData = $request->validate(
            [
                'nama' => 'required',
                'link' => '',
                'user_id' => '',
            ]
        );
        $java = new javas();
        $java->judul = $validateData['nama'];
        $java->alamat_course = $validateData['link'];
        $java->user_id = $validateData['user_id'];
        $java->save();

        return redirect()->route('javaOop')
        ->with('pesan',"Penambahan data {$validateData['nama']} berhasil");
    }
    public function show($java){
        $jav = DB::table('javas')->where('java_id',$java)->get();
        return view('dashboard.Java.java-show',['java' => $jav]);    
    }
    
    public function destroy($java, javas $jav){
        DB::table('javas')->where('java_id',$java)->delete();
       
        return redirect()->route('javaOop')->with('hapus',"Hapus data $jav->judul berhasil");
    }
    public function update($java_id,javas $java,Request $request){
        $validateData = $request->validate(
            [
                'judul' => 'required',
                'alamat_course' => '',
                'user_id' => '',
            ]
        );

        DB::table('javas')->where('java_id',$java_id)->update($validateData);
        return redirect()->route('javaOop')->with('update',"Update data {$validateData['judul']} berhasil");
    }
     public function edit($java_id,javas $java){
        $jav = DB::table('javas')->where('java_id',$java_id)->get();
        return view('dashboard.Java.java-edit',compact('jav','java'));  
    }
}
