<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDO;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
}
