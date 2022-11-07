@include('admin.include.head');

<body class="hold-transition skin-blue fixed sidebar-mini">

    <div class="wrapper">

        @include('admin.include.header');

        @include('admin.include.sidebar');

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php if ($_GET['id'] != '') {
                $id = $_GET['id'];
            } ?>
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
                    <form id="form1" action="{{url('master/topic/create')}}" enctype="multipart/form-data" id="employeeform" name="employeeform" method="post" accept-charset="utf-8">

                        @csrf
                        <div class="col-md-9">
                            <!-- Horizontal Form -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add Topics </h3>
                                    <div class="box-tools pull-right">
                                        <a href="{{url('master/topic')}}" class="btn btn-sm btn-primary"><i class="fa fa-list-alt"></i> Topics List</a>

                                    </div>
                                </div><!-- /.box-header -->
                                <!-- form start -->


                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trade Group Name</label><small class="req"> *</small>
                                        <select id="tradegroup" name="tradegroup" placeholder="Enter Trade Group Name" class="form-control" required />
                                        <option value="">Select Trade Group</option>
                                        @foreach($list as $row)

                                        <option value="<?= $row->id ?>" <?php if (!empty($id)) {
                                                                            if ($res[0]->tradegroup == $row->id) {
                                                                                echo 'selected';
                                                                            }
                                                                        } ?>><?= $row->name ?> </option>
                                        @endforeach
                                        </select>
                                        <span class="text-danger">@error('tradegroup'){{$message}}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trade Name</label><small class="req"> *</small>
                                        <select id="trade" name="trade" placeholder="Enter Trade Group Name" class="form-control" required />
                                        <option value="">Select Trade</option>
                                        @if(!empty($id))
                                        <option value="<?= $res[0]->trade ?>" selected><?php $trades = DB::select('select name from trade where id=' . $res[0]->trade);
                                                                                        echo $trades[0]->name; ?></option>
                                        @endif
                                        </select>
                                        <span class="text-danger">@error('trade'){{$message}}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Subject Name</label><small class="req"> *</small>
                                        <select id="subject" name="subject" placeholder="Enter Trade Group Name" class="form-control" required />
                                        <option value="">Select Subject</option>
                                        @if(!empty($id))
                                        <option value="<?= $res[0]->subject ?>" selected><?php $subjects = DB::select('select name from subject where id=' . $res[0]->subject);
                                                                                        echo $subjects[0]->name; ?></option>
                                        @endif
                                        </select>
                                        <span class="text-danger">@error('subject'){{$message}}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Chapter Name</label><small class="req"> *</small>
                                        <select id="chapter" name="chapter" placeholder="Enter Trade Group Name" class="form-control" required />
                                        <option value="">Select Chapter</option>
                                        @if(!empty($id))
                                        <option value="<?= $res[0]->chapter ?>" selected><?php $chapter = DB::select('select name from chapter where id=' . $res[0]->chapter);
                                                                                        echo $chapter[0]->name; ?></option>
                                        @endif
                                        </select>
                                        <span class="text-danger">@error('chapter'){{$message}}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Topic Name</label><small class="req"> *</small>
                                        <input id="name" name="name" placeholder="Enter Trade Group Name" type="text" class="form-control" value="<?= $res[0]->name ?>" required />
                                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                    </div>
                                    <input type="hidden" name="uid" value="<?= $id ?>">
                                    <div class="form-group">
                                        <button type="submit" class="btn cfees btn-block"><i class="fa fa-save"></i> Save</button>
                                    </div>
                                </div><!-- /.box-body -->
                            </div>
                        </div>

                    </form>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#tradegroup').change(function() {
                            let groupid = $(this).val();
                            $.ajax({
                                url: '{{url("ajax/trade")}}',
                                type: "GET",
                                data: {
                                    'groupid': groupid,

                                },

                                success: function(data) {
                                    $('#trade').empty();
                                    $('#trade').append(data);

                                },


                            });
                        });

                        $('#trade').change(function() {
                            let groupid = $('#tradegroup').val();

                            let tradeid = $(this).val();
                            $.ajax({
                                url: '{{url("ajax/subject")}}',
                                type: "GET",
                                data: {
                                    'groupid': groupid,
                                    'tradeid': tradeid

                                },

                                success: function(data) {
                                    $('#subject').empty();
                                    $('#subject').append(data);

                                }
                            });
                        });

                        $('#subject').change(function() {
                            let groupid = $('#tradegroup').val();
                            let tradeid = $('#trade').val();
                            let subjectid = $(this).val();
                            $.ajax({
                                url: '{{url("ajax/chapter")}}',
                                type: "GET",
                                data: {
                                    'groupid': groupid,
                                    'tradeid': tradeid,
                                    'subjectid': subjectid,

                                },

                                success: function(data) {
                                    $('#chapter').empty();
                                    $('#chapter').append(data);

                                }


                            });
                        });
                    });
                </script>

            </section><!-- /.content -->
        </div>
        @include('admin.include.footer');