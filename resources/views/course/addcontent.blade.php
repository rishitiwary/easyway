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
                    <div class="col-lg-4 col-md-6 col-sm-12 uploadsticky">
                        <div class="box box-primary">
                            <div class="box-body text-center">

                                <label for="exampleInputFile">Contents</label>
                                <br>
                                <?php if ($folder[0]->id == '') {
                                    echo "<h3>       You haven't uploaded any content yet.
                                        Select the content from the right panel to start adding here</h3>";
                                } ?>
                                @foreach($folder as $rowss)
                                <div class="row text-left" style="padding-bottom: 10px; font-size:20px;">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <i class="fa fa-folder" aria-hidden="true"></i> {{$rowss->folders}}
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
                                <div>
                                </div>
                            </div>

                        </div>





                    </div>

                    <div class="col-lg-8 col-md-6 col-sm-12">
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
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header ptbnull">
                                <h3 class="box-title titlefix"><i class="fa fa-gear"></i> Create Folder For
                                    <strong>{{$list[0]->title}}</strong></h3>
                                <div class="box-tools pull-right">

                                </div><!-- /.box-tools -->
                            </div><!-- /.box-header -->
                            <div class="">

                                <div class="box-body">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <form role="form" id="schsetting_form"
                                                action="{{url('admin/createfolder')}}" class="" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2">Folder<small class="req"> *</small></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="folder"
                                                            value="{{$ress->folders}}" name="folder"> <span
                                                            class="text-danger"></span>
                                                        <input type="hidden" name="folderid" value="{{$ress->id}}">
                                                        <input type="hidden" name="id" id="course_id"
                                                            value="{{$list[0]->id}}">
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <button type="submit"
                                                        class="btn btn-primary submit_schsetting pull-right edit_setting"
                                                        data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">
                                                        Save</button>
                                                </div>
                                            </form>
                                        </div>


                                        <div class="col-md-6">
                                            <form role="form" id="schsetting_form" action="{{url('admin/addvideos')}}"
                                                class="" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2">Import<small class="req"> *</small></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="title" name="title"
                                                            value="<?= $res[0]->title ?>"> <span
                                                            class="text-danger"></span>
                                                        <input type="hidden" name="id" value="1">
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <button type="submit"
                                                        class="btn btn-primary submit_schsetting pull-right edit_setting"
                                                        data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">
                                                        Save</button>


                                                </div>
                                            </form>
                                        </div>

                                    </div>


                                    <!--./row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="settinghr"></div>
                                            <h4 class="session-head">Add Video</h4>

                                            <span id="message"></span>
                                        </div>
                                        <!--./col-md-12-->
                                        <form role="form" id="schsetting_form" action="#" class="" method="post"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-2">Folder<small class="req">
                                                            *</small></label>
                                                    <div class="col-sm-10">
                                                        <select type="text" name="folder_id" id="folder_id"
                                                            class="form-control" value="" required>
                                                            <option value="">Select Folder</option>
                                                            @foreach($folder as $row2)
                                                            <option value="{{$row2->id}}">{{$row2->folders}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-2">Video<small class="req">
                                                            *</small></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="video_id" id="video_id"
                                                            class="form-control" value=""
                                                            placeholder="Enter youtube id (Ex - J3Q-QQfUkOY)" required>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="box-footer">
                                                <button type="button"
                                                    class="btn btn-primary submit_schsetting pull-right add_video"
                                                    data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">
                                                    Save</button>


                                            </div>
                                        </form>


                                    </div>
                                    <!--./row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="settinghr"></div>
                                            <h4 class="session-head">Add Documents</h4>
                                        </div>
                                        <!--./col-md-12-->
                                        <form role="form" id="add_documents" action="{{url('admin/adddocument')}}"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="course_id" value="{{$list[0]->id}}">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-2">Folder<small class="req">
                                                            *</small></label>
                                                    <div class="col-sm-10">
                                                        <select type="text" name="folder_id" id="folder_id"
                                                            class="form-control" value="" required>
                                                            <option value="">Select Folder</option>
                                                            @foreach($folder as $row2)
                                                            <option value="{{$row2->id}}">{{$row2->folders}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-2">Name<small class="req">
                                                            *</small></label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="doc_name" class="form-control"
                                                            value="" required>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-2">Doc.<small class="req"> *</small></label>
                                                    <div class="col-sm-10">
                                                        <input autofocus="" id="document" name="document[]" multiple placeholder=""
                                                            type="file" class="filestyle form-control" required /><span
                                                            class="text-danger"></span>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-2">Desc.<small class="req">
                                                            *</small></label>
                                                    <div class="col-sm-10">
                                                        <textarea type="text" name="description"
                                                            class="form-control"></textarea>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="box-footer">
                                                <button type="submit"
                                                    class="btn btn-primary submit_schsetting pull-right edit_setting"
                                                    data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">
                                                    Save</button>

                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </div>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <script>
    $(document).ready(function() {
        $(document).on('click', '.add_video', function(e) {
            let course_id = $('#course_id').val();
            let folder_id = $('#folder_id').val();
            let video_id = $('#video_id').val();
            if (video_id == '' && folder_id == '') {
                $('#message').html(`<div class="alert alert-warning" role="alert">
  Folder and video id is required.
</div>`);
            }
            $.ajax({
                url: "{{url('ajax/addvideo')}}",
                type: "GET",
                data: {
                    course_id: course_id,
                    folder_id: folder_id,
                    video_id: video_id
                },
                dataType: 'html',
                success: function(res) {
                    $('#video_id').val('');
                    $('#message').html(res);

                }
            });
        });

        //add documents

        // $("#add_documents").submit(function(e) {
        //     e.preventDefault();
        //     var url = "{{url('admin/adddocument')}}";

        //     $.ajax({
        //         type: "POST",
        //         url: url,

        //         data: $('#add_documents').serialize(),
        //         enctype: 'multipart/form-data',
        //         beforeSend: function() {


        //         },
        //         success: function(data) {
        //             if (data == 1) {

        //             } else {

        //             }

        //         },
        //         error: function(xhr) { // if error occured


        //         },
        //         complete: function() {

        //         },
        //     });


        // });


    });
    </script>

    @include('admin.include.footer');