<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome.welcome');
    }
    public function tik(){
        return view('welcome.tik');
    }
    public function te(){
        return view('welcome.teknik-elektronika');
    }

    public function webDevDetail(){
        return view('welcome.webdev');
    }
    public function javaDetail(){
        return view('welcome.cpp');
    }
    public function cppDetail(){
        return view('welcome.javaoop');
    }
}
