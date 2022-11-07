@include('admin.include.head');

<body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="wrapper">

        @include('admin.include.header');
        @include('admin.include.sidebar');

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    <i class="fa fa-building-o"></i> Hostel</small>
                </h1>
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
                    <div class="col-md-4">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Add Leave Types</h3>
                            </div>
                            <form id="form1" action="{{url('admin/leavetypes')}}" id="employeeform"
                                name="employeeform" method="post" accept-charset="utf-8">
                                <input type="hidden" name="uid" value="<?=$res[0]->id?>">
                                <div class="box-body">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Type</label><small class="req"> *</small>
                                        <input autofocus="" id="name" name="type" placeholder="" type="text"
                                            class="form-control" value="<?=$res[0]->type?>"  required/>
                                            <span class="text-danger">@error('type'){{$message}}@enderror</span>
                                    </div>
                                    
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info pull-right">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="box box-primary" id="rtype">
                            <div class="box-header ptbnull">
                                <h3 class="box-title titlefix">Leave Type List</h3>
                            </div>
                            <div class="box-body">
                                <div class="mailbox-controls">
                                    <div class="pull-right">

                                    </div><!-- /.pull-right -->
                                </div>
                                <div class="mailbox-messages">
                                    <div class="download_label">Leave Type List</div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover example">
                                            <thead>
                                                <tr>
                                                    <th>Type</th>
                                                    <th class="text-right no-print">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($list as $row)
                                                <tr>
                                                    <td class="mailbox-name">
                                                        <a href="#" data-toggle="popover" class="detail_popover"><?=$row->type?></a>
                                                      
                                                    </td>
                                                    <td class="mailbox-date pull-right no-print">
                                                        <a data-placement="left"
                                                            href="{{url('admin/leavetypes?uid=')}}<?=$row->id?>"
                                                            class="btn btn-default btn-xs" data-toggle="tooltip"
                                                            title="Edit">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a data-placement="left"
                                                            href="{{url('admin/leavetypes?delid=')}}<?=$row->id?>"
                                                            class="btn btn-default btn-xs" data-toggle="tooltip"
                                                            title="Delete" onclick="return confirm('Delete Confirm?');">
                                                            <i class="fa fa-remove"></i>
                                                        </a>
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
                
            </section>
        </div>


        @include('admin.include.footer');