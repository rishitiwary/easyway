
 @include('home.include.head')
<body>
    <div style="position:fixed;top: 0;z-index: 999999;width: 100%;">
        <style type="text/css">
        h2 {
            font-size: 18px;
        }

        @media(max-width: 767px) {
            h2 {
                font-size: 12px;
            }
        }

        .mobileonly,
        .mobtab {
            display: none;
        }

        .bredcrumb {
            height: 300px;
        }

        .mt80 {
            margin-top: 70px;
        }

        .newscontent {
            padding: 5px;
        }

        iframe {
            width: 100%;
            height: 500px;
        }

        @media(max-width: 767px) {
            .mt80 {
                margin-top: 85px;
            }

            iframe {
                width: 100%;
                height: 200px;
            }

            .mobileonly {
                display: block;
                border: 2px solid #000;
                border-right: none;
                border-left: none;
                padding: 10px;
            }

            .bredcrumb {
                height: 150px;
            }

            .mobtab {
                display: inline-block;
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .mobtab li {
                margin-top: 5px;
            }

            .mobtab li .btn {
                padding: 3px;
            }

            .sticky-top .col-md-3,
            .sticky-top .col-md-9 {
                padding: 0 5px;
            }
        }

        .newsticker a p {
            color: blue;
        }
        </style>
        <header class="sticky-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-5">
                        <a class="logo" href="index.html"><img
                                src="{{asset('public/uploads/school_content/logo/front_logo-611a2f452e2f07.50817368.png')}}" alt=""
                                style="max-width: 100%;"></a>
                    </div>
                    <!--./col-md-4-->
                    <div class="col-md-9 col-sm-12 col-xs-7">
                        <ul class="header-extras">
                            <li><a href="live-test.html" class="btn btn-outline-success "><img
                                        src="https://www.madeeasy.in/images/blink-im.gif" alt="Live Classes"
                                        class="img-fluid"> <i class="fad fa-computer-speaker"></i> Live Test</a></li>
                            <li> <a href="video-lecture.html" class="btn btn-outline-primary "><i class="fad fa-video"
                                        aria-hidden="true"></i> Video Lecture </a></li>
                            <li> <a href="study-material.html" class="btn btn-outline-danger "><i
                                        class="fad fa-book-reader" aria-hidden="true"></i> Study Material </a></li>
                            <li> <a href="online-test-series.html" class="btn btn-outline-warning "><i
                                        class="fad fa-chalkboard-teacher" aria-hidden="true"></i> Online Test Series</a>
                            </li>
                            <li><a href="site/userlogin.html" class="btn btn-outline-success "><i class="fad fa-lock"
                                        aria-hidden="true"></i> Login / Register</a></li>
                        </ul>
                        <ul class="header-extras minpad">

                            <li><a href="liveclass.html" class="btn btn-outline-success "><img
                                        src="https://www.madeeasy.in/images/blink-im.gif" alt="Live Classes"
                                        class="img-fluid"> Live Classes</a></li>
                            <li><a href="quiz.html" class="btn btn-outline-success "> <i class="fad fa-keyboard"></i>
                                    Quiz</a></li>
                            <li><a href="tel:8409938540" class="btn btn-outline-success "><i class="fad fa-phone-alt"
                                        aria-hidden="true"></i>+91-8409938540</a></li>
                            <li> <a href="tel:8409973354" class="btn btn-outline-success "><i class="fad fa-phone-alt"
                                        aria-hidden="true"></i> + 91 - 8409973354 </a></li>
                            <li> <a href="mailto:24easyway@gmail.com" class="btn btn-outline-success "><i
                                        class="fad fa-at" aria-hidden="true"></i> 24easyway@gmail.com </a></li>


                        </ul>
                        <ul class="minpad mobtab">
                            <li style="margin-left:20px;"><a href="frontend.html#" target="_blank"
                                    class="btn btn-outline-success "><img
                                        src="https://www.madeeasy.in/images/blink-im.gif" alt="Live Classes"
                                        class="img-fluid"> Live Classes</a></li>
                            <li><a href="tel:8409938540" class="btn btn-outline-success "><i class="fad fa-phone-alt"
                                        aria-hidden="true"></i> 8409938540 / 8409973354</a></li>



                        </ul>


                    </div>
                    <!--./col-md-8-->
                </div>
                <!--./row-->
            </div>
            <!--./container-->
        </header>
        <div class="header_menu">
            <div class="container">
                <div class="row">
                    <nav class="navbar">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-3">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                        <div class="collapse navbar-collapse" id="navbar-collapse-3">
                            <ul class="nav navbar-nav">

                                <li class="active ">

                                    <a href="frontend.html">HOME</a>



                                </li>

                                <li class=" dropdown">
                                    <a href="frontend.html#" class="dropdown-toggle" data-toggle="dropdown">ABOUT US <b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page/about-us.html">About Us</a></li>
                                        <li><a href="page/board-of-directors.html">Board Of Director</a></li>
                                        <li><a href="page/faculty-panel.html">Faculty Panel</a></li>
                                        <li><a href="page/our-social-media.html">Our Social Media</a></li>

                                    </ul>



                                </li>

                                <li class=" dropdown">
                                    <a href="frontend.html#" class="dropdown-toggle" data-toggle="dropdown">GALLERY <b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page/image-gallery.html">IMAGE GALLERY</a></li>
                                        <li><a href="page/video-gallery.html">VIDEO GALLERY</a></li>

                                    </ul>



                                </li>

                                <li class=" dropdown">
                                    <a href="frontend.html#" class="dropdown-toggle" data-toggle="dropdown">ITI JOB <b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="govt-jobs.html">GOVERMENT JOB</a></li>
                                        <li><a href="apprenticeship.html">APPRENTICESHIP</a></li>

                                    </ul>



                                </li>

                                <li class=" ">

                                    <a href="syllabus.html">SYLLABUS</a>



                                </li>

                                <li class=" ">

                                    <a href="latest-news.html">ITI NEWS</a>



                                </li>

                                <li class=" ">

                                    <a href="important-links.html">Important Links</a>



                                </li>

                                <li class=" ">

                                    <a href="page/contact-us.html">CONTACT US</a>



                                </li>


                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav><!-- /.navbar -->
                </div>
            </div>
        </div>
    </div>
    <div class="container mt80" style="border-top: 1px solid #ccc;">
        <div class="row">
            <div class="mobileonly">
                <ul class="mob-extra-menu">
                    <li class="nav-item active text-center ">
                        <a href="video-lecture.html" style="color:#c82319"><i class="fad fa-video fa-2x"></i>
                            <p>Video Courses</p>
                        </a>
                    </li>
                    <li class="nav-item active text-center ">
                        <a href="study-material.html" style="color:#c82319"><i class="fad fa-book-open fa-2x"></i>
                            <p>Study Material</p>
                        </a>
                    </li>
                    <li class="nav-item active text-center ">
                        <a href="online-test-series.html" style="color:#c82319"><i
                                class="fad fa-chalkboard-teacher fa-2x"></i>
                            <p>Online Test</p>
                        </a>
                    </li>
                    <li class="nav-item active text-center ">
                        <a href="quiz.html" style="color:#c82319"><i class="fad fa-keyboard fa-2x"></i>
                            <p>Quiz</p>
                        </a>
                    </li>
                    <li class="nav-item active text-center ">
                        <a href="live-test.html" style="color:#c82319"><i class="fad fa-computer-speaker fa-2x"></i>
                            <p>Live Test</p>
                        </a>
                    </li>
                    <li class="nav-item active text-center ">
                        <a href="site/userlogin.html" style="color:#c82319"><i class="fad fa-user fa-2x"></i>
                            <p>Login / Register</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="toper">
        <div class="container-fluid">
            <div class="row">
                <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round" data-ride="carousel"
                    data-interval="5000">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{asset('public/uploads/gallery/media/railway-driver-alp-railway-technician-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg')}}"
                                alt="" />
                        </div>
                        <div class="item ">
                            <img src="{{asset('public/uploads/gallery/media/railway-technician-raja-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg')}}"
                                alt="" />
                        </div>
                        <div class="item ">
                            <img src="{{asset('public/uploads/gallery/media/igcar-suraj-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg')}}"
                                alt="" />
                        </div>
                        <div class="item ">
                            <img src="{{asset('public/uploads/gallery/media/railway-technician-ashutosh-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg')}}"
                                alt="" />
                        </div>
                        <div class="item ">
                            <img src="{{asset('public/uploads/gallery/media/LMRC-Topper-CITS-ITI-syllabus-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg')}}"
                                alt="" />
                        </div>
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
                                <a href="read/offline-new-batch-12th-batch-starting-from-04-april-2022.html"
                                    style="color:white;font-weight: bold;margin-right:10px;"><span
                                        style="font-weight: normal;">Offline New Batch ( 12th Batch) Starting from 04
                                        April-2022 <span
                                            style="color:red;font-weight: bold;text-decoration: underline;">Click
                                            here</span> <img src="{{asset('public/uploads/gallery/media/New_icons-f.gif')}}"></span>
                                    <a href="read/easyway-online-class-available-for-electrician-fitter-wireman-turner-machinist-copa.html"
                                        style="color:white;font-weight: bold;margin-right:10px;"><span
                                            style="font-weight: normal;">Easyway Online CLass Available For Electrician,
                                            Fitter, Wireman, Turner, Machinist, Copa <span
                                                style="color:red;font-weight: bold;text-decoration: underline;">Click
                                                here</span> <img src="{{asset('public/uploads/gallery/media/New_icons-f.gif')}}"></span>
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
                    <h1 style="text-align:justify"><strong>About</strong> <strong><span
                                style="color:#FF0000">Easyway</span></strong></h1>

                    <p style="text-align: justify;"><strong><span style="color:#FF0000">Easyway</span></strong>
                        <strong><span style="color:#0000FF">Global</span></strong> has been established with the aim of
                        improving the lives of ITI students. It has been seen that the biggest problem in front of those
                        doing ITI is about getting a good job. Today there is no one to give guide line to many ITI
                        students.<br />
                        Easyway Global is committed to provide high level technical education according to trade&nbsp;to
                        all of students. At the same time, we also prepare for a respectable job by paying attention to
                        the skill development of the students. <a href="page/about-us.html">more info click</a></p>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="background:rgb(199 33 23);padding: 10px;color: white;border-radius: 5px;">Popular
                                Video & Online Exam & Study Material <a href="video-study-exam.html" class="pull-right"
                                    style="color: #fff;text-decoration: underline;">View All</a></h2>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="coursebox">
                                <div class="coursebox-img">
                                    <a href="detail/33.html"><img
                                            src="{{asset('public/uploads/course/course_thumbnail/edit_course_thumbnail33.jpg')}}"></a>
                                </div>
                                <div class="coursebox-body">
                                    <a href="detail/33.html">
                                        <h4>Fitter - Technical Classes </h4>
                                    </a>
                                    <div class="" style="padding-top: 5px">
                                        <div style="font-size:16px">Offer Price : ₹ 2600 <span> <del>₹
                                                    3200.00</del></span> </div>

                                        <div>

                                            Course Duration : 6 Months
                                        </div>
                                    </div>
                                </div>
                                <div class="coursebtn">
                                    <a href="detail/33.html"
                                        class="btn btn-buygreen course_preview_id pull-right">Course Preview</a>
                                    <a href="site/userlogin.html" class="btn btn-add course_detail_id"><i
                                            class="fa fa-cart-plus"></i> Buy Now</a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="coursebox">
                                <div class="coursebox-img">
                                    <a href="detail/40.html"><img
                                            src="{{asset('public/uploads/course/course_thumbnail/edit_course_thumbnail402.jpg')}}"></a>
                                </div>
                                <div class="coursebox-body">
                                    <a href="detail/40.html">
                                        <h4>Electrician - Technical Classes </h4>
                                    </a>
                                    <div class="" style="padding-top: 5px">
                                        <div style="font-size:16px">Offer Price : ₹ 2600 <span> <del>₹
                                                    3200.00</del></span> </div>

                                        <div>

                                            Course Duration : 6 Months
                                        </div>
                                    </div>
                                </div>
                                <div class="coursebtn">
                                    <a href="detail/40.html"
                                        class="btn btn-buygreen course_preview_id pull-right">Course Preview</a>
                                    <a href="site/userlogin.html" class="btn btn-add course_detail_id"><i
                                            class="fa fa-cart-plus"></i> Buy Now</a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="coursebox">
                                <div class="coursebox-img">
                                    <a href="detail/39.html"><img
                                            src="{{asset('public/uploads/course/course_thumbnail/edit_course_thumbnail391.jpg')}}"></a>
                                </div>
                                <div class="coursebox-body">
                                    <a href="detail/39.html">
                                        <h4>COMPLETE MATHEMATICS </h4>
                                    </a>
                                    <div class="" style="padding-top: 5px">
                                        <div style="font-size:16px">Offer Price : ₹ 1200 <span> <del>₹
                                                    1600.00</del></span> </div>

                                        <div>

                                            Course Duration : 6 Months
                                        </div>
                                    </div>
                                </div>
                                <div class="coursebtn">
                                    <a href="detail/39.html"
                                        class="btn btn-buygreen course_preview_id pull-right">Course Preview</a>
                                    <a href="site/userlogin.html" class="btn btn-add course_detail_id"><i
                                            class="fa fa-cart-plus"></i> Buy Now</a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="coursebox">
                                <div class="coursebox-img">
                                    <a href="detail/35.html"><img
                                            src="{{asset('public/uploads/course/course_thumbnail/edit_course_thumbnail35.jpg')}}"></a>
                                </div>
                                <div class="coursebox-body">
                                    <a href="detail/35.html">
                                        <h4>UPSSSC- INSTRUCTOR COURSE </h4>
                                    </a>
                                    <div class="" style="padding-top: 5px">
                                        <div style="font-size:16px">Offer Price : ₹ 1100</div>

                                        <div>

                                            Course Duration : 6 Months
                                        </div>
                                    </div>
                                </div>
                                <div class="coursebtn">
                                    <a href="detail/35.html"
                                        class="btn btn-buygreen course_preview_id pull-right">Course Preview</a>
                                    <a href="site/userlogin.html" class="btn btn-add course_detail_id"><i
                                            class="fa fa-cart-plus"></i> Buy Now</a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="coursebox">
                                <div class="coursebox-img">
                                    <a href="detail/59.html"><img
                                            src="{{asset('public/uploads/course/course_thumbnail/course_thumbnail59.jpg')}}"></a>
                                </div>
                                <div class="coursebox-body">
                                    <a href="detail/59.html">
                                        <h4>Reasoning : Master Course </h4>
                                    </a>
                                    <div class="" style="padding-top: 5px">
                                        <div style="font-size:16px">Offer Price : ₹ 1100</div>

                                        <div>

                                            Course Duration : 6 Months
                                        </div>
                                    </div>
                                </div>
                                <div class="coursebtn">
                                    <a href="detail/59.html"
                                        class="btn btn-buygreen course_preview_id pull-right">Course Preview</a>
                                    <a href="site/userlogin.html" class="btn btn-add course_detail_id"><i
                                            class="fa fa-cart-plus"></i> Buy Now</a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="coursebox">
                                <div class="coursebox-img">
                                    <a href="detail/56.html"><img
                                            src="{{asset('public/uploads/course/course_thumbnail/course_thumbnail56.jpg')}}"></a>
                                </div>
                                <div class="coursebox-body">
                                    <a href="detail/56.html">
                                        <h4>COPA : Technical Classes </h4>
                                    </a>
                                    <div class="" style="padding-top: 5px">
                                        <div style="font-size:16px">Offer Price : ₹ 2600</div>

                                        <div>

                                            Course Duration : 6 Months
                                        </div>
                                    </div>
                                </div>
                                <div class="coursebtn">
                                    <a href="detail/56.html"
                                        class="btn btn-buygreen course_preview_id pull-right">Course Preview</a>
                                    <a href="site/userlogin.html" class="btn btn-add course_detail_id"><i
                                            class="fa fa-cart-plus"></i> Buy Now</a>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2
                                style="background:rgb(199 33 23);padding: 10px;color: white;border-radius: 5px 5px 0 0 ;">
                                Popular Video Courses <a href="video-lecture.html" class="pull-right"
                                    style="color: #fff;text-decoration: underline;">View All</a></h2>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="background:rgb(199 33 23);padding: 10px;color: white;border-radius: 5px;">Popular
                                Study Material <a href="study-material.html" class="pull-right"
                                    style="color: #fff;text-decoration: underline;">View All</a></h2>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="background:rgb(199 33 23);padding: 10px;color: white;border-radius: 5px;">Popular
                                Online Exam <a href="online-test-series.html" class="pull-right"
                                    style="color: #fff;text-decoration: underline;">View All</a></h2>
                        </div>
                    </div>
                    <div class="row">

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="background:rgb(199 33 23);padding: 10px;color: white;border-radius: 5px;">Popular
                                Video & Study Material <a href="video-study.html" class="pull-right"
                                    style="color: #fff;text-decoration: underline;">View All</a></h2>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="coursebox">
                                <div class="coursebox-img">
                                    <a href="detail/58.html"><img
                                            src="{{asset('public/uploads/course/course_thumbnail/course_thumbnail58.jpg')}}"></a>
                                </div>
                                <div class="coursebox-body">
                                    <a href="detail/58.html">
                                        <h4>EL - PREVIOUS YEAR PAPER </h4>
                                    </a>
                                    <div class="" style="padding-top: 5px">
                                        <div style="font-size:16px">Offer Price : ₹ 100</div>

                                        <div>

                                            Course Duration : 12 Months
                                        </div>
                                    </div>
                                </div>
                                <div class="coursebtn">
                                    <a href="detail/58.html"
                                        class="btn btn-buygreen course_preview_id pull-right">Course Preview</a>
                                    <a href="site/userlogin.html" class="btn btn-add course_detail_id"><i
                                            class="fa fa-cart-plus"></i> Buy Now</a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="coursebox">
                                <div class="coursebox-img">
                                    <a href="detail/57.html"><img
                                            src="{{asset('public/uploads/course/course_thumbnail/edit_course_thumbnail57.jpg')}}"></a>
                                </div>
                                <div class="coursebox-body">
                                    <a href="detail/57.html">
                                        <h4>FT - PREVIOUS PAPER </h4>
                                    </a>
                                    <div class="" style="padding-top: 5px">
                                        <div style="font-size:16px">Offer Price : ₹ 100</div>

                                        <div>

                                            Course Duration : 12 Months
                                        </div>
                                    </div>
                                </div>
                                <div class="coursebtn">
                                    <a href="detail/57.html"
                                        class="btn btn-buygreen course_preview_id pull-right">Course Preview</a>
                                    <a href="site/userlogin.html" class="btn btn-add course_detail_id"><i
                                            class="fa fa-cart-plus"></i> Buy Now</a>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="background:rgb(199 33 23);padding: 10px;color: white;border-radius: 5px;">Popular
                                Video & Online Exam <a href="video-exam.html" class="pull-right"
                                    style="color: #fff;text-decoration: underline;">View All</a></h2>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="coursebox">
                                <div class="coursebox-img">
                                    <a href="detail/47.html"><img
                                            src="{{asset('public/uploads/course/course_thumbnail/course_thumbnail47.jpg')}}"></a>
                                </div>
                                <div class="coursebox-body">
                                    <a href="detail/47.html">
                                        <h4>Fitter Online Test : </h4>
                                    </a>
                                    <div class="" style="padding-top: 5px">
                                        <div style="font-size:16px">Offer Price : ₹ 600 <span> <del>₹
                                                    800.00</del></span> </div>

                                        <div>

                                            Course Duration : 6 Months
                                        </div>
                                    </div>
                                </div>
                                <div class="coursebtn">
                                    <a href="detail/47.html"
                                        class="btn btn-buygreen course_preview_id pull-right">Course Preview</a>
                                    <a href="site/userlogin.html" class="btn btn-add course_detail_id"><i
                                            class="fa fa-cart-plus"></i> Buy Now</a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="coursebox">
                                <div class="coursebox-img">
                                    <a href="detail/48.html"><img
                                            src="{{asset('public/uploads/course/course_thumbnail/course_thumbnail48.jpg')}}"></a>
                                </div>
                                <div class="coursebox-body">
                                    <a href="detail/48.html">
                                        <h4>Electrician Online Test : </h4>
                                    </a>
                                    <div class="" style="padding-top: 5px">
                                        <div style="font-size:16px">Offer Price : ₹ 600 <span> <del>₹
                                                    800.00</del></span> </div>

                                        <div>

                                            Course Duration : 6 Months
                                        </div>
                                    </div>
                                </div>
                                <div class="coursebtn">
                                    <a href="detail/48.html"
                                        class="btn btn-buygreen course_preview_id pull-right">Course Preview</a>
                                    <a href="site/userlogin.html" class="btn btn-add course_detail_id"><i
                                            class="fa fa-cart-plus"></i> Buy Now</a>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="background:rgb(199 33 23);padding: 10px;color: white;border-radius: 5px;">Popular
                                Study Material & Online Exam <a href="study-exam.html" class="pull-right"
                                    style="color: #fff;text-decoration: underline;">View All</a></h2>
                        </div>
                    </div>
                    <div class="row">

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="background:rgb(199 33 23);padding: 10px;color: white;border-radius: 5px;">Popular
                                Business Video <a href="business-video.html" class="pull-right"
                                    style="color: #fff;text-decoration: underline;">View All</a></h2>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="coursebox">
                                <div class="coursebox-img">
                                    <a href="detail/53.html"><img
                                            src="{{asset('public/uploads/course/course_thumbnail/course_thumbnail53.jpg')}}"></a>
                                </div>
                                <div class="coursebox-body">
                                    <a href="detail/53.html">
                                        <h4>business </h4>
                                    </a>
                                    <div class="" style="padding-top: 5px">
                                        <div style="font-size:16px">Offer Price : ₹ 233</div>

                                        <div>

                                            Course Duration : 4 Months
                                        </div>
                                    </div>
                                </div>
                                <div class="coursebtn">
                                    <a href="detail/53.html"
                                        class="btn btn-buygreen course_preview_id pull-right">Course Preview</a>
                                    <a href="site/userlogin.html" class="btn btn-add course_detail_id"><i
                                            class="fa fa-cart-plus"></i> Buy Now</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="newsmain">
                        <div class="catetab">Govt. Jobs <a href="govt-jobs.html"
                                class="btn btn-success pull-right btn-xs">View All</a> </div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul id="" class="newsticker">
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="read/nfl-non-executive-workers-recruitment-2021-apply-online-for-183-vacancy.html">
                                                <p style="margin:0">NFL Non Executive (Workers) Recruitment 2021 – Apply
                                                    Online for 183 <img src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="read/iocl-recruitment-2021-apply-online-for-2437-trade-technician-apprentice-posts.html">
                                                <p style="margin:0">IOCL Recruitment 2021 – Apply Online for 2437 Trade
                                                    & Technician App <img src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="read/western-coalfields-ltd-mining-sirdar-surveyor-recruitment-2021-apply-online-for-211-vacancy.html">
                                                <p style="margin:0">Western Coalfields Ltd Mining Sirdar & Surveyor
                                                    Recruitment 2021 – A <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/npcil-trade-apprentiship-recruitment.html">
                                                <p style="margin:0">NPCIL Trade Apprentiship Recruitment <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="read/name-of-the-post-bsf-constable-tradesman-online-form-2022.html">
                                                <p style="margin:0">Name of the Post: BSF Constable (Tradesman) Online
                                                    Form 2022 <img src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Latest News <a href="latest-news.html"
                                class="btn btn-success pull-right btn-xs">View All</a></div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul class="newsticker">
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/made-easy.html">
                                                <p style="margin:0">MADE EASY <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Apprenticeship <a href="apprenticeship.html"
                                class="btn btn-success pull-right btn-xs">View All</a></div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul class="newsticker">
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/indian-navy-tradesman-online-form-2022.html">
                                                <p style="margin:0">Indian Navy Tradesman Online Form 2022 <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/bsf-constable-tradesman-online-form-2022.html">
                                                <p style="margin:0">BSF Constable (Tradesman) Online Form 2022 <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
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
                        <div class="catetab">Syallabus <a href="syllabus.html"
                                class="btn btn-success pull-right btn-xs">View All</a></div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul class="newsticker">
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/fitter-syllabus.html">
                                                <p style="margin:0">Fitter Syllabus <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/electrician-syllabus.html">
                                                <p style="margin:0">Electrician Syllabus <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/copa-syllabus.html">
                                                <p style="margin:0">COPA Syllabus <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/machinist-syllabus.html">
                                                <p style="margin:0">Machinist Syllabus <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/wireman-syllabus.html">
                                                <p style="margin:0">Wireman Syllabus <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/turner-syllabus.html">
                                                <p style="margin:0">Turner Syllabus <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/engineering-drawing-syllabus.html">
                                                <p style="margin:0">Engineering Drawing Syllabus <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/employability-skills-syllabus.html">
                                                <p style="margin:0">Employability Skills Syllabus <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Important Links<a href="important-links.html"
                                class="btn btn-success pull-right btn-xs">View All</a></div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul class="newsticker">
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/directorate-of-training.html">
                                                <p style="margin:0">Directorate Of Training <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/craft-instructor-training-scheme.html">
                                                <p style="margin:0">Craft Instructor Training Scheme <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/ncvt-mis.html">
                                                <p style="margin:0">NCVT MIS <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/bharat-skill.html">
                                                <p style="margin:0">Bharat Skill <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/apprenticeship-new-portals.html">
                                                <p style="margin:0">Apprenticeship New Portals <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/apprenticeship.html">
                                                <p style="margin:0">Apprenticeship <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/national-career-service.html">
                                                <p style="margin:0">National Career Service <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/nimi.html">
                                                <p style="margin:0">NIMI <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/cstari.html">
                                                <p style="margin:0">CSTARI <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/jan-shikshan-sansthan.html">
                                                <p style="margin:0">Jan Shikshan Sansthan <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/ministry-labour-employment.html">
                                                <p style="margin:0">Ministry Labour & Employment <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/national-scholarship-portal.html">
                                                <p style="margin:0">National Scholarship Portal <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Private Jobs <a href="private-jobs.html"
                                class="btn btn-success pull-right btn-xs">View All</a></div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul class="newsticker">
                                        <li style="padding:0;min-height:20px">
                                            <a
                                                href="read/cochin-shipyard-limited-graduate-technician-apprentice-online-form-2022.html">
                                                <p style="margin:0">Cochin Shipyard Limited Graduate & Technician
                                                    Apprentice Online Form 2 <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/indian-navy-tradesman-online-form-2022-1.html">
                                                <p style="margin:0">Indian Navy Tradesman Online Form 2022 <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Blogs <a href="blogs.html" class="btn btn-success pull-right btn-xs">View
                                All</a></div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul class="newsticker">
                                        <li style="padding:0;min-height:20px">
                                            <a href="read/complete-guidance.html">
                                                <p style="margin:0">Complete Guidance <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Live Test <a href="live-test.html"
                                class="btn btn-success pull-right btn-xs">View All</a></div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul class="newsticker">
                                        <li style="padding:0;min-height:20px">
                                            <a href="site/userlogin.html">
                                                <p style="margin:0">metro live test <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Quiz <a href="quiz.html" class="btn btn-success pull-right btn-xs">View
                                All</a></div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul class="newsticker">
                                        <li style="padding:0;min-height:20px">
                                            <a href="site/userlogin.html">
                                                <p style="margin:0">Fitter Quiz : All Competitive Exam <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                        <li style="padding:0;min-height:20px">
                                            <a href="site/userlogin.html">
                                                <p style="margin:0">Electrician Quiz : All Competitive Exam <img
                                                        src="{{asset('public/uploads/gallery/media/new-gif-image.gif')}}"
                                                        style="height:16px"></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsmain">
                        <div class="catetab">Live Class <a href="liveclass.html"
                                class="btn btn-success pull-right btn-xs">View All</a></div>
                        <div class="newscontent">
                            <div class="tickercontainer">
                                <div class="mask">
                                    <ul class="newsticker">
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