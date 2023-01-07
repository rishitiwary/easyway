<?php

namespace App\Http\Controllers;

error_reporting(0);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CourseModel;

class Course extends Controller
{
    public function index(Request $req)
    {
        if ($req->input('delid') != '') {
            $deletedfolder = DB::table('folders')->Where('course_id', '=', $req->input('delid'))->delete();
            $deletedcourse = DB::table('courses')->Where('id', '=', $req->input('delid'))->delete();
            $req->session()->flash('success', 'Folder Deleted succesfully...');
            return redirect('admin/course');
            //  exit;
        }
        if ($req->input('id') != '') {
            if ($req->input('status') == '0') {
                $status = 1;
            } else {
                $status = 0;
            }
            $data = array(
                'status' => $status
            );
            $update = DB::table("courses")->where('id', $req->input('id'))->update($data);
            return redirect('admin/course');
        }

        $course = CourseModel::all();
        return view('course.index', ['data' => $course]);
    }
    public function addcourse(Request $req)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($req->input('uid')!=''){
        $check=DB::table("courses")->where("id",$req->input('uid'))->get()->first();
        $course_thumbnail_url= $check->course_thumbnail;
        }
            
            if ($req->file('course_thumbnail') != '') {
                $course_thumbnail = $req->file('course_thumbnail')->getClientOriginalName();
                $course_thumbnail_url = $req->file('course_thumbnail')->move('public/uploads/course', $course_thumbnail);
            }

