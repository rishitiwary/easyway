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
                                            <a type="button" class="btn btn-sm btn-primary miusttop5" href="{{url('admin/addcourse')}}"><i class="fa fa-plus"></i> Create Course</a>
                                        </div>
                                        <!--./nav-tabs-custom -->
                                        <form class="navbar-form pull-right miusttop5" id="search_area" role="search" action="{{url('admin/course')}}" method="GET">
                                            <input type='hidden' name='ci_csrf_token' value='' />
                                            <div class="input-group">
                                                <input type="text" value="" name="search_course" id="search_course" class="form-control search-form" placeholder="Search By Course Name">
                                                <span class="input-group-btn">
                                                    <button type="submit" name="search" id="search-btn" style="" class="btn btn-flat topsidesearchbtn"><i class="fa fa-search"></i></button>
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
                                                                <td><?php $res = DB::select('select name from tradegroup where id=' . $row->tradegroup_id);
                                                                    echo $res[0]->name;
                                                                    ?></td>
                                                                <td><?php $res = DB::select('select name from trade where id=' . $row->trade_id);
                                                                    echo $res[0]->name;
                                                                    ?></td>
                                                                <td><?= $row->validity ?></td>
                                                                <td><?= date('d/m/Y', strtotime($row->expiry)); ?></td>
                                                                <td><?= $row->free_course ? 'Free' : 'Paid' ?></td>

                                                                <td><small class='label label-<?php if ($row->status == '1') {
                                                                                                    echo 'success';
                                                                                                } else {
                                                                                                    echo 'warning';
                                                                                                } ?>'><?= $row->status ? 'Published' : 'Unpublished' ?></small></span>
                                                                </td>
                                                                <td class="pull-right no-print">
                                                                    <a data-placement="left" href="{{url('admin/addcontent')}}/{{$row->id}}" role="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Add Content"><i class="fa fa-plus"></i></a>
                                                                    <a data-placement="left" href="#leavedetails" onclick="getRecord('<?= $row->id ?>','<?= $row->applied_by ?>','<?= $row->leave_type ?>','<?= $row->leave_days ?>','<?= $row->applieddate ?>','<?= $row->status ?>','<?= $row->employee_remark ?>','<?= $row->admin_remark ?>')" role="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="View"><i class="fa fa-reorder"></i></a>
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

    <script>
        $(document).ready(function() {
            $('#course_detail_tab').show();
        });
    </script>

    @include('admin.include.footer');