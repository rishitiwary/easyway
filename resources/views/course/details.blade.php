@include('admin.include.head');

<body class="hold-transition skin-blue fixed sidebar-mini">
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
    <div class="wrapper">
        @include('admin.include.header');
        @include('admin.include.sidebar');
  
        <div class="content-wrapper">
            <section class="content-header">
                <h1><i class="fa fa-gears"></i> Add Contents</h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
           
                        <div class="modal-body paddbtop">
                            <div class="row">
                                <div id="course_preview">
                                    <div class="flex-row row">
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                            <div class="whatyou coursebox-body mbDM15">
                                                <div class="coursebox mb0">
                                                    <div class="coursebox-img">
                                                 
                                                        <img src="{{asset('')}}{{$res->course_thumbnail}}" class="img-responsive">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-lg-7-->
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="whatyou coursebox-body relative">
                                                <!-- <div class="author-block-center text-center">
                                                    <img class="img-circle" src="https://easywayglobal.in/uploads/staff_images/8.jpg" alt="User Image">
                                                    <span class="authornamebig">Rahul Raj</span>
                                                    <span class="descriptionbig">Last Updated
                                                        <span>17/12/2022</span></span>
                                                </div> -->
                                                <ul class="lessonsblock ptt10 ">
                                                    <li><i class="fa fa-list-alt"></i>Trade Group - <?php $tradegroup = DB::table("tradegroup")->where("id", $res->tradegroup_id)->get()->first();
                                                                                                    echo $tradegroup->name;

                                                                                                    ?></li>

                                                    <li><i class="fa fa-list-alt"></i>Trade - <?php $trade = DB::table("trade")->where("id", $res->trade_id)->get()->first();
                                                                                                echo $trade->name;

                                                                                                ?></li>
                                                    <li>
                                                        <i class="fa fa-play-circle"></i>Course Duration:
                                                        {{$res->validity}} </li>


                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        Expiry : {{date('d-m-Y H:i:s',strtotime($res->expiry))}} </li>

                                                    <li>

                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        Created At : {{date('d-m-Y H:i:s',strtotime($res->created_date))}} </li>

                                                    <li>
                                                        <i class="fa fa-rupee"></i>
                                                        Price : {{$res->price}}
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-rupee"></i>
                                                        Discount : {{$res->discount}} % Off
                                                    </li>
                                                </ul>
                                                <div class="coursebtn">


                                                    <a href="{{url('course_payment/payment')}}/{{$res->id}}" class="btn btn-success" style="width:100%">Buy Now</a>

                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-lg-5-->

                                    </div>
                                    <!--./detailmodalbg-->
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="imgbottomtext">
                                                <h3 class="modal-title pb3 fontmedium">{{$res->title}}</h3>
                                                <p></p>
                                                <p>{{$res->description}}</p>.<p></p>
                                            </div>
                                        </div>
                                        <!--./col-lg-9-->

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="coursecard whatyou">
                                                <h3 class="fontmedium">Course Preview</h3>
                                                <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?= $res->course_url ?>?modestbranding=1&autoplay=0&mute=0&rel=1&showinfo=0&loop=1&controls=1" frameborder="0" title=" YouTube video player">
                                                </iframe>
                                                
                                                <div class="overlay--fullscreen"></div>
                                            </div>
                                            <!--./coursecard-->
                                            <div class="coursecard ptt10">

                                                <div class="panel-group faq mb10" id="accordionplus">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordionplus" data-target="#0" aria-expanded="true">
                                                            <h4 class="panelh3 accordion-togglelpus"><b>Free Related Videos<span class="mr0"><i class="fa fa-play-circle"></i>
                                                                        Videos</span></b></h4><b>
                                                            </b>
                                                        </div><b>
                                                            <div id="0" class="panel-collapse collapse in" aria-expanded="true">
                                                                <div class="row container">
                                                                    @foreach($demovideos as $row)
                                                                    <div class="col-lg-6">
                                                                        <h4>{{$row->title}}</h4>
                                                                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/<?= $row->video_id ?>?modestbranding=1&autoplay=0&mute=0&rel=1&showinfo=0&loop=1&controls=1" frameborder="0" title=" YouTube video player">
                                                                        </iframe>
                                                                        <div class="overlay--bottom"></div>
                                                                        <div class="overlay--fullscreen"></div>
                                                                        <p>{{$row->title}}</p>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <!--./row--><b><b><b>
                                                    <div id="accordionn" class="panel-group">
                                                        <div class="panel panel-default">

                                                            <div class="panel-heading">
                                                                <h4 class="panel-title display-inline-block plusblock">

                                                                    <a class="collapsed more-less" role="button" data-toggle="collapse" data-parent="#accordionn" href="#examaccord" aria-expanded="false" aria-controls="collapse50"><i class="fa fa-plus"></i>View Contents</a></h4>
                                                            </div>

                                                            <div id="examaccord" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                <div id="dynamic_folder">

</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--./coursecard-->
                                                </b></b></b>
                                    </div>
                                </div>
                            </div>
                            <!--./row-->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

 
<script>
        $(document).ready(function() {
            
            let folderid = "0";
            let coursid = "{{$res->id}}";
            let onload='onload';
            let viewType={{$payType}};
             
            $.ajax({
                url: "{{url('ajax/dynamic_folder')}}",
                type: "GET",
                data: {
                    folderid: folderid,
                    coursid: coursid,
                    onload:onload,
                    viewtype:viewType
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
            let viewType={{$payType}};
            $.ajax({
                url: "{{url('ajax/dynamic_folder')}}",
                type: "GET",
                data: {
                    id: id,
                    status: status,
                    folderid: folderid,
                    coursid: coursid,
                    type: type,
                    viewtype:viewType
                },
                dataType: 'html',
                success: function(res) {
                    $('#dynamic_folder').empty();
                    $('#dynamic_folder').append(res);
                }
            });
        }

        $(document).on('click', '.go_back', function(e) {
            let folderid = $(this).attr("data-id");
            let coursid = $('#coursid').val();
            let onload='onload';
            let viewType={{$payType}};
            $.ajax({
                url: "{{url('ajax/dynamic_folder')}}",
                type: "GET",
                data: {
                    folderid: folderid,
                    coursid: coursid,
                    onload:onload,
                    viewtype:viewType
                },
                dataType: 'html',
                success: function(res) {
                    $('#dynamic_folder').empty();
                    $('#dynamic_folder').append(res);
                }
            });
        });
        $(document).on('click', '.view_folder', function(e) {
            let folderid = $(this).attr("data-id");
            let coursid = $('#coursid').val();
            let viewType={{$payType}};
            $.ajax({
                url: "{{url('ajax/dynamic_folder')}}",
                type: "GET",
                data: {
                    folderid: folderid,
                    coursid: coursid,
                    viewtype:viewType
                },
                dataType: 'html',
                success: function(res) {
                    $('#dynamic_folder').empty();
                    $('#dynamic_folder').append(res);
                }
            });
        });
    </script>
@include('admin.include.footer')