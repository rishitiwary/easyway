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
        $course = CourseModel::all();
        return view('course.index', ['data' => $course]);
    }
    public function addcourse(Request $req)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($req->file('course_thumbnail') != '') {
                $course_thumbnail = $req->file('course_thumbnail')->getClientOriginalName();
                $course_thumbnail_url = $req->file('course_thumbnail')->move('public/uploads/course', $course_thumbnail);
            }
            $data = array(
                'title' => trim($req->input('title')),
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
                'description' => trim($req->input('description')),
                'course_thumbnail' => $course_thumbnail_url
            );
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
        $data['tradegroup'] = DB::table('tradegroup')->where('status', '1')->get();
        return view('course.addcourse', $data);
    }
    public function addcontent(Request $req, $id)
    {
        $data['list'] = DB::table("courses")->where("id", $id)->get();
        $data['folder'] = DB::table("folders")->where("courseid", $id)->where('parent_folder_id','0')->get();
        if ($req->input('delfolder') != '') {
            $deleted = DB::table('folders')->where('id', '=', $req->input('delfolder'))->delete();
            $req->session()->flash('success', 'Folder Deleted succesfully...');
            return redirect($_SERVER['HTTP_REFERER']);
        }
        if ($req->input('fid') != '') {
            $data['ress'] = DB::table("folders")->where('id', $req->input('fid'))->get()->first();
        }
        return view('course.addcontent', $data);
    }
    public function createfolder(Request $req)
    {
        $data = array(
            'courseid' => trim($req->input('id')),
            'folders' => trim($req->input('folder')),
        );
        if ($req->input('folderid') != '') {
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
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            
            $data = array(
                'courseid' => trim($req->input('course_id')),
                'folders' => trim($req->input('folder_id')),
                'parent_folder_id' => trim($req->input('parent_folder_id')),
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
    public function viewcontents(Request $req,$id)
    {
        $data['list'] = DB::table("courses")->where("id", $id)->get();
        $data['folder'] = DB::table("folders")->where("courseid", $id)->where('parent_folder_id','0')->get();
        $data['videos']=DB::table("videos")->where("course_id",$id)->where('folder_id','')->get();
        $data['document']=DB::table("course_document")->where("course_id",$id)->where('folder_id','')->get();
        return view('course/viewcontent',$data);
    }
}
