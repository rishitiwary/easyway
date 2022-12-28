<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class User extends Controller
{
    public function index(Request $req){
        $data['courses']=DB::table("courses")->where('status',1)->get();
        return view('user.studentcourse',$data);
    }
}
