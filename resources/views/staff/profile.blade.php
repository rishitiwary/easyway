@include('admin.include.head');

<body class="hold-transition skin-blue fixed sidebar-mini">

    <div class="wrapper">

        @include('admin.include.header');
        @include('admin.include.sidebar');


        <div class="content-wrapper">

            <section class="content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-body box-profile">
                                <img class="profile-user-img img-responsive img-circle"
                                    src="{{asset('')}}<?= $res[0]->image ?>" alt="User profile picture">
                                <h3 class="profile-username text-center"><?= $res[0]->name ?></h3>
                                <ul class="list-group list-group-unbordered">

                                    <li class="list-group-item listnoback">
                                        <b>Staff ID</b> <a class="pull-right text-aqua"><?= $res[0]->employee_id ?></a>
                                    </li>

                                    <li class="list-group-item listnoback">
                                        <b>Role</b> <a class="pull-right text-aqua"><?php $run = DB::select('select name from roles where id=' . $res['0']->role);
                                                                                            echo $run[0]->name ?></a>
                                    </li>
                                    <li class="list-group-item listnoback">
                                        <b>Designation</b> <a
                                            class="pull-right text-aqua"><?php $run = DB::select('select designation from staff_designation where id=' . $res['0']->designation);
                                                                                            echo $run[0]->designation ?></a>
                                    </li>
                                    <li class="list-group-item listnoback">
                                        <b>Department</b> <a
                                            class="pull-right text-aqua"><?php $run = DB::select('select department from department where id=' . $res['0']->department);
                                                                                            echo $run[0]->department ?></a>
                                    </li>
                                    <li class="list-group-item listnoback">
                                        <b>EPF No</b> <a class="pull-right text-aqua"><?=$res[0]->epf_no?></a>
                                    </li>
                                    <li class="list-group-item listnoback">
                                        <b>Basic Salary</b> <a
                                            class="pull-right text-aqua"><?=$res[0]->basic_salary?></a>
                                    </li>
                                    <li class="list-group-item listnoback">
                                        <b>Contract Type</b> <a
                                            class="pull-right text-aqua"><?=$res[0]->contract_type?></a>
                                    </li>
                                    <li class="list-group-item listnoback">
                                        <b>Work Shift</b> <a class="pull-right text-aqua"><?=$res[0]->shift?></a>
                                    </li>
                                    <li class="list-group-item listnoback">
                                        <b>Location</b> <a class="pull-right text-aqua"><?=$res[0]->location?></a>
                                    </li>
                                    <li class="list-group-item listnoback">
                                        <b>Date Of Joining</b> <a
                                            class="pull-right text-aqua"><?=$res[0]->date_of_joining?></a>
                                    </li>
                                    <!-- <li class="list-group-item listnoback">
                                        <b>Affliate URL</b> <a class="pull-right text-aqua" target="_blank"
                                            href="https://easywayglobal.in/partner/2">https://easywayglobal.in/partner/2</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-9">
                        <div class="nav-tabs-custom theme-shadow">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#activity" data-toggle="tab"
                                        aria-expanded="true">Profile</a></li>
                                <li class=""><a href="#payroll" data-toggle="tab" aria-expanded="true">Payroll</a></li>
                                <li class=""><a href="#leaves" data-toggle="tab" aria-expanded="true">Leaves</a></li>
                                <li class=""><a href="#attendance" data-toggle="tab" aria-expanded="true">Attendance</a>
                                </li>
                                <li class=""><a href="#mysales" data-toggle="tab" aria-expanded="true">My Sales</a></li>
                                <li class=""><a href="#documents" data-toggle="tab" aria-expanded="true">Documents</a>
                                </li>
                                <li class=""><a href="#timelineh" data-toggle="tab" aria-expanded="true">Timeline</a>
                                </li>

                                <li class="pull-right"><a class="text-red" data-toggle="tooltip" data-placement="bottom"
                                        title="Disable" onclick="disable_staff(<?=$res[0]->id?>);"> <i
                                            class="fa fa-thumbs-o-down"></i></a></li>

                                <li class="pull-right">
                                    <a href="#" class="change_password text-green" data-toggle="tooltip"
                                        data-placement="bottom" title="Change Password"> <i class="fa fa-key"></i></a>


                                </li>



                                <li class="pull-right"><a href="{{url('admin/staff/create?uid=')}}<?=$res[0]->id?>"
                                        data-toggle="tooltip" data-placement="bottom" title="Edit" class="text-light"><i
                                            class="fa fa-pencil"></i></a></li>


                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="activity">
                                    <div class="tshadow mb25 bozero">
                                        <div class="table-responsive around10 pt0">
                                            <table class="table table-hover table-striped tmb0">
                                                <tbody>
                                                    <tr>
                                                        <td>Phone</td>
                                                        <td><?=$res[0]->contact_no?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Emergency Contact Number</td>
                                                        <td><?=$res[0]->emergency_contact_no?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td><?=$res[0]->email?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gender</td>
                                                        <td><?=$res[0]->gender?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date of Birth</td>
                                                        <td><?=$res[0]->dob?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marital Status</td>
                                                        <td><?=$res[0]->marital_status?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-md-4">Father Name</td>
                                                        <td class="col-md-5"><?=$res[0]->father_name?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mother Name</td>
                                                        <td><?=$res[0]->mother_name?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Qualification</td>
                                                        <td><?=$res[0]->qualification?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Work Experience</td>
                                                        <td><?=$res[0]->work_exp?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Note</td>
                                                        <td><?=$res[0]->note?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Commision</td>
                                                        <td>
                                                            <?=$res[0]->commision?> </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Discount</td>
                                                        <td>
                                                            <?=$res[0]->discount?> </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tshadow mb25 bozero">
                                        <h3 class="pagetitleh2">Address Detail</h3>
                                        <div class="table-responsive around10 pt0">
                                            <table class="table table-hover table-striped tmb0">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-md-4">Current Address</td>
                                                        <td class="col-md-5"><?=$res[0]->local_address?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Permanent Address</td>
                                                        <td><?=$res[0]->permanent_address?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="tshadow mb25 bozero">
                                        <h3 class="pagetitleh2">Bank Account Details</h3>
                                        <div class="table-responsive around10 pt10">
                                            <table class="table table-hover table-striped tmb0">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-md-4">Account Title</td>
                                                        <td class="col-md-5"><?=$res[0]->account_title?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Bank Name</td>
                                                        <td><?=$res[0]->bank_name?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Branch Name</td>
                                                        <td><?=$res[0]->bank_branch?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Account Number</td>
                                                        <td><?=$res[0]->bank_account_no?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>IFSC Code</td>
                                                        <td><?=$res[0]->ifsc_code?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tshadow mb25  bozero">
                                        <h3 class="pagetitleh2">Social Media Link</h3>
                                        <div class="table-responsive around10 pt0">
                                            <table class="table table-hover table-striped tmb0">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-md-4">Facebook URL</td>
                                                        <td class="col-md-5"><a href="<?=$res[0]->facebook?>"
                                                                target="_blank"><?=$res[0]->facebook?></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Twitter URL</td>
                                                        <td><a href="<?=$res[0]->twitter?>"
                                                                target="_blank"><?=$res[0]->twitter?></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Linkedin URL</td>
                                                        <td><a href="<?=$res[0]->likedin?>"
                                                                target="_blank"><?=$res[0]->linkedin?></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Instagram URL</td>
                                                        <td><a href="<?=$res[0]->instagram?>"
                                                                target="_blank"><?=$res[0]->instagram?></a></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="payroll">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="staffprofile">

                                                <h5>Total Net Salary Paid</h5>
                                                <h4>₹7,000.00</h4>
                                                <div class="icon mt12font40">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-3-->

                                        <div class="col-md-3 col-sm-6">
                                            <div class="staffprofile">

                                                <h5>Total Gross Salary</h5>
                                                <h4>₹7,000.00</h4>
                                                <div class="icon mt12font40">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-3-->

                                        <div class="col-md-3 col-sm-6">
                                            <div class="staffprofile">

                                                <h5>Total Earning</h5>
                                                <h4>₹2,000.00</h4>
                                                <div class="icon mt12font40">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-3-->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="staffprofile">
                                                <h5>Total Deduction</h5>
                                                <h4>₹0.00 </h4>
                                                <div class="icon mt12font40">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-3-->
                                    </div>
                                    <div class="table-responsive">
                                        <div class="download_label">Details For Er. Abhishek raj</div>
                                        <table class="table table-hover table-striped example">

                                            <thead>
                                                <tr>
                                                    <th class="text text-left">Payslip #</th>
                                                    <th class="text text-left">Month - Year<span></span></th>
                                                    <th class="text text-left">Date</th>
                                                    <th class="text text-left">Mode</th>
                                                    <th class="text text-left">Status</th>
                                                    <th class="">Net Salary <span>(₹)</span></th>
                                                    <th class="text-right no-print">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a data-toggle="popover" href="#" class="detail_popover"
                                                            data-original-title="" title="">2</a>
                                                        <div class="fee_detail_popover" style="display: none"></div>
                                                    </td>
                                                    <td>October - 2021</td>
                                                    <td>17.11.2021</td>
                                                    <td>Cash</td>
                                                    <td><span class='label label-success'>Paid</span></td>
                                                    <td>7000.00</td>
                                                    <td class="text-right">

                                                        <a href="#" onclick="getPayslip('2')" role="button"
                                                            class="btn btn-primary btn-xs checkbox-toggle edit_setting"
                                                            data-toggle="tooltip" title="">View Payslip</a>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane" id="documents">
                                    <div class="timeline-header no-border">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if($res[0]->resume=='' && $res[0]->joining_letter=='' && $res[0]->other_document_file=='' && $res[0]->resignation_letter=='')

                                                <div class="alert alert-info">No Record Found</div>
                                                @else
                                                <div class="row">
                                @if($res[0]->resume!='')
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="staffprofile">
                                                            <h5>Resume</h5>
                                                            <a href="{{asset('')}}<?=$res[0]->resume?>"
                                                                class="btn btn-default btn-xs" data-toggle="tooltip"
                                                                title="Download">
                                                                <i class="fa fa-download"></i></a>
                                                            <a href="{{url('admin/staff?type=resume&&delid=')}}<?=$res[0]->id?>"
                                                                class="btn btn-default btn-xs" data-toggle="tooltip"
                                                                title="" onclick="return confirm('Delete Confirm?');"
                                                                data-original-title="Delete">
                                                                <i class="fa fa-remove"></i></a>
                                                            <div class="icon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <!--./col-md-3-->


                                                    @if($res[0]->joining_letter!='')
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="staffprofile">
                                                            <h5>Joining Letter</h5>
                                                            <a href="{{asset('')}}<?=$res[0]->joining_letter?>"
                                                                class="btn btn-default btn-xs" data-toggle="tooltip"
                                                                title="Download">
                                                                <i class="fa fa-download"></i></a>
                                                            <a href="{{url('admin/staff?type=joining_letter&&delid=')}}<?=$res[0]->id?>"
                                                                class="btn btn-default btn-xs" data-toggle="tooltip"
                                                                title="" onclick="return confirm('Delete Confirm?');"
                                                                data-original-title="Delete">
                                                                <i class="fa fa-remove"></i></a>
                                                            <div class="icon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if($res[0]->other_document_file!='')
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="staffprofile">
                                                            <h5>Other Documents</h5>
                                                            <a href="{{asset('')}}<?=$res[0]->other_document_file?>"
                                                                class="btn btn-default btn-xs" data-toggle="tooltip"
                                                                title="Download">
                                                                <i class="fa fa-download"></i></a>
                                                            <a href="{{url('admin/staff?type=other_document_file&&delid=')}}<?=$res[0]->id?>"
                                                                class="btn btn-default btn-xs" data-toggle="tooltip"
                                                                title="" onclick="return confirm('Delete Confirm?');"
                                                                data-original-title="Delete">
                                                                <i class="fa fa-remove"></i></a>
                                                            <div class="icon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @if($res[0]->resignation_letter!='')
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="staffprofile">
                                                            <h5>Resignation Letter</h5>
                                                            <a href="{{asset('')}}<?=$res[0]->resignation_letter?>"
                                                                class="btn btn-default btn-xs" data-toggle="tooltip"
                                                                title="Download">
                                                                <i class="fa fa-download"></i></a>
                                                            <a href="{{url('admin/staff?type=resignation_letter&&delid=')}}<?=$res[0]->id?>"
                                                                class="btn btn-default btn-xs" data-toggle="tooltip"
                                                                title="" onclick="return confirm('Delete Confirm?');"
                                                                data-original-title="Delete">
                                                                <i class="fa fa-remove"></i></a>
                                                            <div class="icon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <!--./col-md-3-->
                                                </div>
                                                @endif

                                               
                                            </div>
                                        </div>
                                        <!--./row-->

                                    </div>
                                    </table>
                                </div>

                                <div class="tab-pane" id="timelineh">
                                    <div> <input type="button" id="myTimelineButton"
                                            class="btn btn-sm btn-primary pull-right " value="Add" />
                                    </div>
                                    <br />

                                    <div class="timeline-header no-border">

                                        <div id="timeline_list">
                                            <br />
                                            <div class="alert alert-info">No Record Found</div>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="attendance">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col20per">
                                            <div class="staffprofile">
                                                <h5>Total Present</h5>
                                                <h4>0</h4>
                                                <div class="icon">
                                                    <i class="fa  fa-check-square-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-3-->
                                        <div class="col-lg-3 col-md-3 col-sm-6 col20per">
                                            <div class="staffprofile">

                                                <h5>Total Late</h5>
                                                <h4>0</h4>
                                                <div class="icon">
                                                    <i class="fa  fa-check-square-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-3-->
                                        <div class="col-lg-3 col-md-3 col-sm-6 col20per">
                                            <div class="staffprofile">
                                                <h5>Total Absent</h5>
                                                <h4>0</h4>
                                                <div class="icon">
                                                    <i class="fa  fa-check-square-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-3-->
                                        <div class="col-lg-3 col-md-3 col-sm-6 col20per">
                                            <div class="staffprofile">
                                                <h5>Total Half Day</h5>
                                                <h4>0</h4>
                                                <div class="icon">
                                                    <i class="fa  fa-check-square-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-3-->
                                        <div class="col-lg-3 col-md-3 col-sm-6 col20per">
                                            <div class="staffprofile">
                                                <h5>Total Holiday</h5>
                                                <h4>0</h4>
                                                <div class="icon">
                                                    <i class="fa  fa-check-square-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-3-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <form id="" action="" method="">
                                                <div class="form-group">
                                                    <label class="sess18">Year</label>
                                                    <div class="sessyearbox">
                                                        <select class="form-control" style="margin-top: -5px;"
                                                            name="year" onchange="ajax_attendance('2', this.value)">
                                                            <option selected value="2022">2022</option>
                                                        </select>
                                                    </div>
                                                    <span class="text-danger"></span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="halfday pull-right">

                                                <b>
                                                    Present: <b class="text text-success">P</b> </b>

                                                <b>
                                                    Late: <b class="text text-warning">L</b> </b>

                                                <b>
                                                    Absent: <b class="text text-danger">A</b> </b>

                                                <b>
                                                    Half Day: <b class="text text-warning">F</b> </b>

                                                <b>
                                                    Holiday: H </b>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div id="ajaxattendance" class="table-responsive">
                                            <div class="download_label"> Er. Abhishek raj</div>
                                            <table class="table table-striped table-bordered table-hover"
                                                id="attendancetable">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Date | Month </th>
                                                        <th>January</th>
                                                        <th>February</th>
                                                        <th>March</th>
                                                        <th>April</th>
                                                        <th>May</th>
                                                        <th>June</th>
                                                        <th>July</th>
                                                        <th>August</th>
                                                        <th>September</th>
                                                        <th>October</th>
                                                        <th>November</th>
                                                        <th>December</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>03</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>04</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>05</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>06</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>07</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>08</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>09</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>21</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>22</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>23</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>24</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>25</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>26</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>27</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>29</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>30</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>31</td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                        <td>
                                                            <span data-toggle="popover" class="detail_popover"
                                                                data-original-title="" title=""><a href="#"
                                                                    style="color:#333"></a></span>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="mysales">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped example">

                                            <thead>
                                                <tr>
                                                    <th class="text text-left">Course Name</th>
                                                    <th class="text text-left">Purchased by</th>
                                                    <th class="text text-left">Date</th>
                                                    <th class="text text-left">Mode</th>
                                                    <th class="text text-left">Amount</th>
                                                    <th class="text text-left">Commision</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="5">Total</td>
                                                    <td>
                                                        0 </td>

                                                </tr>
                                                <tr>
                                                    <td colspan="5">Withdraw</td>
                                                    <td>
                                                        2000.00 </td>

                                                </tr>
                                                <tr>
                                                    <td colspan="5">Balance</td>
                                                    <td>
                                                        -2000 </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="leaves">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="staffprofile">
                                                <h5>Festival (5)</h5>
                                                <p>Used: 4</p>
                                                <p>Available: 1</p>
                                                <div class="icon">
                                                    <i class="fa fa-plane"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-3-->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="staffprofile">
                                                <h5>Emergency (5)</h5>
                                                <p>Used: 0</p>
                                                <p>Available: 5</p>
                                                <div class="icon">
                                                    <i class="fa fa-plane"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-3-->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="staffprofile">
                                                <h5>Regular (5)</h5>
                                                <p>Used: 0</p>
                                                <p>Available: 5</p>
                                                <div class="icon">
                                                    <i class="fa fa-plane"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-3-->

                                    </div>
                                    <div class="timeline-header no-border">
                                        <div class="download_label">Details For Er. Abhishek raj</div>
                                        <div class="table-responsive" style="clear: both;">
                                            <table class="table table-striped table-bordered table-hover example">
                                                <thead>
                                                    <th>Leave Type</th>
                                                    <th>Leave Date</th>
                                                    <th>Days</th>
                                                    <th>Apply Date</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Action</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Festival </td>
                                                        <td>16.10.2021 - 19.10.2021</td>
                                                        <td>4</td>
                                                        <td>15.10.2021</td>
                                                        <td><small style="text-transform: capitalize;"
                                                                class='label label-success'>Approve</small></td>
                                                        <td class="text-right"><a href="#leavedetails"
                                                                onclick="getRecord('1')" role="button"
                                                                class="btn btn-default btn-xs" data-toggle="tooltip"
                                                                title="View"><i class="fa fa-eye"></i></a>
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
            </section>
        </div>

        <div id="leavedetails" class="modal fade " role="dialog">
            <div class="modal-dialog modal-dialog2 modal-lg">
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
                                                <th>Leave</th>
                                                <td><span id='leave_from'></span> - <label for="exampleInputEmail1">
                                                    </label><span id='leave_to'> </span> (<span id='days'></span>)
                                                    <span class="text-danger"></span></td>
                                                <th>Leave Type</th>
                                                <td><span id="leave_type"></span>
                                                    <input id="leave_request_id" name="leave_request_id" placeholder=""
                                                        type="hidden" class="form-control" />
                                                    <span class="text-danger"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>
                                                    <span id="status"></span>
                                                </td>
                                                <th>Apply Date</th>
                                                <td><span id="applied_date"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Reason</th>
                                                <td><span id="reason"> </span></td>
                                                <th>Note</th>
                                                <td>
                                                    <span id="remark"> </span>
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
        </div>

       
        <div id="scheduleModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title_logindetail"></h4>
                    </div>
                    <div class="modal-body_logindetail">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="payslipview" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog2 modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Details <span id="print" class=></span></h4>
                    </div>
                    <div class="modal-body" id="testdata">

                    </div>
                </div>
            </div>
        </div>

        <div id="changepwdmodal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Change Password</h4>
                    </div>
                    <form method="post" id="changepassbtn" action="">
                    <input type="hidden" name="staff_id" value="<?=$res[0]->id?>" id="staff_id">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="email">Password <small class="req"> *</small></label>
                                <input type="password" class="form-control" name="new_pass" id="pass">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Confirm Password <small class="req"> *</small></label>
                                <input type="password" class="form-control" name="password_confirmation" id="pwd">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="disablemodal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Disable Staff</h4>
                    </div>
                    <form method="post" id="disablebtn" action="">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="email">Date </label>
                                <input type="text" class="form-control date" value="06.11.2022" name="date">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript">
        function disable_staff(id) {
            $('#disablemodal').modal({
                backdrop: 'static',
                keyboard: false,
                show: true

            });
        }

        $(".myTransportFeeBtn").click(function() {
            $("span[id$='_error']").html("");
            $('#transport_amount').val("");
            $('#transport_amount_discount').val("0");
            $('#transport_amount_fine').val("0");
            var student_session_id = $(this).data("student-session-id");
            $('.transport_fees_title').html("<b>Upload Document</b>");
            $('#transport_student_session_id').val(student_session_id);
            $('#myTransportFeesModal').modal({
                backdrop: 'static',
                keyboard: false,
                show: true

            });
        });
        </script>
        <script type="text/javascript">
        $("#myTimelineButton").click(function() {
            $("#reset").click();
            $('.transport_fees_title').html("<b>Add Timeline</b>");
            $('#myTimelineModal').modal({
                backdrop: 'static',
                keyboard: false,
                show: true

            });
        });

        $(document).ready(function(e) {
            $("#timelineform").on('submit', (function(e) {
                var staff_id = $("#staff_id").val();

                e.preventDefault();
                $.ajax({
                    url: "https://easywayglobal.in/admin/timeline/add_staff_timeline",
                    type: "POST",
                    data: new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        if (data.status == "fail") {
                            var message = "";
                            $.each(data.error, function(index, value) {
                                message += value;
                            });
                            errorMsg(message);
                        } else {

                            successMsg(data.message);
                            window.location.reload(true);
                        }

                    },
                    error: function(e) {
                        alert("Fail");
                        console.log(e);
                    }
                });
            }));
        });

        $(document).ready(function(e) {
            $("#disablebtn").on('submit', (function(e) {
                var staff_id = $("#staff_id").val();
                e.preventDefault();
                $.ajax({
                    url: "https://easywayglobal.in/admin/staff/disablestaff/" + staff_id,
                    type: "POST",
                    data: new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {

                        if (data.status == "fail") {

                            var message = "";
                            $.each(data.error, function(index, value) {

                                message += value;
                            });
                            errorMsg(message);
                        } else {

                            successMsg(data.message);

                            window.location.reload(true);
                        }

                    },
                    error: function(e) {
                        alert("Fail");
                        console.log(e);
                    }
                });

            }));
        });

        $(document).ready(function(e) {
            $("#changepassbtn").on('submit', (function(e) {
                var staff_id = $("#staff_id").val();
                let url="{{url('admin/staff/changepassword')}}";

                e.preventDefault();
                $.ajax({
                    url: url,
                    type: "POST",
                    data: new FormData(this),
                   // dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                   
                    success: function(data) {
                        if (data == "1") {

                            var message = "The password confirmation and new pass must match";
                            errorMsg(message);
                        } else {
                            successMsg("Password is changed successfully..");
                          window.location.reload(true);
                        }
                    },
                    error: function(e) {
                        alert("Fail");
                        console.log(e);
                    }
                });
            }));
        });

         
        $(document).ready(function() {
            $(document).on('click', '.change_password', function() {

                $('#changepwdmodal').modal('show');
            });

            $("#attendancetable").DataTable({
                searching: false,
                ordering: false,
                paging: false,
                bSort: false,
                info: false,
                dom: "Bfrtip",
                buttons: [

                    {
                        extend: 'copyHtml5',
                        text: '<i class="fa fa-files-o"></i>',
                        titleAttr: 'Copy',
                        title: $('.download_label').html(),
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                    {
                        extend: 'excelHtml5',
                        text: '<i class="fa fa-file-excel-o"></i>',
                        titleAttr: 'Excel',

                        title: $('.download_label').html(),
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                    {
                        extend: 'csvHtml5',
                        text: '<i class="fa fa-file-text-o"></i>',
                        titleAttr: 'CSV',
                        title: $('.download_label').html(),
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fa fa-file-pdf-o"></i>',
                        titleAttr: 'PDF',
                        title: $('.download_label').html(),
                        exportOptions: {
                            columns: ':visible'

                        }
                    },

                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i>',
                        titleAttr: 'Print',
                        title: $('.download_label').html(),
                        customize: function(win) {
                            $(win.document.body)
                                .css('font-size', '10pt');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        },
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                    {
                        extend: 'colvis',
                        text: '<i class="fa fa-columns"></i>',
                        titleAttr: 'Columns',
                        title: $('.download_label').html(),
                        postfixButtons: ['colvisRestore']
                    },
                ]
            });
        });
        </script>
        <script>
        $(document).ready(function() {
            $('.detail_popover').popover({
                placement: 'right',
                title: '',
                trigger: 'hover',
                container: 'body',
                html: true,
                content: function() {
                    return $(this).closest('td').find('.fee_detail_popover').html();
                }
            });
        });

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

                    $('inputs[name="leave_request_id"]').val(result.id);
                    $('#name').html(result.name + ' ' + result.surname);
                    $('#leave_from').html(result.leavefrom);
                    $('#leave_to').html(result.leaveto);
                    $('#leave_type').html(result.type);
                    $('#reason').html(result.employee_remark);
                    $('#applied_date').html(result.date);
                    $('#days').html(result.leave_days + ' Days');
                    $("#remark").html(result.admin_remark);
                    $("#employee_id").html(' ' + result.employee_id);
                    $("#status").html(' ' + result.status);

                }
            });

            $('#leavedetails').modal({
                show: true,
                backdrop: 'static',
                keyboard: false
            });
        };

        function ajax_attendance(id, year) {
            var base_url = 'https://easywayglobal.in/';
            $.ajax({
                url: base_url + 'admin/staff/ajax_attendance/' + id,
                type: 'POST',
                data: {
                    id: id,
                    year: year
                },
                success: function(result) {

                    $("#ajaxattendance").html(result);

                }
            });
        }


        function getPayslip(id) {
            var base_url = 'https://easywayglobal.in/';
            $.ajax({
                url: base_url + 'admin/payroll/payslipView',
                type: 'POST',
                data: {
                    payslipid: id
                },

                success: function(result) {
                    $("#print").html(
                        "<a href='#' class='pull-right modal-title moprintblack ' onclick='printData(" +
                        id + ")'  title='Print'><i class='fa fa-print'></i></a>");
                    $("#testdata").html(result);

                }
            });

            $('#payslipview').modal({
                show: true,
                backdrop: 'static',
                keyboard: false
            });

        };

        function printData(id) {

            var base_url = 'https://easywayglobal.in/';
            $.ajax({
                url: base_url + 'admin/payroll/payslipView',
                type: 'POST',
                data: {
                    payslipid: id
                },
                //dataType: "json",
                success: function(result) {

                    $("#testdata").html(result);
                    popup(result);
                }
            });
        }

        function popup(data) {
            var base_url = 'https://easywayglobal.in/';
            var frame1 = $('<iframe />');
            frame1[0].name = "frame1";
            frame1.css({
                "position": "absolute",
                "top": "-1000000px"
            });
            $("body").append(frame1);
            var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ?
                frame1[0].contentDocument.document : frame1[0].contentDocument;
            frameDoc.document.open();
            //Create a new HTML document.
            frameDoc.document.write('<html>');
            frameDoc.document.write('<head>');
            frameDoc.document.write('<title></title>');
            frameDoc.document.write('<link rel="stylesheet" href="' + base_url +
                'backend/bootstrap/css/bootstrap.min.css">');
            frameDoc.document.write('<link rel="stylesheet" href="' + base_url +
                'backend/dist/css/font-awesome.min.css">');
            frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/ionicons.min.css">');
            frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/AdminLTE.min.css">');
            frameDoc.document.write('<link rel="stylesheet" href="' + base_url +
                'backend/dist/css/skins/_all-skins.min.css">');
            frameDoc.document.write('<link rel="stylesheet" href="' + base_url +
                'backend/plugins/iCheck/flat/blue.css">');
            frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/morris/morris.css">');
            frameDoc.document.write('<link rel="stylesheet" href="' + base_url +
                'backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css">');
            frameDoc.document.write('<link rel="stylesheet" href="' + base_url +
                'backend/plugins/datepicker/datepicker3.css">');
            frameDoc.document.write('<link rel="stylesheet" href="' + base_url +
                'backend/plugins/daterangepicker/daterangepicker-bs3.css">');
            frameDoc.document.write('</head>');
            frameDoc.document.write('<body>');
            frameDoc.document.write(data);
            frameDoc.document.write('</body>');
            frameDoc.document.write('</html>');
            frameDoc.document.close();
            setTimeout(function() {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                frame1.remove();
            }, 500);

            return true;
        }
        </script>
        @include('admin.include.footer');