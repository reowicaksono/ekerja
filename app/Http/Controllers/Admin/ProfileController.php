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
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['auth','verified']);

    }
    public function changePassword(){
        return view('dashboard.changePassword');
    }
    public function changePasswordUpdate($user_id, Request $request){
        $validateData = $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);
        $passwordLama = auth()->user()->password;
        $old_password = $validateData["old_password"];
        $password = $validateData["password"];

        if(!Hash::check($old_password,$passwordLama) ){ //cek password lama
            return redirect()->route('dashboard.changePassword')->with('gagal',"Password lama Anda salah");
        }else{
            auth()->user()->update([
                'password' => bcrypt($password)
            ]);
            return back()->with('success', 'Password Anda Telah Di ubah');
        }
    }



    public function profile($user_id){
        $user = DB::table('users')->where('user_id',$user_id)->get();
        $joinn = DB::table('profiles')->join('users', 'profiles.user_id','=','users.user_id')->where('users.user_id',$user_id)->get();
        return view('dashboard.profile',compact('user','joinn'));
    }

    public function changeProfile(User $user){
        $id = auth()->user()->user_id;
        $joinn = DB::table('profiles')->join('users', 'profiles.user_id','=','users.user_id')->where('users.user_id',$id)->get();
        return view('dashboard.changeProfile',compact('user','joinn'));
    }
    public function changeProfileUpdate(Request $request,User $user,$user_id){

         $validateData = $request->validate(
            [
                
                'Tempat_Tinggal' => 'required|min:3|max:50',
                'No_Telepon' => 'required|min:8|max:12',
                'pekerjaan' => 'required|min:2|max:50',
                'name' => '',
                'email' => '',
                
            ]
        );

        $Tempat_Tinggal = $validateData["Tempat_Tinggal"];
        $No_Telepon = $validateData["No_Telepon"];
        $pekerjaan = $validateData["pekerjaan"];
        
        
        if($request->file('gambar') == ''){
            $user = new User();
            $namaFile = $user->gambar;
        }else{
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = 'ekerja'.time().".".$extFile;
            $path = $request->gambar->move('img',$namaFile);
        }
        DB::table('profiles')->join('users', 'profiles.user_id','=','users.user_id')->where('profiles.user_id',$user_id)->update([
            'gambar' => $namaFile,
            'Tempat_Tinggal' => $Tempat_Tinggal,
            'No_Telepon' => $No_Telepon,
            'pekerjaan' => $pekerjaan,
        ]);
        return redirect()->route('dashboard')->with('pesan',"Update profile berhasil");
        
    }
}
