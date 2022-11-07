<?php

namespace App\Http\Controllers;

error_reporting(0);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class Admin extends Controller
{
   public function index(Request $res)
   {
      return view('admin.dashboard');
   }
   public function enquiry(Request $res)
   {
      return view('admin.enquiry');
   }
   public function media(Request $req)
   {
      if (empty($req->input('video_url')) && empty($req->file('files'))) {
         $req->session()->flash('error', 'URL field is required');
         return redirect('admin/media');
      }
      $vid_url = $req->input('video_url');
      if ($req->file('files') != '') {
         $imagescount = count($req->file('files'));
         $dir_path = 'uploads/gallery/media/';


         for ($i = 0; $i < $imagescount; $i++) {
            $img_name = $req->file('files')[$i]->getClientOriginalName();
            $file_size = $req->file('files')[$i]->getSize();
            $file_type = $req->file('files')[$i]->extension();
            if ($file_type == 'jpg' || $file_type == 'png' || $file_type == 'jpeg' || $file_type == 'JPG' || $file_type == 'PNG' || $file_type == 'webp' || $file_type == 'gif') {
               $file_type = 'image/' . $file_type;
            } elseif ($file_type == 'mp4' || $file_type == '.mov') {
               $file_type = 'video/' . $file_type;
            } else {
               $file_type = $file_type;
            }
            $req->file('files')[$i]->move('public/uploads/gallery/media', $img_name);

            $data = array(
               'img_name' => $img_name,
               'file_size' => $file_size,
               'file_type' => $file_type,
               'dir_path' => $dir_path,
               'vid_url' => $vid_url,
            );
            $insert =  DB::table('front_cms_media_gallery')->insert($data);
            //   $insert = DB::getQueryLog();
            //   dd($insert);
         }
      } else {
         $data = array(
            'file_type' => 'video',
            'vid_url' => $vid_url,
         );
         $insert =  DB::table('front_cms_media_gallery')->insert($data);
      }

      if ($insert) {
         $req->session()->flash('success', 'Inserted successfully...');
         return redirect('admin/media');
      } else {
         $req->session()->flash('error', 'Some error occured...');
         return redirect($_SERVER['HTTP_REFERER']);
      }
   }

   public function eventcreate(Request $req)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {


         $data = array(
            'title' => trim($req->input('title')),
            'venue' => trim($req->input('venue')),
            'start_date' => trim($req->input('start_date')),
            'end_date' => trim($req->input('end_date')),
            'description' => trim($req->input('description')),
            'meta_title' => trim($req->input('meta_title')),
            'meta_keywords' => trim($req->input('meta_keywords')),
            'meta_description' => trim($req->input('meta_description')),
            'image' => trim($req->input('image')),
         );
         if (!empty($req->input('uid'))) {
            $update =  DB::table('events_tb')->where('id', $req->input('uid'))->update($data);

            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/events');
         } else {
            $insert =  DB::table('events_tb')->insert($data);
            if ($insert) {
               $req->session()->flash('success', 'Inserted successfully...');
               return redirect($_SERVER['HTTP_REFERER']);
            } else {
               $req->session()->flash('error', 'Some error occured...');
               return redirect($_SERVER['HTTP_REFERER']);
            }
         }
      }
      if (!empty($req->input('id'))) {
         $type = $req->input('type');
         $data['row'] = DB::select('select * from events_tb where id=' . $req->input('id'));
         return view('admin.eventcreate', $data);
      } else {
         return view('admin.eventcreate');
      }
   }
   public function events(Request $req)
   {
      if (!empty($req->input('id'))) {
         $deleted = DB::table('events_tb')->where('id', '=', $req->input('id'))->delete();
         $req->session()->flash('success', 'Event deleted succesfully...');
      }
      $data['list'] = DB::select('select * from events_tb order by id desc');
      return view('admin/events', $data);
   }
   public function gallery(Request $req)
   {
      if (!empty($req->input('id'))) {
         $deleted = DB::table('gallery_tb')->where('id', '=', $req->input('id'))->delete();
         $req->session()->flash('success', 'Gallery is deleted succesfully...');
      }
      $data['list'] = DB::select('select * from gallery_tb order by id desc');
      return view('admin.gallery', $data);
   }
   public function gallerycreate(Request $req)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $data = array(
            'title' => trim($req->input('title')),
            'description' => trim($req->input('description')),
            'gallery_images' => trim(implode(",", $req->input('gallery_images'))),
            'meta_title' => trim($req->input('meta_title')),
            'meta_keywords' => trim($req->input('meta_keywords')),
            'meta_description' => trim($req->input('meta_description')),
            'image' => trim($req->input('image')),
         );
         if (!empty($req->input('uid'))) {
            $update =  DB::table('gallery_tb')->where('id', $req->input('uid'))->update($data);

            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/gallery');
         } else {
            $insert =  DB::table('gallery_tb')->insert($data);
            if ($insert) {
               $req->session()->flash('success', 'Inserted successfully...');
               return redirect($_SERVER['HTTP_REFERER']);
            } else {
               $req->session()->flash('error', 'Some error occured...');
               return redirect($_SERVER['HTTP_REFERER']);
            }
         }


         exit;
      }
      if ($req->input('id') != '') {
         $data['row'] = DB::select('select * from gallery_tb where id=' . $req->input('id'));
         return view('admin.galleryCreate', $data);
      } else {
         return view('admin.galleryCreate');
      }
   }

   public function noticecreate(Request $req)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

         $data = array(
            'title' => trim($req->input('title')),
            'start_date' => trim($req->input('start_date')),
            'short_description' => trim($req->input('short_description')),
            'description' => trim($req->input('description')),
            'meta_title' => trim($req->input('meta_title')),
            'meta_keywords' => trim($req->input('meta_keywords')),
            'meta_description' => trim($req->input('meta_description')),
            'image' => trim($req->input('image')),
            'news' => trim($req->input('news')),
            'notice' => trim($req->input('notice')),
            'blog' => trim($req->input('blog')),
            'sylabuss' => trim($req->input('sylabuss')),
            'privatejob' => trim($req->input('privatejob')),
            'govtjob' => trim($req->input('govtjob')),
            'importantlinks' => trim($req->input('importantlinks')),
            'testimonials' => trim($req->input('testimonials')),
            'apprenticeship' => trim($req->input('apprenticeship')),

         );

         if (!empty($req->input('uid'))) {
            $update =  DB::table('notice_tb')->where('id', $req->input('uid'))->update($data);

            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/notice');
         } else {
            $insert =  DB::table('notice_tb')->insert($data);
            if ($insert) {
               $req->session()->flash('success', 'Inserted successfully...');
               return redirect($_SERVER['HTTP_REFERER']);
            } else {
               $req->session()->flash('error', 'Some error occured...');
               return redirect($_SERVER['HTTP_REFERER']);
            }
         }
      }
      if (!empty($req->input('id'))) {
         $type = $req->input('type');
         $data['row'] = DB::select('select * from notice_tb where id=' . $req->input('id'));
         return view('admin.noticecreate', $data);
      } else {
         return view('admin.noticecreate');
      }
   }
   public function notice(Request $req)
   {
      if (!empty($req->input('id'))) {
         $deleted = DB::table('notice_tb')->where('id', '=', $req->input('id'))->delete();
         $req->session()->flash('success', 'Notice deleted succesfully...');
      }
      $data['list'] = DB::select('select * from notice_tb order by id desc');
      return view('admin/notice', $data);
   }
   public function banneraction(Request $req)
   {

      if ($req->input('type') == 'delete') {
         $delete = DB::table('banner_tb')->where('imageid', '=', $req->input('content_id'))->delete();
         if ($delete) {
            echo '1';
         } else {
            echo '0';
         }

         exit;
      } else {
         $imgid = $req->input('content_id');
         $img_name = $req->input('content_name');
         $data = array(
            'imageid' => $imgid,
            'image' => $img_name
         );
         $insert =  DB::table('banner_tb')->insert($data);
         if ($insert) {
            echo '1';
         } else {
            echo '0';
         }
      }
   }
   public function banner()
   {
      $data['list'] = DB::select('select * from banner_tb order by id desc');
      return view('admin.banner', $data);
   }

 
  
   public function roomtype(Request $req){
      if($_SERVER['REQUEST_METHOD']=='POST'){
         
         $data=array(
            'room_type'=>trim($req->input('room_type')),
            'description'=>trim($req->input('description')),
         );
         if($req->input('uid')!=''){
            $insert =  DB::table('room_types')->where('id', $req->input('uid'))->update($data);
            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/roomtype');
         }
         $insert =  DB::table('room_types')->insert($data);
         if ($insert) {
            $req->session()->flash('success', 'Inserted successfully...');
            return redirect('admin/roomtype');
         } else {
            $req->session()->flash('error', 'Some error occured...');
            return redirect('admin/roomtype');
         }
         
      }
      if($req->input('uid')!=''){
         $data['res']=DB::select('select * from room_types where id='.$req->input('uid'));
      }
     if($req->input('delid')!=''){
      $deleted = DB::table('room_types')->where('id', '=', $req->input('delid'))->delete();
      $req->session()->flash('success', 'Deleted succesfully...');
      return redirect('admin/roomtype');
     }
      $data['list']=DB::select('select * from room_types order by id asc');
      return view('admin.roomtype',$data);
   }
   public function hostel(Request $req){
      if($_SERVER['REQUEST_METHOD']=='POST'){
        
         $data=array(
            'hostel_name'=>trim($req->input('hostel_name')),
            'type'=>trim($req->input('type')),
            'address'=>trim($req->input('address')),
            'intake'=>trim($req->input('intake')),
            'description'=>trim($req->input('description')),
         );
         if($req->input('uid')!=''){
            $insert =  DB::table('hostel')->where('id', $req->input('uid'))->update($data);
            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/hostel');
         }
          
         $insert =  DB::table('hostel')->insert($data);
         if ($insert) {
            $req->session()->flash('success', 'Inserted successfully...');
            return redirect('admin/hostel');
         } else {
            $req->session()->flash('error', 'Some error occured...');
            return redirect('admin/hostel');
         }
         
      }
      if($req->input('uid')!=''){
         $data['res']=DB::select('select * from hostel where id='.$req->input('uid'));
      }
     if($req->input('delid')!=''){
      $deleted = DB::table('hostel')->where('id', '=', $req->input('delid'))->delete();
      $req->session()->flash('success', 'Deleted succesfully...');
      return redirect('admin/hostel');
     }
      $data['list']=DB::select('select * from hostel order by id asc');
      return view('admin.hostel',$data);
   }
   public function hostelroom(Request $req){
      if($_SERVER['REQUEST_METHOD']=='POST'){
       
         $data=array(
            'room_no'=>trim($req->input('room_no')),
            'hostel_id'=>trim($req->input('hostel_id')),
            'room_type_id'=>trim($req->input('room_type_id')),
            'no_of_bed'=>trim($req->input('no_of_bed')),
            'cost_per_bed'=>trim($req->input('cost_per_bed')),
            'description'=>trim($req->input('description')),
         );
         if($req->input('uid')!=''){
            $insert =  DB::table('hostel_rooms')->where('id', $req->input('uid'))->update($data);
            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/hostelroom');
         }
          
         $insert =  DB::table('hostel_rooms')->insert($data);
         if ($insert) {
            $req->session()->flash('success', 'Inserted successfully...');
            return redirect('admin/hostelroom');
         } else {
            $req->session()->flash('error', 'Some error occured...');
            return redirect('admin/hostelroom');
         }
         
      }
      if($req->input('uid')!=''){
         $data['res']=DB::select('select * from hostel_rooms where id='.$req->input('uid'));
      }
     if($req->input('delid')!=''){
      $deleted = DB::table('hostel_rooms')->where('id', '=', $req->input('delid'))->delete();
      $req->session()->flash('success', 'Deleted succesfully...');
      return redirect('admin/hostelroom');
     }
      $data['list']=DB::select('select * from hostel_rooms order by id asc');
      $data['hostel']=DB::select('select * from hostel order by id asc');
      $data['room']=DB::select('select * from room_types order by id asc');
      return view('admin.hostelroom',$data);
   }

   public function batches(Request $req){
      if($_SERVER['REQUEST_METHOD']=='POST'){
         
         $data=array(
            'batch'=>trim($req->input('batch')),
             
         );
         if($req->input('uid')!=''){
            $insert =  DB::table('batches')->where('id', $req->input('uid'))->update($data);
            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/batches');
         }
         $insert =  DB::table('batches')->insert($data);
         if ($insert) {
            $req->session()->flash('success', 'Inserted successfully...');
            return redirect('admin/batches');
         } else {
            $req->session()->flash('error', 'Some error occured...');
            return redirect('admin/batches');
         }
         
      }
      if($req->input('uid')!=''){
         $data['res']=DB::select('select * from batches where id='.$req->input('uid'));
      }
     if($req->input('delid')!=''){
      $deleted = DB::table('batches')->where('id', '=', $req->input('delid'))->delete();
      $req->session()->flash('success', 'Deleted succesfully...');
      return redirect('admin/batches');
     }
      $data['list']=DB::select('select * from batches order by id asc');
      return view('academics.batches',$data);
   }

   public function classes(Request $req){
      if($_SERVER['REQUEST_METHOD']=='POST'){

      
         $data=array(
            'class'=>trim($req->input('class')),
            'batches'=>implode(",",$req->input('batches'))
         );
         if($req->input('uid')!=''){
            $insert =  DB::table('classes')->where('id', $req->input('uid'))->update($data);
            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/classes');
         }
         $insert =  DB::table('classes')->insert($data);
         if ($insert) {
            $req->session()->flash('success', 'Inserted successfully...');
            return redirect('admin/classes');
         } else {
            $req->session()->flash('error', 'Some error occured...');
            return redirect('admin/classes');
         }
         
      }
      if($req->input('uid')!=''){
         $data['res']=DB::select('select * from classes where id='.$req->input('uid'));
      }
     if($req->input('delid')!=''){
      $deleted = DB::table('classes')->where('id', '=', $req->input('delid'))->delete();
      $req->session()->flash('success', 'Deleted succesfully...');
      return redirect('admin/classes');
     }
         
      
      $data['class']=DB::select('select * from classes order by id asc');
      $data['batches']=DB::select('select * from batches order by id asc');

         return view('academics.classes',$data);
   }

   public function subject(Request $req){
      if($_SERVER['REQUEST_METHOD']=='POST'){
    
         $data=array(
            'name'=>trim($req->input('name')),
            'type'=>trim($req->input('type')),
            'code'=>trim($req->input('code')),
           
         );
         if($req->input('uid')!=''){
            $insert =  DB::table('subjects')->where('id', $req->input('uid'))->update($data);
            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/subject');
         }
          
         $insert =  DB::table('subjects')->insert($data);
         if ($insert) {
            $req->session()->flash('success', 'Inserted successfully...');
            return redirect('admin/subject');
         } else {
            $req->session()->flash('error', 'Some error occured...');
            return redirect('admin/subject');
         }
         
      }
      if($req->input('uid')!=''){
         $data['res']=DB::select('select * from subjects where id='.$req->input('uid'));
      }
     if($req->input('delid')!=''){
      $deleted = DB::table('subjects')->where('id', '=', $req->input('delid'))->delete();
      $req->session()->flash('success', 'Deleted succesfully...');
      return redirect('admin/subject');
     }
      $data['list']=DB::select('select * from subjects order by id asc');
    
      return view('academics.subject',$data);
   }
   public function subjectgroup(Request $req){
      if($_SERVER['REQUEST_METHOD']=='POST'){
         $data=array(
            'name'=>trim($req->input('name')),
            'class'=>trim($req->input('class')),
            'batches'=>implode(",",$req->input('batches')),
            'subjects'=>implode(",",$req->input('subject'))
         );
         if($req->input('uid')!=''){
            $insert =  DB::table('subjectgroup')->where('id', $req->input('uid'))->update($data);
            $req->session()->flash('success', 'Updated successfully...');
            return redirect('admin/subjectgroup');
         }
         $insert =  DB::table('subjectgroup')->insert($data);
         if ($insert) {
            $req->session()->flash('success', 'Inserted successfully...');
            return redirect('admin/subjectgroup');
         } else {
            $req->session()->flash('error', 'Some error occured...');
            return redirect('admin/subjectgroup');
         }
         
      }
      if($req->input('uid')!=''){
         $data['res']=DB::select('select * from subjectgroup where id='.$req->input('uid'));
      }
     if($req->input('delid')!=''){
      $deleted = DB::table('subjectgroup')->where('id', '=', $req->input('delid'))->delete();
      $req->session()->flash('success', 'Deleted succesfully...');
      return redirect('admin/subjectgroup');
     }
         
      $data['list']=DB::select('select * from subjectgroup order by id asc');
      $data['class']=DB::select('select * from classes order by id asc');
      $data['batches']=DB::select('select * from batches order by id asc');
      $data['subjects']=DB::select('select * from subjects order by id asc');

         return view('academics.subjectgroup',$data);
   }
}
