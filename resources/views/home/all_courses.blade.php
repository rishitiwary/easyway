@include('home.include.head')

<body>
    @include('home.include.header')
    @include('home.include.menu')

    <div class="toper">
        <section class="bredcrumb" style="background:url('https://easywayglobal.in/uploads/gallery/media/popular-video-and-online-exam-study-material-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg');background-size: 100% 100%;">
            <h1> </h1>
        </section>
        <section>
            <div class="container">
                <div class="row">
 

                    
@foreach($list as $row)
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
        </section>
    </div>
    </div>
    @include('home.include.footer')