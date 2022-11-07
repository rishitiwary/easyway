@include('admin.include.head');

<body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="wrapper">
        @include('admin.include.header');
        @include('admin.include.sidebar');
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    <i class="fa fa-user-plus"></i> Student Information </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="pull-right box-tools impbtntitle">
                                <a href="https://easywayglobal.in/student/import">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Import Student</button>
                                </a>
                            </div>
                            <form id="form1" action="https://easywayglobal.in/student/create" id="employeeform" name="employeeform" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                <div class="">
                                    <div class="bozero">
                                        <h4 class="pagetitleh-whitebg">Student Admission </h4>
                                        <div class="around10">
                                         @csrf
                                          
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Roll Number</label>
                                                        <input id="roll_no" name="roll_no" placeholder="" type="text" class="form-control" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Class</label><small class="req"> *</small>
                                                        <select id="class_id" name="class_id" class="form-control">
                                                            <option value="">Select</option>
                                                           
                                                        </select>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Batch</label><small class="req"> *</small>
                                                        <select id="section_id" name="section_id" class="form-control">
                                                            <option value="">Select</option>
                                                        </select>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">First Name</label><small class="req"> *</small>
                                                        <input id="firstname" name="firstname" placeholder="" type="text" class="form-control" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Last Name</label>
                                                        <input id="lastname" name="lastname" placeholder="" type="text" class="form-control" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile"> Gender</label><small class="req"> *</small>
                                                        <select class="form-control" name="gender">
                                                            <option value="">Select</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Date of Birth</label><small class="req"> *</small>
                                                        <input id="dob" name="dob" placeholder="" type="date" class="form-control date" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Category</label>
                                                        <select id="category_id" name="category_id" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="General">General</option>
                                                            <option value="EWS">EWS</option>
                                                            <option value="OBC">OBC</option>
                                                            <option value="SC">SC</option>
                                                            <option value="ST">ST</option>
                                                            <option value="PWD">PWD</option>
                                                        </select>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Religion</label>
                                                        <input id="religion" name="religion" placeholder="" type="text" class="form-control" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Caste</label>
                                                        <input id="cast" name="cast" placeholder="" type="text" class="form-control" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Mobile Number</label>
                                                        <input id="mobileno" name="mobileno" placeholder="" type="text" class="form-control" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email</label>
                                                        <input id="email" name="email" placeholder="" type="text" class="form-control" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Admission Date</label>
                                                        <input id="admission_date" name="admission_date" placeholder="" type="date" class="form-control date"  />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Student Photo</label>
                                                        <div><input class="filestyle form-control" type='file' name='file' id="file" size='20' />
                                                        </div>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Blood Group</label>
                                                        <select class="form-control" rows="3" placeholder="" name="blood_group">
                                                            <option value="">Select</option>
                                                            <option value="O+">O+</option>

                                                            <option value="A+">A+</option>

                                                            <option value="B+">B+</option>

                                                            <option value="AB+">AB+</option>

                                                            <option value="O-">O-</option>

                                                            <option value="A-">A-</option>

                                                            <option value="B-">B-</option>

                                                            <option value="AB-">AB-</option>

                                                        </select>

                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Height</label>
                                                        <input type="text" name="height" class="form-control" value="">
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Weight</label>
                                                        <input type="text" name="weight" class="form-control" value="">
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">As on Date</label>
                                                        <input type="date" id="measure_date" value="" name="measure_date" class="form-control date">
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3" style="display:none;">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Fees Discount</label>
                                                        <input id="fees_discount" name="fees_discount" placeholder="" type="text" class="form-control" value="0" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>

                                                

                                            </div>
                                            <div class="row">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="bozero">
                                        <h4 class="pagetitleh2">Parent Guardian Detail</h4>
                                        <div class="around10">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Father Name</label>
                                                        <input id="father_name" name="father_name" placeholder="" type="text" class="form-control" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Father Phone</label>
                                                        <input id="father_phone" name="father_phone" placeholder="" type="text" class="form-control" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Father Occupation</label>
                                                        <input id="father_occupation" name="father_occupation" placeholder="" type="text" class="form-control" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Father Photo</label>
                                                        <div><input class="filestyle form-control" type='file' name='father_pic' id="file" size='20' />
                                                        </div>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Mother Name</label>
                                                        <input id="mother_name" name="mother_name" placeholder="" type="text" class="form-control" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Mother Phone</label>
                                                        <input id="mother_phone" name="mother_phone" placeholder="" type="text" class="form-control" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Mother Occupation</label>
                                                        <input id="mother_occupation" name="mother_occupation" placeholder="" type="text" class="form-control" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Mother Photo</label>
                                                        <div><input class="filestyle form-control" type='file' name='mother_pic' id="file" size='20' />
                                                        </div>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>If Guardian Is<small class="req"> *</small>&nbsp;&nbsp;&nbsp;</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="guardian_is" value="father"> Father </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="guardian_is" value="mother"> Mother </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="guardian_is" value="other"> Other </label>
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Guardian Name</label><small class="req"> *</small>
                                                                <input id="guardian_name" name="guardian_name" placeholder="" type="text" class="form-control" value="" />
                                                                <span class="text-danger"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Guardian Relation</label>
                                                                <input id="guardian_relation" name="guardian_relation" placeholder="" type="text" class="form-control" value="" />
                                                                <span class="text-danger"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Guardian Phone</label><small class="req"> *</small>
                                                                <input id="guardian_phone" name="guardian_phone" placeholder="" type="text" class="form-control" value="" />
                                                                <span class="text-danger"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Guardian Occupation</label>
                                                                <input id="guardian_occupation" name="guardian_occupation" placeholder="" type="text" class="form-control" value="" />
                                                                <span class="text-danger"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Guardian Email</label>
                                                        <input id="guardian_email" name="guardian_email" placeholder="" type="text" class="form-control" value="" />
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Guardian Photo</label>
                                                        <div><input class="filestyle form-control" type='file' name='guardian_pic' id="file" size='20' />
                                                        </div>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="exampleInputEmail1">Guardian Address</label>
                                                    <textarea id="guardian_address" name="guardian_address" placeholder="" class="form-control" rows="2"></textarea>
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-group collapsed-box">
                                        <div class="panel box collapsed-box border0 mb0">
                                            <div class="addmoredetail-title">

                                                <a data-widget="collapse" data-original-title="Collapse" class="collapsed btn boxplus">
                                                    <i class="fa fa-fw fa-plus"></i>Add More Details </a>

                                            </div>
                                            <div class="box-body">
                                                <div class="mb25 bozero">
                                                    <h4 class="pagetitleh2">Student Address Details</h4>

                                                    <div class="row around10">
                                                        <div class="col-md-6">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" id="autofill_current_address" onclick="return auto_fill_guardian_address();">
                                                                    If Guardian Address is Current Address </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Current Address</label>
                                                                <textarea id="current_address" name="current_address" placeholder="" class="form-control"></textarea>
                                                                <span class="text-danger"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" id="autofill_address" onclick="return auto_fill_address();">
                                                                    If Permanent Address is Current Address </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Permanent Address</label>
                                                                <textarea id="permanent_address" name="permanent_address" placeholder="" class="form-control"></textarea>
                                                                <span class="text-danger"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                     
                                                <div class="tshadow mb25 bozero">
                                                    <h4 class="pagetitleh2">
                                                        Hostel</label> Details</label>
                                                    </h4>

                                                    <div class="row around10">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Hostel</label>

                                                                <select class="form-control" id="hostel_id" name="hostel_id">

                                                                    <option value="">Select</option>

                                                                    <option value="4">
                                                                        Loard budha hostel </option>
                                                                </select>
                                                                <span class="text-danger"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Room No</label>
                                                                <select id="hostel_room_id" name="hostel_room_id" class="form-control">
                                                                    <option value="">Select</option>
                                                                </select>
                                                                <span class="text-danger"></span>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                
                                                <div id='upload_documents_hide_show'>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="tshadow bozero">
                                                                <h4 class="pagetitleh2">Upload Documents</h4>

                                                                <div class="row around10">
                                                                    <div class="col-md-6">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th style="width: 10px">#</th>
                                                                                    <th>Title</th>
                                                                                    <th>Documents</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>1.</td>
                                                                                    <td><input type="text" name='first_title' class="form-control" placeholder=""></td>
                                                                                    <td>
                                                                                        <input class="filestyle form-control" type='file' name='first_doc' id="doc1">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>2.</td>
                                                                                    <td><input type="text" name='second_title' class="form-control" placeholder=""></td>
                                                                                    <td>
                                                                                        <input class="filestyle form-control" type='file' name='second_doc' id="doc1">
                                                                                    </td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th style="width: 10px">#</th>
                                                                                    <th>Title</th>
                                                                                    <th>Documents</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>3.</td>
                                                                                    <td><input type="text" name='fourth_title' class="form-control" placeholder=""></td>
                                                                                    <td>
                                                                                        <input class="filestyle form-control" type='file' name='fourth_doc' id="doc1">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>4.</td>
                                                                                    <td><input type="text" name='fifth_title' class="form-control" placeholder=""></td>
                                                                                    <td>
                                                                                        <input class="filestyle form-control" type='file' name='fifth_doc' id="doc1">
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-info pull-right">Save</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>



    


    <script type="text/javascript">
        $(document).ready(function() {
            var date_format = 'dd.mm.yyyy';
            var class_id = $('#class_id').val();
            var section_id = '0';
            var hostel_id = $('#hostel_id').val();
            var hostel_room_id = '0';
            getHostel(hostel_id, hostel_room_id);
            getSectionByClass(class_id, section_id);

            $(document).on('change', '#class_id', function(e) {
                $('#section_id').html("");
                var class_id = $(this).val();
                getSectionByClass(class_id, 0);
            });



            // $('.datetime').datetimepicker({

            // });
            $(".color").colorpicker();

            $("#btnreset").click(function() {
                $("#form1")[0].reset();
            });


            $(document).on('change', '#hostel_id', function(e) {
                var hostel_id = $(this).val();
                getHostel(hostel_id, 0);

            });

            function getSectionByClass(class_id, section_id) {

                if (class_id != "") {
                    $('#section_id').html("");
                    var base_url = 'https://easywayglobal.in/';
                    var div_data = '<option value="">Select</option>';
                    var url = "getByClass";

                    $.ajax({
                        type: "GET",
                        url: base_url + "sections/getByClass",
                        data: {
                            'class_id': class_id
                        },
                        dataType: "json",
                        beforeSend: function() {
                            $('#section_id').addClass('dropdownloading');
                        },
                        success: function(data) {
                            $.each(data, function(i, obj) {
                                var sel = "";
                                if (section_id == obj.section_id) {
                                    sel = "selected";
                                }
                                div_data += "<option value=" + obj.section_id + " " + sel + ">" + obj.section + "</option>";
                            });
                            $('#section_id').append(div_data);
                        },
                        complete: function() {
                            $('#section_id').removeClass('dropdownloading');
                        }
                    });
                }
            }


            function getHostel(hostel_id, hostel_room_id) {
                if (hostel_room_id == "") {
                    hostel_room_id = 0;
                }

                if (hostel_id != "") {

                    $('#hostel_room_id').html("");


                    var div_data = '<option value="">Select</option>';
                    $.ajax({
                        type: "GET",
                        url: baseurl + "admin/hostelroom/getRoom",
                        data: {
                            'hostel_id': hostel_id
                        },
                        dataType: "json",
                        beforeSend: function() {
                            $('#hostel_room_id').addClass('dropdownloading');
                        },
                        success: function(data) {
                            $.each(data, function(i, obj) {
                                var sel = "";
                                if (hostel_room_id == obj.id) {
                                    sel = "selected";
                                }

                                div_data += "<option value=" + obj.id + " " + sel + ">" + obj.room_no + " (" + obj.room_type + ")" + "</option>";

                            });
                            $('#hostel_room_id').append(div_data);
                        },
                        complete: function() {
                            $('#hostel_room_id').removeClass('dropdownloading');
                        }
                    });
                }
            }

        });

        function auto_fill_guardian_address() {
            if ($("#autofill_current_address").is(':checked')) {
                $('#current_address').val($('#guardian_address').val());
            }
        }

        function auto_fill_address() {
            if ($("#autofill_address").is(':checked')) {
                $('#permanent_address').val($('#current_address').val());
            }
        }
        $('input:radio[name="guardian_is"]').change(
            function() {
                if ($(this).is(':checked')) {
                    var value = $(this).val();
                    if (value == "father") {
                        $('#guardian_name').val($('#father_name').val());
                        $('#guardian_phone').val($('#father_phone').val());
                        $('#guardian_occupation').val($('#father_occupation').val());
                        $('#guardian_relation').val("Father")
                    } else if (value == "mother") {
                        $('#guardian_name').val($('#mother_name').val());
                        $('#guardian_phone').val($('#mother_phone').val());
                        $('#guardian_occupation').val($('#mother_occupation').val());
                        $('#guardian_relation').val("Mother")
                    } else {
                        $('#guardian_name').val("");
                        $('#guardian_phone').val("");
                        $('#guardian_occupation').val("");
                        $('#guardian_relation').val("")
                    }
                }
            });
    </script>

 

    
    @include('admin.include.footer');