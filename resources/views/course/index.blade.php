@include('admin.include.head')
<body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="wrapper">
        @include('admin.include.header')
        @include('admin.include.sidebar')
        <link rel="stylesheet" type="text/css" href="{{asset('public/backend/dist/css/course_addon.css')}}">
        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header with-border pb0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-3 col-sm-4">
                                        <h3 class="box-title header_tab_style">Course List</h3>
                                    </div>
                                    <div class="col-lg-8 col-md-9 col-sm-8">
                                        <div class="nav-tabs-custom mb0 pull-right">
                                            <a type="button" class="btn btn-sm btn-primary miusttop5"
                                                href="{{url('admin/addcourse')}}"><i
                                                    class="fa fa-plus"></i> Create Course</a>

                                        </div>
                                        <!--./nav-tabs-custom -->
                                        <form class="navbar-form pull-right miusttop5" id="search_area" role="search"
                                            action="{{url('admin/course')}}" method="GET">
                                            <input type='hidden' name='ci_csrf_token' value='' />
                                            <div class="input-group">
                                                <input type="text" value="" name="search_course" id="search_course"
                                                    class="form-control search-form"
                                                    placeholder="Search By Course Name">

                                                <span class="input-group-btn">
                                                    <button type="submit" name="search" id="search-btn" style=""
                                                        class="btn btn-flat topsidesearchbtn"><i
                                                            class="fa fa-search"></i></button>

                                                </span>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>

                            <div id="course_detail_tab" class="tabcontent">
                                <section class="content">
                               
                           
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tab-pane active table-responsive no-padding">
                                            <div class="download_label">Approve Leave Request</div>
                                            <table class="table table-striped table-bordered table-hover example">
                                                <thead>

                                                    <th>Id</th>
                                                    <th>Title</th>
                                                    <th>Trade Group</th>
                                                    <th>Trade</th>
                                                    <th>Validity(In Month)</th>
                                                    <th>Expiry</th>
                                                    <th>Type</th>
                                                    <th>Status</th>
                                                   
                                                    <th class="text-right no-print">Action</th>

                                                </thead>
                                                <tbody>
                                                    @foreach($data as $row)
                                                    <tr>

                                                        <td><?= $row->id ?></span>

                                                        </td>
                                                        <td><?= $row->title ?> </td>
                                                        <td><?php $res=DB::select('select name from tradegroup where id='.$row->tradegroup_id);
                                                        echo $res[0]->name;
                                                        ?></td>

                                                        <td><?php $res=DB::select('select name from trade where id='.$row->trade_id); 
                                                        echo $res[0]->name;
                                                        ?></td>
                                                        <td><?= $row->validity ?></td>
                                                        <td><?= date('d/m/Y',strtotime($row->expiry)); ?></td>
                                                        <td><?= $row->free_course?'Free':'Paid' ?></td>
                                                   
                                                        <td><small class='label label-<?php if($row->status=='1'){echo 'success';}else{echo 'warning';} ?>'><?= $row->status?'Published':'Unpublished' ?></small></span>


                                                        </td>
                                                        <td class="pull-right no-print">
                                                        <a data-placement="left" href="{{url('admin/addcontent')}}/{{$row->id}}"  role="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Add Content"><i class="fa fa-plus"></i></a>

                                                            <a data-placement="left" href="#leavedetails" onclick="getRecord('<?= $row->id ?>','<?=$row->applied_by?>','<?= $row->leave_type ?>','<?= $row->leave_days ?>','<?= $row->applieddate ?>','<?= $row->status ?>','<?= $row->employee_remark ?>','<?= $row->admin_remark ?>')" role="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="View"><i class="fa fa-reorder"></i></a>

                                                            <a href="{{url('admin/staff/leaverequest?delid=')}}<?= $row->id ?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete"><i class="fa fa-remove"></i></a>
                                                        </td>

                                                    </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        <!--./col-lg-3-->
                                     
                                                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        



    
        <!--#/coursedetailmodal-->

        <script>
        (function($) {

            "use strict";

            $('.miusttop5').click(function() {
                CKEDITOR.replace('editor1', {
                    allowedContent: true
                });

            });
        })(jQuery);
        </script>

        <script>
        (function($) {
            'use strict';
            $(document).ready(function() {
                emptyDatatable('course-list', 'data');
            });

        }(jQuery));
        </script>
        <script>
        (function($) {
            'use strict';
            $(document).ready(function() {
                $('.examlist').DataTable();
                initDatatable('course-list', 'onlinecourse/course/getcourselist', [], [], 100);
            });
        }(jQuery));
        </script>
        <script>
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
        </script>
        <script>
        function clear_question() {
            var total_question = $('#total_question').html();
            for (i = 1; i <= total_question; i++) {
                $('#rowID' + i).remove();
                $('.options' + i).remove();
                var new_count = $('#question_count').val();
                var count = 1;
                var new_count = new_count - count;
                $('#question_count').val(new_count);
                var total_question = total_question - count;
                $('#total_question').html(total_question);
            }
        }


        function getcontent(type) {
            if (type == 'video') {
                $("#video_detail").show();
                $("#attachment").hide();
            } else {
                $("#video_detail").hide();
                $("#attachment").show();
            }
        }


        function geteditcontent(type) {

            if (type == 'video') {
                $("#editvideo_detail").show();
                $("#editattachment").hide();
            } else {
                $("#editvideo_detail").hide();
                $("#editattachment").show();
            }
        }


        function add_outcomerow() {
            var table = document.getElementById("outcometableID");
            var table_len = (table.rows.length);
            var id = parseInt(table_len + 1);
            var div =
                "<td><div class='form-group'><input type='text' name='outcomes[]' class='form-control'></div></td>";
            var row = table.insertRow(table_len).outerHTML = "<tr id='outcomerow" + id + "'>" + div +
                "<td valign='top'><button type='button' onclick='delete_outcomerow(" + id +
                ")' class='addclose'><i class='fa fa-remove'></i></button></td></tr>";

        }

        function delete_outcomerow(id) {
            var table = document.getElementById("outcometableID");
            var rowCount = table.rows.length;
            $("#outcomerow" + id).remove();
        }

        function openCourse(evt, courseName) {

            if (courseName == 'course_card_tab') {
                $('#search_area').addClass('hide');
            } else {
                $('#search_area').removeClass('hide');
            }

            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(courseName).style.display = "block";
            evt.currentTarget.className += " active";

        }

        (function($) {
            "use strict";

            $('.course_preview_id').click(function() {
                var courseID = $(this).attr('data-id');
                $('#course_preview').html('');
                $.ajax({
                    url: "https://easywayglobal.in/onlinecourse/course/coursepreview",
                    type: 'post',
                    data: {
                        courseID: courseID
                    },
                    beforeSend: function() {
                        $('#course_preview').html(
                            'Loading...  <i class="fa fa-spinner fa-spin"></i>');
                    },

                    success: function(response) {
                        $('#course_preview').html(response);
                    }
                });
            })

            $(document).ready(function() {
                $('#course_detail_tab').show();
            });

            $('#add_course_btn').click(function() {

                var formData = new FormData($('#add_course_form_ID')[0]);
                formData.append('description', CKEDITOR.instances['editor1'].getData());
                $.ajax({
                    url: 'https://easywayglobal.in/onlinecourse/course/create',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $('#loader_btn').html('<i class="fa fa-spinner fa-spin"></i>');
                    },

                    success: function(data) {
                        var result = JSON.parse(data);
                        if (result.status == "fail") {
                            var message = "";
                            $.each(result.error, function(index, value) {
                                message += value;
                            });
                            errorMsg(message);

                        } else {

                            successMsg(result.message);
                            $('#add_course_modal').modal('hide');
                            $('#course_detail_modal').modal('show');
                            $('#add_course_form_ID')[0].reset();
                            CKEDITOR.instances.editor1.setData('');
                            $(".dropify-clear").trigger("click");
                            loadcoursedetail(result.course_id);

                        }
                    },

                    error: function(xhr) { // if error occured
                        $('#loader_btn').html('');
                    },

                    complete: function() {
                        $('#loader_btn').html('');
                    }
                });
            });
        })(jQuery);

        function loadcoursedetail(courseID) {
            $('#course_detail').html('');
            $.ajax({
                url: "https://easywayglobal.in/onlinecourse/course/coursedetail",
                type: 'post',
                data: {
                    courseID: courseID
                },
                beforeSend: function() {
                    $('#course_detail').html('Loading...  <i class="fa fa-spinner fa-spin"></i>');
                },

                success: function(response) {
                    $('#course_detail').html(response);
                }
            });
        }

        function publish_unpublish(courseID, status, title) {
            if (status == 1) {
                var confirmationBox = confirm("Are you sure to publish course?");
            } else if (status == 0) {
                var confirmationBox = confirm("Are you sure to unpublish course?");
            }

            if (confirmationBox == true) {
                $.ajax({
                    url: "https://easywayglobal.in/onlinecourse/course/publish_unpublish",
                    type: 'post',
                    data: {
                        courseID: courseID,
                        status: status,
                        title: title
                    },

                    success: function(response) {

                        successMsg('Record Update Successfully');
                        loadcoursedetail(courseID);
                    }
                });
            }
        }


        (function($) {
            "use strict";
            $('.course_detail_id').click(function() {
                var courseID = $(this).attr('data-id');
                $.ajax({
                    url: "https://easywayglobal.in/onlinecourse/course/coursedetail",
                    type: 'post',
                    data: {
                        courseID: courseID
                    },
                    beforeSend: function() {
                        $('#course_detail').html(
                            'Loading...  <i class="fa fa-spinner fa-spin"></i>');
                    },

                    success: function(response) {
                        $('#course_detail').html(response);
                    }
                });
            });
        })(jQuery);
        </script>

        <script type="text/javascript">
        (function($) {
            "use strict";
            $(".sidebar-closebtn").on('click', function() {
                $(".fa-angle-right").toggleClass("rotate");
            });

            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $(".wrapper-modal").toggleClass("toggled");
            });
        })(jQuery);
        </script>
        <script>
        (function($) {
            "use strict";

            $("#class_id").change(function() {
                $('.class-list').select2();
                $('.section-list').select2();
                var class_id = $('#class_id').val();
                var base_url = 'https://easywayglobal.in/';
                $('#section_id').html('');
                var div_data = '<option value="">Select</option>';
                $.ajax({
                    url: base_url + "sections/getByClass",
                    type: "GET",
                    data: {
                        'class_id': class_id
                    },
                    dataType: "json",

                    success: function(data) {

                        $.each(data, function(i, obj)

                            {
                                $('#section_id').append("<option value=" + obj.id + ">" +
                                    obj.section + "</option>");

                            });

                    },

                });
            });

        })(jQuery);

        function saveSection() {
            var courseid = $('#courseid').val();
            $.ajax({
                url: 'https://easywayglobal.in/onlinecourse/coursesection/addsection/',
                type: 'POST',
                dataType: 'json',
                data: $("#formadd").serialize(),
                beforeSend: function() {
                    $('#section_loader').html('<i class="fa fa-spinner fa-spin"></i>');
                },

                success: function(data) {
                    if (data.status == "fail") {
                        var message = "";

                        $.each(data.error, function(index, value) {
                            message += value;
                        });
                        errorMsg(message);
                    } else {
                        successMsg(data.message);
                        $("#add_section_modal").modal('hide');
                        coursedetail(courseid);
                    }

                },

                error: function(xhr) { // if error occured
                    $('#section_loader').html('');
                },

                complete: function() {
                    $('#section_loader').html('');
                }
            });
        }

        function saveExam() {
            var courseid = $('#courseexamid').val();
            $.ajax({
                url: 'https://easywayglobal.in/onlinecourse/coursesection/addexam/',
                type: 'POST',
                dataType: 'json',
                data: $("#examadd").serialize(),
                beforeSend: function() {
                    $('#exam_section_loader').html('<i class="fa fa-spinner fa-spin"></i>');
                },

                success: function(data) {
                    if (data.status == "fail") {
                        var message = "";

                        $.each(data.error, function(index, value) {
                            message += value;
                        });
                        errorMsg(message);
                    } else {
                        successMsg(data.message);
                        $("#add_exam_modal").modal('hide');
                        $('#exam_section_loader').html('');
                        //coursedetail(courseid);
                    }

                },

                error: function(xhr) { // if error occured
                    $('#section_loader').html('');
                },

                complete: function() {
                    $('#section_loader').html('');
                }
            });
        }

        function coursedetail(courseid) {
            $('#course_detail').html('');
            $.ajax({
                url: "https://easywayglobal.in/onlinecourse/course/coursedetail",
                type: 'post',
                data: {
                    courseID: courseid
                },
                success: function(response) {
                    $('#course_detail').html(response);
                }
            });
        }

        (function($) {
            "use strict";
            $('#edit_section_btn').click(function() {
                var formData = new FormData($('#edit_section_form')[0]);
                var courseid = $('#courseid').val();
                $.ajax({
                    url: 'https://easywayglobal.in/onlinecourse/coursesection/editsection',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {

                        $('#section_loaders').html('<i class="fa fa-spinner fa-spin"></i>');

                    },

                    success: function(data) {
                        var result = JSON.parse(data);
                        if (result.status == "fail") {
                            var message = "";
                            $.each(result.error, function(index, value) {
                                message += value;
                            });
                            errorMsg(message);
                        } else {
                            successMsg(result.message);
                            $("#edit_section_modal").modal('hide');
                            coursedetail(courseid);
                        }
                    },

                    error: function(xhr) { // if error occured
                        $('#section_loaders').html('');

                    },
                    complete: function() {
                        $('#section_loaders').html('');
                    }
                });

            });


            $('#add_quiz_btn').click(function() {
                var formData = new FormData($('#add_quiz_form')[0]);
                var courseid = $('#courseid').val();
                $.ajax({

                    url: 'https://easywayglobal.in/onlinecourse/coursequiz/add',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#quiz_loader').html('<i class="fa fa-spinner fa-spin"></i>');
                    },

                    success: function(data) {
                        var result = JSON.parse(data);
                        if (result.status == "fail") {
                            var message = "";
                            $.each(result.error, function(index, value) {
                                message += value;
                            });

                            errorMsg(message);
                        } else {

                            successMsg(result.message);
                            $("#add_quiz_modal").modal('hide');
                            coursedetail(courseid);
                        }
                    },

                    error: function(xhr) { // if error occured
                        $('#quiz_loader').html('');
                    },

                    complete: function() {
                        $('#quiz_loader').html('');
                    }
                });
            });


            $('#edit_quiz_btn').click(function() {
                var formData = new FormData($('#edit_quiz_form')[0]);
                var courseid = $('#courseid').val();
                $.ajax({
                    url: 'https://easywayglobal.in/onlinecourse/coursequiz/edit',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#quiz_loaders').html('<i class="fa fa-spinner fa-spin"></i>');
                    },

                    success: function(data) {
                        var result = JSON.parse(data);
                        if (result.status == "fail") {
                            var message = "";
                            $.each(result.error, function(index, value) {
                                message += value;
                            });
                            errorMsg(message);
                        } else {
                            successMsg(result.message);
                            $("#edit_quiz_modal").modal('hide');
                            coursedetail(courseid);
                        }
                    },

                    error: function(xhr) { // if error occured
                        $('#quiz_loaders').html('');
                    },

                    complete: function() {
                        $('#quiz_loaders').html('');
                    }
                });
            });


            $("#save_lesson").click(function() {
                var courseid = $('#courseid').val();
                var formData = new FormData($('#add_lesson_form')[0]);
                var files = $('#thumbnail')[0].files;
                $.ajax({
                    url: 'https://easywayglobal.in/onlinecourse/courselesson/addlesson',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#lesson_loader').html('<i class="fa fa-spinner fa-spin"></i>');
                    },

                    success: function(data) {
                        var result = JSON.parse(data);
                        if (result.status == "fail") {
                            var message = "";
                            $.each(result.error, function(index, value) {
                                message += value;
                            });
                            errorMsg(message);
                        } else {
                            successMsg(result.message);
                            $('#title').val("");
                            //$("#add_lesson_modal").modal('hide');
                            //coursedetail(courseid);
                        }
                    },

                    error: function(xhr) { // if error occured
                        $('#lesson_loader').html('');
                        $('#thumbnail_error').html("Please select image.");
                    },

                    complete: function() {
                        $('#lesson_loader').html('');
                    }
                });
            });

            $("#edit_lesson_btn").click(function() {
                var courseid = $('#courseid').val();
                var formData = new FormData($('#edit_lesson_form')[0]);
                var files = $('#editlesson_thumbnail')[0].files;
                $.ajax({
                    url: 'https://easywayglobal.in/onlinecourse/courselesson/editlesson',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#lesson_loaders').html('<i class="fa fa-spinner fa-spin"></i>');

                    },

                    success: function(data) {
                        var result = JSON.parse(data);
                        if (result.status == "fail") {
                            var message = "";
                            $.each(result.error, function(index, value) {
                                message += value;
                            });

                            errorMsg(message);

                        } else {
                            successMsg(result.message);
                            $("#edit_lesson_modal").modal('hide');
                            coursedetail(courseid);
                        }

                    },

                    error: function(xhr) { // if error occured
                        $('#lesson_loaders').html('');
                        $('#lesson_thumbnail_error').html("Please select image.");
                    },

                    complete: function() {
                        $('#lesson_loaders').html('');
                    }
                });
            });

            $('#add_new_question_btn').click(function() {
                var courseid = $('#courseid').val();
                var formData = new FormData($('#add_new_question_form_ID')[0]);

                $.ajax({
                    url: 'https://easywayglobal.in/onlinecourse/coursequiz/addnewquestion',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {

                        $('#question_loader').html('<i class="fa fa-spinner fa-spin"></i>');

                    },

                    success: function(data) {
                        var result = JSON.parse(data);
                        if (result.status == "fail") {

                            var message = "";
                            $.each(result.error, function(index, value) {

                                errorMsg(value);

                            });
                        } else {
                            successMsg(result.message);
                            $('#add_new_question_form_ID')[0].reset();
                            $('#question_modal').modal('hide');
                            window.location.reload(true);
                        }
                    },

                    error: function(xhr) { // if error occured
                        $('#question_loader').html('');
                    },

                    complete: function() {
                        $('#question_loader').html('');
                    }
                });
            });

            $('#edit_new_question_btn').click(function() {
                var courseid = $('#courseid').val();
                var formData = new FormData($('#edit_question_form')[0]);
                $.ajax({
                    url: 'https://easywayglobal.in/onlinecourse/coursequiz/editnewquestion',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#question_loaders').html('<i class="fa fa-spinner fa-spin"></i>');

                    },
                    success: function(data) {
                        var result = JSON.parse(data);
                        if (result.status == "fail") {
                            var message = "";
                            $.each(result.error, function(index, value) {
                                errorMsg(value);

                            });

                        } else {
                            successMsg(result.message);

                            window.location.reload(true);

                        }
                    },

                    error: function(xhr) { // if error occured
                        $('#question_loaders').html('');
                    },

                    complete: function() {
                        $('#question_loaders').html('');
                    }
                });
            });

            $('.close_btn').click(function() {
                var courseid = $('#courseid').val();
                $('#order_section_modal').modal('hide');
                coursedetail(courseid);
            });
        })(jQuery);
        </script>
        <script>
        (function($) {
            "use strict";
            $(document).ready(function() {

                $(".add-row").click(function() {
                    var i = $('#question_count').val();
                    i++;
                    $('#question_count').val(i);
                    var totalquestion = 1 + i;
                    $('#total_question').html(totalquestion);
                    var markup = "<tr id='rowID" + i +
                        "'><td width='75' class='border0 pl0'>Question <small class='req'> *</small></td><td class='pr0 border0 relative'><input type='text' name='question_" +
                        i +
                        "' class='form-control pull-left'><button type='button' data-toggle='tooltip' data-placement='left' data-original-title='Delete Question' data-id='" +
                        i +
                        "' class='delete-row addclose quizplusright'><i class='fa fa-remove'></i></button></td></tr><tr class='options" +
                        i +
                        "'><td colspan='2' class='pr0 border0 quizopationpad-left'><table width='100%' align='right'><tr><td width='30'>A <small class='req'> *</small></td><td><div class='input-group input-group-full-width'><input type='text' name='question_" +
                        i +
                        "_options_0' class='form-control'><span class='input-group-addon input-group-addon-bg'><input type='checkbox' title='Check For Correct Option' value='option_1' name='question_" +
                        i + "_result_" + i +
                        "[]'></span></div></td></tr><tr><td>B <small class='req'> *</small></td><td><div class='input-group input-group-full-width'><input type='text' name='question_" +
                        i +
                        "_options_1' class='form-control'><span class='input-group-addon input-group-addon-bg'><input type='checkbox'  title='Check For Correct Option' value='option_2' name='question_" +
                        i + "_result_" + i +
                        "[]'></span></div></td></tr><tr><td>C</td><td><div class='input-group input-group-full-width'><input type='text' name='question_" +
                        i +
                        "_options_2' class='form-control'><span class='input-group-addon input-group-addon-bg'><input type='checkbox'  title='Check For Correct Option' value='option_3' name='question_" +
                        i + "_result_" + i +
                        "[]'></span></div></td></tr><tr><td>D</td><td><div class='input-group input-group-full-width'><input type='text' name='question_" +
                        i +
                        "_options_3' class='form-control'><span class='input-group-addon input-group-addon-bg'><input type='checkbox'  title='Check For Correct Option' value='option_4' name='question_" +
                        i + "_result_" + i +
                        "[]'></span></div></td></tr><tr><td>E</td><td><div class='input-group input-group-full-width'><input type='text' name='question_" +
                        i +
                        "_options_4' class='form-control'><span class='input-group-addon input-group-addon-bg'><input type='checkbox'  title='Check For Correct Option' value='option_5' name='question_" +
                        i + "_result_" + i + "[]'></span></div></td></tr></table></td></tr></tr>";

                    $("#table_id").append(markup);
                });


                $(document).on('click', '.delete-row', (function() {
                    var removeQuestionID = $(this).attr('data-id');
                    $('#rowID' + removeQuestionID).remove();
                    $('.options' + removeQuestionID).remove();
                    var new_count = $('#question_count').val();
                    var count = 1;
                    var new_count = new_count - count;
                    $('#question_count').val(new_count);
                    var total_question = $('#total_question').html() - count;
                    $('#total_question').html(total_question);
                }));

                $(".edit-row").click(function() {
                    var i = $('#questioncount').val();
                    i++;

                    $('#questioncount').val(i);
                    $('#total_edit_question').html(i);
                    var markup = "<tr id='rowIDedit" + i +
                        "'><td width='75' class='border0 pl0'>Question <small class='req'> *</small></td><td class='pr0 border0 relative'><input type='text' name='question_" +
                        i +
                        "' class='form-control pull-left'><input type='hidden' name='question_id_" +
                        i +
                        "' value='0' class='form-control pull-left'><button type='button' data-toggle='tooltip' data-placement='left' data-original-title='Delete Question' data-id='" +
                        i +
                        "' class='delete-edit-row addclose quizplusright'><i class='fa fa-remove'></i></button></td></tr><tr class='optionsedit" +
                        i +
                        "'><td colspan='2' class='pr0 border0 quizopationpad-left'><table width='100%' align='right'><tr><td width='30'>A <small class='req'> *</small></td><td><div class='input-group input-group-full-width'><input type='text' name='question_" +
                        i +
                        "_option_0' class='form-control'><span class='input-group-addon input-group-addon-bg'><input type='checkbox'  title='Check For Correct Option' value='option_1' name='question_" +
                        i + "_result_" + i +
                        "[]'></span></div></td></tr><tr><td>B <small class='req'> *</small></td><td><div class='input-group input-group-full-width'><input type='text' name='question_" +
                        i +
                        "_option_1' class='form-control'><span class='input-group-addon input-group-addon-bg'><input type='checkbox'  title='Check For Correct Option' value='option_2' name='question_" +
                        i + "_result_" + i +
                        "[]'></span></div></td></tr><tr><td>C</td><td><div class='input-group input-group-full-width'><input type='text' name='question_" +
                        i +
                        "_option_2' class='form-control'><span class='input-group-addon input-group-addon-bg'><input type='checkbox'  title='Check For Correct Option' value='option_3' name='question_" +
                        i + "_result_" + i +
                        "[]'></span></div></td></tr><tr><td>D</td><td><div class='input-group input-group-full-width'><input type='text' name='question_" +
                        i +
                        "_option_3' class='form-control'><span class='input-group-addon input-group-addon-bg'><input type='checkbox'  title='Check For Correct Option' value='option_4' name='question_" +
                        i + "_result_" + i +
                        "[]'></span></div></td></tr><tr><td>E</td><td><div class='input-group input-group-full-width'><input type='text' name='question_" +
                        i +
                        "_option_4' class='form-control'><span class='input-group-addon input-group-addon-bg'><input type='checkbox'  title='Check For Correct Option' value='option_5' name='question_" +
                        i + "_result_" + i + "[]'></span></div></td></tr></table></td></tr><tr>";

                    $("#edit_table_id").append(markup);
                });


                $(document).on('click', '.delete-edit-row', (function() {
                    var removeQuestionID = $(this).attr('data-id');
                    var question_id = $('#question_id_' + removeQuestionID).val();
                    $('#rowIDedit' + removeQuestionID).remove();
                    $('.optionsedit' + removeQuestionID).remove();
                    var new_count = $('#questioncount').val();
                    var count = 1;

                    var new_count = new_count - count;
                    $('#questioncount').val(new_count);
                    var deleted = $('#deleted').val();

                    if (question_id != undefined) {
                        $('#deleted').val(deleted + ',' + question_id);
                    }
                    var total_edit_question = $('#total_edit_question').html() - count;
                    $('#total_edit_question').html(total_edit_question);
                }));
            });
        })(jQuery);

        function deloption(qid, optionid) {
            $("#options_rowID" + qid + "_" + optionid).remove();
        }

        (function($) {
            "use strict";
            $('#add_section_modal, #add_lesson_modal, #add_quiz_modal').on('hidden.bs.modal', function() {
                $(this).find('form').trigger('reset');
                $(".select2").select2().select2("val", '');

            })

            var dateNow = new Date();
            $('.timepicker').datetimepicker({
                format: 'HH:mm:ss',
                defaultDate: moment(dateNow).hours(0).minutes(0).seconds(0).milliseconds(0)

            });
        })(jQuery);
        </script>
        <script>
        checkCourseProvider();

        function checkCourseProvider() {
            course_provider = $("#course_provider").val();
            if (course_provider == "s3_bucket") {
                $("#course_url_div").addClass("hide");
                $("#s3_file_div").removeClass("hide");

            } else {
                $("#course_url_div").removeClass("hide");
                $("#s3_file_div").addClass("hide");
            }

        }

        checkLessonProvider();

        function checkLessonProvider() {
            course_provider = $("#lesson_provider").val();
            if (course_provider == "youtube") {
                $(".vid").show();
                $(".uvid").hide();
            } else {
                $(".vid").hide();
                $(".uvid").show();

            }
        }

        checkEditLessonProvider();

        function checkEditLessonProvider() {
            course_provider = $("#edit_lesson_provider").val();
            if (course_provider == "youtube") {
                $(".vid").show();
                $(".uvid").hide();
            } else {
                $(".vid").hide();
                $(".uvid").show();

            }
        }
        </script>
        <script>
        function stopvideo() {
            $('#course_preview').html('');
            $('#course_preview_modal').modal('hide');
        }
        </script>
        <script>
        function editcourse(courseid) {

            var formData = new FormData($('#edit_course_form_ID')[0]);
            formData.append('description', CKEDITOR.instances['editor2'].getData());

            $.ajax({
                url: 'https://easywayglobal.in/onlinecourse/course/updatecourse',
                type: 'post',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#loader_button').html('<i class="fa fa-spinner fa-spin"></i>');
                },
                success: function(data) {
                    var result = JSON.parse(data);
                    if (result.status == "fail") {
                        var message = "";
                        $.each(result.error, function(index, value) {
                            message += value;
                        });
                        errorMsg(message);
                    } else {
                        successMsg(result.message);
                        $('#edit_course_modal').modal('hide');
                        $('#edit_course').html('');
                        coursedetail(courseid);

                    }
                },
                error: function(xhr) { // if error occured
                    $('#loader_button').html('');
                },
                complete: function() {
                    $('#loader_button').html('');
                }
            });
        }
        </script>
        <script type="text/javascript">
        function gettrades() {
            var tradegroup = $('#tradegroup').val();
            if (tradegroup == "") {
                tradegroup = $('#edittradegroup').val();
            }
            $.ajax({
                url: "https://easywayglobal.in/admin/tutorial/topic/gettrades",
                type: "POST",
                data: {
                    tradegroup: tradegroup
                },
                dataType: 'html',
                success: function(res) {
                    $('#trade').html(res);
                    $('#edittrade').html(res);
                }
            });
        }

        function getsubject() {
            var trade = $('#trade').val();
            if (trade == "") {
                trade = $('#edittrade').val();
            }
            $.ajax({
                url: "https://easywayglobal.in/admin/tutorial/topic/getsubject",
                type: "POST",
                data: {
                    trade: trade
                },
                dataType: 'html',
                success: function(res) {
                    $('#subject').html(res);
                    $('#editsubject').html(res);
                }
            });
        }

        function getchapter() {
            var trade = $('#subject').val();
            if (trade == "") {
                trade = $('#editsubject').val();
            }
            $.ajax({
                url: "https://easywayglobal.in/admin/tutorial/topic/getchapter",
                type: "POST",
                data: {
                    trade: trade
                },
                dataType: 'html',
                success: function(res) {
                    $('#chapter').html(res);
                    $('#editchapter').html(res);
                }
            });
        }

        function gettopic() {
            var trade = $('#chapter').val();
            if (trade == "") {
                trade = $('#editchapter').val();
            }
            $.ajax({
                url: "https://easywayglobal.in/admin/tutorial/topic/gettopic",
                type: "POST",
                data: {
                    chapter: trade
                },
                dataType: 'html',
                success: function(res) {
                    $('#topic').html(res);
                    $('#edittopic').html(res);
                }
            });
        }

        function getmaterial() {
            var topic = $('#topic').val();
            if (topic == "") {
                topic = $('#edittopic').val();
            }
            $.ajax({
                url: "https://easywayglobal.in/admin/tutorial/topic/getmaterial",
                type: "POST",
                data: {
                    topic: topic
                },
                dataType: 'json',
                success: function(res) {
                    $('.vidmaterial').html(res.video);
                    $('.studymaterial').html(res.material);
                }
            });
        }

        function vidvalue(vals, vals1) {
            $('#lesson_url').val(vals);
            $('#lesson_urlID').val(vals);
            $('#lesson_duration').val(vals1);
            $('#lesson_durationID').val(vals1);
        }

        function studyvalue(vals) {
            $('#lesson_attachment').val(vals);
            $('#edit_lesson_attachment').val(vals);
            $('#edit_lesson_attachment').val(vals);

        }
        </script>
        @include('admin.include.footer');