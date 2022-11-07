@include('admin.include.head');

<body class="hold-transition skin-blue fixed sidebar-mini">



    <div class="wrapper">

        @include('admin.include.header');
        @include('admin.include.sidebar');


        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    <i class="fa fa-empire"></i> Tutorial </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                @if(session('success'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> <?=@session('success')?>.
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger">
                        <strong>Error!</strong> <?=@session('error')?>.
                    </div>
                    @endif
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="box box-primary" id="holist">
                            <div class="box-header ptbnull">
                                <h3 class="box-title titlefix">Trade Group List</h3>
                                <div class="box-tools pull-right">
                                    <a href="{{url('master/tradegroup/create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add</a>

                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="download_label">Trade Group List</div>
                                <div class="mailbox-controls">
                                    <div class="pull-right">
                                    </div><!-- /.pull-right -->
                                </div>
                                <div class="mailbox-messages">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover example">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th class="text-right no-print">
                                                        Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php $i=1;?>
                                                @foreach($list as $row)
                                              
                                                
                                       
                                                <tr id="5">
                                                      <td><?=$i++?></td>  
                                                    <td class="mailbox-name">
                                                        <a href="#"><?=$row->name?></a>


                                                    </td>
                                                    <td class="mailbox-date pull-right no-print">
                                                        <a data-placement="left" href="{{url('master/tradegroup/create/?id=')}}<?=$row->id?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a data-placement="left" href="{{url('master/tradegroup?id=')}}<?=$row->id?>" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete" onclick="return confirm('Delete Confirm?');">
                                                            <i class="fa fa-remove"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table><!-- /.table -->
                                    </div>
                                </div><!-- /.mail-box-messages -->
                            </div><!-- /.box-body -->
                        </div>
                    </div>
                    <!--/.col (left) -->
                </div>

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        @include('admin.include.footer');