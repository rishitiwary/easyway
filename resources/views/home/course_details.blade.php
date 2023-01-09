@include('home.include.head')

<body>
    @include('home.include.header')
    @include('home.include.menu')

    <div class="toper">
        <style type="text/css">
        .maincontent img.img-responsive {
            height: 400px;
            width: 100%;
        }

        .sidebar img.img-responsive {
            height: 100px;
            width: 100%;
        }

        .thumbnail a h2 {
            margin: 0;
            font-size: 21px;
        }

        .whatlearn li:after,
        .accordion-togglelpus:after {
            font-family: 'Font Awesome 5 Pro';
        }
        </style>
        <div class="container">
            <div class="flex-row row">
                <div class="col-lg-9 col-sm-12 col-xs-12">
                    <div class="whatyou coursebox-body mbDM15">
                        <div class="coursebox mb0">


                            <img src="{{asset('')}}{{$res->course_thumbnail}}" class="img-responsive">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="imgbottomtext">
                                <h3 class="pb3 fontmedium">{{$res->title}}</h3>
                                <p></p>
                                <p>{!!$res->description!!}</p>.<p></p>
                            </div>
                        </div>
                        <!--./col-lg-9-->



                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="coursecard whatyou">
                                <h3 class="fontmedium">Course Preview</h3>
                                <iframe width="100%" height="500"
                                    src="https://www.youtube.com/embed/<?= $res->course_url ?>?modestbranding=1&autoplay=0&mute=0&rel=1&showinfo=0&loop=1&controls=1"
                                    frameborder="0" title=" YouTube video player">
                                </iframe>

                                <div class="overlay--fullscreen"></div>
                            </div>
                            <!--./coursecard-->
                            <div class="coursecard" style="margin-top:10px;">

                                <div class="panel-group faq mb10" id="">
                                    <div class="panel panel-info">
                                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordionplus"
                                            data-target="#0" aria-expanded="true">
                                            <h4 class="panelh3 accordion-togglelpus"><b>Free Related Videos<span
                                                        class="mr0"><i class="fa fa-play-circle"></i>
                                                        Videos</span></b></h4><b>
                                            </b>
                                        </div><b>
                                            <div id="0" class="panel-collapse collapse in" aria-expanded="true">
                                                <div class="row container">
                                                    @foreach($demovideos as $row)
                                                    <div class="col-lg-4">
                                                        <h4>{{$row->title}}</h4>
                                                        <iframe width="100%" height="250"
                                                            src="https://www.youtube.com/embed/<?= $row->video_id ?>?modestbranding=1&autoplay=0&mute=0&rel=1&showinfo=0&loop=1&controls=1"
                                                            frameborder="0" title=" YouTube video player">
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
                        <!--./col-lg-8-->

                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-xs-12">
                    <div class="whatyou coursebox-body relative">
                        <div class="author-block-center text-center">
                            <span class="authornamebig" style="color: #fd2622;">Easyway</span>
                            <!-- <span class="descriptionbig">Last Updated <span>09/08/2022</span></span> -->
                        </div>
                        <ul class="lessonsblock ptt10">
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
                                <i class="fa fa-clock"></i>
                                Expiry : {{date('d-m-Y H:i:s',strtotime($res->expiry))}} </li>

                            <li>

                            <li>
                                <i class="fa fa-clock"></i>
                                Created At : {{date('d-m-Y H:i:s',strtotime($res->created_date))}} </li>

                            <li>
                                <i class="fa fa-rupee">₹</i>
                                Price :  {{$res->price-($res->price*($res->discount/100))}}
                            </li>
                            <li>
                                <i class="fa fa-rupee">₹</i>
                                Discount : {{$res->discount}} % Off
                            </li>
                        </ul>
                        <div class="coursebtnfull" style="position:relative;">
                            <a href="{{url('course_payment/payment')}}/{{$res->id}}" class="btn btn-add-full">Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="row">


                        @foreach($related_course as $row)

                        <div class="col-md-12">
                            <div class="coursebox">
                                <div class="coursebox-img">
                                    <a href="{{url('course_details')}}/{{$row->id}}"><img
                                            src="{{asset('')}}/{{$row->course_thumbnail}}"></a>
                                </div>
                                <div class="coursebox-body">
                                    <a href="{{url('course_details')}}/{{$row->id}}">
                                        <h4>{{$row->title}} </h4>
                                    </a>

                                    <div class="" style="padding-top: 5px">
                                        <div style="font-size:16px">Offer Price : ₹
                                            {{$row->price-($row->price*($row->discount/100))}} <span> <del>₹
                                                    {{$row->price}}</del></span> </div>

                                        <div>

                                            Course Duration : {{$row->duration}} Months
                                        </div>
                                        <div>

                                            Expiry : {{date('d/m/Y',strtotime($row->expiry))}}
                                            <span style="float:right;">Discount : {{$row->discount}} %</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="coursebtn">
                                    <a href="{{url('course_details')}}/{{$row->id}}"
                                        class="btn btn-buygreen course_preview_id pull-right">Course Preview</a>
                                    <a href="{{url('course_payment/payment')}}/{{$row->id}}"
                                        class="btn btn-add course_detail_id"><i class="fa fa-cart-plus"></i> Buy Now</a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!--./col-lg-5-->
            </div>
            <!--./detailmodalbg-->
        </div>
    </div>

    @include('home.include.footer')