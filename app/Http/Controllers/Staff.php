<?php

namespace App\Http\Controllers;

error_reporting(0);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
class Staff extends Controller
{
   public function designation(Request $req)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {


         $data = array(
            'designation' => trim($req->input('designation')),

         );
         if ($req->input('uid') != '') {
            $insert =  DB::table('staff_designation')->where('id', $req->input('uid'))->update($data);
            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/designation');
         }
         $req->validate([
            'designation' => 'required|unique:staff_designation,designation',

         ]);
         $insert =  DB::table('staff_designation')->insert($data);
         if ($insert) {
            $req->session()->flash('success', 'Inserted successfully...');
            return redirect('admin/designation');
         } else {
            $req->session()->flash('error', 'Some error occured...');
            return redirect('admin/designation');
         }
      }
      if ($req->input('uid') != '') {
         $data['res'] = DB::select('select * from staff_designation where id=' . $req->input('uid'));
      }
      if ($req->input('delid') != '') {
         $deleted = DB::table('staff_designation')->where('id', '=', $req->input('delid'))->delete();
         $req->session()->flash('success', 'Deleted succesfully...');
         return redirect('admin/designation');
      }
      $data['list'] = DB::select('select * from staff_designation order by id asc');
      return view('staff.designation', $data);
   }

   public function department(Request $req)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {


         $data = array(
            'department' => trim($req->input('department')),

         );
         if ($req->input('uid') != '') {
            $insert =  DB::table('department')->where('id', $req->input('uid'))->update($data);
            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/department');
         }
         $req->validate([
            'department' => 'required|unique:department,department',


         ]);
         $insert =  DB::table('department')->insert($data);
         if ($insert) {
            $req->session()->flash('success', 'Inserted successfully...');
            return redirect('admin/department');
         } else {
            $req->session()->flash('error', 'Some error occured...');
            return redirect('admin/department');
         }
      }
      if ($req->input('uid') != '') {
         $data['res'] = DB::select('select * from department where id=' . $req->input('uid'));
      }
      if ($req->input('delid') != '') {
         $deleted = DB::table('department')->where('id', '=', $req->input('delid'))->delete();
         $req->session()->flash('success', 'Deleted succesfully...');
         return redirect('admin/department');
      }
      $data['list'] = DB::select('select * from department order by id asc');
      return view('staff.department', $data);
   }

   public function leavetype(Request $req)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {


         $data = array(
            'type' => trim($req->input('type')),

         );
         if ($req->input('uid') != '') {
            $insert =  DB::table('leave_types')->where('id', $req->input('uid'))->update($data);
            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/leavetypes');
         }
         $req->validate([
            'type' => 'required|unique:leave_types,type',


         ]);
         $insert =  DB::table('leave_types')->insert($data);
         if ($insert) {
            $req->session()->flash('success', 'Inserted successfully...');
            return redirect('admin/leavetypes');
         } else {
            $req->session()->flash('error', 'Some error occured...');
            return redirect('admin/leavetypes');
         }
      }
      if ($req->input('uid') != '') {
         $data['res'] = DB::select('select * from leave_types where id=' . $req->input('uid'));
      }
      if ($req->input('delid') != '') {
         $deleted = DB::table('leave_types')->where('id', '=', $req->input('delid'))->delete();
         $req->session()->flash('success', 'Deleted succesfully...');
         return redirect('admin/leavetypes');
      }
      $data['list'] = DB::select('select * from leave_types order by id asc');
      return view('staff.leavetype', $data);
   }
   public function roles(Request $req)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {


         $data = array(
            'name' => trim($req->input('name')),

         );
         if ($req->input('uid') != '') {
            $insert =  DB::table('roles')->where('id', $req->input('uid'))->update($data);
            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/roles');
         }
         $req->validate([
            'name' => 'required|unique:roles,name',


         ]);
         $insert =  DB::table('roles')->insert($data);
         if ($insert) {
            $req->session()->flash('success', 'Inserted successfully...');
            return redirect('admin/roles');
         } else {
            $req->session()->flash('error', 'Some error occured...');
            return redirect('admin/roles');
         }
      }
      if ($req->input('uid') != '') {
         $data['res'] = DB::select('select * from roles where id=' . $req->input('uid'));
      }
      if ($req->input('delid') != '') {
         $deleted = DB::table('roles')->where('id', '=', $req->input('delid'))->delete();
         $req->session()->flash('success', 'Deleted succesfully...');
         return redirect('admin/roles');
      }
      $data['list'] = DB::select('select * from roles order by id asc');
      return view('staff.roles', $data);
   }
   public function staff(Request $req)
   {
      if($req->delid!=''){
         $type=$req->input('type');
          $delid=$req->input('delid');
          $data=array(
             $type=>''
          );
          
          DB::table('staff')->where('id', $delid)->update($data);
          $req->session()->flash('success', 'Document deleted successfully...');
          return redirect($_SERVER['HTTP_REFERER']);
         exit;
      }
      $data['role'] = DB::select('select * from roles order by id asc');
      $data['list'] = DB::select('select id,name,employee_id,role,department,designation,qualification,image,email,contact_no,emergency_contact_no,commision,discount from staff order by id asc');
      return view('staff.staff',$data);
   }
   public function staffCreate(Request $req)
   {
     

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         if($req->file('photo')!=''){
            $photo = $req->file('photo')->getClientOriginalName();
            $photo_url = $req->file('photo')->move('public/uploads/staff_documents', $photo);
           }
           if($req->file('resume')!=''){
            $resume = $req->file('resume')->getClientOriginalName();
            $resume_url = $req->file('resume')->move('public/uploads/staff_documents', $resume);
           }
           if($req->file('other_doc')!=''){
            $other_doc = $req->file('other_doc')->getClientOriginalName();
            $other_doc_url = $req->file('other_doc')->move('public/uploads/staff_documents', $other_doc);
           }
           if($req->file('joining_letter')!=''){
            $joining_letter = $req->file('joining_letter')->getClientOriginalName();
            $joining_letter_url = $req->file('joining_letter')->move('public/uploads/staff_documents', $joining_letter);
           }
           if($req->file('resignation_letter')!=''){
            $resignation_letter = $req->file('resignation_letter')->getClientOriginalName();
            $resignation_letter_url = $req->file('resignation_letter')->move('public/uploads/staff_documents', $resignation_letter);
           }
         if($req->input('uid')!=''){
           
            $chek=DB::select('select * from staff where id='.$req->input('uid'));
            if($req->file('photo')==''){
               $photo_url=$chek[0]->image;
            }
            if($req->file('resume')==''){
               $resume_url=$chek[0]->resume;
            }
            if($req->file('other_doc')==''){
               $other_doc_url=$chek[0]->other_document_file;
            }
            if($req->file('joining_letter')==''){
               $joining_letter_url=$chek[0]->joining_letter;
            }
            if($req->file('resignation_letter')==''){
               $resignation_letter_url=$chek[0]->resignation_letter;
            }
            $data = array(
               'role' => trim($req->input('role')),
               'designation' => trim($req->input('designation')),
               'department' => trim($req->input('department')),
               'name' => trim($req->input('name')),
               'surname' => trim($req->input('surname')),
               'father_name' => trim($req->input('father_name')),
               'mother_name' => trim($req->input('mother_name')),
               'email' => trim($req->input('email')),
               'gender' => trim($req->input('gender')),
               'dob' => trim($req->input('dob')),
               'date_of_joining' => trim($req->input('date_of_joining')),
               'contact_no' => trim($req->input('contactno')),
               'emergency_contact_no' => trim($req->input('emergency_no')),
               'marital_status' => trim($req->input('marital_status')),
               'local_address' => trim($req->input('address')),
               'permanent_address' => trim($req->input('permanent_address')),
               'qualification' => trim($req->input('qualification')),
               'work_exp' => trim($req->input('work_exp')),
               'note' => trim($req->input('note')),
               'commision' => trim($req->input('commision')),
               'discount'=>trim($req->input('discount')),
               'epf_no' => trim($req->input('epf_no')),
               'basic_salary' => trim($req->input('basic_salary')),
               'contract_type' => trim($req->input('contract_type')),
               'shift' => trim($req->input('shift')),
               'location' => trim($req->input('location')),
               'festival_leave' => trim($req->input('festival_leave')),
               'emergency_leave' => trim($req->input('emergency_leave')),
               'regular_leave' => trim($req->input('regular_leave')),
               'account_title' => trim($req->input('account_title')),
               'bank_account_no' => trim($req->input('bank_account_no')),
               'bank_name' => trim($req->input('bank_name')),
               'ifsc_code' => trim($req->input('ifsc_code')),
               'bank_branch' => trim($req->input('bank_branch')),
               'facebook' => trim($req->input('facebook')),
               'twitter' => trim($req->input('twitter')),
               'linkedin' => trim($req->input('linkedin')),
               'instagram' => trim($req->input('instagram')),
               'image'=>$photo_url,
               'resume'=>$resume_url,
               'other_document_file'=>$other_doc_url,
               'joining_letter'=>$joining_letter_url,
               'resignation_letter'=>$resignation_letter_url,
            );
             
            $insert =  DB::table('staff')->where('id', $req->input('uid'))->update($data);
            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/staff');
            exit;
         }
         
         $random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');
           $password = substr($random, 0, 10);
         
           $data = array(
            'role' => trim($req->input('role')),
            'employee_id' => 'EWGE00'.rand(100,99999),
            'designation' => trim($req->input('designation')),
            'department' => trim($req->input('department')),
            'name' => trim($req->input('name')),
            'surname' => trim($req->input('surname')),
            'father_name' => trim($req->input('father_name')),
            'mother_name' => trim($req->input('mother_name')),
            'email' => trim($req->input('email')),
            'gender' => trim($req->input('gender')),
            'dob' => trim($req->input('dob')),
            'date_of_joining' => trim($req->input('date_of_joining')),
            'contact_no' => trim($req->input('contactno')),
            'emergency_contact_no' => trim($req->input('emergency_no')),
            'marital_status' => trim($req->input('marital_status')),
            'local_address' => trim($req->input('address')),
            'permanent_address' => trim($req->input('permanent_address')),
            'qualification' => trim($req->input('qualification')),
            'work_exp' => trim($req->input('work_exp')),
            'note' => trim($req->input('note')),
            'commision' => trim($req->input('commision')),
            'discount'=>trim($req->input('discount')),
            'epf_no' => trim($req->input('epf_no')),
            'basic_salary' => trim($req->input('basic_salary')),
            'contract_type' => trim($req->input('contract_type')),
            'shift' => trim($req->input('shift')),
            'location' => trim($req->input('location')),
            'festival_leave' => trim($req->input('festival_leave')),
            'emergency_leave' => trim($req->input('emergency_leave')),
            'regular_leave' => trim($req->input('regular_leave')),
            'account_title' => trim($req->input('account_title')),
            'bank_account_no' => trim($req->input('bank_account_no')),
            'bank_name' => trim($req->input('bank_name')),
            'ifsc_code' => trim($req->input('ifsc_code')),
            'bank_branch' => trim($req->input('bank_branch')),
            'facebook' => trim($req->input('facebook')),
            'twitter' => trim($req->input('twitter')),
            'linkedin' => trim($req->input('linkedin')),
            'instagram' => trim($req->input('instagram')),
            'image'=>$photo_url,
            'resume'=>$resume_url,
            'other_document_file'=>$other_doc_url,
            'joining_letter'=>$joining_letter_url,
            'resignation_letter'=>$resignation_letter_url,
            'password'=>Hash::make($password),
         );

         $req->validate([
            'email' => 'required|unique:staff,email',
            'role'=>'required',
            'name'=>'required',
            'dob'=>'required',
            'gender'=>'required',
            'commision'=>'required',
            'discount'=>'required',

         ]);
         

         $insert =  DB::table('staff')->insert($data);
        
         if ($insert) {
            $req->session()->flash('success', 'Inserted successfully...');
            return redirect($_SERVER['HTTP_REFERER']);
         } else {
            $req->session()->flash('error', 'Some error occured...');
            return redirect($_SERVER['HTTP_REFERER']);
         }
 
      }
      $data['role'] = DB::select('select * from roles order by id asc');
      $data['designation'] = DB::select('select * from staff_designation order by id asc');
      $data['department'] = DB::select('select * from department order by id asc');
      if($req->input('uid')!=''){
         $data['res']=DB::select('select * from staff where id='.$req->input('uid'));
      }
      return view('staff.staffCreate', $data);
   }

   public function profile(Request $req)
   {
      $id=$req->input('id');
      $data['res']=DB::select('select * from staff where id='.$id);
      return view('staff.profile',$data);
   }
}
