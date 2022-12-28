@include('admin.include.head')

<body class="hold-transition skin-blue fixed sidebar-mini">

    <div class="wrapper">
        @include('admin.include.header')
        @include('admin.include.sidebar')


        <div class="content-wrapper">
            <section class="content-header">
                <h1><i class="fa fa-gears"></i> System Settings</h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Assign Permission (Admin) </h3>
                            </div>
                            <form id="form1" action="https://easywayglobal.in/admin/roles/permission/1" id="employeeform" name="employeeform" method="post" accept-charset="utf-8">
                                <div class="box-body">

                                    <input type='hidden' name='ci_csrf_token' value='' />
                                    <input type="hidden" name="role_id" value="1" />
                                    <div class="table-responsive">
                                        <table class="table table-stripped">
                                            <thead>
                                                <tr>
                                                    <th>Module</th>
                                                    <th>Feature</th>
                                                    <th>View</th>
                                                    <th>Add</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <th>Student Information</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="1" />
                                                        <input type="hidden" name="roles_permissions_id_1" value="222" />
                                                        Student</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_1" value="1" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_1" value="1" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_1" value="1" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_1" value="1" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="2" />
                                                        <input type="hidden" name="roles_permissions_id_2" value="747" />


                                                        Import Student</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_2" value="2" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="3" />
                                                        <input type="hidden" name="roles_permissions_id_3" value="748" />


                                                        Student Categories</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_3" value="3" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_3" value="3" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_3" value="3" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_3" value="3" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="4" />
                                                        <input type="hidden" name="roles_permissions_id_4" value="749" />


                                                        Student Houses</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_4" value="4" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_4" value="4" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_4" value="4" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_4" value="4" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="107" />
                                                        <input type="hidden" name="roles_permissions_id_107" value="1342" />


                                                        Disable Student</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_107" value="107" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="128" />
                                                        <input type="hidden" name="roles_permissions_id_128" value="751" />


                                                        Student Timeline</td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_128" value="128" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_128" value="128" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="134" />
                                                        <input type="hidden" name="roles_permissions_id_134" value="754" />


                                                        Disable Reason</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_134" value="134" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_134" value="134" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_134" value="134" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_134" value="134" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Fees Collection</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="5" />
                                                        <input type="hidden" name="roles_permissions_id_5" value="755" />
                                                        Collect Fees</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_5" value="5" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_5" value="5" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_5" value="5" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="6" />
                                                        <input type="hidden" name="roles_permissions_id_6" value="756" />


                                                        Fees Carry Forward</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_6" value="6" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="7" />
                                                        <input type="hidden" name="roles_permissions_id_7" value="757" />


                                                        Fees Master</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_7" value="7" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_7" value="7" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_7" value="7" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_7" value="7" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="8" />
                                                        <input type="hidden" name="roles_permissions_id_8" value="758" />


                                                        Fees Group</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_8" value="8" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_8" value="8" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_8" value="8" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_8" value="8" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="68" />
                                                        <input type="hidden" name="roles_permissions_id_68" value="760" />


                                                        Fees Group Assign</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_68" value="68" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="69" />
                                                        <input type="hidden" name="roles_permissions_id_69" value="761" />


                                                        Fees Type</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_69" value="69" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_69" value="69" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_69" value="69" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_69" value="69" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="70" />
                                                        <input type="hidden" name="roles_permissions_id_70" value="762" />


                                                        Fees Discount</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_70" value="70" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_70" value="70" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_70" value="70" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_70" value="70" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="71" />
                                                        <input type="hidden" name="roles_permissions_id_71" value="763" />


                                                        Fees Discount Assign</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_71" value="71" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="73" />
                                                        <input type="hidden" name="roles_permissions_id_73" value="765" />


                                                        Search Fees Payment</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_73" value="73" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="74" />
                                                        <input type="hidden" name="roles_permissions_id_74" value="766" />


                                                        Search Due Fees</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_74" value="74" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="135" />
                                                        <input type="hidden" name="roles_permissions_id_135" value="1026" />


                                                        Fees Reminder</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_135" value="135" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_135" value="135" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Income</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="9" />
                                                        <input type="hidden" name="roles_permissions_id_9" value="156" />
                                                        Income</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_9" value="9" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_9" value="9" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_9" value="9" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_9" value="9" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="10" />
                                                        <input type="hidden" name="roles_permissions_id_10" value="157" />


                                                        Income Head</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_10" value="10" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_10" value="10" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_10" value="10" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_10" value="10" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="11" />
                                                        <input type="hidden" name="roles_permissions_id_11" value="768" />


                                                        Search Income</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_11" value="11" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Expense</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="12" />
                                                        <input type="hidden" name="roles_permissions_id_12" value="23" />
                                                        Expense</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_12" value="12" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_12" value="12" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_12" value="12" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_12" value="12" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="13" />
                                                        <input type="hidden" name="roles_permissions_id_13" value="24" />


                                                        Expense Head</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_13" value="13" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_13" value="13" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_13" value="13" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_13" value="13" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="14" />
                                                        <input type="hidden" name="roles_permissions_id_14" value="201" />


                                                        Search Expense</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_14" value="14" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Student Attendance</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="15" />
                                                        <input type="hidden" name="roles_permissions_id_15" value="26" />
                                                        Student / Period Attendance</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_15" value="15" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_15" value="15" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_15" value="15" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="122" />
                                                        <input type="hidden" name="roles_permissions_id_122" value="769" />


                                                        Attendance By Date</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_122" value="122" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="136" />
                                                        <input type="hidden" name="roles_permissions_id_136" value="771" />


                                                        Approve Leave</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_136" value="136" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Examination</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="20" />
                                                        <input type="hidden" name="roles_permissions_id_20" value="772" />
                                                        Marks Grade</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_20" value="20" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_20" value="20" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_20" value="20" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_20" value="20" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="137" />
                                                        <input type="hidden" name="roles_permissions_id_137" value="773" />


                                                        Exam Group</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_137" value="137" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_137" value="137" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_137" value="137" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_137" value="137" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="141" />
                                                        <input type="hidden" name="roles_permissions_id_141" value="774" />


                                                        Design Admit Card</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_141" value="141" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_141" value="141" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_141" value="141" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_141" value="141" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="142" />
                                                        <input type="hidden" name="roles_permissions_id_142" value="775" />


                                                        Print Admit Card</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_142" value="142" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="143" />
                                                        <input type="hidden" name="roles_permissions_id_143" value="776" />


                                                        Design Marksheet</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_143" value="143" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_143" value="143" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_143" value="143" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_143" value="143" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="144" />
                                                        <input type="hidden" name="roles_permissions_id_144" value="777" />


                                                        Print Marksheet</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_144" value="144" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="187" />
                                                        <input type="hidden" name="roles_permissions_id_187" value="778" />


                                                        Exam Result</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_187" value="187" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="196" />
                                                        <input type="hidden" name="roles_permissions_id_196" value="779" />


                                                        Marks Import</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_196" value="196" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="205" />
                                                        <input type="hidden" name="roles_permissions_id_205" value="786" />


                                                        Exam</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_205" value="205" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_205" value="205" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_205" value="205" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_205" value="205" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="207" />
                                                        <input type="hidden" name="roles_permissions_id_207" value="781" />


                                                        Exam Publish</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_207" value="207" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="208" />
                                                        <input type="hidden" name="roles_permissions_id_208" value="782" />


                                                        Link Exam</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_208" value="208" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_208" value="208" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="210" />
                                                        <input type="hidden" name="roles_permissions_id_210" value="783" />


                                                        Assign / View student</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_210" value="210" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_210" value="210" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="211" />
                                                        <input type="hidden" name="roles_permissions_id_211" value="784" />


                                                        Exam Subject</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_211" value="211" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_211" value="211" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="212" />
                                                        <input type="hidden" name="roles_permissions_id_212" value="785" />


                                                        Exam Marks</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_212" value="212" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_212" value="212" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Academics</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="21" />
                                                        <input type="hidden" name="roles_permissions_id_21" value="31" />
                                                        Class Timetable</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_21" value="21" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_21" value="21" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="23" />
                                                        <input type="hidden" name="roles_permissions_id_23" value="790" />


                                                        Subject</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_23" value="23" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_23" value="23" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_23" value="23" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_23" value="23" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="24" />
                                                        <input type="hidden" name="roles_permissions_id_24" value="34" />


                                                        Class</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_24" value="24" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_24" value="24" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_24" value="24" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_24" value="24" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="25" />
                                                        <input type="hidden" name="roles_permissions_id_25" value="791" />


                                                        Section</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_25" value="25" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_25" value="25" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_25" value="25" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_25" value="25" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="26" />
                                                        <input type="hidden" name="roles_permissions_id_26" value="204" />


                                                        Promote Student</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_26" value="26" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="77" />
                                                        <input type="hidden" name="roles_permissions_id_77" value="788" />


                                                        Assign Class Teacher</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_77" value="77" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_77" value="77" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_77" value="77" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_77" value="77" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="145" />
                                                        <input type="hidden" name="roles_permissions_id_145" value="669" />


                                                        Teachers Timetable</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_145" value="145" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="188" />
                                                        <input type="hidden" name="roles_permissions_id_188" value="789" />


                                                        Subject Group</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_188" value="188" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_188" value="188" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_188" value="188" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_188" value="188" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Download Center</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="27" />
                                                        <input type="hidden" name="roles_permissions_id_27" value="169" />
                                                        Upload Content</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_27" value="27" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_27" value="27" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_27" value="27" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th>Library</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="28" />
                                                        <input type="hidden" name="roles_permissions_id_28" value="625" />
                                                        Books List</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_28" value="28" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_28" value="28" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_28" value="28" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_28" value="28" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="29" />
                                                        <input type="hidden" name="roles_permissions_id_29" value="206" />


                                                        Issue Return</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_29" value="29" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="30" />
                                                        <input type="hidden" name="roles_permissions_id_30" value="207" />


                                                        Add Staff Member</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_30" value="30" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="123" />
                                                        <input type="hidden" name="roles_permissions_id_123" value="315" />


                                                        Add Student</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_123" value="123" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="228" />
                                                        <input type="hidden" name="roles_permissions_id_228" value="1031" />


                                                        Import Book</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_228" value="228" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Inventory</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="31" />
                                                        <input type="hidden" name="roles_permissions_id_31" value="208" />
                                                        Issue Item</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_31" value="31" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_31" value="31" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_31" value="31" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_31" value="31" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="32" />
                                                        <input type="hidden" name="roles_permissions_id_32" value="43" />


                                                        Add Item Stock</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_32" value="32" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_32" value="32" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_32" value="32" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_32" value="32" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="33" />
                                                        <input type="hidden" name="roles_permissions_id_33" value="44" />


                                                        Add Item</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_33" value="33" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_33" value="33" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_33" value="33" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_33" value="33" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="34" />
                                                        <input type="hidden" name="roles_permissions_id_34" value="45" />


                                                        Item Store</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_34" value="34" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_34" value="34" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_34" value="34" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_34" value="34" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="35" />
                                                        <input type="hidden" name="roles_permissions_id_35" value="46" />


                                                        Item Supplier</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_35" value="35" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_35" value="35" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_35" value="35" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_35" value="35" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="104" />
                                                        <input type="hidden" name="roles_permissions_id_104" value="47" />


                                                        Item Category</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_104" value="104" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_104" value="104" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_104" value="104" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_104" value="104" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Transport</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="37" />
                                                        <input type="hidden" name="roles_permissions_id_37" value="48" />
                                                        Routes</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_37" value="37" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_37" value="37" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_37" value="37" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_37" value="37" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="38" />
                                                        <input type="hidden" name="roles_permissions_id_38" value="49" />


                                                        Vehicle</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_38" value="38" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_38" value="38" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_38" value="38" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_38" value="38" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="39" />
                                                        <input type="hidden" name="roles_permissions_id_39" value="120" />


                                                        Assign Vehicle</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_39" value="39" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_39" value="39" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_39" value="39" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_39" value="39" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Hostel</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="40" />
                                                        <input type="hidden" name="roles_permissions_id_40" value="159" />
                                                        Hostel</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_40" value="40" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_40" value="40" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_40" value="40" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_40" value="40" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="41" />
                                                        <input type="hidden" name="roles_permissions_id_41" value="160" />


                                                        Room Type</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_41" value="41" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_41" value="41" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_41" value="41" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_41" value="41" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="42" />
                                                        <input type="hidden" name="roles_permissions_id_42" value="161" />


                                                        Hostel Rooms</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_42" value="42" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_42" value="42" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_42" value="42" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_42" value="42" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Communicate</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="43" />
                                                        <input type="hidden" name="roles_permissions_id_43" value="1086" />
                                                        Notice Board</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_43" value="43" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_43" value="43" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_43" value="43" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_43" value="43" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="44" />
                                                        <input type="hidden" name="roles_permissions_id_44" value="1087" />


                                                        Email</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_44" value="44" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="46" />
                                                        <input type="hidden" name="roles_permissions_id_46" value="1088" />


                                                        Email / SMS Log</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_46" value="46" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="217" />
                                                        <input type="hidden" name="roles_permissions_id_217" value="1089" />


                                                        SMS</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_217" value="217" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Reports</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="146" />
                                                        <input type="hidden" name="roles_permissions_id_146" value="836" />
                                                        Student Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_146" value="146" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="147" />
                                                        <input type="hidden" name="roles_permissions_id_147" value="837" />


                                                        Guardian Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_147" value="147" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="148" />
                                                        <input type="hidden" name="roles_permissions_id_148" value="838" />


                                                        Student History</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_148" value="148" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="149" />
                                                        <input type="hidden" name="roles_permissions_id_149" value="839" />


                                                        Student Login Credential Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_149" value="149" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="150" />
                                                        <input type="hidden" name="roles_permissions_id_150" value="840" />


                                                        Class Subject Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_150" value="150" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="151" />
                                                        <input type="hidden" name="roles_permissions_id_151" value="841" />


                                                        Admission Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_151" value="151" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="152" />
                                                        <input type="hidden" name="roles_permissions_id_152" value="842" />


                                                        Sibling Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_152" value="152" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="153" />
                                                        <input type="hidden" name="roles_permissions_id_153" value="677" />


                                                        Homework Evaluation Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_153" value="153" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="154" />
                                                        <input type="hidden" name="roles_permissions_id_154" value="843" />


                                                        Student Profile</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_154" value="154" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="155" />
                                                        <input type="hidden" name="roles_permissions_id_155" value="862" />


                                                        Fees Statement</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_155" value="155" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="156" />
                                                        <input type="hidden" name="roles_permissions_id_156" value="863" />


                                                        Balance Fees Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_156" value="156" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="157" />
                                                        <input type="hidden" name="roles_permissions_id_157" value="864" />


                                                        Fees Collection Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_157" value="157" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="158" />
                                                        <input type="hidden" name="roles_permissions_id_158" value="874" />


                                                        Online Fees Collection Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_158" value="158" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="159" />
                                                        <input type="hidden" name="roles_permissions_id_159" value="875" />


                                                        Income Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_159" value="159" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="160" />
                                                        <input type="hidden" name="roles_permissions_id_160" value="876" />


                                                        Expense Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_160" value="160" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="161" />
                                                        <input type="hidden" name="roles_permissions_id_161" value="936" />


                                                        PayRoll Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_161" value="161" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="162" />
                                                        <input type="hidden" name="roles_permissions_id_162" value="878" />


                                                        Income Group Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_162" value="162" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="163" />
                                                        <input type="hidden" name="roles_permissions_id_163" value="879" />


                                                        Expense Group Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_163" value="163" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="164" />
                                                        <input type="hidden" name="roles_permissions_id_164" value="882" />


                                                        Attendance Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_164" value="164" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="165" />
                                                        <input type="hidden" name="roles_permissions_id_165" value="884" />


                                                        Staff Attendance Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_165" value="165" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="174" />
                                                        <input type="hidden" name="roles_permissions_id_174" value="941" />


                                                        Transport Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_174" value="174" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="175" />
                                                        <input type="hidden" name="roles_permissions_id_175" value="1083" />


                                                        Hostel Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_175" value="175" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="176" />
                                                        <input type="hidden" name="roles_permissions_id_176" value="943" />


                                                        Audit Trail Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_176" value="176" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="177" />
                                                        <input type="hidden" name="roles_permissions_id_177" value="944" />


                                                        User Log</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_177" value="177" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="178" />
                                                        <input type="hidden" name="roles_permissions_id_178" value="934" />


                                                        Book Issue Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_178" value="178" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="179" />
                                                        <input type="hidden" name="roles_permissions_id_179" value="935" />


                                                        Book Due Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_179" value="179" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="180" />
                                                        <input type="hidden" name="roles_permissions_id_180" value="937" />


                                                        Book Inventory Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_180" value="180" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="181" />
                                                        <input type="hidden" name="roles_permissions_id_181" value="938" />


                                                        Stock Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_181" value="181" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="182" />
                                                        <input type="hidden" name="roles_permissions_id_182" value="939" />


                                                        Add Item Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_182" value="182" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="183" />
                                                        <input type="hidden" name="roles_permissions_id_183" value="940" />


                                                        Issue Item Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_183" value="183" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="197" />
                                                        <input type="hidden" name="roles_permissions_id_197" value="886" />


                                                        Student Attendance Type Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_197" value="197" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="198" />
                                                        <input type="hidden" name="roles_permissions_id_198" value="732" />


                                                        Exam Marks Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_198" value="198" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="200" />
                                                        <input type="hidden" name="roles_permissions_id_200" value="734" />


                                                        Online Exam Wise Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_200" value="200" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="201" />
                                                        <input type="hidden" name="roles_permissions_id_201" value="735" />


                                                        Online Exams Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_201" value="201" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="202" />
                                                        <input type="hidden" name="roles_permissions_id_202" value="736" />


                                                        Online Exams Attempt Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_202" value="202" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="203" />
                                                        <input type="hidden" name="roles_permissions_id_203" value="737" />


                                                        Online Exams Rank Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_203" value="203" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="204" />
                                                        <input type="hidden" name="roles_permissions_id_204" value="932" />


                                                        Staff Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_204" value="204" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="219" />
                                                        <input type="hidden" name="roles_permissions_id_219" value="887" />


                                                        Student / Period Attendance Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_219" value="219" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="220" />
                                                        <input type="hidden" name="roles_permissions_id_220" value="889" />


                                                        Biometric Attendance Log</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_220" value="220" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="221" />
                                                        <input type="hidden" name="roles_permissions_id_221" value="933" />


                                                        Book Issue Return Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_221" value="221" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="223" />
                                                        <input type="hidden" name="roles_permissions_id_223" value="1092" />


                                                        Rank Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_223" value="223" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="240" />
                                                        <input type="hidden" name="roles_permissions_id_240" value="1458" />


                                                        Syllabus Status Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_240" value="240" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="241" />
                                                        <input type="hidden" name="roles_permissions_id_241" value="1459" />


                                                        Teacher Syllabus Status Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_241" value="241" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="242" />
                                                        <input type="hidden" name="roles_permissions_id_242" value="1460" />


                                                        Alumni Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_242" value="242" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="244" />
                                                        <input type="hidden" name="roles_permissions_id_244" value="1467" />


                                                        Student Gender Ratio Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_244" value="244" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="245" />
                                                        <input type="hidden" name="roles_permissions_id_245" value="1468" />


                                                        Student Teacher Ratio Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_245" value="245" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="246" />
                                                        <input type="hidden" name="roles_permissions_id_246" value="1469" />


                                                        Daily Attendance Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_246" value="246" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>System Settings</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="53" />
                                                        <input type="hidden" name="roles_permissions_id_53" value="945" />
                                                        Languages</td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_53" value="53" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_53" value="53" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="54" />
                                                        <input type="hidden" name="roles_permissions_id_54" value="178" />


                                                        General Setting</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_54" value="54" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_54" value="54" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="55" />
                                                        <input type="hidden" name="roles_permissions_id_55" value="61" />


                                                        Session Setting</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_55" value="55" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_55" value="55" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_55" value="55" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_55" value="55" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="56" />
                                                        <input type="hidden" name="roles_permissions_id_56" value="179" />


                                                        Notification Setting</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_56" value="56" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_56" value="56" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="57" />
                                                        <input type="hidden" name="roles_permissions_id_57" value="180" />


                                                        SMS Setting</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_57" value="57" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_57" value="57" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="58" />
                                                        <input type="hidden" name="roles_permissions_id_58" value="181" />


                                                        Email Setting</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_58" value="58" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_58" value="58" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="59" />
                                                        <input type="hidden" name="roles_permissions_id_59" value="182" />


                                                        Front CMS Setting</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_59" value="59" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_59" value="59" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="60" />
                                                        <input type="hidden" name="roles_permissions_id_60" value="183" />


                                                        Payment Methods</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_60" value="60" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_60" value="60" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="126" />
                                                        <input type="hidden" name="roles_permissions_id_126" value="307" />


                                                        User Status</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_126" value="126" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="130" />
                                                        <input type="hidden" name="roles_permissions_id_130" value="474" />


                                                        Backup</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_130" value="130" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_130" value="130" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_130" value="130" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="131" />
                                                        <input type="hidden" name="roles_permissions_id_131" value="476" />


                                                        Restore</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_131" value="131" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="213" />
                                                        <input type="hidden" name="roles_permissions_id_213" value="947" />


                                                        Language Switcher</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_213" value="213" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="215" />
                                                        <input type="hidden" name="roles_permissions_id_215" value="946" />


                                                        Custom Fields</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_215" value="215" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="216" />
                                                        <input type="hidden" name="roles_permissions_id_216" value="720" />


                                                        System Fields</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_216" value="216" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="233" />
                                                        <input type="hidden" name="roles_permissions_id_233" value="1443" />


                                                        Print Header Footer</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_233" value="233" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="243" />
                                                        <input type="hidden" name="roles_permissions_id_243" value="1464" />


                                                        Student Profile Update</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_243" value="243" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Front CMS</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="61" />
                                                        <input type="hidden" name="roles_permissions_id_61" value="67" />
                                                        Menus</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_61" value="61" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_61" value="61" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_61" value="61" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="62" />
                                                        <input type="hidden" name="roles_permissions_id_62" value="68" />


                                                        Media Manager</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_62" value="62" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_62" value="62" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_62" value="62" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="63" />
                                                        <input type="hidden" name="roles_permissions_id_63" value="69" />


                                                        Banner Images</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_63" value="63" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_63" value="63" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_63" value="63" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="64" />
                                                        <input type="hidden" name="roles_permissions_id_64" value="70" />


                                                        Pages</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_64" value="64" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_64" value="64" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_64" value="64" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_64" value="64" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="65" />
                                                        <input type="hidden" name="roles_permissions_id_65" value="71" />


                                                        Gallery</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_65" value="65" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_65" value="65" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_65" value="65" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_65" value="65" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="66" />
                                                        <input type="hidden" name="roles_permissions_id_66" value="72" />


                                                        Event</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_66" value="66" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_66" value="66" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_66" value="66" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_66" value="66" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="67" />
                                                        <input type="hidden" name="roles_permissions_id_67" value="73" />


                                                        News</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_67" value="67" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_67" value="67" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_67" value="67" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_67" value="67" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Front Office</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="78" />
                                                        <input type="hidden" name="roles_permissions_id_78" value="11" />
                                                        Admission Enquiry</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_78" value="78" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_78" value="78" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_78" value="78" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_78" value="78" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="79" />
                                                        <input type="hidden" name="roles_permissions_id_79" value="74" />


                                                        Follow Up Admission Enquiry</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_79" value="79" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_79" value="79" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_79" value="79" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="80" />
                                                        <input type="hidden" name="roles_permissions_id_80" value="75" />


                                                        Visitor Book</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_80" value="80" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_80" value="80" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_80" value="80" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_80" value="80" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="81" />
                                                        <input type="hidden" name="roles_permissions_id_81" value="76" />


                                                        Phone Call Log</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_81" value="81" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_81" value="81" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_81" value="81" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_81" value="81" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="82" />
                                                        <input type="hidden" name="roles_permissions_id_82" value="94" />


                                                        Postal Dispatch</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_82" value="82" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_82" value="82" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_82" value="82" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_82" value="82" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="83" />
                                                        <input type="hidden" name="roles_permissions_id_83" value="78" />


                                                        Postal Receive</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_83" value="83" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_83" value="83" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_83" value="83" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_83" value="83" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="84" />
                                                        <input type="hidden" name="roles_permissions_id_84" value="79" />


                                                        Complain</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_84" value="84" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_84" value="84" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_84" value="84" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_84" value="84" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="85" />
                                                        <input type="hidden" name="roles_permissions_id_85" value="80" />


                                                        Setup Font Office</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_85" value="85" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_85" value="85" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_85" value="85" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_85" value="85" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Human Resource</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="86" />
                                                        <input type="hidden" name="roles_permissions_id_86" value="464" />
                                                        Staff</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_86" value="86" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_86" value="86" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_86" value="86" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_86" value="86" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="87" />
                                                        <input type="hidden" name="roles_permissions_id_87" value="825" />


                                                        Disable Staff</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_87" value="87" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="88" />
                                                        <input type="hidden" name="roles_permissions_id_88" value="794" />


                                                        Staff Attendance</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_88" value="88" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_88" value="88" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_88" value="88" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="90" />
                                                        <input type="hidden" name="roles_permissions_id_90" value="795" />


                                                        Staff Payroll</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_90" value="90" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_90" value="90" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_90" value="90" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="108" />
                                                        <input type="hidden" name="roles_permissions_id_108" value="796" />


                                                        Approve Leave Request</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_108" value="108" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_108" value="108" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_108" value="108" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="108" />
                                                        <input type="hidden" name="roles_permissions_id_108" value="1466" />


                                                        Approve Leave Request</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_108" value="108" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_108" value="108" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_108" value="108" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="109" />
                                                        <input type="hidden" name="roles_permissions_id_109" value="797" />


                                                        Apply Leave</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_109" value="109" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_109" value="109" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="109" />
                                                        <input type="hidden" name="roles_permissions_id_109" value="1465" />


                                                        Apply Leave</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_109" value="109" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_109" value="109" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="110" />
                                                        <input type="hidden" name="roles_permissions_id_110" value="798" />


                                                        Leave Types </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_110" value="110" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_110" value="110" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_110" value="110" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_110" value="110" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="111" />
                                                        <input type="hidden" name="roles_permissions_id_111" value="799" />


                                                        Department</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_111" value="111" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_111" value="111" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_111" value="111" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_111" value="111" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="112" />
                                                        <input type="hidden" name="roles_permissions_id_112" value="800" />


                                                        Designation</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_112" value="112" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_112" value="112" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_112" value="112" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_112" value="112" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="127" />
                                                        <input type="hidden" name="roles_permissions_id_127" value="792" />


                                                        Can See Other Users Profile</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_127" value="127" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="129" />
                                                        <input type="hidden" name="roles_permissions_id_129" value="801" />


                                                        Staff Timeline</td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_129" value="129" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_129" value="129" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="189" />
                                                        <input type="hidden" name="roles_permissions_id_189" value="802" />


                                                        Teachers Rating</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_189" value="189" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_189" value="189" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_189" value="189" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Homework</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="93" />
                                                        <input type="hidden" name="roles_permissions_id_93" value="817" />
                                                        Homework</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_93" value="93" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_93" value="93" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_93" value="93" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_93" value="93" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="94" />
                                                        <input type="hidden" name="roles_permissions_id_94" value="829" />


                                                        Homework Evaluation</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_94" value="94" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_94" value="94" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Certificate</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="96" />
                                                        <input type="hidden" name="roles_permissions_id_96" value="435" />
                                                        Student Certificate</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_96" value="96" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_96" value="96" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_96" value="96" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_96" value="96" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="97" />
                                                        <input type="hidden" name="roles_permissions_id_97" value="461" />


                                                        Generate Certificate</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_97" value="97" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="98" />
                                                        <input type="hidden" name="roles_permissions_id_98" value="1090" />


                                                        Student ID Card</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_98" value="98" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_98" value="98" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_98" value="98" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_98" value="98" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="99" />
                                                        <input type="hidden" name="roles_permissions_id_99" value="1091" />


                                                        Generate ID Card</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_99" value="99" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="248" />
                                                        <input type="hidden" name="roles_permissions_id_248" value="1473" />


                                                        Staff ID Card</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_248" value="248" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_248" value="248" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_248" value="248" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_248" value="248" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="249" />
                                                        <input type="hidden" name="roles_permissions_id_249" value="1474" />


                                                        Generate Staff ID Card</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_249" value="249" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Calendar To Do List</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="102" />
                                                        <input type="hidden" name="roles_permissions_id_102" value="369" />
                                                        Calendar To Do List</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_102" value="102" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_102" value="102" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_102" value="102" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_102" value="102" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th>Dashboard and Widgets</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="106" />
                                                        <input type="hidden" name="roles_permissions_id_106" value="1394" />
                                                        Quick Session Change</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_106" value="106" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="113" />
                                                        <input type="hidden" name="roles_permissions_id_113" value="1395" />


                                                        Fees Collection And Expense Monthly Chart</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_113" value="113" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="114" />
                                                        <input type="hidden" name="roles_permissions_id_114" value="1396" />


                                                        Fees Collection And Expense Yearly Chart</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_114" value="114" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="115" />
                                                        <input type="hidden" name="roles_permissions_id_115" value="1397" />


                                                        Monthly Fees Collection Widget</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_115" value="115" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="116" />
                                                        <input type="hidden" name="roles_permissions_id_116" value="1398" />


                                                        Monthly Expense Widget</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_116" value="116" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="117" />
                                                        <input type="hidden" name="roles_permissions_id_117" value="1399" />


                                                        Student Count Widget</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_117" value="117" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="118" />
                                                        <input type="hidden" name="roles_permissions_id_118" value="1400" />


                                                        Staff Role Count Widget</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_118" value="118" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="190" />
                                                        <input type="hidden" name="roles_permissions_id_190" value="1413" />


                                                        Fees Awaiting Payment Widegts</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_190" value="190" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="191" />
                                                        <input type="hidden" name="roles_permissions_id_191" value="1402" />


                                                        Conveted Leads Widegts</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_191" value="191" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="192" />
                                                        <input type="hidden" name="roles_permissions_id_192" value="1403" />


                                                        Fees Overview Widegts</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_192" value="192" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="193" />
                                                        <input type="hidden" name="roles_permissions_id_193" value="1404" />


                                                        Enquiry Overview Widegts</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_193" value="193" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="194" />
                                                        <input type="hidden" name="roles_permissions_id_194" value="1405" />


                                                        Library Overview Widegts</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_194" value="194" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="195" />
                                                        <input type="hidden" name="roles_permissions_id_195" value="1406" />


                                                        Student Today Attendance Widegts</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_195" value="195" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="226" />
                                                        <input type="hidden" name="roles_permissions_id_226" value="1410" />


                                                        Income Donut Graph</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_226" value="226" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="227" />
                                                        <input type="hidden" name="roles_permissions_id_227" value="1408" />


                                                        Expense Donut Graph</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_227" value="227" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="229" />
                                                        <input type="hidden" name="roles_permissions_id_229" value="1411" />


                                                        Staff Present Today Widegts</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_229" value="229" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="230" />
                                                        <input type="hidden" name="roles_permissions_id_230" value="1412" />


                                                        Student Present Today Widegts</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_230" value="230" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Online Examination</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="185" />
                                                        <input type="hidden" name="roles_permissions_id_185" value="728" />
                                                        Online Examination</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_185" value="185" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_185" value="185" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_185" value="185" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_185" value="185" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="186" />
                                                        <input type="hidden" name="roles_permissions_id_186" value="729" />


                                                        Question Bank</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_186" value="186" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_186" value="186" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_186" value="186" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_186" value="186" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="214" />
                                                        <input type="hidden" name="roles_permissions_id_214" value="730" />


                                                        Add Questions in Exam </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_214" value="214" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_214" value="214" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="222" />
                                                        <input type="hidden" name="roles_permissions_id_222" value="787" />


                                                        Assign / View Student</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_222" value="222" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_222" value="222" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="247" />
                                                        <input type="hidden" name="roles_permissions_id_247" value="1470" />


                                                        Import Question</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_247" value="247" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Chat</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="224" />
                                                        <input type="hidden" name="roles_permissions_id_224" value="974" />
                                                        Chat</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_224" value="224" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th>Multi Class</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="231" />
                                                        <input type="hidden" name="roles_permissions_id_231" value="1420" />
                                                        Multi Class Student</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_231" value="231" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_231" value="231" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_231" value="231" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_231" value="231" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th>Online Admission</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="232" />
                                                        <input type="hidden" name="roles_permissions_id_232" value="1421" />
                                                        Online Admission</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_232" value="232" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_232" value="232" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_232" value="232" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th>Alumni</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="234" />
                                                        <input type="hidden" name="roles_permissions_id_234" value="1446" />
                                                        Manage Alumni</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_234" value="234" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_234" value="234" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_234" value="234" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_234" value="234" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="235" />
                                                        <input type="hidden" name="roles_permissions_id_235" value="1447" />


                                                        Events</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_235" value="235" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_235" value="235" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_235" value="235" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_235" value="235" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Lesson Plan</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="236" />
                                                        <input type="hidden" name="roles_permissions_id_236" value="1448" />
                                                        Manage Lesson Plan</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_236" value="236" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_236" value="236" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_236" value="236" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="237" />
                                                        <input type="hidden" name="roles_permissions_id_237" value="1449" />


                                                        Manage Syllabus Status</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_237" value="237" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_237" value="237" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="238" />
                                                        <input type="hidden" name="roles_permissions_id_238" value="1450" />


                                                        Lesson</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_238" value="238" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_238" value="238" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_238" value="238" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_238" value="238" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="239" />
                                                        <input type="hidden" name="roles_permissions_id_239" value="1451" />


                                                        Topic</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_239" value="239" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_239" value="239" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_239" value="239" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_239" value="239" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Zoom Live Classes</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="5001" />
                                                        <input type="hidden" name="roles_permissions_id_5001" value="1543" />
                                                        Setting</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_5001" value="5001" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_5001" value="5001" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="5002" />
                                                        <input type="hidden" name="roles_permissions_id_5002" value="1542" />


                                                        Live Classes</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_5002" value="5002" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_5002" value="5002" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_5002" value="5002" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="5003" />
                                                        <input type="hidden" name="roles_permissions_id_5003" value="1540" />


                                                        Live Meeting</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_5003" value="5003" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_5003" value="5003" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_5003" value="5003" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="5004" />
                                                        <input type="hidden" name="roles_permissions_id_5004" value="1535" />


                                                        Live Meeting Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_5004" value="5004" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="5005" />
                                                        <input type="hidden" name="roles_permissions_id_5005" value="1532" />


                                                        Live Classes Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_5005" value="5005" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Gmeet Live Classes</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="6001" />
                                                        <input type="hidden" name="roles_permissions_id_6001" value="1515" />
                                                        Live Classes</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_6001" value="6001" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_6001" value="6001" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_6001" value="6001" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="6002" />
                                                        <input type="hidden" name="roles_permissions_id_6002" value="1516" />


                                                        Live Meeting</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_6002" value="6002" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_6002" value="6002" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_6002" value="6002" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="6003" />
                                                        <input type="hidden" name="roles_permissions_id_6003" value="1517" />


                                                        Live Meeting Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_6003" value="6003" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="6004" />
                                                        <input type="hidden" name="roles_permissions_id_6004" value="1518" />


                                                        Live Classes Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_6004" value="6004" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="6005" />
                                                        <input type="hidden" name="roles_permissions_id_6005" value="1519" />


                                                        Setting</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_6005" value="6005" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_6005" value="6005" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Online Course</th>
                                                    <td>

                                                        <input type="hidden" name="per_cat[]" value="7001" />
                                                        <input type="hidden" name="roles_permissions_id_7001" value="1481" />
                                                        Online Course</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_7001" value="7001" checked="checked">
                                                        </label>


                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_7001" value="7001" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_7001" value="7001" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_7001" value="7001" checked="checked">
                                                        </label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="7002" />
                                                        <input type="hidden" name="roles_permissions_id_7002" value="1482" />


                                                        Course Publish</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_7002" value="7002" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="7003" />
                                                        <input type="hidden" name="roles_permissions_id_7003" value="1483" />


                                                        Course Section</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_7003" value="7003" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_7003" value="7003" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_7003" value="7003" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_7003" value="7003" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="7004" />
                                                        <input type="hidden" name="roles_permissions_id_7004" value="1485" />


                                                        Course Lesson</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_7004" value="7004" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_7004" value="7004" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_7004" value="7004" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_7004" value="7004" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="7005" />
                                                        <input type="hidden" name="roles_permissions_id_7005" value="1484" />


                                                        Course Quiz</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_7005" value="7005" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_7005" value="7005" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_edit-perm_7005" value="7005" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_delete-perm_7005" value="7005" checked="checked">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="7006" />
                                                        <input type="hidden" name="roles_permissions_id_7006" value="1486" />


                                                        Offline Payment</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_7006" value="7006" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_add-perm_7006" value="7006" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="7007" />
                                                        <input type="hidden" name="roles_permissions_id_7007" value="1487" />


                                                        Student Course Purchase Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_7007" value="7007" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="7008" />
                                                        <input type="hidden" name="roles_permissions_id_7008" value="1488" />


                                                        Course Sell Count Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_7008" value="7008" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="7009" />
                                                        <input type="hidden" name="roles_permissions_id_7009" value="1489" />


                                                        Course Trending Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_7009" value="7009" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="7010" />
                                                        <input type="hidden" name="roles_permissions_id_7010" value="1490" />


                                                        Course Complete Report</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_7010" value="7010" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="7011" />
                                                        <input type="hidden" name="roles_permissions_id_7011" value="1497" />


                                                        Setting</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_7011" value="7011" checked="checked">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="hidden" name="per_cat[]" value="7012" />
                                                        <input type="hidden" name="roles_permissions_id_7012" value="0" />


                                                        Not Purchased</td>
                                                    <td>
                                                        <label class="">
                                                            <input type="checkbox" name="can_view-perm_7012" value="7012">
                                                        </label>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>

                                            </tbody>

                                        </table>
                                    </div>
                                    <!--./table-responsive-->


                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info pull-right">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </section>
        </div>
        @include('admin.include.footer')