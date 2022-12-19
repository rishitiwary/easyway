<?php

namespace App\Http\Controllers;
error_reporting();
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Chat extends Controller
{
    public function index(Request $req)
    {
        $data =  $req->session()->get('userInfo');
        $data['userid'] = $data['id'];
        return view('chat.index',$data);
    }
    public function all(Request $req)
    {
        $data =  $req->session()->get('userInfo');
        $data['userid'] = $data['id'];
        $data['type']='all';
        return view('chat.index',$data);
    }
    public function searchuser(Request $req)
    {
        $data['stafflist'] = DB::table("staff")->where('name', 'like', '%' . $req->input('keyword') . '%')->get();
        $data['student'] = DB::table("students")->where('firstname', 'like', '%' . $req->input('keyword') . '%')->get();
        return view("chat.users", $data);
    }
    public function adduser(Request $req)
    {
        $data =  $req->session()->get('userInfo');
        $req_from_id = $data['id'];
        $req_to_id = $req->input('user_id');
        $type = $req->input('user_type');
        $data = array(
            'chat_user_one' => $req_from_id,
            'chat_user_two' => $req_to_id,
            'type' => $type
        );
        $check=DB::table("chat_connections")->where("chat_user_one",$req_from_id)->where("chat_user_two",$req_to_id)->count();
        if($check>0){
            echo 'You are already connected';
            exit;
        }
        $insert = DB::table("chat_connections")->insert($data);
        if ($insert) {
            echo 'You are now connected';
        } else {
            echo 'Some error occured';
        }
    }
    public function myuser(Request $req)
    {
        $userinfo = $req->session()->get('userInfo');
         $id = $userinfo['id'];
        
        if($req->input('type')!=''){
            $data['list'] = DB::table("chat_connections")->get();
            $data['type']='all';
        }else{
            $data['type']='single';
            $data['list'] = DB::table("chat_connections")->where("chat_user_one", $id)->get();
            $data['request']=DB::table("chat_connections")->where("chat_user_two", $id)->get();
        }
       
        return view('chat.myuser', $data);
    }
    public function getChatsUpdates(Request $req)
    {
       
        return view('chat.getChatsUpdates');
    }
    public function getChatRecord(Request $req)
    {
            $chat_connection_id=$req->input('chat_connection_id');
         $userinfo = $req->session()->get('userInfo');
              $chat_user_id=$data['userid'] = $userinfo['id'];
              $arraydata=array(
                  'is_read'=>1
              );
              DB::table("chat_messages")->where("chat_user_id","<>", $chat_user_id)->update($arraydata);
            $data['list'] = DB::table("chat_messages")->where("chat_connection_id",$chat_connection_id)->get();
        return view('chat.getChatsUpdates',$data);
    }
    public function newMessage(Request $req)
    {
        $chat_connection_id=$req->input('chat_connection_id');
        $userinfo = $req->session()->get('userInfo');
        $chat_user_id = $userinfo['id'];
        $data=array(
            'chat_connection_id'=>$chat_connection_id,
            'chat_user_id'=>$chat_user_id,
            'message'=>$req->input('message'),
            'created_at'=>$req->input('time'),
        );
        $insert=DB::table("chat_messages")->insert($data);

    }
    public function chatUpdate(Request $req)
    {
        $chat_connection_id=$req->input('chat_connection_id');
        $userinfo = $req->session()->get('userInfo');
            $userid= $data['userid'] = $userinfo['id'];
           $res= $data['update']= DB::table("chat_messages")->where("chat_connection_id",$chat_connection_id)->where("is_read",0)->where("chat_user_id","<>",$userid)->orderBy("id","desc")->first();
            $arraydata=array(
                'is_read'=>1
            );
            DB::table("chat_messages")->where("id",$res->id)->where("chat_user_id","<>",$userid)->update($arraydata);
             return view('chat.lastChatUpdate',$data);
            }
            public function getChatNotification(Request $req)
            {
               // print_r($req->input());
            }
}
