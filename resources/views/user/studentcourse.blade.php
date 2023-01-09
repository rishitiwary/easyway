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
@foreach($related_courses as $runs)
<?php $course=DB::table("courses")->where("tradegroup_id",$run->tradegroup_id)->orderBy("position","asc")->get();
  foreach($course as $row){?>
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
  <?}

?>
@endforeach  
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
    
<script>
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