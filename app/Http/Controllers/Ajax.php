<?php

namespace App\Http\Controllers;

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
      <style>
      .w-5{
        display: none;
    }
      </style>
      <div align="right" id="pagination_link"><ul class="pagination">'.$res->links().'
      
      </ul></div>';
    ?>
    <script>
$(document).ready(function(){
 
 $(document).on('click', '.pagination a', function(event){
    
  event.preventDefault(); 
  var page = $(this).attr('href').split('page=')[1];
   
  fetch_data(page);
 });

 function fetch_data(page)
 {
    
  $.ajax({
   url:"<?=url("ajax/media")?>?page="+page,
   success:function(data)
   {
    $('#media_div').empty(data);
    $('#media_div').append(data);
   }
  });
 }
 
});
</script>
    <?
     
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
    <style>
    .w-5{
      display: none;
  }
    </style>
    <div align="right" id="pagination_link"><ul class="pagination">'.$res->links().'
    
    </ul></div>';
  ?>
  <script>
$(document).ready(function(){

$(document).on('click', '.pagination a', function(event){
 
event.preventDefault(); 
var page = $(this).attr('href').split('page=')[1];
 
fetch_data(page);
});

function fetch_data(page)
{
   

$.ajax({
 url:"<?=url("ajax/getmedia")?>?page="+page,
 method:'GET',
 success:function(data)
 {
  $('.modal-media-body').empty(data);
  $('.modal-media-body').append(data);
 }
});
}

});
</script>
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
}
  