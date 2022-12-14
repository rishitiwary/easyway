@include('admin.include.head');


<style>
    .folder_design {
        padding-bottom: 2px;
        font-size: 14px;
        border-radius: 10px;
        padding: 1px;
        border-bottom: 2px solid black;
    }

    ul {
        padding: 0px;
        margin: 0px;
    }

    #list li {
        margin: 0 0 3px;
        padding: 8px;
        list-style: none;

    }

    #refresh_doc li {
        margin: 0 0 3px;
        padding: 8px;
        list-style: none;

    }

    #refresh_video li {
        margin: 0 0 3px;
        padding: 8px;
        list-style: none;

    }
</style>

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
                                <label for="exampleInputFile">
                                    <h3>CONTENTS FOR {{strtoupper($list[0]->title)}}</h3>
                                </label>
                                <br>
                                <br>
                                <form method="post" action="{{url('admin/import')}}" enctype="multipart/form-data">
                                    <input type="hidden" name="coursid" value="{{$list[0]->id}}">
                                    @csrf
                                    <div class="row text-left">
                                        <div class="col-lg-2 col-sm-6">
                                            Select Folder To Import
                                        </div>
                                        <div class="col-lg-8 col-sm-6">
                                        <select name="parent_folder_id" id="parent_folder_id"
                                                            class="form-control" value="" required>
                                                            <option value="">Select Folder</option>
                                                            @foreach($folder as $row2)
                                                            <option value="{{$row2->folder_id}}"
                                                                style="text-transform: uppercase;">{{$row2->folders}}
                                                            </option>
                                                            <?php $subFolder = DB::select("select * from folders where parent_folder_id=" . $row2->folder_id); ?>
                                                            @foreach($subFolder as $subFolders)
                                                            <option value="{{$subFolders->folder_id}}">
                                                                &nbsp;&nbsp;{{$subFolders->folders}}</option>
                                                            <?php $subFolder = DB::select("select * from folders where parent_folder_id=" . $subFolders->folder_id); ?>
                                                            @foreach($subFolder as $subFolders)
                                                            <option value="{{$subFolders->folder_id}}">
                                                                &nbsp;&nbsp;&nbsp;&nbsp;{{$subFolders->folders}}
                                                            </option>
                                                            <?php $subFolder = DB::select("select * from folders where parent_folder_id=" . $subFolders->folder_id); ?>
                                                            @foreach($subFolder as $subFolders)
                                                            <option value="{{$subFolders->folder_id}}">
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$subFolders->folders}}
                                                            </option>
                                                            <?php $subFolder = DB::select("select * from folders where parent_folder_id=" . $subFolders->folder_id); ?>
                                                            @foreach($subFolder as $subFolders)
                                                            <option value="{{$subFolders->folder_id}}">
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$subFolders->folders}}
                                                            </option>
                                                            <?php $subFolder = DB::select("select * from folders where parent_folder_id=" . $subFolders->folder_id); ?>
                                                            @foreach($subFolder as $subFolders)
                                                            <option value="{{$subFolders->folder_id}}">
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$subFolders->folders}}
                                                            </option>
                                                            @endforeach
                                                            @endforeach
                                                            @endforeach
                                                            @endforeach
                                                            @endforeach
                                                            @endforeach
                                                        </select>
                                        </div>
                                    </div>
                             
                                   <hr>
                                    <div id="dynamic_folder">

                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-danger" type="reset">Reset</button>
                                        <button class="btn btn-primary" type="submit">Save Now</button>
                                    </div>
                                </form>
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
                url: "{{url('ajax/dynamic_folder_import')}}",
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
            let coursid = "{{$list[0]->id}}";
            $.ajax({
                url: "{{url('ajax/dynamic_folder_import')}}",
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
                url: "{{url('ajax/dynamic_folder_import')}}",
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