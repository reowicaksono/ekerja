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

class DataUserController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['auth','verified']);

    }
    public function dataUser(Request $request){
        $filter = $request->query('filter');
        if (!empty($filter) && $filter == '5') {
           $datauser = User::sortable()->orderByRaw('updated_at - created_at DESC')->where('level','user')->paginate(5);
        }else if(!empty($filter) && $filter == '10'){
           $datauser = User::sortable()->orderByRaw('updated_at - created_at DESC')->where('level','user')->paginate(5);
        } 
        else {
           $datauser = User::sortable()->orderByRaw('updated_at - created_at DESC')->where('level','user')->paginate(3);
        }
        
        return view('dashboard.admin.dataUser',['datauser' => $datauser]);
    }
    public function printpdfDataUser(){
        $datauser = DB::table('users')->join('profiles','users.user_id','=','profiles.user_id')->where('level','user')->get();
        $html = view('dashboard.admin.printpdf',['datauser' => $datauser]);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('datauser.pdf',array("Attachment" => 0));
    }
    public function excel(){
        return Excel::download(new UserExport, 'users.xlsx');
    }
    
    function find(Request $request){

           $search_text = $request->input('query');
           $datauser = DB::table('users')
                      ->where('name','LIKE','%'.$search_text.'%')
                      ->orWhere('email','LIKE','%'.$search_text.'%')
                      ->orWhere('nama_kategori','like','%'.$search_text.'%')
                      ->paginate(3);
            return view('dashboard.admin.dataUser',['datauser'=>$datauser]);

    }

    public function destroy($user_id){
        DB::table('users')->where('user_id',$user_id)->delete();
        return redirect()->route('dashboard.dataUser')->with('pesan',"Hapus data berhasil");
    }

    public function update($user_id,User $user,Request $request){
        $validateData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'nama_kategori' => 'required',
            ]
        );

        DB::table('users')->where('user_id',$user_id)->update($validateData);
        return redirect()->route('dashboard.dataUser')->with('success',"Update data {$validateData['name']} berhasil");
    }
     public function edit($user_id,User $user){
        $allData = DB::table('users')->where('user_id',$user_id)->get();
        return view('dashboard.user.user-edit',compact('allData','user'));  
    }
}
