@include('home.include.head')

<body>
    @include('home.include.header')
    @include('home.include.menu')


    <div class="toper">
        <div class="container-fluid">
            <div class="row">
                <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round" data-ride="carousel"
                    data-interval="5000">
                    <div class="carousel-inner">
                        <?php $i=1;
                         foreach($banner as $row){?>

                        <div class="item <?php if($i==1){echo 'active';} ?>">
                            <img src="{{asset('public/uploads/gallery/media')}}/<?=$row->image?>" alt="" />
                        </div>
                        <? $i++;}?>

                    </div>
                    <!--./carousel-inner-->
                    <a class="left carousel-control" href="frontend.html#bootstrap-touch-slider" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <!-- Right Control-->
                    <a class="right carousel-control" href="frontend.html#bootstrap-touch-slider" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
        <style type="text/css">
        .newsmain {
            margin-top: 20px;
        }

        .notice {
            background: red;
        }

        .newsarea {
            background: #202c45;
        }

        .newstab {
            background: #bd0745;
            color: #fff;
            padding: 7px 15px;
            font-size: 15px;
            /* border-radius: 4px 0px 0px 4px; */
            position: absolute;
            z-index: 1;
            margin-left: 0px;
            left: 16px;
        }

        del {
            color: red;
            float: right;
        }
        </style>
        <section class="newsarea">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="newstab">Latest News</div>
                        <div class="" style="height:auto;border: none;">
                            <marquee class="" behavior="scroll" direction="left" onmouseover="this.stop();"
                                onmouseout="this.start();" style="padding: 5px;">
                                @foreach($notice as $news_row)
                                <a href="{{$news_row->importantlinks}}"
                                    style="color:white;font-weight: bold;margin-right:10px;"><span
                                        style="font-weight: normal;">{{$news_row->title}} <span
                                            style="color:red;font-weight: bold;text-decoration: underline;">Click
                                            here</span> <img src="{{$news_row->image}}"
                                            style="height:20px; width:20px;"></span>
                                </a>
                                @endforeach
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style type="text/css">
        .coursebox-body h4 {
            text-align: center;
            font-weight: bold;
            padding: 10px;
            background: #88c100;
            margin: -10px -10px 0;
            height: auto;
            color: white;
        }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                     {!!substr($about->description,0,1274)!!}
                     
                      <a href="{{url($about->url)}}">more info click</a></p>
                   
            
                @foreach($type as $row)
                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="background:rgb(199 33 23);padding: 10px;color: white;border-radius: 5px;">{{$row->type}}<a href="{{url('course')}}/{{$row->url}}" class="pull-right"
                                    style="color: #fff;text-decoration: underline;">View All</a></h2>
                        </div>
                    </div>
                  
                    
                    <div class="row">
                    @php 
                        $course=DB::table("courses")->where("course_type",$row->id)->where("status",1)->orderBy("position","asc")->get();
                        @endphp
                        @foreach($course as $runs)
                        

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="coursebox">
                                <div class="coursebox-img">
                                    <a href="{{url('course_details')}}/{{$row->id}}"><img
                                            src="{{asset('')}}{{$runs->course_thumbnail}}"></a>
                                </div>
                                <div class="coursebox-body">
                                    <a href="{{url('course_details')}}/{{$row->id}}">
                                        <h4>{{$runs->title}} : </h4>
                                    </a>
                                    <div class="" style="padding-top: 5px">
                                        <div style="font-size:16px">Offer Price : ₹ {{$runs->price-($runs->price*($runs->discount/100))}} <span> <del>₹
                                        {{$runs->price}}</del></span> </div>

                                        
                                    <div>

                                    Expiry : {{date('d/m/Y',strtotime($runs->expiry))}}
                                    <span style="float:right;">Discount : {{$runs->discount}} %</span>
                                    </div>
                                    <div>
                                                
                                                Course Duration : {{$runs->validity}} Months
                                            </div>
                                    </div>
                                </div>
                                <div class="coursebtn">
                                    <a href="{{url('course_details')}}/{{$row->id}}"
                                        class="btn btn-buygreen course_preview_id pull-right">Course Preview</a>
                                    <a href="{{url('course_payment/payment')}}/{{$runs->id}}" class="btn btn-add course_detail_id"><i
                                            class="fa fa-cart-plus"></i> Buy Now</a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                     
                    </div>
                     

                    @endforeach
                
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="newsmain">
                        <div class="catetab">Govt. Jobs <a href="{{url('govt-jobs')}}"
                                class="btn btn-success pull-right btn-xs">View All</a> </div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul id="" class="newsticker">
                                        @foreach($govtjob as $rows)
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="{{url('read')}}/{{$rows->url}}">
                                                <p style="margin:0">{{$rows->title}} <img
                                                        src="{{asset('public/uploads/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        @endforeach
                                    
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
       
                    <div class="newsmain">
                        <div class="catetab">Latest News <a href="{{url('latest-news')}}"
                                class="btn btn-success pull-right btn-xs">View All</a> </div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul id="" class="newsticker">
                                        @foreach($news as $rows)
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="{{url('read')}}/{{$rows->url}}">
                                                <p style="margin:0">{{$rows->title}} <img
                                                        src="{{asset('public/uploads/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        @endforeach
                                    
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Apprenticeship <a href="{{url('apprenticeship')}}"
                                class="btn btn-success pull-right btn-xs">View All</a> </div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul id="" class="newsticker">
                                        @foreach($apprenticeship as $rows)
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="{{url('read')}}/{{$rows->url}}">
                                                <p style="margin:0">{{$rows->title}} <img
                                                        src="{{asset('public/uploads/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        @endforeach
                                    
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    <div class="newsmain">
                        <div class="tickercontainer">
                            <iframe
                                src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/easywayiti/&tabs=timeline&width=300&height=350&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=645974625744778"
                                width="100%" height="350" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Syllabus <a href="{{url('syllabus')}}"
                                class="btn btn-success pull-right btn-xs">View All</a> </div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul id="" class="newsticker">
                                        @foreach($syllabus as $rows)
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="{{url('read')}}/{{$rows->url}}">
                                                <p style="margin:0">{{$rows->title}} <img
                                                        src="{{asset('public/uploads/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        @endforeach
                                    
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Important Links <a href="{{url('important-links')}}"
                                class="btn btn-success pull-right btn-xs">View All</a> </div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul id="" class="newsticker">
                                        @foreach($importantlink as $rows)
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="{{url('read')}}/{{$rows->url}}">
                                                <p style="margin:0">{{$rows->title}} <img
                                                        src="{{asset('public/uploads/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        @endforeach
                                    
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Private Jobs <a href="{{url('private-job')}}"
                                class="btn btn-success pull-right btn-xs">View All</a> </div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul id="" class="newsticker">
                                        @foreach($private_job as $rows)
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="{{url('read')}}/{{$rows->url}}">
                                                <p style="margin:0">{{$rows->title}} <img
                                                        src="{{asset('public/uploads/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        @endforeach
                                    
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Blogs <a href="{{url('blogs')}}"
                                class="btn btn-success pull-right btn-xs">View All</a> </div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul id="" class="newsticker">
                                        @foreach($blogs as $rows)
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="{{url('read')}}/{{$rows->url}}">
                                                <p style="margin:0">{{$rows->title}} <img
                                                        src="{{asset('public/uploads/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        @endforeach
                                    
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Live Test <a href="{{url('live-test')}}"
                                class="btn btn-success pull-right btn-xs">View All</a> </div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul id="" class="newsticker">
                                        @foreach($livetest as $rows)
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="{{url('course_details')}}/{{$rows->id}}">
                                                <p style="margin:0">{{$rows->title}} <img
                                                        src="{{asset('public/uploads/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        @endforeach
                                    
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Quize <a href="{{url('quize')}}"
                                class="btn btn-success pull-right btn-xs">View All</a> </div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul id="" class="newsticker">
                                        @foreach($quize as $rows)
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="{{url('course_details')}}/{{$rows->id}}">
                                                <p style="margin:0">{{$rows->title}} <img
                                                        src="{{asset('public/uploads/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        @endforeach
                                    
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Live Class <a href="{{url('live-test')}}"
                                class="btn btn-success pull-right btn-xs">View All</a> </div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul id="" class="newsticker">
                                        @foreach($liveclass as $rows)
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="{{url('course_details')}}/{{$rows->id}}">
                                                <p style="margin:0">{{$rows->title}} <img
                                                        src="{{asset('public/uploads/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        @endforeach
                                    
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>





        <section>
            <div class="customer-feedback">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-8">
                            <div>
                                <h2 class="section-title">What Student's Say</h2>
                            </div>
                        </div><!-- /End col -->
                    </div><!-- /End row -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="owl-carousel feedback-slider">

                                <div class="feedback-slider-item">
                                    <a href="read/abhishek-bsphcl.html">
                                        <img src="{{asset('public/uploads/gallery/media/abhishek-electrician-student-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg')}}"
                                            class="center-block img-circle" alt="Students">
                                        <h3 class="customer-name">Abhishek - BSPHCL</h3>
                                        <img src="{{asset('public/uploads/gallery/media/YouTube_play_button_icon_(2013–2017).svg copy.png')}}"
                                            style="width:52px;height: 36px;position: absolute;bottom:150px;left: 40%;">
                                        <img src="http://img.youtube.com/vi/O6YCLrB00aI/mqdefault.jpg"
                                            style="width:100%;height:200px" />Abhishek - kumar
                                        Selected - Bihar state power Holding Company Limited
                                        Trade - Electrician Bihar
                                    </a>
                                </div>
                                <div class="feedback-slider-item">
                                    <a href="read/suraj-kumar-hwb.html">
                                        <img src="{{asset('public/uploads/gallery/media/suraj-electrician-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg')}}"
                                            class="center-block img-circle" alt="Students">
                                        <h3 class="customer-name">Suraj Kumar - HWB</h3>
                                        <img src="{{asset('public/uploads/gallery/media/YouTube_play_button_icon_(2013–2017).svg copy.png')}}"
                                            style="width:52px;height: 36px;position: absolute;bottom:150px;left: 40%;">
                                        <img src="http://img.youtube.com/vi/9Mmf2E9iec4/mqdefault.jpg"
                                            style="width:100%;height:200px" />Suraj - kumar bihar
                                        Select. Heavy Water Board
                                        Also Qualify IGCAR Exam
                                        Trade - Electrician
                                    </a>
                                </div>
                                <div class="feedback-slider-item">
                                    <a href="read/nikhil-indian-army.html">
                                        <img src="{{asset('public/uploads/gallery/media/nikhil-fitter-student-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg')}}"
                                            class="center-block img-circle" alt="Students">
                                        <h3 class="customer-name">Nikhil- Indian Army</h3>
                                        <img src="{{asset('public/uploads/gallery/media/YouTube_play_button_icon_(2013–2017).svg copy.png')}}"
                                            style="width:52px;height: 36px;position: absolute;bottom:150px;left: 40%;">
                                        <img src="http://img.youtube.com/vi/pobv3Jzkkn0/mqdefault.jpg"
                                            style="width:100%;height:200px" />Nikhil kumar
                                        selected Indian Army
                                        Trade - Fitter
                                        State - bihar District-jahanabad
                                        Fitter
                                    </a>
                                </div>
                                <div class="feedback-slider-item">
                                    <a href="read/rahul-lucknow-metro.html">
                                        <img src="{{asset('public/uploads/gallery/media/rahul-fitter-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg')}}"
                                            class="center-block img-circle" alt="Students">
                                        <h3 class="customer-name">Rahul - Lucknow Metro</h3>
                                        <img src="{{asset('public/uploads/gallery/media/YouTube_play_button_icon_(2013–2017).svg copy.png')}}"
                                            style="width:52px;height: 36px;position: absolute;bottom:150px;left: 40%;">
                                        <img src="http://img.youtube.com/vi/SUGynszGxRw/mqdefault.jpg"
                                            style="width:100%;height:200px" />Rahul Kumar - bihar
                                        Selected - Lucknow Metro,
                                        Trade- Fitter
                                        Also qualify Written exam UPRVUNL
                                    </a>
                                </div>
                                <div class="feedback-slider-item">
                                    <a href="read/raja-indian-railway.html">
                                        <img src="{{asset('public/uploads/gallery/media/raja-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg')}}"
                                            class="center-block img-circle" alt="Students">
                                        <h3 class="customer-name">Raja - Indian Railway</h3>
                                        <img src="{{asset('public/uploads/gallery/media/YouTube_play_button_icon_(2013–2017).svg copy.png')}}"
                                            style="width:52px;height: 36px;position: absolute;bottom:150px;left: 40%;">
                                        <img src="http://img.youtube.com/vi/oZcaHGzDQXs/mqdefault.jpg"
                                            style="width:100%;height:200px" />Raja kumar patna bihar
                                        Selected - Indian Railway
                                        Trade - Electrician
                                        bihar - patna
                                        Fitter
                                    </a>
                                </div>
                                <div class="feedback-slider-item">
                                    <a href="read/priyanshu-railway.html">
                                        <img src="{{asset('public/uploads/gallery/media/priyanshu-student-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg')}}"
                                            class="center-block img-circle" alt="Students">
                                        <h3 class="customer-name">Priyanshu - Railway</h3>
                                        <img src="{{asset('public/uploads/gallery/media/YouTube_play_button_icon_(2013–2017).svg copy.png')}}"
                                            style="width:52px;height: 36px;position: absolute;bottom:150px;left: 40%;">
                                        <img src="http://img.youtube.com/vi/xyk_ekLjL9M/mqdefault.jpg"
                                            style="width:100%;height:200px" />Name - Priyanshu
                                        Selected - Indian Railway
                                        Trade - Electrician
                                        Nalanda Bihar
                                        Electrician
                                    </a>
                                </div>
                                <div class="feedback-slider-item">
                                    <a href="read/ashutosh-indian-railway.html">
                                        <img src="{{asset('public/uploads/gallery/media/ashutosh-indian-railway-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg')}}"
                                            class="center-block img-circle" alt="Students">
                                        <h3 class="customer-name">Ashutosh - Indian Railway</h3>
                                        <img src="{{asset('public/uploads/gallery/media/YouTube_play_button_icon_(2013–2017).svg copy.png')}}"
                                            style="width:52px;height: 36px;position: absolute;bottom:150px;left: 40%;">
                                        <img src="http://img.youtube.com/vi/rj5Z7Kz4stA/mqdefault.jpg"
                                            style="width:100%;height:200px" />Ashutosh kumar
                                        selected - indian railway
                                        Trade - diesel mechanic
                                        bihar trade - diesel mechanic
                                    </a>
                                </div>
                                <div class="feedback-slider-item">
                                    <a href="read/pradeep-mumbai-metro.html">
                                        <img src="{{asset('public/uploads/gallery/media/sandeep-mumbai-metro-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg')}}"
                                            class="center-block img-circle" alt="Students">
                                        <h3 class="customer-name">Pradeep - Mumbai Metro</h3>
                                        <img src="{{asset('public/uploads/gallery/media/YouTube_play_button_icon_(2013–2017).svg copy.png')}}"
                                            style="width:52px;height: 36px;position: absolute;bottom:150px;left: 40%;">
                                        <img src="http://img.youtube.com/vi/apytZ7WSLD4/mqdefault.jpg"
                                            style="width:100%;height:200px" />Name - Pradeep kumar
                                        Trade - Fitter
                                        Selected - Mumbai Metro
                                        uttar pradesh Jaunpur
                                    </a>
                                </div>
                                <div class="feedback-slider-item">
                                    <a href="read/pradeep-isro-topper.html">
                                        <img src="{{asset('public/uploads/gallery/media/pradeep%20easyway%20isro%20topper.jpg')}}"
                                            class="center-block img-circle" alt="Students">
                                        <h3 class="customer-name">Pradeep - ISRO Topper</h3>
                                        <img src="{{asset('public/uploads/gallery/media/YouTube_play_button_icon_(2013–2017).svg copy.png')}}"
                                            style="width:52px;height: 36px;position: absolute;bottom:150px;left: 40%;">
                                        <img src="http://img.youtube.com/vi/e9k0jtG557g/mqdefault.jpg"
                                            style="width:100%;height:200px" />Pradeep - ISRO , LMRC, UPRVUNL Topper
                                    </a>
                                </div>
                                <div class="feedback-slider-item">
                                    <a href="read/pradeep-isro-topper-part-b.html">
                                        <img src="{{asset('public/uploads/gallery/media/pradeep%20easyway%20isro%20topper.jpg')}}"
                                            class="center-block img-circle" alt="Students">
                                        <h3 class="customer-name">Pradeep - ISRO Topper (Part-B)</h3>
                                        <img src="{{asset('public/uploads/gallery/media/YouTube_play_button_icon_(2013–2017).svg copy.png')}}"
                                            style="width:52px;height: 36px;position: absolute;bottom:150px;left: 40%;">
                                        <img src="http://img.youtube.com/vi/eje3m2K2zXQ/mqdefault.jpg"
                                            style="width:100%;height:200px" />ITI के बाद ISRO टॉपर // Metro, UPRVUNL,
                                        ISRO एक साथ तीन सफल�
                                    </a>
                                </div>

                            </div>
                        </div><!-- /End col -->
                    </div><!-- /End row -->
                </div><!-- /End container -->
            </div><!-- /End customer-feedback -->
        </section>






        <style type="text/css">
        .section-title {
            font-size: 28px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            font-weight: 400;
            display: inline-block;
            position: relative;
        }

        .section-title:after,
        .section-title:before {
            content: '';
            position: absolute;
            bottom: 0;
        }

        .section-title:after {
            height: 2px;
            background-color: rgba(252, 92, 15, 0.46);
            left: 25%;
            right: 25%;
        }

        .section-title:before {
            width: 15px;
            height: 15px;
            border: 3px solid #fff;
            background-color: #fc5c0f;
            left: 50%;
            transform: translatex(-50%);
            bottom: -6px;
            z-index: 9;
            border-radius: 50%;
        }

        /* CAROUSEL STARTS */
        .customer-feedback .owl-item img {
            width: 85px;
            height: 85px;
        }

        .feedback-slider-item {
            position: relative;
            padding: 60px 10px 10px;
            margin-top: -40px;
            margin: 2px;
        }

        .customer-name {
            margin-top: 15px;
            font-size: 20px;
            font-weight: 500;
        }

        .feedback-slider-item p {
            line-height: 1.875;
        }

        .customer-rating {
            background-color: #eee;
            border: 3px solid #fff;
            color: rgba(1, 1, 1, 0.702);
            font-weight: 700;
            border-radius: 50%;
            position: absolute;
            width: 47px;
            height: 47px;
            line-height: 44px;
            font-size: 15px;
            right: 0;
            top: 77px;
            text-indent: -3px;
        }

        .thumb-prev .customer-rating {
            top: -20px;
            left: 0;
            right: auto;
        }

        .thumb-next .customer-rating {
            top: -20px;
            right: 0;
        }

        .customer-rating i {
            color: rgb(251, 90, 13);
            position: absolute;
            top: 10px;
            right: 5px;
            font-weight: 600;
            font-size: 12px;
        }

        /* GREY BACKGROUND COLOR OF THE ACTIVE SLIDER */
        .feedback-slider-item:after {
            content: '';
            position: absolute;
            left: 0px;
            right: 0px;
            bottom: 0;
            top: 103px;
            background-color: #f6f6f6;
            border: 1px solid rgba(251, 90, 13, .1);
            border-radius: 10px;
            z-index: -1;
        }

        .thumb-prev,
        .thumb-next {
            position: absolute;
            z-index: 99;
            top: 45%;
            width: 98px;
            height: 98px;
            left: -90px;
            cursor: pointer;
            -webkit-transition: all .3s;
            transition: all .3s;
        }

        .thumb-next {
            left: auto;
            right: -90px;
        }

        .feedback-slider-thumb img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
        }

        .feedback-slider-thumb:hover {
            opacity: .8;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
        }

        .customer-feedback .owl-nav [class*="owl-"] {
            position: relative;
            display: inline-block;
            bottom: 45px;
            transition: all .2s ease-in;
        }

        .customer-feedback .owl-nav i {
            background-color: transparent;
            color: #ffffff;
            font-size: 25px;
        }

        .customer-feedback .owl-prev {
            left: -15px;
        }

        .customer-feedback .owl-prev:hover {
            left: -20px;
        }

        .customer-feedback .owl-next {
            right: -15px;
        }

        .customer-feedback .owl-next:hover {
            right: -20px;
        }

        /* DOTS */
        .customer-feedback .owl-dots {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 35px;
        }

        .customer-feedback .owl-dot {
            display: inline-block;
        }

        .customer-feedback .owl-dots .owl-dot span {
            width: 11px;
            height: 11px;
            margin: 0 5px;
            background: #fff;
            border: 1px solid rgb(251, 90, 13);
            display: block;
            -webkit-backface-visibility: visible;
            -webkit-transition: all 200ms ease;
            transition: all 200ms ease;
            border-radius: 50%;
        }

        .customer-feedback .owl-dots .owl-dot.active span {
            background-color: rgb(251, 90, 13);
        }

        /* RESPONSIVE */
        @media screen and (max-width: 767px) {

            .customer-feedback .owl-nav [class*="owl-"] {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                margin-top: 45px;
                bottom: auto;
            }

            .customer-feedback .owl-prev {
                left: 0;
            }

            .customer-feedback .owl-next {
                right: 0;
            }

        }

        .feedback-slider iframe {
            width: 90% !important;
            height: 150px;
        }
        </style>
        <script type="text/javascript">
        jQuery(document).ready(function($) {

            var feedbackSlider = $('.feedback-slider');
            feedbackSlider.owlCarousel({
                items: 4,
                nav: true,
                dots: true,
                autoplay: true,
                loop: true,
                mouseDrag: true,
                touchDrag: true,
                navText: ["<i class='fa fa-long-arrow-left'></i>",
                    "<i class='fa fa-long-arrow-right'></i>"
                ],
                responsive: {

                    // breakpoint from 767 up
                    0: {
                        items: 1,
                        nav: true,
                        dots: false
                    },
                    767: {
                        items: 4,
                        nav: false,
                        dots: false
                    }

                }
            });


        }); //end ready
        </script>
    </div>
    </div>

    @include('home.include.footer')