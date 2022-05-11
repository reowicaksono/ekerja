<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\lokers;
use Illuminate\Support\Facades\DB;

class LokerController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['auth','verified']);

    }
    public function loker(){
        $loker = lokers::sortable()->orderByRaw('updated_at - created_at DESC')->paginate(3);
        return view('dashboard.loker.index',compact('loker'));
    }

    public function showLoker($loker){
        $loker = DB::table('lokers')->where('loker_id',$loker)->get();
        return view('dashboard.loker.loker-show',compact('loker'));
    }

    public function lokerEdit($loker){
        $loker = DB::table('lokers')->where('loker_id',$loker)->get();
        return view('dashboard.loker.loker-edit',compact('loker'));
    }
    public function lokerUpdate(Request $request,$loker){
        $validateData = $request->validate(
            [
                'nama_perusahaan' => 'required|min:2|max:50',
                'alamat' => 'required|min:2|max:50',
                'bagian' => 'required|min:2|max:50',
                'idr' => 'required|min:2|max:50',
                'user_id' => '',
                'kategori_id' => '',
                'kualifikasi' => 'required',
            ]
        );  


        $nama_perusahaan = $validateData["nama_perusahaan"];
        $alamat = $validateData["alamat"];
        $bagian = $validateData["bagian"];
        $idr = $validateData["idr"];
        $user_id = $validateData["user_id"];
        $kategori_id = $validateData["kategori_id"];
        $kualifikasi = $validateData["kualifikasi"];
  

        DB::table('lokers')->where('loker_id',$loker)->update(
            [
                'nama_perusahaan' => $nama_perusahaan,
                'alamat' => $alamat,
                'bagian' => $bagian,
                'idr' => $idr,
                'user_id' => $user_id,
                'kategori_id' => $kategori_id,
                'kualifikasi' => $kualifikasi,
            ]
        );



        return redirect()->route('dashboard.lokerWebdev')->with('pesan',"Update data berhasil");
    }

    public function lokerDelete($loker){
        DB::table('lokers')->where('loker_id',$loker)->delete();
        return redirect()->route('dashboard.lokerWebdev')->with('hapus',"Hapus data berhasil");
    }

    public function store(Request $request){
        $validateData = $request->validate(
            [
                'nama_perusahaan' => 'required|min:2|max:50',
                'alamat' => 'required|min:2|max:50',
                'bagian' => 'required|min:2|max:50',
                'idr' => 'required|min:2|max:50',
                'requrements' => 'required',
                'user_id' => '',
                'kategori_id' => '',
                'kualifikasi' => 'required',
            ]
        );  

        $loker = new lokers();
        $loker->nama_perusahaan = $validateData["nama_perusahaan"];
        $loker->alamat = $validateData["alamat"];
        $loker->bagian = $validateData["bagian"];
        $loker->idr = $validateData["idr"];
        $loker->user_id = 15;
        $loker->kategori_id = 1;
        $loker->kualifikasi = $validateData["kualifikasi"];
        $loker->save();
        return redirect()->route('dashboard.lokerWebdev')->with('pesan',"Tambah data berhasil");
    }
    
    public function find(Request $request){

        $search_text = $request->input('query');
        $loker = DB::table('lokers')
                    ->where('nama_perusahaan','LIKE','%'.$search_text.'%')
                    ->orWhere('bagian','LIKE','%'.$search_text.'%')
                    ->orWhere('alamat','LIKE','%'.$search_text.'%')
                    ->paginate(3);
        return view('dashboard.loker.index',['loker'=>$loker]);
    }
}
