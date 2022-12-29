 <div id="dynamic_folder">

     <input type="hidden" value="{{$folderid}}" id="folderid">
     <input type="hidden" value="{{$coursid}}" id="coursid">
     <?php if (sizeof($folder)==0 && sizeof($videos)==0 && sizeof($document)==0) {
                                    echo "<h3>       You haven't uploaded any content yet.
                                        Select the content from the right panel to start adding here</h3>";
                                } ?>
     <?php 
                                    if($folderid!='0'){
                                        $backid=DB::select("select parent_folder_id from folders where folder_id=".$folderid);
                                        ?>
     <div class="row text-left " style="padding-bottom: 10px; font-size:20px; margin-left:22px;">
         <a href="javascript:void()" class="go_back btn btn-success" data-id="{{$backid[0]->parent_folder_id}}">

             Go Back
         </a>

     </div>
     <?}?>


 </div>

 <div id="list">
     <div id="response"> </div>
     <ul>
         @foreach($folder as $rowss)
         <li id="arrayorder_{{$rowss->id}}">
             <div class="row text-left folder_design">


                 <div class="col-lg-8 col-md-8 col-sm-12">
                     <a href="javascript:void();" class="view_folder" data-id="{{$rowss->folder_id}}">
                         <i class="fa fa-folder fa-4x" aria-hidden="true"></i>
                         &nbsp;&nbsp; {{$rowss->folders}}

                     </a>

                     <label> {{DB::table('videos')->where('folder_id',$rowss->folder_id)->count()}} (Videos)</label>
                     &nbsp;<label>
                         {{DB::table('course_document')->where('folder_id',$rowss->folder_id)->count()}} (Files)</label>
                 </div>

                 <div class="col-lg-2">&nbsp;</div>

             </div>
         </li>
         @endforeach
     </ul>
 </div>
 <br />

 <div id="refresh_video">

     <ul>

         @foreach($videos as $video)
         <li id="videoarrayorder_{{$video->id}}">
             <div class="row folder_design">
                 <div class="col-md-2 text-left youtubevideo" data-video_id="{{$video->video_id}}">
                     <img src="http://i3.ytimg.com/vi/<?= $video->video_id ?>/0.jpg"  style="height:100px">
                     
                     <div class="overlay--bottom-small"></div>
                     <div class="overlay--fullscreen-small"></div>
                 </div>
                 <div class="col-md-7 text-left">
                     <span>Title : {{$video->title}}</span>
                     <br />
                     <span>Description : {{$video->description}}</span>
                 </div>

             </div>
         </li>
         @endforeach
     </ul>

 </div>
 <br />

 <div id="refresh_doc">
     <ul>
         @foreach($document as $documents)
         <li id="documentarrayorder_{{$documents->id}}">
             <div class="row folder_design">
                 <div class="col-md-2 text-left">
                     <a href="{{asset('').$documents->document}}" download><i class="fa fa-download fa-4x"></i></a>
                 </div>
                 <div class="col-md-7 text-left">
                     <span>Title : {{$documents->doc_name}}</span>
                     <br />
                     <span>Description : {{$documents->description}}</span>
                 </div>

             </div>
         </li>
         @endforeach
     </ul>
 </div>

 </div>