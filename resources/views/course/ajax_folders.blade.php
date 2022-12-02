<div id="dynamic_folder">

<input type="hidden" value="{{$folderid}}" id="folderid">
<input type="hidden" value="{{$coursid}}" id="coursid">
                                <?php if ($folder[0]->id == '') {
                                    echo "<h3>       You haven't uploaded any content yet.
                                        Select the content from the right panel to start adding here</h3>";
                                } ?>
                                <?php 
                                    if($folderid!='0'){
                                        $backid=DB::select("select parent_folder_id from folders where id=".$folderid);
                                        ?>
                                <div class="row text-left " style="padding-bottom: 10px; font-size:20px;">
                           <a href="javascript:void()" class="view_folder" data-id="{{$backid[0]->parent_folder_id}}"><button class="btn btn-primary btn-sm">
                                Go Back
                           </button></a>

                                </div>
                                <?}
                               
                                    ?>
                                @foreach($folder as $rowss)
                                <div class="row text-left " style="padding-bottom: 10px; font-size:20px;">
                                    <div class="col-lg-8 col-md-8 col-sm-12 " >
                                    <a href="javascript:void();" class="view_folder" data-id="{{$rowss->id}}">
                                        <i class="fa fa-folder fa-2x" aria-hidden="true"></i>
                                        &nbsp;&nbsp;{{$rowss->folders}}
                                    </a>
                                    </div>
                                     
                                    <div class="col-lg-2">&nbsp;</div>
                                    <div class="col-lg-2 col-md-6 col-sm-12">
                                        <a data-placement="left" href="{{url('admin/addcontent')}}/{{$coursid}}?fid={{$rowss->id}}" role="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="Edit Folder"><i class="fa fa-edit"></i></a>
                                        <a data-placement="left" href="http://localhost/easyway/admin/addcontent/57" role="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="View Videos"><i class="fa fa-eye"></i></a>
                                        <a data-placement="left" href="{{url('admin/addcontent')}}/{{$coursid}}?delfolder={{$rowss->id}}" role="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="" data-original-title="Delete Folder"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                                @endforeach
                                <br />
                                <div id="refresh_video">
                                
                     
                                    @foreach($videos as $video)
                        
                                    <div class="row">
                                        <div class="col-md-2 text-left">
                                            <iframe width="100%" height="100" src="https://www.youtube.com/embed/<?= $video->video_id ?>?modestbranding=1&autoplay=1&mute=0&rel=1&showinfo=0&loop=1&controls=1" rel="0" frameborder="0"" title=" YouTube video player">
                                            </iframe>
                                            <div class="overlay--bottom"></div>
                                            <div class="overlay--fullscreen"></div>
                                        </div>
                                        <div class="col-md-7 text-left">
                                            <span>Title : {{$video->title}}</span>
                                            <br />
                                            <span>Description : {{$video->description}}</span>
                                        </div>
                                        <div class="col-md-3 text-left">
                                            @if($video->status=='1')
                                            <i class="fa fa-unlock"></i> Unlocked
                                            @else
                                            <i class="fa fa-lock"></i> Locked
                                            @endif
                                            &nbsp;&nbsp;
                                            <a data-placement="left" href="javascript:void()" onclick="ajax_folder('{{$video->status}}','{{$video->id}}','video')" class="btn btn-default btn-xs" data-toggle="tooltip" title="Unlock">
                                                @if($video->status=='0')
                                                <i class="fa fa-unlock"></i>
                                                @else
                                                <i class="fa fa-lock"></i>
                                                @endif
                                            </a>
                                            <a data-placement="left" href="{{url('admin/addcontent')}}/{{$coursid}}?videoid={{$video->id}}" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit" target="_blank">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a data-placement="left" href="javascript:void();" onclick="ajax_folder('delete','{{$video->id}}','video')" class="btn btn-default btn-xs delete_video" data-toggle="tooltip" title="Delete" onclick="return confirm('Delete Confirm?');">
                                                <i class="fa fa-remove"></i>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <br/>
                                <div id="refresh_doc">
                                    @foreach($document as $documents)
                                    <div class="row">
                                        <div class="col-md-2 text-left">
                                            <a href="{{asset('').$documents->document}}" download><i class="fa fa-download fa-4x"></i></a>
                                        </div>
                                        <div class="col-md-7 text-left">
                                            <span>Title : {{$documents->doc_name}}</span>
                                            <br />
                                            <span>Description : {{$documents->description}}</span>
                                        </div>
                                        <div class="col-md-3 text-left">
                                            @if($documents->status=='1')
                                            <i class="fa fa-unlock"></i> Unlocked
                                            @else
                                            <i class="fa fa-lock"></i> Locked
                                            @endif
                                            &nbsp;&nbsp;
                                            <a data-placement="left" href="javascript:void()"  data-status="" onclick="ajax_folder('{{$documents->status}}','{{$documents->id}}','doc')" class="btn btn-default btn-xs update_doc_status" data-toggle="tooltip" title="Unlock">
                                                @if($documents->status=='0')
                                                <i class="fa fa-unlock"></i>
                                                @else
                                                <i class="fa fa-lock"></i>
                                                @endif
                                            </a>
                                            <a data-placement="left" href="{{url('admin/addcontent')}}/{{$coursid}}?docid={{$documents->id}}" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit" target="_blank">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a data-placement="left" href="javascript:void();"  class="btn btn-default btn-xs delete_doc" onclick="ajax_folder('delete','{{$documents->id}}','doc')" data-toggle="tooltip" title="Delete" onclick="return confirm('Delete Confirm?');">
                                                <i class="fa fa-remove"></i>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                </div>

                               

    