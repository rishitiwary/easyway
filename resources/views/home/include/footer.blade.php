<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h3 class="fo-title">Links</h3>
                    <ul class="f1-list">
                        <li> <a href="private-jobs.html"> Private Jobs </a></li>
                        <li> <a href="govt-jobs.html"> Govt. Jobs </a></li>
                        <li> <a href="latest-news.html"> News</a></li>
                        <li> <a href="blogs.html"> Blogs </a></li>
                        <li> <a href="page/faqs.html"> FAQ's </a></li>
                        <li> <a href="syllabus.html"> Syllabus </a></li>
                        <li class="">

                            <a href="{{url('admin/login')}}">Easyway Login</a>



                        </li>
                        <li class="">

                            <a href="page/support-video.html">Support Video</a>



                        </li>
                        <li class="">

                            <a href="page/privacy-policy.html">Privacy Policy</a>



                        </li>
                        <li class="">

                            <a href="page/refund-cancellation-policy.html">Refund & Cancellation Policy</a>



                        </li>
                        <li class="">

                            <a href="page/terms-and-conditions.html">Terms and Conditions</a>



                        </li>
                    </ul>
                </div>
                <!--./col-md-3-->

                <div class="col-md-4 col-sm-6">
                    <h3 class="fo-title">Follow Us</h3>
                    <ul class="social ">

                        <li><a href="https://www.facebook.com/easywayiti/" target="_blank" class="btn btn-primary "
                                style="padding:5px"><i class="fab fa-facebook"></i></a></li>

                        <li><a href="https://twitter.com/Easywayglobal1?s=20&t=V4Fy4-AdkgVUFqquLrOBEA" target="_blank"
                                class="btn btn-info " style="padding:5px"><i class="fab fa-twitter"></i></a></li>

                        <li><a href="https://www.youtube.com/channel/UC2_JniyqnMjxMPyPFkJV-0A" target="_blank"
                                class="btn btn-danger " style="padding:5px"><i class="fab fa-youtube"></i></a></li>

                        <li><a href="https://www.instagram.com/easywayiti/?hl=en" target="_blank" class="btn btn-info "
                                style="padding:5px"><i class="fab fa-instagram"></i></a></li>

                        <li><a href="https://t.me/Easywayglobal" target="_blank" class="btn btn-info "
                                style="padding:5px"><i class="fab fa-telegram"></i></a></li>

                    </ul>

                </div>
                <!--./col-md-3-->
                <div class="col-md-4 col-sm-6">
                    <h3 class="fo-title">Contact</h3>
                    <ul class="co-list">
                        <li><i class="fa fa-envelope"></i>
                            <a href="mailto:24easyway@gmail.com">24easyway@gmail.com</a></li>
                        <li><i class="fa fa-phone"></i>8409938540</li>
                        <li><i class="fa fa-map-marker"></i>SANJAY NAGAR ROAD NO. 8 RAM LAKHAN PATH BYPASS NEAR MITHAPUR
                            BAS STAND 800001</li>
                    </ul>
                </div>
                <!--./col-md-3-->
                <div class="col-md-3 col-sm-6">
                    <a class="twitter-timeline" data-tweet-limit="1" href="frontend.html#"></a>
                </div>
                <!--./col-md-3-->
            </div>
            <!--./row-->
        </div>
        <!--./container-->

        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <p>All Right Reserved Easyway Global</p>
                    </div>
                </div>
                <!--./row-->
            </div>
            <!--./container-->
        </div>
        <!--./copy-right-->
        <a class="scrollToTop" href="frontend.html#"><i class="fa fa-angle-double-up"></i></a>
    </footer>

    <script src="{{asset('public/backend/themes/yellow/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/themes/yellow/js/jquery.waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/themes/yellow/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('public/backend/themes/yellow/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/backend/themes/yellow/js/ss-lightbox.js')}}"></script>
    <script src="{{asset('public/backend/themes/yellow/js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/themes/yellow/datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript">
    $(function() {
        jQuery('img.svg').each(function() {
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if (typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if (typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass + ' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Check if the viewport is set, else we gonna set it if we can.
                if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                    $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr(
                        'width'))
                }

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');

        });
    });
    </script>
</body>

</html>