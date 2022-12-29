@include('admin.include.head')

<body class="skin-blue fixed sidebar-mini">

  <div class="wrapper">
    @include('admin.include.header')
    @include('admin.include.sidebar')


    <div class="content-wrapper" style="min-height: 370px;">

      <section class="content">

        <div class="row">

          <div class="col-md-12">

            <div class="box box-primary">
              <style type="text/css">
                .title {
                  padding: 10px;
                  border: 1px solid #ccc;
                  width: 100%;
                  background: #faa21c;
                  color: white;
                  margin-top: 0;
                }
              </style>
              <h3 class="title">All Purchased Course</h3>
              <section class="content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row flex-row">

                    @foreach($purchased_courses as $run)
                  <?php $row=DB::table("courses")->where("id",$run->course_id)->first();?>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="coursebox">
                          <div class="coursebox-img">
                            <img src="{{asset('')}}{{$row->course_thumbnail}}">
                          </div>
                          <div class="coursebox-body">
                            <h4>{{$row->title}} :</h4>
                            <div class="course-caption">
                              <span style="box-sizing: border-box; font-weight: 700;">{{$row->description}}

                            </div>
                            <div class="classstats">
                              <i class="fa fa-list-alt"></i>Trade Group - <?php $tradegroup=DB::table("tradegroup")->where("id",$row->tradegroup_id)->get()->first();
                              echo $tradegroup->name;
                              
                              ?> </div>
                                                        <div class="classstats">
                              <i class="fa fa-list-alt"></i>Trade - <?php $trade=DB::table("trade")->where("id",$row->trade_id)->get()->first();
                              echo $trade->name;
                              
                              ?> </div>
                            <div class="classstats">
                              <i class="fa fa-list-alt"></i>Course Duration - {{$row->validity}} Months
                            </div>
                            <div class="classstats">
                              ₹ {{$row->price}} <span class="pull-right">
                                <i class="fa fa-clock-o"></i>
                                {{date('d-m-Y',strtotime($row->expiry))}} </span>
                            </div>
                            
                          </div>
                          <div class="coursebtn">
                            <a href="{{url('course/details/')}}/{{$row->id}}" class="btn btn-add" target="_blank">Course
                              Detail</a>

                            <a href="{{url('course/startlesson')}}/{{$row->id}}" class="btn btn-buygreen">Start Lesson</a>

                          </div>
                        </div>
                      </div>
                      @endforeach



                    </div>
                  </div>
                </div>
              </section>
              <h3 class="title">Important Courses For You</h3>
              <section class="content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row flex-row">


                    </div>
                  </div>
                </div>
              </section>
              <h3 class="title">Other Courses</h3>
              <section class="content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row flex-row">

                      @foreach($courses as $row)
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="coursebox">
                          <div class="coursebox-img">
                            <img src="{{asset('')}}{{$row->course_thumbnail}}">
                          </div>
                          <div class="coursebox-body">
                            <h4>{{$row->title}} :</h4>
                            <div class="course-caption">
                              <span style="box-sizing: border-box; font-weight: 700;">{{$row->description}}

                            </div>
                            <div class="classstats">
                              <i class="fa fa-list-alt"></i>Trade Group - <?php $tradegroup=DB::table("tradegroup")->where("id",$row->tradegroup_id)->get()->first();
                              echo $tradegroup->name;
                              
                              ?> </div>
                                                        <div class="classstats">
                              <i class="fa fa-list-alt"></i>Trade - <?php $trade=DB::table("trade")->where("id",$row->trade_id)->get()->first();
                              echo $trade->name;
                              
                              ?> </div>
                            <div class="classstats">
                              <i class="fa fa-list-alt"></i>Course Duration - {{$row->validity}} Months
                            </div>
                            <div class="classstats">
                              ₹ {{$row->price}} <span class="pull-right">
                                <i class="fa fa-clock-o"></i>
                                {{date('d-m-Y',strtotime($row->expiry))}} </span>
                            </div>
                            
                          </div>
                          <div class="coursebtn">
                            <a href="{{url('course/details/')}}/{{$row->id}}" class="btn btn-add" target="_blank">Course
                              Detail</a>

                            <a href="{{url('course_payment/payment')}}/{{$row->id}}" class="btn btn-buygreen">Buy Now</a>

                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div id="coursemodal" class="modal fade" role="dialog">

      <div class="modal-dialog video-dialogfull">

        <div class="video-contentfull">

          <div id="course_model_body"></div>

        </div>

      </div>

    </div>



    <div id="coursedetailmodal" class="modal fade" role="dialog">

      <div class="modal-dialog modalwrapwidth">

        <div class="modal-content">

          <button type="button" class="close" data-dismiss="modal" onclick="stopvideo()">×</button>

          <div class="scroll-area">

            <div class="modal-body paddbtop">

              <div class="row">

                <div id="coursedetail1_id">

                </div>

              </div>
              <!--./row-->

            </div>
            <!--./modal-body-->

          </div>

        </div>

      </div>

    </div>
    <!--#/coursedetailmodal-->



    <script>
      function openCourse(evt, courseName) {

        var i, tabcontent, tablinks;

        tabcontent = document.getElementsByClassName("tabcontent");

        for (i = 0; i < tabcontent.length; i++) {

          tabcontent[i].style.display = "none";

        }

        tablinks = document.getElementsByClassName("tablinks");

        for (i = 0; i < tablinks.length; i++) {

          tablinks[i].className = tablinks[i].className.replace(" active", "");

        }

        document.getElementById(courseName).style.display = "block";

        evt.currentTarget.className += " active";

      }



      (function($) {

        "use strict";



        $(document).ready(function() {

          $('#course_detail_tab').show();

        })



        $('.lesson_ID').click(function() {

          var coureseID = $(this).attr('lesson-data');

          $('#course_model_body').html('');

          $.ajax({

            url: "https://easywayglobal.in/user/studentcourse/startlesson",

            type: 'post',

            data: {
              coureseID: coureseID
            },

            success: function(response) {

              $('#course_model_body').html(response);

            }

          });

        });



        $('.coursedetail').click(function() {

          var courseID = $(this).attr('data-id');

          $('#coursedetail1_id').html('');

          $.ajax({

            url: "https://easywayglobal.in/user/studentcourse/coursedetail",

            type: 'post',

            data: {
              courseID: courseID
            },

            beforeSend: function() {

              $('#coursedetail1_id').html(
                'Loading...  <i class="fa fa-spinner fa-spin"></i>');

            },

            success: function(response) {

              $('#coursedetail1_id').html(response);

            }

          });

        })



        $(document).on("click", ".lesson_ID", function() {

          var coureseID = $(this).attr('lesson-data');

          $('#course_model_body').html('');

          $.ajax({

            url: "https://easywayglobal.in/user/studentcourse/startlesson",

            type: 'post',

            data: {
              coureseID: coureseID
            },

            success: function(response) {

              $('#course_model_body').html(response);

            }

          });

          $('#coursedetailmodal').modal('hide');

        });

      })(jQuery);
    </script>



    <script>
      (function($) {

        'use strict';

        $(document).ready(function() {

          initDatatable('course-list', 'user/studentcourse/getcourselist', [], [], 100);

        });

      }(jQuery))
    </script>

    <script>
      (function($) {

        'use strict';

        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

          $($.fn.dataTable.tables(true)).DataTable()

            .columns.adjust();

        });

      }(jQuery))
    </script>

    <script>
      function loadcoursedetail(courseID) {

        $('#coursedetail1_id').html('');

        $.ajax({

          url: "https://easywayglobal.in/user/studentcourse/coursedetail",

          type: 'post',

          data: {
            courseID: courseID
          },

          beforeSend: function() {

            $('#coursedetail1_id').html(
              'Loading...  <center><i class="fa fa-spinner fa-spin"></i></center>');

          },

          success: function(response) {

            $("#coursedetailmodal").modal();

            $('#coursedetail1_id').html(response);

          }

        });

      }



      function afterprint(courseID) {

        $('#course_model_body').html('');

        $.ajax({

          url: "https://easywayglobal.in/user/studentcourse/startlesson",

          type: 'post',

          data: {
            coureseID: courseID
          },

          success: function(response) {

            $('#course_model_body').html(response);

          }

        });

      }
    </script>

    <script>
      function stopvideo() {

        $('#coursedetail1_id').html('');

        $('#coursedetailmodal').modal('hide');

      }



      (function($) {

        'use strict';



        $(document).on('click', '.print_btn', function() {

          var courseid = $(this).attr('data-id');
          $.ajax({

            url: 'https://easywayglobal.in/user/studentcourse/printinvoice',

            type: 'post',

            data: {
              courseid: courseid
            },

            success: function(response) {

              popup(response);

            }

          });

        });

      }(jQuery))
    </script>

    <script>
      function popup(data)

      {
        var base_url = 'https://easywayglobal.in/';

        var frame1 = $('<iframe />');

        frame1[0].name = "frame1";

        frame1.css({
          "position": "absolute",
          "top": "-1000000px"
        });

        $("body").append(frame1);

        var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ?
          frame1[0].contentDocument.document : frame1[0].contentDocument;

        frameDoc.document.open();

        //Create a new HTML document.

        frameDoc.document.write('<html>');

        frameDoc.document.write('<head>');

        frameDoc.document.write('<title></title>');

        frameDoc.document.write('<link rel="stylesheet" href="' + base_url +
          'backend/bootstrap/css/bootstrap.min.css">');

        frameDoc.document.write('<link rel="stylesheet" href="' + base_url +
          'backend/dist/css/font-awesome.min.css">');

        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/ionicons.min.css">');

        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/AdminLTE.min.css">');

        frameDoc.document.write('<link rel="stylesheet" href="' + base_url +
          'backend/dist/css/skins/_all-skins.min.css">');

        frameDoc.document.write('<link rel="stylesheet" href="' + base_url +
          'backend/plugins/iCheck/flat/blue.css">');

        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/morris/morris.css">');

        frameDoc.document.write('<link rel="stylesheet" href="' + base_url +
          'backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css">');

        frameDoc.document.write('<link rel="stylesheet" href="' + base_url +
          'backend/plugins/datepicker/datepicker3.css">');

        frameDoc.document.write('<link rel="stylesheet" href="' + base_url +
          'backend/plugins/daterangepicker/daterangepicker-bs3.css">');

        frameDoc.document.write('</head>');

        frameDoc.document.write('<body>');

        frameDoc.document.write(data);

        frameDoc.document.write('</body>');

        frameDoc.document.write('</html>');

        frameDoc.document.close();

        setTimeout(function() {

          window.frames["frame1"].focus();

          window.frames["frame1"].print();

          //frame1.remove();

        }, 500);

        return true;

      }
      // $(document).on({
      //   "contextmenu": function(e) {
      //     console.log("ctx menu button:", e.which);

      //     // Stop the context menu
      //     e.preventDefault();
      //   },
      //   "mousedown": function(e) {
      //     console.log("normal mouse down:", e.which);
      //   },
      //   "mouseup": function(e) {
      //     console.log("normal mouse up:", e.which);
      //   }
      // });
    </script>

    @include('admin.include.footer')