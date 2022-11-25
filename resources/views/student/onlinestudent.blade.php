@include('admin.include.head')

<body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="wrapper">
        @include('admin.include.header')
        @include('admin.include.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

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
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Student List</h3>
                                <div class="box-tools pull-right">
                                </div><!-- /.box-tools -->
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <div class="mailbox-messages">


                                    <table class="table table-striped table-bordered table-hover example" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                            <tr>
                                                <th>S.No</th>

                                                <th style="width:5%">Reference No</th>
                                                <th>Roll No</th>
                                                <th>Admission No</th>
                                                <th>Student Name</th>
                                                <th>Class</th>
                                                <th>Father Name</th>
                                                <th>Date of Birth</th>
                                                <th>Gender</th>

                                                <th style="width:10%">Student Mobile Number</th>
                                                <th>Form Status</th>
                                                <th>Payment Status</th>

                                                <th>Enrolled</th>
                                                <th class="text-right noExport ">Action</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach($list as $run)
                                            <tr role="row" class="odd">
                                                <td>{{$i++}}</td>

                                                <td>{{$run->refrence_no}}</td>
                                                <td>{{$run->roll_no}}</td>
                                                <td>{{$run->admission_no}}</td>
                                                <td>{{$run->firstname}} {{$run->lastname}}</td>
                                                <td>

                                                    <?php
                                                    $batchRow = DB::select('select batch from batches where id=' . $run->batch_id);
                                                    $classRow = DB::select('select class from classes where id=' . $run->class_id);

                                                    ?>
                                                    {{ $classRow[0]->class}} ({{ $batchRow[0]->batch; }})
                                                </td>
                                                <td>{{$run->father_name}}</td>
                                                <td>{{date('d/m/Y',strtotime($run->dob))}}</td>
                                                <td>{{$run->gender}}</td>

                                                <td>{{$run->mobileno}}</td>
                                                <td>
                                                    @if($run->form_status==1)
                                                    <span class="label label-success form_status">Submitted</span>
                                                    @else
                                                    <span class="label label-danger form_status">Not Submitted</span>
                                                    @endif

                                                </td>
                                                <td>
                                                    @if($run->pay_status==1)
                                                    <span class="label label-success pay_status">Paid</span>
                                                    @else
                                                    <span class="label label-danger pay_status">Unpaid</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($run->enrolled_status==1)
                                                    <i class="fa fa-check"></i><span style="display:none">Yes</span>
                                                    @else
                                                    <i class="fa fa-minus-circle"></i><span style="display:none">No</span>
                                                    @endif



                                                </td>
                                                <td class=" dt-body-right">
                                                    @if($run->photo!='')
                                                    <a data-placement="left" href="{{asset('')}}{{$run->photo}}" class="btn btn-default btn-xs" data-toggle="tooltip" title="Download" download>
                                                        <i class="fa fa-download"></i> </a>
                                                    @endif

                                                    <a data-placement="left" target="_blank" href="{{url('online_admission_review')}}/{{$run->refrence_no}}" class="btn btn-default btn-xs mt-5 pull-right" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></a>

                                                    <a data-placement="left" class="btn btn-default btn-xs mt-5 pull-right" data-toggle="tooltip" title="Edit" onclick="return checkpaymentstatus({{$run->id}},{{$run->form_status}},{{$run->pay_status}})"><i class="fa fa-edit"></i></a>

                                                    <a data-placement="left" href="{{url('student/onlinestudent?delid=')}}{{$run->id}}" class="btn btn-default btn-xs mt-5 pull-right" data-toggle="tooltip" title="Delete" onclick="return confirm(&quot;Delete Confirm?&quot;  )"><i class="fa fa-remove"></i></a>

                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div><!-- /.mail-box-messages -->
                            </div><!-- /.box-body -->

                        </div>
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->

                </div>
                <script>
                    function checkpaymentstatus(id, form_staus, pay_status) {
                        if (form_staus == 0 && pay_status == 0) {
                            let val = `Form Status  :  Not Submitted 
Payment Status  :  Unpaid

Do you still want to enroll it?
            `;
                            if (confirm(val)) {
                                window.location.href = "{{url('student/edit')}}/" + id;
                            } else {

                            }

                        }
                    }
                </script>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->


        @include('admin.include.footer')