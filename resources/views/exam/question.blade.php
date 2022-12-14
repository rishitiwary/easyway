@include('admin.include.head');

<body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="wrapper">
        @include('admin.include.header');
        @include('admin.include.sidebar');

        <style>
            .w-5 {
                display: none;
            }

            .dataTables_paginate {
                display: none;
            }
        </style>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <i class="fa fa-empire"></i> Front CMS</h1>
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
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <form method="post" action="{{url('exam/bulkdelete')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="box box-primary" id="holist">
                                <div class="box-header ptbnull">
                                    <h3 class="box-title titlefix">Question Bank</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-trash"></i> Bulk Delete</button>
                                        <a href="javascript:void()" class="btn btn-sm btn-primary import-question" data-toggle="modal" data-target="#myQuesImportModal"><i class="fa fa-plus"></i> Import</a>
                                        <a href="{{url('exam/addquestion')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Question</a>

                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="download_label">Question Bank</div>
                                    <div class="mailbox-controls">
                                        <div class="pull-right">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <input type="text" name="search" value="" id="search" class="form-control" placeholder="Search question by title">

                                            </div>
                                            <div class="col-lg-6">
                                                <span class="btn btn-primary" id="search_btn">
                                                    Search
                                                </span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mailbox-messages" id="tag_container">


                                    </div><!-- /.mail-box-messages -->


                                </div>
                        </form>

                    </div>
                    <!--/.col (left) -->

                </div>
                <div id="myQuesImportModal" class="modal fade" role="dialog">

                    <div class="modal-dialog">

                        <!-- Modal content-->

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                <a class="btn btn-primary pull-right btn-xs mt5" href="{{asset('public/uploads/documents/questionformat.csv')}}" download/><i class="fa fa-download"></i> </a>

                                <h4 class="modal-title"> Import Question</h4>

                            </div>

                            <form action="{{url('exam/addquestion')}}" method="POST" id="formimportquestion" enctype="multipart/form-data">
                <input type="hidden" name="fileupload" value="fileupload">
                            @csrf
                                <div class="modal-body add_question_import_body">


                                    <div class="form-group ">

                                        <label for="tradegroup">Trade Group</label><small class="req">*</small>

                                        <select class="form-control" name="tradegroup" id="tradegroup">

                                            <option value="">Select</option>

                                            @foreach($tradegroup as $run)
                                            <option value="{{$run->id}}"> {{$run->name}}</option>
                                            @endforeach



                                        </select>

                                        <span class="text text-danger subject_id_error"></span>

                                    </div>

                                    <div class="form-group ">

                                        <label for="trade">Trade</label><small class="req"> *</small>



                                        <select class="form-control" name="trade" id="trade">

                                            <option value="">Select</option>

                                        </select>

                                        <span class="text text-danger class_id_error"></span>

                                    </div>



                                    <div class="form-group ">

                                        <label for="subject">Subject</label>

                                        <select id="subject" name="subject" class="form-control">

                                            <option value="">Select</option>

                                        </select>

                                        <span class="text-danger"></span>

                                    </div>

                                    <div class="form-group ">

                                        <label for="chapter">Chapter</label><small class="req"> *</small>



                                        <select class="form-control" name="chapter" id="chapter">

                                            <option value="">Select</option>

                                        </select>

                                        <span class="text text-danger subject_id_error"></span>

                                    </div>

                                    <div class="form-group ">

                                        <label for="topic">Topic</label><small class="req"> *</small>



                                        <select class="form-control" name="topic" id="topic">

                                            <option value="">Select</option>

                                        </select>

                                        <span class="text text-danger subject_id_error"></span>

                                    </div>
                                    <div class="form-group">

                                        <label for="exampleInputEmail1"> Attach File</label>

                                        <input id="my-file-selector" name="file" placeholder="" type="file" class="filestyle form-control" value="" />

                                        <span class="text-danger"></span>

                                    </div>

                                </div>

                                <div class="modal-footer">

                                    <button type="submit" class="btn btn-primary" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Saving...">Upload</button>

                                </div>

                        </div>

                        </form>

                    </div>

                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <script>
            $(document).ready(function() {
                $('#tradegroup').change(function() {
                    let groupid = $(this).val();
                    $.ajax({
                        url: '{{url("ajax/trade")}}',
                        type: "GET",
                        data: {
                            'groupid': groupid,

                        },

                        success: function(data) {
                            $('#trade').empty();
                            $('#trade').append(data);

                        },

                    });
                });

                $('#trade').change(function() {
                    let groupid = $('#tradegroup').val();

                    let tradeid = $(this).val();
                    $.ajax({
                        url: '{{url("ajax/subject")}}',
                        type: "GET",
                        data: {
                            'groupid': groupid,
                            'tradeid': tradeid

                        },
                        success: function(data) {
                            $('#subject').empty();
                            $('#subject').append(data);

                        }
                    });
                });

                $('#subject').change(function() {
                    let groupid = $('#tradegroup').val();
                    let tradeid = $('#trade').val();
                    let subjectid = $(this).val();
                    $.ajax({
                        url: '{{url("ajax/chapter")}}',
                        type: "GET",
                        data: {
                            'groupid': groupid,
                            'tradeid': tradeid,
                            'subjectid': subjectid,

                        },

                        success: function(data) {
                            $('#chapter').empty();
                            $('#chapter').append(data);

                        }

                    });
                });
                $('#chapter').change(function() {
                    let chapterid = $(this).val();
                    let groupid = $('#tradegroup').val();
                    let tradeid = $('#trade').val();
                    let subjectid = $('#subject').val();
                    $.ajax({
                        url: '{{url("ajax/topic")}}',
                        type: "GET",
                        data: {
                            'chapterid': chapterid,
                            'groupid': groupid,
                            'tradeid': tradeid,
                            'subjectid': subjectid,

                        },

                        success: function(data) {
                            $('#topic').empty();
                            $('#topic').append(data);

                        }

                    });
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                var page = 1;
                fetch_data(page);
                $('#search_btn').click(function() {

                    let keywords = $('#search').val();
                    $.ajax({
                        url: "{{url('admin/question')}}?keywords=" + keywords,
                        success: function(data) {
                            $('#tag_container').empty().html(data);
                            location.hash = page;
                        }
                    });

                });
            });
            $(window).on('hashchange', function() {
                if (window.location.hash) {
                    var page = window.location.hash.replace('#', '');
                    if (page == Number.NaN || page <= 0) {
                        return false;
                    } else {
                        fetch_data(page);
                    }
                }
            });

            $(document).on('click', '.pagination a', function(event) {

                event.preventDefault();

                $('li').removeClass('active');
                $(this).parent('li').addClass('active');

                var url = $(this).attr('href');
                var page = $(this).attr('href').split('page=')[1];

                fetch_data(page);
            });

            function fetch_data(page) {

                $.ajax({
                    url: "{{url('admin/question')}}?page=" + page,
                    success: function(data) {
                        $('#tag_container').empty().html(data);
                        location.hash = page;
                    }
                });
            }
            $(document).on('click', '#mastercheck', function() {

                if ($(this).prop("checked")) {

                    $(".checkboxids").prop("checked", true);

                } else {

                    $(".checkboxids").prop("checked", false);

                }

            });
        </script>
        @include('admin.include.footer');