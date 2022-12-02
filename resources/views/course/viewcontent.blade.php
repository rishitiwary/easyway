@include('admin.include.head');

<body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="wrapper">
        @include('admin.include.header');
        @include('admin.include.sidebar');
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1><i class="fa fa-gears"></i> Add Contents</h1>
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
                    <div class="col-lg-1 col-md-6 col-sm-12">
                        <!-- general form elements -->
                    </div>
                    <div class="col-lg-10 col-md-6 col-sm-12 uploadsticky">
                        <div class="box box-primary">
                            <div class="box-body text-center">
                                <label for="exampleInputFile">CONTENTS FOR {{strtoupper($list[0]->title)}}</label>
                                <br>
                                <br>
                                <div id="dynamic_folder">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-6 col-sm-12">
                        <!-- general form elements -->
                    </div>
                </div>
        </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <script>
        $(document).ready(function() {
            let folderid = "0";
            let coursid = "{{$list[0]->id}}";

            $.ajax({
                url: "{{url('ajax/dynamic_folder')}}",
                type: "GET",
                data: {
                    folderid: folderid,
                    coursid: coursid
                },
                dataType: 'html',
                success: function(res) {
                    $('#dynamic_folder').empty();
                    $('#dynamic_folder').append(res);
                }
            });
        });
    </script>
    <script>
        function ajax_folder(status, id, type) {
            let folderid = $('#folderid').val();
            let coursid = $('#coursid').val();
            $.ajax({
                url: "{{url('ajax/dynamic_folder')}}",
                type: "GET",
                data: {
                    id: id,
                    status: status,
                    folderid: folderid,
                    coursid: coursid,
                    type: type
                },
                dataType: 'html',
                success: function(res) {
                    $('#dynamic_folder').empty();
                    $('#dynamic_folder').append(res);
                }
            });
        }


        $(document).on('click', '.view_folder', function(e) {
            let folderid = $(this).attr("data-id");
            let coursid = $('#coursid').val();
            $.ajax({
                url: "{{url('ajax/dynamic_folder')}}",
                type: "GET",
                data: {
                    folderid: folderid,
                    coursid: coursid
                },
                dataType: 'html',
                success: function(res) {
                    $('#dynamic_folder').empty();
                    $('#dynamic_folder').append(res);
                }
            });
        });
    </script>

    @include('admin.include.footer');