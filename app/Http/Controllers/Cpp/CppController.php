<?php

namespace App\Http\Controllers\Cpp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cpps;
use Illuminate\Support\Facades\DB;

class CppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $cpp = cpps::all();
        $joinn = DB::table('cpps')->join('users', 'cpps.user_id','=','users.user_id')->select('cpps.judul','users.level')->get();
        $user = DB::table('users')->select('nama_kategori')->where('nama_kategori','c++')->count();
        $mentor = DB::table('users')->where('level','admin')->count();
        return view('dashboard.Cpp.index',compact('cpp','joinn','user','mentor'));
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
        $cpp = new cpps();
        $cpp->judul = $validateData['nama'];
        $cpp->alamat_course = $validateData['link'];
        $cpp->user_id = $validateData['user_id'];
        $cpp->save();

        return redirect()->route('cplusPlus')
        ->with('pesan',"Penambahan data {$validateData['nama']} berhasil");
    }
    public function show($cpp){
        $web = DB::table('cpps')->where('cpp_id',$cpp)->get();
        return view('dashboard.Cpp.cpp-show',['cpp' => $web]);    
    }

    public function update($cpp_id,cpps $cpp,Request $request){
        $validateData = $request->validate(
            [
                'judul' => 'required',
                'alamat_course' => '',
                'user_id' => '',
            ]
        );

        DB::table('cpps')->where('cpp_id',$cpp_id)->update($validateData);
        return redirect()->route('cplusPlus')->with('update',"Penambahan data {$validateData['judul']} berhasil");
    }

     public function edit($cpp_id,cpps $cpp){
        $allData = DB::table('cpps')->where('cpp_id',$cpp_id)->get();
        return view('dashboard.cpp.cpp-edit',compact('allData','cpp'));  
    }
    public function destroy($cpp_id, cpps $cpp){
        DB::table('cpps')->where('cpp_id',$cpp_id)->delete();
       
        return redirect()->route('cplusPlus')->with('hapus',"Hapus data $cpp->judul berhasil");
    }
}
