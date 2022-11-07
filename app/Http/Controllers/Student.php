<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Student extends Controller
{
    public function create(Request $req){
        return view('student.create');
    }
}
