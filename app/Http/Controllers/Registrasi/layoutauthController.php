<?php

namespace App\Http\Controllers\Registrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function registrasi(){
        return view('auth.registrasi');
    }
}