            $data = array(
                'title' => trim($req->input('title')),
                'course_type' => trim($req->input('course_type')),
                'tradegroup_id' => trim($req->input('tradegroup_id')),
                'trade_id' => trim($req->input('trade_id')),
                'validity' => trim($req->input('validity')),
                'expiry' => trim($req->input('expiry')),
                'liveclass' => trim($req->input('liveclass')),
                'course_provider' => trim($req->input('course_provider')),
                'course_url' => trim($req->input('course_url')),
                'price' => trim($req->input('course_price')),
                'discount' => trim($req->input('course_discount')),
                'free_course' => trim($req->input('free_course')),
                'description' => preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/i', '$1', ($req->input('description'))),
                'course_thumbnail' => $course_thumbnail_url
            );
            if($req->input('uid')!=''){
                $insert =  DB::table('courses')->where("id",$req->input('uid'))->update($data);
                if ($insert==1) {
                    $req->session()->flash('success', 'Course updated successfully...');
                    return redirect('admin/course');
                } else {
                    $req->session()->flash('Warning', 'Nothing updated...');
                    return redirect('admin/course');
                }
            }else{
                $insert =  DB::table('courses')->insert($data);
                $id = DB::getPdo()->lastInsertId();
                if ($insert) {
                    $req->session()->flash('success', 'Inserted successfully...');
                    return redirect('admin/addcontent/' . $id);
                } else {
                    $req->session()->flash('error', 'Some error occured...');
                    return redirect($_SERVER['HTTP_REFERER']);
                }
            }
            
        }
        if($req->input('uid')!=''){
            $data['res']=DB::table("courses")->where("id",$req->input('uid'))->get()->first();
        }
        $data['tradegroup'] = DB::table('tradegroup')->where('status', '1')->get();
        $data['course_type'] = DB::table('course_type')->where('status', '1')->get();
        return view('course.addcourse', $data);
    }
    public function addcontent(Request $req, $id)
    {
        $data['list'] = DB::table("courses")->where("id", $id)->get();
        $data['folder'] = DB::table("folders")->where('parent_folder_id', '0')->where('course_id', $id)->get();
        if ($req->input('delfolder') != '') {

            $deleted = DB::table('folders')->where('id', '=', $req->input('delfolder'))->orWhere('parent_folder_id', '=', $req->input('folder_id'))->delete();
            $req->session()->flash('success', 'Folder Deleted succesfully...');
            return redirect($_SERVER['HTTP_REFERER']);
        }
        if ($req->input('fid') != '') {
            $data['ress'] = DB::table("folders")->where('id', $req->input('fid'))->get()->first();
        }
        if ($req->input('docid') != '') {
            $data['doc'] = DB::table("course_document")->where('id', $req->input('docid'))->get()->first();
        }
        if ($req->input('videoid') != '') {
            $data['video'] = DB::table("videos")->where('id', $req->input('videoid'))->get()->first();
        }
        return view('course.addcontent', $data);
    }
    public function createfolder(Request $req)
    {
        $folderid = trim($req->input('id')) . random_int(100, 999);
        $data = array(
            'course_id' => trim($req->input('id')),
            'folders' => trim($req->input('folder')),
            'folder_id' => $folderid
        );

        if ($req->input('folderid') != '') {
            $data = array(
                'course_id' => trim($req->input('id')),
                'folders' => trim($req->input('folder')),

            );

            $update =  DB::table('folders')->where('id', $req->input('folderid'))->update($data);
            $req->session()->flash('success', 'Folder updated successfully...');
            return redirect('admin/addcontent/' . $req->input('id'));
            exit;
        }
        $insert =  DB::table('folders')->insert($data);
        if ($insert) {
            $req->session()->flash('success', 'Folder created successfully...');
            return redirect($_SERVER['HTTP_REFERER']);
        } else {
            $req->session()->flash('error', 'Some error occured while creating folders...');
            return redirect($_SERVER['HTTP_REFERER']);
        }
    }
    public function adddocument(Request $req)
    {
        if ($req->input('docid') != '') {
            $check = DB::table("course_document")->where("id", $req->input('docid'))->get()->first();
            $document_url = $check->document;
            if ($req->file('document') != '') {
                $documentname = $req->file('document')->getClientOriginalName();
                $document_url =  $req->file('document')->move('public/uploads/documents', $documentname);
            }
            $data = array(
                'course_id' => trim($req->input('course_id')),
                'folder_id' => trim($req->input('folder_id')),
                'doc_name' => trim($req->input('doc_name')),
                'description' => trim($req->input('description')),
                'document' => $document_url
            );
            $update = DB::table('course_document')->where("id", $req->input('docid'))->update($data);

            $req->session()->flash('success', 'Document updated successfully...');
            return redirect($_SERVER['HTTP_REFERER']);
            exit;
        }
        for ($i = 0; $i < count($req->file('document')); $i++) {
            $document = $req->file('document')[$i];
            if ($document != '') {
                $documentname =  $document->getClientOriginalName();
                $document_url =  $document->move('public/uploads/documents', $documentname);
            }
            $data = array(
                'course_id' => trim($req->input('course_id')),
                'folder_id' => trim($req->input('folder_id')),
                'doc_name' => trim($req->input('doc_name')),
                'description' => trim($req->input('description')),
                'document' => $document_url
            );
            $insert = DB::table('course_document')->insert($data);
        }
        if ($insert) {
            $req->session()->flash('success', 'Document uploaded successfully...');
            return redirect($_SERVER['HTTP_REFERER']);
        } else {
            $req->session()->flash('error', 'Some error occured while uploading documents...');
            return redirect($_SERVER['HTTP_REFERER']);
        }
    }
    public function subfolder(Request $req)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $folderid = trim($req->input('course_id')) . random_int(100, 999);
            $data = array(
                'course_id' => trim($req->input('course_id')),
                'folders' => trim($req->input('folder_id')),
                'parent_folder_id' => trim($req->input('parent_folder_id')),
                'folder_id' => $folderid
            );
            $insert =  DB::table('folders')->insert($data);
            if ($insert) {
                $req->session()->flash('success', 'Folder created successfully...');
                return redirect($_SERVER['HTTP_REFERER']);
            } else {
                $req->session()->flash('error', 'Some error occured while creating folders...');
                return redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }
    public function viewcontents(Request $req, $id)
    {
        $data['list'] = DB::table("courses")->where("id", $id)->get();
        return view('course/viewcontent', $data);
    }
    public function importcontents(Request $req, $id)
    {
        $res = $data['folder'] = DB::table("folders")->where("course_id", $id)->where("status", 1)->get();

        $data['list'] = DB::table("courses")->where("id", $id)->get();
        return view('course.importcontents', $data);
    }
    public function import(Request $req)
    {

        //map folder and courseid
        $course_id = $req->input('coursid');

        if ($req->input('folderid') != 0) {

            for ($i = 0; $i < count($req->input('folderid')); $i++) {
                $folderid = $req->input('folderid')[$i];
                $count = DB::table("course_folders")->where("folder_id", $folderid)->where("course_id", $course_id)->count();
                $foldername = DB::table("folders")->where("folder_id", $folderid)->get()->first();

                $data = array(
                    'course_id' => $course_id,
                    'folder_id' => $folderid,
                    'parent_folder_id' => $req->input('parent_folder_id'),
                    'folders' => $foldername->folders

                );

                if ($count <= 0) {
                    $insert = DB::table("folders")->insert($data);
                }
            }
        }

        //map course and documentid
        if ($req->input('docids') != 0) {
            for ($i = 0; $i < count($req->input('docids')); $i++) {
                $docids = $req->input('docids')[$i];
                $count = DB::table("course_documents_map")->where("course_id", $course_id)->where("doc_id", $docids)->count();

                $data = array(
                    'course_id' => $course_id,
                    'doc_id' => $docids,
                    'folderid' => $req->input('linked_folder_id')

                );
                if ($count <= 0) {
                    $insert = DB::table("course_documents_map")->insert($data);
                }
            }
        }
        //map videos and courseid
        if ($req->input('videoids') != 0) {
            for ($i = 0; $i < count($req->input('videoids')); $i++) {
                $videoids = $req->input('videoids')[$i];
                $count = DB::table("course_videos")->where("course_id", $course_id)->where("videos_id", $videoids)->count();

                $data = array(
                    'course_id' => $course_id,
                    'videos_id' => $videoids,
                    'folderid' => $req->input('linked_folder_id')

                );
                if ($count <= 0) {
                    $insert = DB::table("course_videos")->insert($data);
                }
            }
        }
        $req->session()->flash('success', 'Inserted successfully...');
        return redirect($_SERVER['HTTP_REFERER']);
    }

   

    public function demovideo(Request $req,$id)
    {
        if($req->input('delid')!=''){
            $deleted = DB::table('demo_videos')->Where('id',$req->input('delid'))->delete();
            $req->session()->flash('success', 'Video Deleted succesfully...');
            return redirect($_SERVER['HTTP_REFERER']);
            exit;
        }
        if($req->input('id')!='')
        {
            if($req->input('status')=='1'){
                $status=0;
            }else{
                $status=1;
            }
            $data=array(
                'status'=>$status,
            );
            DB::table("demo_videos")->where("id",$req->input('id'))->update($data);
            $req->session()->flash('success', 'Status updated successfully...');
            return redirect($_SERVER['HTTP_REFERER']);
        }
        if($_SERVER['REQUEST_METHOD']=='POST'){
           
          $data=array(
            'course_id'=>$req->input('course_id'),
            'title'=>trim($req->input('title')),
            'video_id'=>trim($req->input('video_id')),
            'description'=>preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/i', '$1', $req->input('description')),
          );
          if($req->input('uid')!=''){
            $update=DB::table("demo_videos")->where("id",$req->input('uid'))->update($data);
            $req->session()->flash('success', 'Demo video updated successfully...');
            return redirect('admin/demovideo/'.$req->input('course_id'));
            exit;
        }
          $insert=DB::table("demo_videos")->insert($data);
          if ($insert) {
            $req->session()->flash('success', 'Demo video added successfully...');
            return redirect($_SERVER['HTTP_REFERER']);
        } else {
            $req->session()->flash('Error', 'Some error occured...');
            return redirect($_SERVER['HTTP_REFERER']);
        }
        }
        if($req->input('uid')!='')
        {
            $data['res'] = DB::table("demo_videos")->where("id", $req->input('uid'))->get()->first();
        }
        $data['list'] = DB::table("courses")->where("id", $id)->get();
        $data['videos'] = DB::table("demo_videos")->where("course_id", $id)->get();
        return view('course.demovideo',$data);
    }
    public function details(Request $req, $id)
    {
        $data['res'] = DB::table("courses")->where('id', $id)->first();
        $data['payType']=DB::table("course_payment")->where("course_id",$id)->count();
        $data['demovideos'] = DB::table("demo_videos")->where('course_id', $id)->get();
        return view('course.details', $data);
    }
    public function startlesson(Request $req,$id){
        $data['list'] = DB::table("courses")->where("id", $id)->get();
        return view('course.startlesson',$data);
    }
}
