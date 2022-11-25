<?php

namespace App\Http\Controllers;

error_reporting(0);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Master extends Controller
{
    public function tradegroup(Request $req)
    {
        if (!empty($req->input('id'))) {
            $deleted = DB::table('tradegroup')->where('id', '=', $req->input('id'))->delete();
            $req->session()->flash('success', 'Deleted succesfully...');
        }
        $data['list'] = DB::table('tradegroup')->get();
        return view('admin.tradegroup', $data);
    }
    public function tradegroupCreate(Request $req)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'name' => trim($req->input('name'))
            );
            if (!empty($req->input('uid'))) {
                $update =  DB::table('tradegroup')->where('id', $req->input('uid'))->update($data);

                $req->session()->flash('success', 'Updated successfully...');
                return redirect('master/tradegroup');
                exit;
            } else {
                $req->validate([
                    'name' => 'required|unique:tradegroup,name',
                ]);


                $insert =  DB::table('tradegroup')->insert($data);

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
            $data['res'] = DB::select('select * from tradegroup where id=' . $req->input('id'));

            return view('admin.tradegroupCreate', $data);
        } else {
            return view('admin.tradegroupCreate');
        }
    }
    public function trade(Request $req)
    {
        if (!empty($req->input('id'))) {
            $deleted = DB::table('trade')->where('id', '=', $req->input('id'))->delete();
            $req->session()->flash('success', 'Deleted succesfully...');
        }
        $data['list'] = DB::select('select * from trade order by id desc');
        return view('admin.trade', $data);
    }
    public function tradeCreate(Request $req)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'name' => trim($req->input('name')),
                'tradegroup' => trim($req->input('tradegroup'))
            );
            if (!empty($req->input('uid'))) {
                $update =  DB::table('trade')->where('id', $req->input('uid'))->update($data);

                $req->session()->flash('success', 'Updated successfully...');
                return redirect('master/trade');
                exit;
            } else {
                $req->validate([
                    'name' => 'required|unique:trade,name',
                    'tradegroup' => 'required',

                ]);


                $insert =  DB::table('trade')->insert($data);

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
            $data['res'] = DB::select('select * from trade where id=' . $req->input('id'));
            $data['list'] = DB::select('select * from tradegroup order by name asc');
            return view('admin.tradeCreate', $data);
        } else {
            $data['list'] = DB::select('select * from tradegroup order by name asc');
            return view('admin.tradeCreate', $data);
        }
    }
    public function subject(Request $req)
    {
        if (!empty($req->input('id'))) {
            $deleted = DB::table('subject')->where('id', '=', $req->input('id'))->delete();
            $req->session()->flash('success', 'Deleted succesfully...');
        }
        $data['list'] = DB::select('select * from subject order by id desc');
        return view('admin.subject', $data);
    }
    public function subjectCreate(Request $req)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = array(
                'name' => trim($req->input('name')),
                'tradegroup' => trim($req->input('tradegroup')),
                'trade' => trim($req->input('trade'))
            );
            if (!empty($req->input('uid'))) {
                $update =  DB::table('subject')->where('id', $req->input('uid'))->update($data);

                $req->session()->flash('success', 'Updated successfully...');
                return redirect('master/subject');
                exit;
            } else {
                $req->validate([
                    'name' => 'required|unique:subject,name',
                    'tradegroup' => 'required',
                    'trade' => 'required',

                ]);


                $insert =  DB::table('subject')->insert($data);

                if ($insert) {
                    $req->session()->flash('success', 'Inserted successfully...');
                    return redirect($_SERVER['HTTP_REFERER']);
                } else {
                    $req->session()->flash('error', 'Some error occured...');
                    return redirect($_SERVER['HTTP_REFERER']);
                }
            }
        }

        $data['list'] = DB::select('select * from tradegroup order by name asc');
        if ($req->input('id') != '') {
            $data['res'] = DB::select('select * from subject where id=' . $req->input('id'));
        }

        return view('admin.subjectCreate', $data);
    }
    public function chapter(Request $req)
    {
        if (!empty($req->input('id'))) {
            $deleted = DB::table('chapter')->where('id', '=', $req->input('id'))->delete();
            $req->session()->flash('success', 'Deleted succesfully...');
        }
        $data['list'] = DB::select('select * from chapter order by id desc');
        return view('admin.chapter', $data);
    }
    public function chapterCreate(Request $req)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = array(
                'name' => trim($req->input('name')),
                'tradegroup' => trim($req->input('tradegroup')),
                'trade' => trim($req->input('trade')),
                'subject' => trim($req->input('subject'))
            );
            if (!empty($req->input('uid'))) {
                $update =  DB::table('chapter')->where('id', $req->input('uid'))->update($data);

                $req->session()->flash('success', 'Updated successfully...');
                return redirect('master/chapter');
                exit;
            } else {
                $req->validate([
                    'name' => 'required|unique:chapter,name',
                    'tradegroup' => 'required',
                    'trade' => 'required',
                    'subject' => 'required',

                ]);


                $insert =  DB::table('chapter')->insert($data);

                if ($insert) {
                    $req->session()->flash('success', 'Inserted successfully...');
                    return redirect($_SERVER['HTTP_REFERER']);
                } else {
                    $req->session()->flash('error', 'Some error occured...');
                    return redirect($_SERVER['HTTP_REFERER']);
                }
            }
        }

        $data['list'] = DB::select('select * from tradegroup order by name asc');
        if ($req->input('id') != '') {
            $data['res'] = DB::select('select * from chapter where id=' . $req->input('id'));
        }

        return view('admin.chapterCreate', $data);
    }


    public function topic(Request $req)
    {
        if (!empty($req->input('id'))) {
            $deleted = DB::table('topics')->where('id', '=', $req->input('id'))->delete();
            $req->session()->flash('success', 'Deleted succesfully...');
        }
        $data['list'] = DB::select('select * from topics order by id desc');
        return view('admin.topic', $data);
    }
    public function topicCreate(Request $req)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = array(
                'name' => trim($req->input('name')),
                'tradegroup' => trim($req->input('tradegroup')),
                'trade' => trim($req->input('trade')),
                'subject' => trim($req->input('subject')),
                'chapter' => trim($req->input('chapter'))
            );
            if (!empty($req->input('uid'))) {
                $update =  DB::table('topics')->where('id', $req->input('uid'))->update($data);

                $req->session()->flash('success', 'Updated successfully...');
                return redirect('master/topic');
                exit;
            } else {
                $req->validate([
                    'name' => 'required|unique:topics,name',
                    'tradegroup' => 'required',
                    'trade' => 'required',
                    'subject' => 'required',
                    'chapter' => 'required',

                ]);


                $insert =  DB::table('topics')->insert($data);

                if ($insert) {
                    $req->session()->flash('success', 'Inserted successfully...');
                    return redirect($_SERVER['HTTP_REFERER']);
                } else {
                    $req->session()->flash('error', 'Some error occured...');
                    return redirect($_SERVER['HTTP_REFERER']);
                }
            }
        }

        $data['list'] = DB::select('select * from tradegroup order by name asc');
        if ($req->input('id') != '') {
            $data['res'] = DB::select('select * from topics where id=' . $req->input('id'));
        }

        return view('admin.topicCreate', $data);
    }

    public function videolibrary(Request $req)
    {
        if (!empty($req->input('id'))) {
            $deleted = DB::table('videolibrary')->where('id', '=', $req->input('id'))->delete();
            $req->session()->flash('success', 'Deleted succesfully...');
        }
        $data['list'] = DB::select('select * from videolibrary order by id desc');
        return view('admin.videolibrary', $data);
    }
    public function videolibraryCreate(Request $req)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //update uvid
            if (!empty($req->input('uid'))) {
                $check = DB::select('select * from videolibrary where id=' . $req->input('uid'));
                if ($req->file('uvid') != '') {
                    $uvid = time() . $req->file('uvid')->getClientOriginalName();
                    $file_type = $req->file('uvid')->extension();
                    if ($file_type == 'mp4' || $file_type == 'mov') {
                        $uvid = $req->file('uvid')->move('public/uploads/videolibrary', $uvid);
                    } else {
                        $req->session()->flash('error', 'Please choose only mp4 or .mov files...');
                        return redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    $uvid = $check[0]->uvid;
                }

                $data = array(
                    'name' => trim($req->input('name')),
                    'tradegroup' => trim($req->input('tradegroup')),
                    'trade' => trim($req->input('trade')),
                    'subject' => trim($req->input('subject')),
                    'chapter' => trim($req->input('chapter')),
                    'topic' => trim($req->input('topic')),
                    'uvid' => $uvid,
                    'vid' => trim($req->input('vid')),
                    'duration' => trim($req->input('duration')),
                );
                $update =  DB::table('videolibrary')->where('id', $req->input('uid'))->update($data);
                $req->session()->flash('success', 'Updated successfully...');
                return redirect('master/videolibrary');
                exit;
            }




            if ($req->file('uvid') != '') {
                $uvid = time() . $req->file('uvid')->getClientOriginalName();
                $file_type = $req->file('uvid')->extension();
                if ($file_type == 'mp4' || $file_type == 'mov') {
                    $uvid = $req->file('uvid')->move('public/uploads/videolibrary', $uvid);
                } else {
                    $req->session()->flash('error', 'Please choose only mp4 or .mov files...');
                    return redirect($_SERVER['HTTP_REFERER']);
                }
            }


            $data = array(
                'name' => trim($req->input('name')),
                'tradegroup' => trim($req->input('tradegroup')),
                'trade' => trim($req->input('trade')),
                'subject' => trim($req->input('subject')),
                'chapter' => trim($req->input('chapter')),
                'topic' => trim($req->input('topic')),
                'uvid' => $uvid,
                'vid' => trim($req->input('vid')),
                'duration' => trim($req->input('duration')),
            );

            $req->validate([
                'name' => 'required|unique:videolibrary,name',
                'tradegroup' => 'required',
                'trade' => 'required',
                'subject' => 'required',
                'chapter' => 'required',
                'topic' => 'required',
                'vid' => 'required',
                'duration' => 'required',

            ]);
            $insert =  DB::table('videolibrary')->insert($data);

            if ($insert) {
                $req->session()->flash('success', 'Inserted successfully...');
                return redirect($_SERVER['HTTP_REFERER']);
            } else {
                $req->session()->flash('error', 'Some error occured...');
                return redirect($_SERVER['HTTP_REFERER']);
            }
        }

        $data['list'] = DB::select('select * from tradegroup order by name asc');
        if ($req->input('id') != '') {
            $data['res'] = DB::select('select * from videolibrary where id=' . $req->input('id'));
        }

        return view('admin.videolibraryCreate', $data);
    }

    public function videolibraryview(Request $req)
    {
        $data['res'] = DB::select('select * from videolibrary where id=' . $req->input('id'));
        return view('admin.videolibraryView', $data);
    }
    public function studymaterials(Request $req)
    {
        if (!empty($req->input('id'))) {
            $deleted = DB::table('studymaterials')->where('id', '=', $req->input('id'))->delete();
            $req->session()->flash('success', 'Deleted succesfully...');
        }
        $data['list'] = DB::select('select * from studymaterials order by id desc');
        return view('admin.studymaterials', $data);
    }

    public function studymaterialsCreate(Request $req)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            //update uvid
            if (!empty($req->input('uid'))) {
                $check = DB::select('select * from studymaterials where id=' . $req->input('uid'));
                if ($req->file('docs') != '') {
                    $docs = $req->file('docs')->getClientOriginalName();
                    $file_type = $req->file('docs')->extension();
                    if ($file_type == 'pdf' || $file_type == 'doc' || $file_type == 'docx' || $file_type == 'txt') {
                        $docs = $req->file('docs')->move('public/uploads/documents', $docs);
                    } else {
                        $req->session()->flash('error', 'Please uploads only documents...');
                        return redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    $docs = $check[0]->docs;
                }

                $data = array(
                    'name' => trim($req->input('name')),
                    'tradegroup' => trim($req->input('tradegroup')),
                    'trade' => trim($req->input('trade')),
                    'subject' => trim($req->input('subject')),
                    'chapter' => trim($req->input('chapter')),
                    'topic' => trim($req->input('topic')),
                    'docs' => $docs,

                );
                $update =  DB::table('studymaterials')->where('id', $req->input('uid'))->update($data);
                $req->session()->flash('success', 'Updated successfully...');
                return redirect('master/studymaterials');
                exit;
            }


            if ($req->file('docs') != '') {
                $docs = $req->file('docs')->getClientOriginalName();
                $file_type = $req->file('docs')->extension();
                if ($file_type == 'pdf' || $file_type == 'doc' || $file_type == 'docx' || $file_type == 'txt') {
                    $docs = $req->file('docs')->move('public/uploads/documents', $docs);
                } else {
                    $req->session()->flash('error', 'Please uploads only documents...');
                    return redirect($_SERVER['HTTP_REFERER']);
                }
            }


            $data = array(
                'name' => trim($req->input('name')),
                'tradegroup' => trim($req->input('tradegroup')),
                'trade' => trim($req->input('trade')),
                'subject' => trim($req->input('subject')),
                'chapter' => trim($req->input('chapter')),
                'topic' => trim($req->input('topic')),
                'docs' => $docs,

            );


            // $req->validate([
            //     'name' => 'required|unique:studymaterials,name',
            //     'tradegroup' => 'required',
            //     'trade' => 'required',
            //     'subject' => 'required',
            //     'chapter' => 'required',
            //     'topic' => 'required',
            //    'docs'=>'required'

            // ]);

            $insert =  DB::table('studymaterials')->insert($data);

            if ($insert) {
                $req->session()->flash('success', 'Inserted successfully...');
                return redirect($_SERVER['HTTP_REFERER']);
            } else {
                $req->session()->flash('error', 'Some error occured...');
                return redirect($_SERVER['HTTP_REFERER']);
            }
        }

        $data['list'] = DB::select('select * from tradegroup order by name asc');
        if ($req->input('id') != '') {
            $data['res'] = DB::select('select * from studymaterials where id=' . $req->input('id'));
        }
        return view('admin.studymaterialsCreate', $data);
    }
}
