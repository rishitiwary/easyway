<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#424242" />
    <title>Login : Easy Way Global</title>
    <link href="{{asset('public/uploads/school_content/admin_small_logo/1.png')}}" rel="shortcut icon"
        type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="{{asset('public/backend/usertemplate/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/usertemplate/assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/usertemplate/assets/css/form-elements.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/usertemplate/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/usertemplate/assets/css/jquery.mCustomScrollbar.min.css')}}">
    <style type="text/css">
    .top-content {
        position: relative;
    }

    body {
        background: #fff;
    }

    .inner-bg {
        border: 1px solid #ccc;
    }

    .form-top-left {
        padding: 20px;
    }

    .logowidth img {
        height: 80px;
    }

    .nav-tabs.nav-justified>.active>a,
    .nav-tabs.nav-justified>.active>a:focus,
    .nav-tabs.nav-justified>.active>a:hover {
        border: 1px solid #ddd;
        background: #c72016;
        color: #fff;
    }
    </style>
</head>

<body>
    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="border-bottom: 1px solid #ccc;">
                        <div class="form-top-left logowidth">
                            <a href="index.html"> <img
                                    src="{{asset('public/uploads/school_content/admin_logo/1.png')}}" /></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="loginbg loginradius">
                            <div class="form-bottom">
                                <h3 class="font-white">Already Registered ? Login</h3>
                                <form action="https://easywayglobal.in/site/userlogin" method="post">
                                    <input type='hidden' name='ci_csrf_token' value='' />
                                    <div class="form-group has-feedback">
                                        <input type="text" name="username" value="" placeholder="Username"
                                            class="form-username form-control" id="email">
                                        <span class="fa fa-envelope form-control-feedback"></span>
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input type="password" name="password" value="" placeholder="Password"
                                            class="form-password form-control" id="password" required>
                                        <span class="fa fa-lock form-control-feedback"></span>
                                        <span class="text-danger"></span>
                                    </div>
                                    <button type="submit" class="btn">Sign In</button>
                                </form>
                                <p><a href="ufpassword.html" class="forgot"> <i class="fa fa-key"></i> Forgot
                                        Password</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12" style="border-left: 1px solid #ccc;">
                        <h3 class="font-white">Don't Have Account ? Register Now </h3>
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="active"><a data-toggle="tab" href="userlogin.html#onlinecourses">For Online
                                    Courses </a></li>
                            <li><a data-toggle="tab" href="userlogin.html#offlinecourses">For Offline Courses </a></li>
                        </ul>
                        <div class="tab-content" style="border: 1px solid #ccc;border-top: none;">
                            <div class="tab-pane fade in active" id="onlinecourses" role="tabpanel"
                                aria-labelledby="onlinecourses">

                                <style>
                                .req {
                                    color: red;
                                }
                                </style>
                                <form id="onlineclass" class="spaceb60 spacet60"
                                    action="https://easywayglobal.in/createonlineclass" id="employeeform"
                                    name="employeeform" method="post" accept-charset="utf-8"
                                    enctype="multipart/form-data">
                                    <div class="row" style="padding: 10px;">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select id="tradegroup" name="tradegroup" class="form-control">
                                                    <option value="">Select Course</option>
                                                    <option value="3">ITI</option>

                                                    <div
                                                        style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

                                                        <h4>A PHP Error was encountered</h4>

                                                        <p>Severity: Notice</p>
                                                        <p>Message: Undefined variable: count</p>
                                                        <p>Filename: views/userlogin.php</p>
                                                        <p>Line Number: 106</p>


                                                        <p>Backtrace:</p>






                                                        <p style="margin-left:10px">
                                                            File:
                                                            /home/easywayglobal/public_html/application/views/userlogin.php<br />
                                                            Line: 106<br />
                                                            Function: _error_handler </p>








                                                        <p style="margin-left:10px">
                                                            File:
                                                            /home/easywayglobal/public_html/application/controllers/Site.php<br />
                                                            Line: 359<br />
                                                            Function: view </p>






                                                        <p style="margin-left:10px">
                                                            File: /home/easywayglobal/public_html/index.php<br />
                                                            Line: 308<br />
                                                            Function: require_once </p>




                                                    </div>
                                                    <option value="5">CITS</option>
                                                    <option value="6">UPSSSC</option>
                                                </select>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <select id="trade" name="trade" class="form-control">
                                                    <option value="">Select Trade</option>
                                                </select>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="firstname" name="firstname" placeholder="Name*" type="text"
                                                    class="form-control" value="" required />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="" id="mobileno"
                                                    name="mobileno" placeholder="Mobile Number *" required />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="" id="email" name="email"
                                                    placeholder="Email *" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control" name="gender">
                                                    <option value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" value="06/10/2022" id="dob"
                                                    name="dob" placeholder="Date of Birth" />
                                                <input type="file" class="filestyle form-control" value="" id="file"
                                                    name="file" placeholder="Photo" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="" id="username"
                                                    name="username" placeholder="Username" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control" value="" id="password"
                                                    name="password" placeholder="Password" required />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group pull-right">
                                                <button type="submit" class="btn-lg btn btn-success">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="offlinecourses" role="tabpanel"
                                aria-labelledby="offlinecourses">
                                <form id="offlineclass" class="spaceb60 spacet60"
                                    action="https://easywayglobal.in/online_admission" id="employeeform"
                                    name="employeeform" method="post" accept-charset="utf-8"
                                    enctype="multipart/form-data">
                                    <div class="row" style="padding: 10px;">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select id="class_id" name="class_id" class="form-control">
                                                    <option value="">Select Class</option>

                                                    <div
                                                        style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

                                                        <h4>A PHP Error was encountered</h4>

                                                        <p>Severity: Notice</p>
                                                        <p>Message: Trying to access array offset on value of type null
                                                        </p>
                                                        <p>Filename: libraries/Customlib.php</p>
                                                        <p>Line Number: 1222</p>


                                                        <p>Backtrace:</p>






                                                        <p style="margin-left:10px">
                                                            File:
                                                            /home/easywayglobal/public_html/application/libraries/Customlib.php<br />
                                                            Line: 1222<br />
                                                            Function: _error_handler </p>




                                                        <p style="margin-left:10px">
                                                            File:
                                                            /home/easywayglobal/public_html/application/models/Class_model.php<br />
                                                            Line: 42<br />
                                                            Function: getUserData </p>




                                                        <p style="margin-left:10px">
                                                            File:
                                                            /home/easywayglobal/public_html/application/views/userlogin.php<br />
                                                            Line: 192<br />
                                                            Function: get </p>








                                                        <p style="margin-left:10px">
                                                            File:
                                                            /home/easywayglobal/public_html/application/controllers/Site.php<br />
                                                            Line: 359<br />
                                                            Function: view </p>






                                                        <p style="margin-left:10px">
                                                            File: /home/easywayglobal/public_html/index.php<br />
                                                            Line: 308<br />
                                                            Function: require_once </p>




                                                    </div>
                                                    <div
                                                        style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

                                                        <h4>A PHP Error was encountered</h4>

                                                        <p>Severity: Notice</p>
                                                        <p>Message: Undefined index: role_id</p>
                                                        <p>Filename: models/Class_model.php</p>
                                                        <p>Line Number: 43</p>


                                                        <p>Backtrace:</p>






                                                        <p style="margin-left:10px">
                                                            File:
                                                            /home/easywayglobal/public_html/application/models/Class_model.php<br />
                                                            Line: 43<br />
                                                            Function: _error_handler </p>




                                                        <p style="margin-left:10px">
                                                            File:
                                                            /home/easywayglobal/public_html/application/views/userlogin.php<br />
                                                            Line: 192<br />
                                                            Function: get </p>








                                                        <p style="margin-left:10px">
                                                            File:
                                                            /home/easywayglobal/public_html/application/controllers/Site.php<br />
                                                            Line: 359<br />
                                                            Function: view </p>






                                                        <p style="margin-left:10px">
                                                            File: /home/easywayglobal/public_html/index.php<br />
                                                            Line: 308<br />
                                                            Function: require_once </p>




                                                    </div>
                                                    <option value="13">EASYWAY </option>
                                                    <option value="14">TURNER</option>
                                                    <option value="15">MACHINIST</option>
                                                    <option value="16">WIREMAN</option>
                                                    <option value="17">ELECTRICIAN</option>
                                                    <option value="18">FITTER</option>
                                                    <option value="19">COPA</option>
                                                    <option value="20">MATH </option>
                                                    <option value="21">REASONING</option>
                                                    <option value="22">ELECTRONIC </option>
                                                    <option value="23">Business Module</option>
                                                    <option value="24">UPSSSC</option>
                                                    <option value="25">TRAINING METHODOLOGY (POT)</option>
                                                </select>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <select id="section_id" name="section_id" class="form-control">
                                                    <option value="">Select Batch</option>
                                                </select>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="firstname" name="firstname" placeholder="Name*" type="text"
                                                    class="form-control" value="" required />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="" id="mobileno"
                                                    name="mobileno" placeholder="Mobile Number *" required />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="" id="email" name="email"
                                                    placeholder="Email *" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control" name="gender">
                                                    <option value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" value="06/10/2022" id="dob"
                                                    name="dob" placeholder="Date of Birth" />
                                                <input type="file" class="filestyle form-control" value="" id="file"
                                                    name="file" placeholder="Photo" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="" id="username"
                                                    name="username" placeholder="Username" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control" value="" id="password"
                                                    name="password" placeholder="Password" required />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group pull-right">
                                                <button type="submit" class="btn-lg btn btn-success">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('public/backend/usertemplate/assets/js/jquery-1.11.1.min.js')}}"></script>

    <script src="{{asset('public/backend/usertemplate/assets/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('public/backend/usertemplate/assets/js/jquery.backstretch.min.js')}}"></script>

    <script src="{{asset('public/backend/usertemplate/assets/js/jquery.mCustomScrollbar.min.js')}}"></script>

    <script src="{{asset('public/backend/usertemplate/assets/js/jquery.mousewheel.min.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on(
            'focus',
            function() {

                $(this).removeClass('input-error');

            });

        $('.login-form').on('submit', function(e) {

            $(this).find('input[type="text"], input[type="password"], textarea').each(function() {

                if ($(this).val() == "") {

                    e.preventDefault();

                    $(this).addClass('input-error');

                } else {

                    $(this).removeClass('input-error');

                }

            });

        });

    });
    </script>

    <script type="text/javascript">
    var base_url = "https://easywayglobal.in/";
    $(document).ready(function() {

        var class_id = $('#class_id').val();
        var section_id = '0';

        getSectionByClass(class_id, section_id);

        $(document).on('change', '#class_id', function(e) {
            $('#section_id').html("");
            var class_id = $(this).val();
            getSectionByClass(class_id, 0);
        });
        $(document).on('change', '#tradegroup', function(e) {
            var tradegroup = $('#tradegroup').val();
            $.ajax({
                url: "https://easywayglobal.in/welcome/gettrades",
                type: "POST",
                data: {
                    tradegroup: tradegroup
                },
                dataType: 'html',
                success: function(res) {
                    $('#trade').html(res);
                }
            });
        });





        function getSectionByClass(class_id, section_id) {

            if (class_id !== "") {
                $('#section_id').html("");

                var div_data = '';
                var url = "";

                $.ajax({
                    type: "POST",
                    url: base_url + "welcome/getSections",
                    data: {
                        'class_id': class_id
                    },
                    dataType: "json",
                    beforeSend: function() {
                        $('#section_id').addClass('dropdownloading');
                    },
                    success: function(data) {
                        $.each(data, function(i, obj) {
                            var sel = "";
                            if (section_id === obj.section_id) {
                                sel = "selected";
                            }
                            div_data += "<option value=" + obj.id + " " + sel + ">" + obj
                                .section + "</option>";
                        });
                        $('#section_id').append(div_data);
                    },
                    complete: function() {
                        $('#section_id').removeClass('dropdownloading');
                    }
                });
            }
        }

    });
    </script>

</body>

</html>