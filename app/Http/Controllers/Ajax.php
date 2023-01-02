<?php

namespace App\Http\Controllers;
error_reporting(0);
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class Ajax extends Controller
{
    public function media(Request $req)
    {
        Paginator::useBootstrap();
        DB::enableQueryLog();
        if($req->input('delete')=='true'){
            $id=$req->input('record_id');
        DB::table('front_cms_media_gallery')->where('id', $id)->delete();
          echo 1;
          exit;
      }
         $keyword = $req->input('keyword');
         $file_type = $req->input('file_type');
         if($keyword!='' && $file_type!=''){
            $res =  DB::table('front_cms_media_gallery')->where('img_name', 'LIKE', '%'.$keyword.'%')->orWhere('file_type', 'LIKE', '%'.$file_type.'%')->paginate(20);
            // dd(DB::getQueryLog());
         }elseif($keyword!=''){
            $res =  DB::table('front_cms_media_gallery')->where('img_name', 'LIKE', '%'.$keyword.'%')->paginate(20);
         }elseif($file_type!=''){
            $res =  DB::table('front_cms_media_gallery')->where('file_type', 'LIKE', '%'.$file_type.'%')->paginate(20);
         }else{
            $res =  DB::table('front_cms_media_gallery')->where('img_name', 'LIKE', '%'.$keyword.'%')->orWhere('file_type', 'LIKE', '%'.$file_type.'%')->paginate(20);
         }
       
         
    
        echo '<div class="row">';
        foreach ($res as $row) {
          
            echo  '<div class="col-sm-3 col-md-2 col-xs-6 img_div_modal image_div div_record_'.$row->id.'">
          
            
            <div class="fadeoverlay">
            <div class="fadeheight">
            <img class="" data-fid="" data-content_type="'.$row->file_type.'" data-content_name="'.$row->img_name.'" data-is_image="1" data-vid_url="'.$row->vid_url.'"
             data-img="'.asset("public/uploads/gallery/media/$row->img_name").'" 
             src="'.asset("public/uploads/gallery/media/$row->img_name").'"></div>
             <i class="fa fa-picture-o videoicon"></i>
             <div class="overlay3">
             <a href="#" class="uploadcheckbtn" data-record_id="'.$row->id.'" data-toggle="modal"
              data-target="#detail" data-image="'.asset("public/uploads/gallery/media/$row->img_name").'" 
              data-source="'.asset("public/uploads/gallery/media/$row->img_name").'" 
              data-media_name="'.$row->img_name.'" data-media_size="'.$row->file_size.'"
               data-media_type="image/'.$row->file_type.'" data-original-title="" title="">
               <i class="fa fa-navicon"></i></a>
               <a href="#" class="uploadclosebtn" data-record_id="'.$row->id.'"
                data-toggle="modal" data-target="#confirm-delete" data-original-title="" title="">
                <i class=" fa fa-trash-o"></i></a>
                <p class="processing">Processing...</p></div><p class="">'.$row->img_name.'</p></div></div>';
        }
        
       
      echo '
      </div>
     
      <div align="right" id="pagination_link"><ul class="pagination">'.$res->links().'
      
      </ul></div>';
    
     
    }
    public function getmedia(Request $req){
      Paginator::useBootstrap();
      DB::enableQueryLog();
      $keyword = $req->input('keyword');
      $file_type = $req->input('file_type');
      if($keyword!='' && $file_type!=''){
         $res =  DB::table('front_cms_media_gallery')->where('img_name', 'LIKE', '%'.$keyword.'%')->orWhere('file_type', 'LIKE', '%'.$file_type.'%')->paginate(20);
         // dd(DB::getQueryLog());
      }elseif($keyword!='' && $file_type==''){
         $res =  DB::table('front_cms_media_gallery')->where('img_name', 'LIKE', '%'.$keyword.'%')->paginate(20);
      }elseif($file_type!='' && $keyword==''){
         $res =  DB::table('front_cms_media_gallery')->where('file_type', 'LIKE', '%'.$file_type.'%')->paginate(20);
      }else{
         $res =  DB::table('front_cms_media_gallery')->where('img_name', 'LIKE', '%'.$keyword.'%')->orWhere('file_type', 'LIKE', '%'.$file_type.'%')->paginate(20);
      }
          // dd(DB::getQueryLog());
      echo '<div class="row">';
      foreach ($res as $row) {
        echo '<div class="col-sm-3 col-md-2 col-xs-6 img_div_modal image_div div_record_'.$row->id.'">
        <div class="fadeoverlay">
        <div class="fadeheight">
        <img class="" data-fid="'.$row->id.'" data-content_type="'.$row->file_type.'"
         data-content_name="'.$row->img_name.'" data-is_image="1" data-vid_url=""
          data-img="'.asset("public/uploads/gallery/media/$row->img_name").'" 
          src="'.asset("public/uploads/gallery/media/$row->img_name").'">
          </div><i class="fa fa-picture-o videoicon"></i>
          <p class="">'.$row->img_name.'</p></div></div>';
        
          
      }
      
     
    echo '
    </div>
   
    <div align="right" id="pagination_link"><ul class="pagination">'.$res->links().'
    
    </ul></div>';
  ?>

<?
    }
public function trade(Request $req){
   $groupid= $req->input('groupid');
   $data=DB::select('select * from trade where tradegroup='.$groupid);
   echo '<option value="">Select Trade</option>';
   foreach($data as $row){
      echo '<option value="'.$row->id.'">'.$row->name.'</option>';    
   }
}
public function subject(Request $req){
  
   $groupid= $req->input('groupid');
   $trade= $req->input('tradeid');
   $data=DB::select('select id,name from subject where tradegroup='.$groupid.' and trade='.$trade);
   echo '<option value="">Select Subject</option>';
   foreach($data as $row){
      echo '<option value="'.$row->id.'">'.$row->name.'</option>';    
   }
}
public function chapter(Request $req){
  
   $groupid= $req->input('groupid');
   $trade= $req->input('tradeid');
   $subject= $req->input('subjectid');
   $data=DB::select('select id,name from chapter where tradegroup='.$groupid.' and trade='.$trade.' and subject='.$subject);
   echo '<option value="">Select Chapter</option>';
   foreach($data as $row){
      echo '<option value="'.$row->id.'">'.$row->name.'</option>';    
   }
}
public function topic(Request $req){
  
   $groupid= $req->input('groupid');
   $trade= $req->input('tradeid');
   $subject= $req->input('subjectid');
   $chapter= $req->input('chapterid');
   $data=DB::select('select id,name from topics where tradegroup='.$groupid.' and trade='.$trade.' and subject='.$subject.' and chapter='.$chapter);
   echo '<option value="">Select Topic</option>';
   foreach($data as $row){
      echo '<option value="'.$row->id.'">'.$row->name.'</option>';    
   }
}
public function batches(Request $req){
    $classid= $req->input('classid');
   $data=DB::select('select batches from classes where id='.$classid);
   $batch_arr = explode(",", $data[0]->batches);
 $batchesid=$req->input('batchesid');
   for ($i = 0; $i < count($batch_arr); $i++) {
      $bid = $batch_arr[$i];
      $bname = DB::select('select id,batch from batches where id=' . $bid);
      echo ' <div class="checkbox">
      <label>
          <input type="checkbox" name="batches[]" value="'.$bname[0]->id.'"';
            if (in_array($bname[0]->id, explode(",", $batchesid))) {
            echo 'checked';
        } 
          echo '> '.$bname[0]->batch.'</label>
  </div>';  
  }
}
public function class_batches(Request $req){
     $classid= $req->input('classid');
  $data=DB::select('select batches from classes where id='.$classid);
  $batch_arr = explode(",", $data[0]->batches);
$batchesid=$req->input('batchesid');
echo '<option value="">Select Batch</option>';
  for ($i = 0; $i < count($batch_arr); $i++) {
     $bid = $batch_arr[$i];
     $bname = DB::select('select id,batch from batches where id=' . $bid);
     echo '<option value="'.$bname[0]->id.'">'.$bname[0]->batch.'</option>';  
 }
}

public function gettrades(Request $req){
   $tradegroup= $req->input('tradegroup');
  $data=DB::select('select * from trade where tradegroup='.$tradegroup);
 
echo '<option value="">Select Trade</option>';
foreach($data as $trun){
   echo '<option value="'.$trun->id.'">'.$trun->name.'</option>';
}
}

public function hostel_room(Request $req){
   $hostel_id= $req->input('hostel_id');
  $data=DB::select('select * from hostel_rooms where hostel_id='.$hostel_id);
  echo '<option value="">Select </option>';
 foreach($data as $rooms){
     echo '<option value="'.$rooms->id.'">'.$rooms->room_no.'</option>';  
 }
}
public function district(Request $req){
  echo $state_id= $req->input('state_id');
  $data=DB::select('select * from cities where state_id='.$state_id);
  echo '<option value="">Select City</option>';
 foreach($data as $district){
     echo '<option value="'.$district->id.'">'.$district->city.'</option>';  
 }
}

public function studentsearch(Request $req)
{
   $data=DB::select('select * from students where class_id='.$req->input('classid').' and batch_id='.$req->input('batchid'));
 
}

public function addvideo(Request $req)
{
   $data=array(
      'course_id'=>trim($req->input('course_id')),
      'folder_id'=>trim($req->input('folder_id')),
      'video_id'=>trim($req->input('video_id')),
      'title'=>trim($req->input('title')),
      'description'=>trim($req->input('description')),
   );
   if($req->input('vid')!=''){
      $update=DB::table('videos')->where("id",$req->input('vid'))->update($data);
      echo '<div class="alert alert-success" role="alert">
     Video updated succesfully.
    </div>';
    exit;
   }
   $insert =  DB::table('videos')->insert($data);
   if ($insert) {
      echo '<div class="alert alert-success" role="alert">
     Video added succesfully.
    </div>';
 } else {
   echo '<div class="alert alert-error" role="alert">
   Some error occured.
  </div>';
 }
}

public function update_doc_status(Request $req)
{
   
   $id=$req->input('id');
   $status=$req->input('status');
   if($status=='delete'){
   echo  $delete= DB::table('course_document')->where('id', $id)->delete();
   }else{
      if($status==0){
         $status=1;
      }else{
         $status=0;
      }
      $data=array(
         'status'=>$status
      );
      
     echo $update =  DB::table('course_document')->where('id', $id)->update($data);
      
   }
  
}

public function update_video_status(Request $req)
{
   
   $id=$req->input('id');
   $status=$req->input('status');
   if($status=='delete'){
   echo  $delete= DB::table('videos')->where('id', $id)->delete();
   }else{
      if($status==0){
         $status=1;
      }else{
         $status=0;
      }
      $data=array(
         'status'=>$status
      );
      
     echo $update =  DB::table('videos')->where('id', $id)->update($data);
      
   }
  
}

public function dynamic_folder(Request $req)
{
   if($req->input('type')=='doc'){
      $id=$req->input('id');
      $status=$req->input('status');
      if($status=='delete'){
         $delete= DB::table('course_document')->where('id', $id)->delete();
      }else{
         if($status==0){
            $status=1;
         }else{
            $status=0;
         }
         $data=array(
            'status'=>$status
         );
         
          $update =  DB::table('course_document')->where('id', $id)->update($data);
         
      }
   }
   if($req->input('type')=='video'){
      $id=$req->input('id');
      $status=$req->input('status');
      if($status=='delete'){
        $delete= DB::table('videos')->where('id', $id)->delete();
      }else{
         if($status==0){
            $status=1;
         }else{
            $status=0;
         }
         $data=array(
            'status'=>$status
         );
         
         $update =  DB::table('videos')->where('id', $id)->update($data);
         
      }
   }
   

$folderid=$data['folderid']=$req->input('folderid');
$coursid=$data['coursid']=$req->input('coursid');
if($req->input('onload')!=''){
   $data['viewtype']=$req->input('viewtype');
   $data['folder'] = DB::table("folders")->where("course_id",$coursid)->where('parent_folder_id',$folderid)->orderBy('order_id')->get();
   $data['videos']=DB::table("videos")->where("course_id",$coursid)->where('folder_id',$folderid)->orderBy('order_id')->get();
   $data['document']=DB::table("course_document")->where("course_id",$coursid)->where('folder_id',$folderid)->orderBy('order_id')->get();
   
}else{
   $data['viewtype']=$req->input('viewtype');
   $data['folder'] = DB::table("folders")->where('parent_folder_id',$folderid)->orderBy('order_id')->get();
$data['videos']=DB::table("videos")->where('folder_id',$folderid)->orderBy('order_id')->get();
$data['document']=DB::table("course_document")->where('folder_id',$folderid)->orderBy('order_id')->get();

}

return view('course.ajax_folders',$data);
    
}

public function update_order(Request $req)
{

      if($req->input('documentarrayorder')!=''){
         $table="course_document";
        $array=$req->input('documentarrayorder');
      }elseif($req->input('arrayorder')!=''){
         $table="folders";
         $array = $req->input('arrayorder');
      }else{
         $table="videos";
         $array = $req->input('videoarrayorder');
      }
  
   $count = 1;
   foreach ($array as $idval) {
       $count;
       $idval;
     $data=array(
      'order_id'=>$count
     );
   
      $update=DB::table($table)->where("id",$idval)->update($data);
   
   $count ++; 
   }
    
      echo '<div class="alert alert-success" role="alert">
      Record updated successfully.
    </div>';
    
}

public function dynamic_folder_import(Request $req)
{
   if($req->input('type')=='doc'){
      $id=$req->input('id');
      $status=$req->input('status');
      if($status=='delete'){
         $delete= DB::table('course_document')->where('id', $id)->delete();
      }else{
         if($status==0){
            $status=1;
         }else{
            $status=0;
         }
         $data=array(
            'status'=>$status
         );
         
          $update =  DB::table('course_document')->where('id', $id)->update($data);
         
      }
   }
   if($req->input('type')=='video'){
      $id=$req->input('id');
      $status=$req->input('status');
      if($status=='delete'){
        $delete= DB::table('videos')->where('id', $id)->delete();
      }else{
         if($status==0){
            $status=1;
         }else{
            $status=0;
         }
         $data=array(
            'status'=>$status
         );
         
         $update =  DB::table('videos')->where('id', $id)->update($data);
         
      }
   }
   

 $folderid=$data['folderid']=$req->input('folderid');
$coursid=$data['coursid']=$req->input('coursid');
$data['folder'] = DB::table("folders")->where("status", '1')->where('parent_folder_id',$folderid)->orderBy('order_id')->get();
$data['videos']=DB::table("videos")->where('folder_id',$folderid)->orderBy('order_id')->get();
$data['document']=DB::table("course_document")->where('folder_id',$folderid)->orderBy('order_id')->get();

return view('course.dynamic_folder_import',$data);
    
}

public function questions(Request $req)
{
   
      $page=$req->input('page');
 
 
   Paginator::useBootstrap();
   DB::enableQueryLog();
   $list=DB::table("questions")->paginate(20);
  foreach($list as $row)
  {?>
<tr>
    <td> <input type="checkbox" value="<?=$row->id?>" class="checkboxids" name="checkboxid[]"></td>
    <td><?=$row->id?></td>
    <td>
        <?php   $res=DB::table('tradegroup')->where("id",$row->tradegroup)->get()->first();
                                                         echo $res->name;
                                                         ?>

    </td>
    <td> <?php   $res=DB::table('trade')->where("id",$row->trade)->get()->first();
                                                         echo $res->name;
                                                         ?> </td>
    <td><?php   $res=DB::table('subject')->where("id",$row->subject)->get()->first();
                                                         echo $res->name;
                                                         ?> </td>
    <td><?php   $res=DB::table('chapter')->where("id",$row->chapter)->get()->first();
                                                         echo $res->name;
                                                         ?></td>
    <td><?php   $res=DB::table('topics')->where("id",$row->topic)->get()->first();
                                                         echo $res->name;
                                                         ?></td>
    <td><?=substr($row->question,0,20)?>....</td>
    <td class=" dt-body-right"><a target="_blank" href="admin/question/read/58"
            class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="View"><i
                class="fa fa-eye"></i></a><button type="button" data-placement="left"
            class="btn btn-default btn-xs question-btn-edit" data-toggle="tooltip" id="load" data-recordid="58"
            title="Edit"><i class="fa fa-pencil"></i></button><a data-placement="left"
            href="question/delete/58" class="btn btn-default btn-xs"
            data-toggle="tooltip" title="Delete" onclick="return confirm('Delete Confirm?')"><i
                class="fa fa-remove"></i></a></td>
</tr>
<?}
  
}


public function dynamic_contents(Request $req)
{
   if($req->input('type')=='doc'){
      $id=$req->input('id');
      $status=$req->input('status');
      if($status=='delete'){
         $delete= DB::table('course_document')->where('id', $id)->delete();
      }else{
         if($status==0){
            $status=1;
         }else{
            $status=0;
         }
         $data=array(
            'status'=>$status
         );
         
          $update =  DB::table('course_document')->where('id', $id)->update($data);
         
      }
   }
   if($req->input('type')=='video'){
      $id=$req->input('id');
      $status=$req->input('status');
      if($status=='delete'){
        $delete= DB::table('videos')->where('id', $id)->delete();
      }else{
         if($status==0){
            $status=1;
         }else{
            $status=0;
         }
         $data=array(
            'status'=>$status
         );
         
         $update =  DB::table('videos')->where('id', $id)->update($data);
         
      }
   }
   

$folderid=$data['folderid']=$req->input('folderid');
$coursid=$data['coursid']=$req->input('coursid');
if($req->input('onload')!=''){
   $data['viewtype']=$req->input('viewtype');
   $data['folder'] = DB::table("folders")->where("course_id",$coursid)->where('parent_folder_id',$folderid)->orderBy('order_id')->get();
   $data['videos']=DB::table("videos")->where("course_id",$coursid)->where('folder_id',$folderid)->orderBy('order_id')->get();
   $data['document']=DB::table("course_document")->where("course_id",$coursid)->where('folder_id',$folderid)->orderBy('order_id')->get();
   
}else{
   $data['viewtype']=$req->input('viewtype');
   $data['folder'] = DB::table("folders")->where('parent_folder_id',$folderid)->orderBy('order_id')->get();
$data['videos']=DB::table("videos")->where('folder_id',$folderid)->orderBy('order_id')->get();
$data['document']=DB::table("course_document")->where('folder_id',$folderid)->orderBy('order_id')->get();

}

return view('course.ajax_contents',$data);
    
}
}
 