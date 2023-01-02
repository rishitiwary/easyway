<?php

namespace App\Http\Controllers;
error_reporting(0);
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class User extends Controller
{
    public function index(Request $req){
        $userinfo= $req->session()->get('userInfo');
         $email=$userinfo['email'];
        $data['courses']=DB::table("courses")->where('status',1)->get();
        $data['purchased_courses']=DB::table("course_payment")->where('email',$email)->get();
        $data['related_courses']=DB::table("course_payment")->where("email",$email)->distinct()->get(['tradegroup_id']);
        return view('user.studentcourse',$data);
    }
    public function onlinetest(Request $req)
    {
        $data['list']=DB::table("courses")->where("status",'1')->get();
        return view('user.onlinetest',$data);
    }
    public function onlinetest_view(Request $req,$id)
    {
        $userinfo= $req->session()->get('userInfo');
          $student_id=$userinfo['id'];
          $data['total_attempt']=DB::table("attempt_quize")->where("examid",$id)->where("student_id",$student_id)->first(['attempt']);

        $data['score']=DB::table("student_score_tb")->where("examid",$id)->where("student_id",$student_id)->orderBy("id","desc")->first();
        $data['res']=DB::table("onlineexam")->where("id",$id)->first();
        $data['total_question']=DB::table("onlineexam_questions")->where("examid",$id)->count();
        $data['given_exam']=DB::table("onlineexam_student_results")->where("examid",$id)->where("onlineexam_student_id",$student_id)->get();
        return view('user.onlinetest_view',$data);
    }
    public function startexam(Request $req,$id)
    {
        $userinfo= $req->session()->get('userInfo');
        $student_id=$userinfo['id'];
        $data2=array(
            'examid'=>$id,
            'student_id'=>$student_id,
            'attempt'=>1,
        );
        $count_attempt=DB::table("attempt_quize")->where("examid",$id)->where("student_id",$student_id)->first();
            $attempt= $count_attempt->attempt;
          
        if(!is_null($attempt)){
       
            
            $data2=array(
                'examid'=>$id,
                'student_id'=>$student_id,
                'attempt'=>$attempt+1,
            ); 
            $update_attempt=DB::table("attempt_quize")->where("examid",$id)->where("student_id",$student_id)->update($data2);
        }else{
            $update_attempt=DB::table("attempt_quize")->insert($data2);
        }
        
       
        $data['setting'] = DB::table('general_setting')->first(['admin_logo']);
        $data['total_question']=DB::table("onlineexam_questions")->where("examid",$id)->count();
        $data['res']=DB::table("onlineexam_questions")->where("examid",$id)->get();
        $data['exam']=DB::table("onlineexam")->where("id",$id)->first();
        return view('user.startexam',$data);
        
    }
}
