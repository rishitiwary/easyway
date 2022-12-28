<?php

namespace App\Http\Controllers;
error_reporting(0);
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class Home extends Controller
{
   public function index(Request $req)
   {
      $data['banner'] = DB::table('banner_tb')->get();
      $data['news'] = DB::table('notice_tb')->where('news', '1')->get();
      return view('home/index', $data);
   }
   public function userlogin(Request $req)
   {

      //login
   
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $req->validate([
               'username' => 'required',
               'password' => 'required',
            ]);
  
             $users = DB::table('students')->where('email', $req->input('username'))->first();
            $passcheck = Hash::check(request('password'), $users->password);
            if ($passcheck) {
               $data = array(
                  'id' => $users->id,  
                  'email' => $users->email,
                  'role' => 'student',
                 
               );
               $req->session()->put('userInfo', $data);
   
               return redirect('user/studentcourse');
            }
   
            $req->session()->flash('error', 'Some error occured');
            return redirect('userlogin');
         }
    
     
      //end login






      $data['setting'] = DB::select('select admin_logo,small_logo from general_setting');
      $data['tradegroup'] = DB::select('select * from tradegroup');
      $data['class'] = DB::table('classes')->where('is_active', 'yes')->get();
      return view('home.userlogin', $data);
   }
   public function login(Request $req)
   {
      return view('home.login');
   }
   public function forgotpassword(Request $req)
   {
      return view('home.forgotpassword');
   }
   public function registration(Request $req)
   {
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
         $req->validate([
            'firstname' => 'required',
            'mobileno' => 'required|unique:students,mobileno',
            'email' => 'required|unique:students,email',
            'gender' => 'required',

         ]);
         $refrence_no=  substr(number_format(time() * rand(),0,'',''),0,6);
       
         $last_admission_no = DB::select('select id from students  order by id desc limit 1');
         $rs = DB::select('select adm_prefix,adm_start_from,adm_no_digit from general_setting where id=1');

         if (empty($last_admission_no)) {
            $admission_no = sprintf("%02d", 1);
         } else {
            $admission_no = sprintf("%02d", $last_admission_no[0]->id + 1);
         }
         $digit =  $rs[0]->adm_no_digit;
         $admission_no = $rs[0]->adm_prefix . sprintf("%0" . $digit . "d", $rs[0]->adm_start_from . $admission_no);

         if (empty($last_admission_no)) {
            $rollno = sprintf("%02d", 1);
         } else {
            $rollno = sprintf("%02d", $last_admission_no[0]->id + 1);
         }

         $roll_no = trim($req->input('rollno')) . date("y") . 'R' . $rollno;

         $photo_url = '';
         if ($req->file('file') != '') {
            $req->validate([
               'file' => 'mimes:png,jpg,jpeg,webp|max:2048'
            ]);
            $photo = $req->file('file')->getClientOriginalName();
            $photo_url = $req->file('file')->move('public/uploads/student_documents/online_admission_doc', $photo);
         }
         $data = array(
            'type' => trim($req->input('type')),
            'class_id' => trim($req->input('class_id')) == '' ? 0 : trim($req->input('class_id')),
            'batch_id' => trim($req->input('batch_id')) == '' ? 0 : trim($req->input('batch_id')),
            'tradegroup' => trim($req->input('tradegroup')) == '' ? 0 : trim($req->input('tradegroup')),
            'trade' => trim($req->input('trade')) == '' ? 0 : trim($req->input('trade')),
            'firstname' => trim($req->input('firstname')),
            'mobileno' => trim($req->input('mobileno')),
            'email' => trim($req->input('email')),
            'gender' => trim($req->input('gender')),
            'username' => trim($req->input('username')),
            'photo' => $photo_url,
            'roll_no' => $roll_no,
            'admission_no' => $admission_no,
            'refrence_no'=>$refrence_no,
            'plain_pass'=>$req->input('password'),
            'password'=>Hash::make($req->input('password')),
           
         );
         $insert =  DB::table('students')->insert($data);
         if ($insert) {
            $data=array(
               'email'=>trim($req->input('email')),
               'role'=>'student'
            );
            $req->session()->put('studentInfo', $data);
            $req->session()->flash('success', 'Thanks for registration. Please note your reference number '.$refrence_no.' for further communication..!!');
            return redirect('online_admission_review');
         } else {
            $req->session()->flash('error', 'Some error occured...');
            return redirect('userlogin');
         }
      }
   }
   public function online_admission_review(Request $req)
   {

       $userinfo= $req->session()->get('studentInfo');
      
        $email=$userinfo['email'];
        $data['res']=DB::table('students')->where('email',$email)->get();
      
      return view('home/online_admission_review',$data);
   }
public function online_admission_print(Request $req,$id)
   {
  
         $data['res']=DB::table('students')->where('refrence_no',$id)->get();
      return view('home/online_admission_review',$data);
   }
   public function editonlineadmission(Request $req)
   {
       $userinfo= $req->session()->get('studentInfo');
          $email=$userinfo['email'];
     if(empty($email)){
        return redirect('userlogin');
     }
         $data['res']=DB::table('students')->where('email',$email)->get();
         $data['class'] = DB::table('classes')->where('is_active', 'yes')->get();
         $data['hostel'] = DB::table('hostel')->where('is_active', 'yes')->get();
         $data['state'] = DB::select('select id,name from states  order by name asc');
      return view('home/editonlineadmission',$data);
   }
   
}
