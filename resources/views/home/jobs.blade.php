@include('home.include.head')
 <body>

     @include('home.include.header')
     @include('home.include.menu')
     <div class="toper">
         <section class="bredcrumb" style="background:url(https://easywayglobal.in/uploads/gallery/media/apprenticeship-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-job.jpg);background-size: 100% 100%;">

         </section>
         <style type="text/css">
             .thumbnail a img {
                 height: 200px;
                 width: 100%;
             }

             .thumbnail a h2 {
                 margin: 0;
                 font-size: 21px;
             }
         </style>
         <section>
             <div class="container">
                 <div class="row">
                     @foreach($list as $row)
                     <div class="col-md-3 thumbnail">
                         <a href="{{url('read')}}/{{$row->url}}">
                             <img src="https://easywayglobal.in/uploads/gallery/media/Blog-easyway-iti-coaching-iti-course-iti-online-class-iti-college-iti-admission-ncvt-dgt-iti-job-iti-government-.jpg" class="img-responsive feature_image_url">
                             <h2>{{$row->title}}</h2>
                             <p>{{$row->short_description}}</p>
                             <p class="btn btn-primary">Read More</p>
                         </a>
                     </div>
                    @endforeach
                 </div>
             </div>
         </section>
     </div>
     </div>

     @include('home.include.footer')