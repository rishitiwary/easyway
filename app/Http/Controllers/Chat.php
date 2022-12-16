<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Chat extends Controller
{
    public function index(Request $re){
return view('chat.index');
    }
    public function searchuser(Request $req)
    {
        $data['stafflist']=DB::table("staff")->where('name','like','%'. $req->input('keyword') .'%')->get();
        $data['student']=DB::table("students")->where('firstname','like','%'. $req->input('keyword') .'%')->get();
        return view("chat.users",$data);
     
    }
    public function adduser(Request $req)
    {
      $data=  $req->session()->get('userInfo');

         $req_from_id=$data['id'];
         $req_to_id=$req->input('user_id');
        $type=$req->input('user_type');
        $data=array(
            'chat_user_one'=>$req_from_id,
            'chat_user_two'=> $req_to_id,
            'type'=>$type
        );
        $insert=DB::table("chat_connections")->insert($data);
        if($insert){
            echo 'You are now connected';
        }else{
            echo 'Some error occured';
        }
      
    }
}
