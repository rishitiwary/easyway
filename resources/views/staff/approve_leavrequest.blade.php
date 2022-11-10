@include('admin.include.head');

<body class="hold-transition skin-blue fixed sidebar-mini">

    <div class="wrapper">
        @include('admin.include.header');
        @include('admin.include.sidebar');
        <div class="content-wrapper">
            <section class="content-header">
               


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
                    <div class="col-md-12">

                        <div class="box box-primary">
                            <div class="box-header ptbnull">
                                <h3 class="box-title titlefix">Approve Leave Request</h3> </small>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tab-pane active table-responsive no-padding">
                                            <div class="download_label">Approve Leave Request</div>
                                            <table class="table table-striped table-bordered table-hover example">
                                                <thead>

                                                    <th>Staff</th>
                                                    <th>Leave Type</th>
                                                    <th>Leave Date</th>
                                                    <th>Days</th>
                                                    <th>Apply Date</th>
                                                    <th>Status</th>
                                                    <th class="text-right no-print">Action</th>

                                                </thead>
                                                <tbody>
    @foreach($list as $row)
                                                    <tr>

                                                        <td><span data-toggle="popover" class="detail_popover" data-original-title="" title=""><?=$row->applied_by?></span>
                                      
                                                        </td>
                                                        <td><?=$row->leave_type?> </td>
                                                        <td><?=$row->leave_from?> - <?=$row->leave_to?></td>

                                                        <td><?=$row->leave_days?></td>
                                                        <td><?=$row->applieddate?></td>
                                                        <td><span data-toggle="popover" class="detail_popover" data-original-title="" title=""><small class='label label-success'><?=$row->status?></small></span>

 
                                                        </td>
                                                        <td class="pull-right no-print">
                                                            <a data-placement="left" href="#leavedetails" onclick="getRecord('11')" role="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="View"><i class="fa fa-reorder"></i></a>

                                                            <a href="{{url('admin/staff/leaverequest?delid=')}}<?=$row->id?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete"><i class="fa fa-remove"></i></a>
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
                    </div>
                </div>
            </section>
        </div>

        <div id="leavedetails" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog2 modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Details</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <form role="form" id="leavedetails_form" action="">
                                <div class="col-md-12 table-responsive">
                                    <table class="table mb0 table-striped table-bordered examples">
                                        <tr>
                                            <th width="15%">Name</th>
                                            <td width="35%"><span id='name'></span></td>
                                            <th width="15%">Staff ID</th>
                                            <td width="35%"><span id="employee_id"></span>
                                                <span class="text-danger"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Submitted By</th>
                                            <td><span id="appliedby"></span></td>
                                            <th>Leave Type</th>
                                            <td><span id="leave_type"></span>
                                                <input id="leave_request_id" name="leave_request_id" placeholder="" type="hidden" class="form-control" />
                                                <span class="text-danger"></span></td>
                                        </tr>
                                        <tr>
                                            <th>Leave</th>
                                            <td><span id='leave_from'></span> - <label> </label><span id='leave_to'> </span> (<span id='days'></span>)
                                                <span class="text-danger"></span></td>
                                            <th>Apply Date</th>
                                            <td><span id="applied_date"></span></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                <label class="radio-inline">
                                                    <input type="radio" value="pending" name="status" checked>Pending </label>
                                                <label class="radio-inline">
                                                    <input type="radio" value="approve" name="status">Approve </label>
                                                <label class="radio-inline">
                                                    <input type="radio" value="disapprove" name="status">Disapprove
                                                </label>
                                                <span class="text-danger"></span>
                                            </td>

                                            <th>Reason</th>
                                            <td><span id="remark"> </span></td>
                                        </tr>
                                        <tr>
                                            <th>Note</th>
                                        </tr>
                                        <tr>
                                            <td colspan=" 4">
                                                <div id="reason">
                                                    <textarea class="form-control" style="resize: none;" rows="2" id="detailremark" name="detailremark" placeholder=""></textarea>
                                                    <span class="text-danger"></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td colspan="4">
                                                <button type="button" style="width: auto;" class="btn btn-primary submit_schsetting pull-right" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> Save</button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="addleave" class="modal fade " role="dialog">
            <div class="modal-dialog modal-dialog2 modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add&nbsp;Details</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <form role="form" id="addleave_form" method="post" enctype="multipart/form-data" action="">
                                <div class="form-group  col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <label>
                                        Role</label><small class="req"> *</small>
                                    <select name="role" id="role" class="form-control" onchange="getEmployeeName(this.value)">
                                        <option value="">Select</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Teacher</option>
                                        <option value="3">Accountant</option>
                                        <option value="4">Librarian</option>
                                        <option value="6">Counsellor</option>
                                        <option value="7">Super Admin</option>
                                        <option value="10">Student</option>
                                        <option value="11">Affliate</option>
                                        <option value="12">DEO</option>
                                        <option value="13">Online Counsellor</option>
                                        <option value="14">Blogger</option>
                                    </select>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <label>Name</label><small class="req"> *</small>
                                    <select name="empname" id="empname" value="" onchange="   getLeaveTypeDDL(this.value)" class="form-control">
                                        <option value="" selected>Select</option>
                                    </select>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-group  col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <label>Apply Date</label>
                                    <input type="text" id="applieddate" name="applieddate" value="10.11.2022" class="form-control date">
                                </div>
                                <div class="form-group  col-xs-12 col-sm-12 col-md-12 col-lg-6 ">
                                    <label>
                                        Leave Type</label><small class="req"> *</small>
                                    <div id="leavetypeddl">
                                        <select name="leave_type" id="leave_type" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1">Festival </option>
                                            <option value="2">Emergency</option>
                                            <option value="3">Regular </option>
                                        </select>
                                    </div>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <label>Leave From Date</label><small class="req"> *</small>

                                    <input type="text" readonly id="leave_from_date" name="leave_from_date" class="form-control date">

                                    <!-- /.input group -->
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <label>Leave To Date</label><small class="req"> *</small>

                                    <input type="text" readonly id="leave_to_date" name="leave_to_date" class="form-control date">

                                    <!-- /.input group -->
                                </div>

                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <label>Reason</label><br />
                                    <textarea name="reason" id="reason" style="resize: none;" rows="4" class="form-control"></textarea>
                                    <input type="hidden" name="leaverequestid" id="leaverequestid">
                                </div>

                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-6" id="reason">
                                    <label>Note</label>

                                    <textarea class="form-control" style="resize: none;" rows="4" id="remark" name="remark" placeholder=""></textarea>
                                    <span class="text-danger"></span>

                                </div>
                                <div class="form-group  col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <label>Attach Document</label>
                                    <input type="file" id="file" name="userfile" class="filestyle form-control">
                                    <input type="hidden" id="filename" name="filename">
                                </div>

                                <div class="form-group  col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <label>Status </label>
                                    <br />
                                    <label class="radio-inline">

                                        <input type="radio" value="pending" name="addstatus" checked>Pending </label>
                                    <label class="radio-inline">

                                        <input type="radio" value="approve" name="addstatus">Approve</label>
                                    <label class="radio-inline">

                                        <input type="radio" value="disapprove" name="addstatus">Disapprove</label>

                                    <span class="text-danger"></span>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn-primary submit_addLeave pull-right" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> Save</button>
                                    <input type="reset" name="resetbutton" id="resetbutton" style="display:none">
                                    <button type="button" style="display: none;" id="clearform" onclick="clearForm(this.form)" class="btn btn-primary submit_addLeave pull-right" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      

        <script type="text/javascript">
            
 
            function getRecord(id) {

                $('input:radio[name=status]').attr('checked', false);
                var base_url = 'https://easywayglobal.in/';
                $.ajax({
                    url: base_url + 'admin/leaverequest/leaveRecord',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    dataType: "json",
                    success: function(result) {

                        $('input[name="leave_request_id"]').val(result.id);
                        $('#employee_id').html(result.employee_id);
                        $('#name').html(result.name + ' ' + result.surname);
                        $('#leave_from').html(result.leavefrom);
                        $('#leave_to').html(result.leaveto);
                        $('#leave_type').html(result.type);
                        $('#days').html(result.leave_days + ' Days');
                        $('#remark').html(result.employee_remark);
                        $('#applied_date').html(result.date);
                        $('#appliedby').html(result.applied_by);
                        $("#detailremark").text(result.admin_remark);

                        if (result.status == 'approve') {
                            $('input:radio[name=status]')[1].checked = true;

                        } else if (result.status == 'pending') {
                            $('input:radio[name=status]')[0].checked = true;

                        } else if (result.status == 'disapprove') {
                            $('input:radio[name=status]')[2].checked = true;

                        }
                    }
                });

                $('#leavedetails').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
            };

          
        </script>
        @include('admin.include.footer');