<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class User extends Controller
{
    public function index(Request $req){
        $userinfo= $req->session()->get('userInfo');
         $email=$userinfo['email'];
        $data['courses']=DB::table("courses")->where('status',1)->get();
        $data['purchased_courses']=DB::table("course_payment")->where('email',$email)->get();
        return view('user.studentcourse',$data);
    }
}
