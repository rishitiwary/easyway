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
                        <div class="box box-primary" id="holist">
                            <div class="box-header ptbnull">
                                <h3 class="box-title titlefix">Online Exam List</h3>
                                <div class="box-tools pull-right">
                                    <a href="{{url('master/chapter/create')}}" class="btn btn-sm btn-primary"><i
                                            class="fa fa-plus"></i> Add</a>

                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="download_label">Online Exam List</div>
                                <div class="mailbox-controls">
                                    <div class="pull-right">
                                    </div><!-- /.pull-right -->
                                </div>
                                <div class="mailbox-messages">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover example">
                                            <thead>
                                                <tr>
                                                    <th>Exam</th>
                                                    <th>Type</th>
                                                    <th>Questions</th>
                                                    <th>Attempt</th>
                                                    <th>Exam From</th>
                                                    <th>Exam To</th>
                                                    <th>Duration</th>
                                                    <th>Exam Publish</th>
                                                    <th>Result Publish</th>
                                                    <th class="text-right">
                                                        Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($list as $row)
                                                <tr>
                                                    <td>{{$row->exam}} </td>
                                                    <td>@if($row->is_live==1) Quize @else Exam @endif</td>
                                                    <td> </td>

                                                    <td>
                                                        {{$row->attempt}}

                                                    </td>
                                                    <td>
                                                        {{$row->exam_from}}

                                                    </td>
                                                    <td>
                                                        {{$row->exam_to}}

                                                    </td>
                                                    <td>
                                                        {{$row->duration}}

                                                    </td>
                                                    <td>@if($row->publish_exam_notification==1) <input type="checkbox"
                                                            name="exam_publish" checked> @else <input type="checkbox"
                                                            name="exam_publish"> @endif</td>
                                                    <td>@if($row->publish_result==1) <input type="checkbox"
                                                            name="result_publish" checked> @else <i
                                                            class="fa fa-exclamation-circle"></i> @endif</td>


                                                    <td class=" dt-body-right"><a
                                                            href="{{url('exam/onlineexam/assign/')}}/{{$row->id}}"
                                                            data-toggle="tooltip" class="btn btn-default btn-xs"
                                                            title="" view="" student="" data-original-title="Assign"><i
                                                                class="fa fa-tag"></i></a> <a type="button"
                                                            class="btn btn-default btn-xs"
                                                            href="{{url('exam/onlineexam/addquestion/')}}/{{$row->id}}"
                                                            data-is_quiz="0" title="Add" question=""><i
                                                                class="fa fa-question-circle"></i></a> 
                                                                <button
                                                            type="button" data-toggle="tooltip"
                                                            class="btn btn-default btn-xs question-btn-edit"
                                                            data-recordid="{{$row->id}}" title="" data-original-title="Edit"><i
                                                                class="fa fa fa-pencil"></i></button>
                                                                 <button
                                                            class="btn btn-default btn-xs exam_ques_list"
                                                            data-toggle="tooltip" data-recordid="{{$row->id}}"
                                                            data-loading-text="<i class=&quot; fa fa-spinner fa-spin&quot;  ></i>"
                                                            title="Exam Questions List"><i
                                                                class="fa fa-file-text-o"></i></button> <a
                                                            href="{{url('exam/onlineexam/evalution')}}/{{$row->id}}"
                                                            class="btn btn-default btn-xs" data-toggle="tooltip"
                                                            title="Exam Evaluation"> <i
                                                                class="fa fa-newspaper-o"></i></a> <a
                                                            href="{{url('exam/onlineexam/printexam')}}/{{$row->id}}"
                                                            class="btn btn-default btn-xs" data-toggle="tooltip"
                                                            title="Print Exam"> <i class="fa fa-print"></i></a> <a
                                                            href="{{url('admin/onlineexam')}}?id={{$row->id}}"
                                                            class="btn btn-default btn-xs" data-toggle="tooltip"
                                                            title="Delete" onclick="return confirm('Are you sure...?')"><i class="fa fa fa-remove"></i></a></td>
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

        @include(' admin.include.footer');