@include('admin.include.head');

<body class="hold-transition skin-blue fixed sidebar-mini">

    <div class="wrapper">

        @include('admin.include.header');
        @include('admin.include.sidebar');


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <section class="content-header">
                <h1><i class="fa fa-gears"></i> Add Contents</h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    @if(session('success'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> <?= @session('success') ?>.
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger">
                        <strong>Error!</strong> <?= @session('error') ?>.
                    </div>
                    @endif
                    <div class="col-lg-1 col-md-6 col-sm-12">

                        <!-- general form elements -->

                    </div>
                    <div class="col-lg-10 col-md-6 col-sm-12 uploadsticky">
                        <div class="box box-primary">
                            <div class="box-body text-center">

                                <label for="exampleInputFile">CONTENTS FOR {{strtoupper($list[0]->title)}}</label>
                                <br>
                                <br>
                                <?php if ($folder[0]->id == '') {
                                    echo "<h3>       You haven't uploaded any content yet.
                                        Select the content from the right panel to start adding here</h3>";
                                } ?>
                                @foreach($folder as $rowss)
                                <div class="row text-left" style="padding-bottom: 10px; font-size:20px;">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <i class="fa fa-folder fa-2x" aria-hidden="true"></i>
                                        &nbsp;&nbsp;{{$rowss->folders}}
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <a data-placement="left"
                                            href="{{url('admin/addcontent')}}/{{$list[0]->id}}?fid={{$rowss->id}}"
                                            role="button" class="btn btn-default btn-xs" data-toggle="tooltip" title=""
                                            data-original-title="Edit Folder"><i class="fa fa-edit"></i></a>
                                        <a data-placement="left" href="http://localhost/easyway/admin/addcontent/57"
                                            role="button" class="btn btn-default btn-xs" data-toggle="tooltip" title=""
                                            data-original-title="View Videos"><i class="fa fa-eye"></i></a>
                                        <a data-placement="left"
                                            href="{{url('admin/addcontent')}}/{{$list[0]->id}}?delfolder={{$rowss->id}}"
                                            role="button" class="btn btn-default btn-xs" data-toggle="tooltip" title=""
                                            data-original-title="Delete Folder"><i class="fa fa-trash"></i></a>

                                    </div>



                                </div>


                                @endforeach
                                <br />
                                <div id="refresh_video">
                                @foreach($videos as $video)
                                <div class="row">
                                    <div class="col-md-2 text-left">
                                        <iframe width="100%" height="100"
                                            src="https://www.youtube.com/embed/<?= $video->video_id ?>?modestbranding=1&autoplay=1&mute=0&rel=1&showinfo=0&loop=1&controls=1"
                                            rel="0" frameborder="0"" title=" YouTube video player">
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
                                        <a data-placement="left" href="javascript:void()" data-id="{{$video->id}}" data-status="{{$video->status}}"  class="btn btn-default btn-xs update_video_status"
                                            data-toggle="tooltip" title="Unlock">
                                            @if($video->status=='0')
                                            <i class="fa fa-unlock"></i>
                                            @else
                                            <i class="fa fa-lock"></i>
                                            @endif
                                        </a>
                                        <a data-placement="left" href="{{url('admin/addcontent')}}/{{$list[0]->id}}?videoid={{$video->id}}" class="btn btn-default btn-xs"
                                            data-toggle="tooltip" title="Edit" target="_blank">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a data-placement="left" href="javascript:void();" data-id="{{$video->id}}" class="btn btn-default btn-xs delete_video"
                                            data-toggle="tooltip" title="Delete"
                                            onclick="return confirm('Delete Confirm?');">
                                            <i class="fa fa-remove"></i>
                                        </a>

                                    </div>
                                </div>
                                @endforeach
                                </div>

<div id="refresh_doc">
                                @foreach($document as $documents)
                                <div class="row">
                                    <div class="col-md-2 text-left">
                                        <a href="{{asset('').$documents->document}}" download><i
                                                class="fa fa-download fa-4x"></i></a>

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
                                        <a data-placement="left" href="javascript:void()" data-id="{{$documents->id}}" data-status="{{$documents->status}}"  class="btn btn-default btn-xs update_doc_status"
                                            data-toggle="tooltip" title="Unlock">
                                            @if($documents->status=='0')
                                            <i class="fa fa-unlock"></i>
                                            @else
                                            <i class="fa fa-lock"></i>
                                            @endif
                                        </a>
                                        <a data-placement="left" href="{{url('admin/addcontent')}}/{{$list[0]->id}}?docid={{$documents->id}}" class="btn btn-default btn-xs"
                                            data-toggle="tooltip" title="Edit" target="_blank">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a data-placement="left" href="javascript:void();" data-id="{{$documents->id}}" class="btn btn-default btn-xs delete_doc"
                                            data-toggle="tooltip" title="Delete"
                                            onclick="return confirm('Delete Confirm?');">
                                            <i class="fa fa-remove"></i>
                                        </a>

                                    </div>
                                </div>
                                @endforeach
                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="col-lg-1 col-md-6 col-sm-12">

                        <!-- general form elements -->

                    </div>
                </div>
        </div>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <script>
    $(document).ready(function() {
        $(document).on('click', '.update_doc_status', function(e) {
            let id=$(this).attr("data-id");
            let status=$(this).attr("data-status");
            $.ajax({
                url: "{{url('ajax/update_doc_status')}}",
                type: "GET",
                data: {
                    id: id,
                    status:status
                   
                },
                dataType: 'html',
                success: function(res) {
                    $('#refresh_doc').load(document.URL +  ' #refresh_doc');
                }
            });
        });

        //delete document
        $(document).on('click', '.delete_doc', function(e) {
            let id=$(this).attr("data-id");
            let status="delete";
            $.ajax({
                url: "{{url('ajax/update_doc_status')}}",
                type: "GET",
                data: {
                    id: id,
                    status:status
                   
                },
                dataType: 'html',
                success: function(res) {
                    $('#refresh_doc').load(document.URL +  ' #refresh_doc');
                }
            });
        });
//videos 

$(document).on('click', '.update_video_status', function(e) {
            let id=$(this).attr("data-id");
            let status=$(this).attr("data-status");
            $.ajax({
                url: "{{url('ajax/update_video_status')}}",
                type: "GET",
                data: {
                    id: id,
                    status:status
                   
                },
                dataType: 'html',
                success: function(res) {
                    $('#refresh_video').load(document.URL +  ' #refresh_video');
                }
            });
        });

        //delete document
        $(document).on('click', '.delete_video', function(e) {
            let id=$(this).attr("data-id");
            let status="delete";
            $.ajax({
                url: "{{url('ajax/update_video_status')}}",
                type: "GET",
                data: {
                    id: id,
                    status:status
                   
                },
                dataType: 'html',
                success: function(res) {
                    $('#refresh_video').load(document.URL +  ' #refresh_video');
                }
            });
        });
    });
    </script>

    @include('admin.include.footer');