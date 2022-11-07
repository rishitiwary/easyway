<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(Request $req)
    {
        return view('home/index');
    }
    public function userlogin(Request $req)
    {
       return view('home.userlogin');
    }
    public function login(Request $req)
    {
       return view('home.login');
    }
    public function forgotpassword(Request $req)
    {
       return view('home.forgotpassword');
    }
}
