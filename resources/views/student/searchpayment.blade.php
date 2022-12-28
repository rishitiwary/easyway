

<!DOCTYPE html> 
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Easy Way Global</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta http-equiv="Cache-control" content="no-cache">
        <meta name="theme-color" content="#424242" />
       <link href="https://easywayglobal.in/uploads/school_content/admin_small_logo/1.png" rel="shortcut icon" type="image/x-icon">
        
        <link rel="stylesheet" href="https://easywayglobal.in/backend/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://easywayglobal.in/backend/dist/css/jquery.mCustomScrollbar.min.css">
            <link rel="stylesheet" href="https://easywayglobal.in/backend/dist/css/style-main.css">
    <link rel="stylesheet" href="https://easywayglobal.in/backend/dist/themes/default/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://easywayglobal.in/backend/dist/themes/default/ss-main.css">

           
        <link rel="stylesheet" href="https://easywayglobal.in/backend/dist/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://easywayglobal.in/backend/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="https://easywayglobal.in/backend/plugins/iCheck/flat/blue.css">
        <link rel="stylesheet" href="https://easywayglobal.in/backend/plugins/morris/morris.css">
        <link rel="stylesheet" href="https://easywayglobal.in/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <link rel="stylesheet" href="https://easywayglobal.in/backend/plugins/datepicker/datepicker3.css">
        <link rel="stylesheet" href="https://easywayglobal.in/backend/plugins/colorpicker/bootstrap-colorpicker.css">

        <link rel="stylesheet" href="https://easywayglobal.in/backend/plugins/daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="https://easywayglobal.in/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

        <link rel="stylesheet" href="https://easywayglobal.in/backend/dist/css/custom_style.css">
        <link rel="stylesheet" href="https://easywayglobal.in/backend/datepicker/css/bootstrap-datetimepicker.css">
        <!--file dropify-->
        <link rel="stylesheet" href="https://easywayglobal.in/backend/dist/css/dropify.min.css">
        <!--file nprogress-->
        <link href="https://easywayglobal.in/backend/dist/css/nprogress.css" rel="stylesheet">

        <!--print table-->
        <link href="https://easywayglobal.in/backend/dist/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://easywayglobal.in/backend/dist/datatables/css/buttons.dataTables.min.css" rel="stylesheet">
        <link href="https://easywayglobal.in/backend/dist/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <!--print table mobile support-->
        <link href="https://easywayglobal.in/backend/dist/datatables/css/responsive.dataTables.min.css" rel="stylesheet">
        <link href="https://easywayglobal.in/backend/dist/datatables/css/rowReorder.dataTables.min.css" rel="stylesheet">
        <!--language css-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="https://easywayglobal.in/backend/dist/css/bootstrap-select.min.css">
        <script src="https://easywayglobal.in/backend/custom/jquery.min.js"></script>
        <script src="https://easywayglobal.in/backend/dist/js/moment.min.js"></script>
        <script src="https://easywayglobal.in/backend/datepicker/js/bootstrap-datetimepicker.js"></script>
        <script src="https://easywayglobal.in/backend/plugins/colorpicker/bootstrap-colorpicker.js"></script>
        <script src="https://easywayglobal.in/backend/datepicker/date.js"></script>
        <script src="https://easywayglobal.in/backend/dist/js/jquery-ui.min.js"></script>
        <script src="https://easywayglobal.in/backend/js/school-custom.js"></script>
        <script src="https://easywayglobal.in/backend/js/school-admin-custom.js"></script>
        <script src="https://easywayglobal.in/backend/js/sstoast.js"></script>         
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>          -->
        <!-- fullCalendar -->
        <link rel="stylesheet" href="https://easywayglobal.in/backend/fullcalendar/dist/fullcalendar.min.css">
        <link rel="stylesheet" href="https://easywayglobal.in/backend/fullcalendar/dist/fullcalendar.print.min.css" media="print">	
        <script type="text/javascript">
            var baseurl = "https://easywayglobal.in/";
            var start_week=1;
            var chk_validate="";
        </script>
     
  <style type="text/css">
        span.flag-icon.flag-icon-us{text-orientation: mixed;}
  </style>
    </head>
    <body class="hold-transition skin-blue fixed sidebar-mini">


<script>

    function collapseSidebar() {

        if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
        sessionStorage.setItem('sidebar-toggle-collapsed', '');
        } else {
        sessionStorage.setItem('sidebar-toggle-collapsed', '1');
        }

        }

    function checksidebar() {
        if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
        var body = document.getElementsByTagName('body')[0];
        body.className = body.className + ' sidebar-collapse';
        }
    }

    checksidebar();

</script> 
       <div class="wrapper">

            <header class="main-header" id="alert">
                <a href="https://easywayglobal.in/admin/admin/dashboard" class="logo">
                    <span class="logo-mini"><img src="https://easywayglobal.in/uploads/school_content/admin_small_logo/1.png" alt="Easy Way Global" /></span>
                    <span class="logo-lg"><img src="https://easywayglobal.in/uploads/school_content/admin_logo/1.png" alt="Easy Way Global" /></span>
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <a onclick="collapseSidebar()"  class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="col-lg-5 col-md-3 col-sm-2 col-xs-5">
                        <span href="#"  class="sidebar-session">
                            Easy Way Global                        </span>
                    </div>
                    <div class="col-lg-7 col-md-9 col-sm-10 col-xs-7">
                        <div class="pull-right">
                                                          
                                <form id="header_search_form" class="navbar-form navbar-left search-form" role="search"  action="https://easywayglobal.in/admin/admin/search" method="POST">
                                    <input type='hidden' name='ci_csrf_token' value=''/>                                    <div class="input-group">
                                        <input type="text" value="" name="search_text1" id="search_text1" class="form-control search-form search-form3" placeholder="Search By Student Name, Roll Number, Enroll Number, National Id, Local Id Etc.">
                                        <span class="input-group-btn">
                                            <button type="submit" name="search" id="search-btn" onclick="getstudentlist()" style="" class="btn btn-flat topsidesearchbtn"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
 
                                </form>
                                                        <div class="navbar-custom-menu">
                                                                    <div class="langdiv"><select class="languageselectpicker" onchange="set_languages(this.value)"  type="text" id="languageSwitcher" >
                                          
                                               <option data-content='<span class="flag-icon flag-icon-us"></span> English' value="4" Selected></option>
    
                                        </select></div> 
                                                                    
                                     
                                <ul class="nav navbar-nav headertopmenu">
                                             <li class="cal15"><a data-placement="bottom" data-toggle="tooltip" title="Calendar" href="https://easywayglobal.in/admin/calendar/events" ><i class="fa fa-calendar"></i></a>

                                            </li>
                                                                                                                            <li class="dropdown" data-placement="bottom" data-toggle="tooltip" title="Task">
                                                <a href="#"  class="dropdown-toggle todoicon" data-toggle="dropdown">
                                                    <i class="fa fa-check-square-o"></i>
                                                                                                    </a>
                                                <ul class="dropdown-menu menuboxshadow">

                                                    <li class="todoview plr10 ssnoti">Today you have 0 pending task.<a href="https://easywayglobal.in/admin/calendar/events" class="pull-right pt0">View All</a></li>
                                                    <li>
                                                        <ul class="todolist">
                                                            
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                        
                                                                                     <li class="cal15"><a data-placement="bottom" data-toggle="tooltip" title="" href="https://easywayglobal.in/admin/chat" data-original-title="Chat" class="todoicon"><i class="fa fa-whatsapp"></i> <span class="todo-indicator">0</span></a></li> 
                                        
                                  
                                                                    <li class="dropdown user-menu">
                                        <a class="dropdown-toggle" style="padding: 15px 13px;" data-toggle="dropdown" href="#" aria-expanded="false">
                                            <img src="https://easywayglobal.in/uploads/staff_images/default_male.jpg" class="topuser-image" alt="User Image">
                                        </a>
                                        <ul class="dropdown-menu dropdown-user menuboxshadow">
                                            <li>
                                                <div class="sstopuser">
                                                    <div class="ssuserleft">
                                                        <a href="https://easywayglobal.in/admin/staff/profile/1"><img src="https://easywayglobal.in/uploads/staff_images/default_male.jpg" alt="User Image"></a>
                                                    </div>

                                                    <div class="sstopuser-test">
                                                        <h4 class="text-capitalize">Super Admin</h4>
                                                        <h5>Super Admin</h5>
                                                     
                                                    </div>

                                                    <div class="divider"></div>
                                                    <div class="sspass">
                                                        <a href="https://easywayglobal.in/admin/staff/profile/1" data-toggle="tooltip" title="" data-original-title="My Profile"><i class="fa fa-user"></i>Profile </a> 
                                                        <a class="pl25" href="https://easywayglobal.in/admin/admin/changepass" data-toggle="tooltip" title="" data-original-title="Change Password"><i class="fa fa-key"></i>Password</a> <a class="pull-right" href="https://easywayglobal.in/site/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                                                    </div>
                                                </div><!--./sstopuser--></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <aside class="main-sidebar" id="alert2">
            <form class="navbar-form navbar-left search-form2" role="search"  action="https://easywayglobal.in/admin/admin/search" method="POST">
            <input type='hidden' name='ci_csrf_token' value=''/>            <div class="input-group ">

                <input type="text"  name="search_text" class="form-control search-form" placeholder="Search By Student Name, Roll Number, Enroll Number, National Id, Local Id Etc.">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" style="padding: 3px 12px !important;border-radius: 0px 30px 30px 0px; background: #fff;" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <section class="sidebar" id="sibe-box">
        <ul class="sessionul fixedmenu">
            <li class="removehover">
            <a data-toggle="modal" data-target="#sessionModal"><span>Current Session: 2021-22</span><i class="fa fa-pencil pull-right"></i></a>


        </li>
    
    <li class="dropdown">

        <a class="dropdown-toggle drop5" data-toggle="dropdown" href="#" aria-expanded="false">
            <span>Quick Links</span> <i class="fa fa-th pull-right ftlayer"></i>
        </a>

        <ul class="dropdown-menu verticalmenu" style="min-width:194px;font-size:10pt;left:3px;">
            
                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/student/search"><i class="fa fa-user-plus"></i>Student Details</a></li>

            
                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/studentfee"><i class="fa fa-money"></i>Collect Fees</a></li>

            
                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/admin/income"> &nbsp;<i class="fa fa-usd"></i> Add Income</a></li>
                        
                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/admin/expense"><i class="fa fa-credit-card"></i>Add Expense</a></li>

            
                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/admin/stuattendence"><i class="fa fa-calendar-check-o"></i>Student Attendance</a></li>

                
                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/admin/staffattendance"><i class="fa fa-calendar-check-o"></i>Staff Attendance</a></li>

            
                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/admin/staff"><i class="fa fa-calendar-check-o"></i>Staff Directory</a></li>

                
                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/admin/examgroup"><i class="fa fa-map-o"></i>Exam Group</a></li>

                
                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/admin/examresult"><i class="fa fa-columns"></i>Exam Result</a></li>

                
                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/admin/timetable/create"><i class="fa fa-calendar-times-o"></i>Class Timetable</a></li>

                       
                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/admin/enquiry"><i class="fa fa-calendar-check-o"></i>Admission Enquiry</a></li>
                
                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/admin/complaint"><i class="fa fa-calendar-check-o"></i>Complain</a></li>

                            <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/admin/content"><i class="fa fa-download"></i>Upload Content</a></li>

                
                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/admin/itemstock"><i class="fa fa-object-group"></i>Add Item Stock</a></li>

                
                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/admin/notification"><i class="fa fa-bullhorn"></i>Notice Board</a></li>

                                <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="https://easywayglobal.in/admin/mailsms/compose"><i class="fa fa-envelope-o"></i>Send Email / SMS</a></li>
                            </ul>
    </li>
</ul>  
        <ul class="sidebar-menu verttop">
            
                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-ioxhost ftlayer"></i> <span>Front Office</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            
                                <li class=""><a href="https://easywayglobal.in/admin/enquiry"><i class="fa fa-angle-double-right"></i> Admission Enquiry </a></li>

                                                                <li class=""><a href="https://easywayglobal.in/admin/visitors"><i class="fa fa-angle-double-right"></i> Visitor Book</a></li>

                                
                                <li class=""><a href="https://easywayglobal.in/admin/generalcall"><i class="fa fa-angle-double-right"></i> Phone Call Log</a></li>

                                
                                <li class=""><a href="https://easywayglobal.in/admin/dispatch"><i class="fa fa-angle-double-right"></i> Postal Dispatch</a></li>

                                
                                <li class=""><a href="https://easywayglobal.in/admin/receive"><i class="fa fa-angle-double-right"></i> Postal Receive</a></li>

                                
                                <li class=""><a href="https://easywayglobal.in/admin/complaint"><i class="fa fa-angle-double-right"></i> Complain</a></li>

                                
                                <li class=""><a href="https://easywayglobal.in/admin/visitorspurpose"><i class="fa fa-angle-double-right"></i> Setup Front Office</a></li>

                                                    </ul>
                    </li>
                    

                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-user-plus ftlayer"></i> <span>Student Information</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            
                                <li class=""><a href="https://easywayglobal.in/student/search"><i class="fa fa-angle-double-right"></i> Student Details</a></li>

                                
                                <li class=""><a href="https://easywayglobal.in/student/create"><i class="fa fa-angle-double-right"></i> Student Admission</a></li>
                            
                                    <li class=""><a href="https://easywayglobal.in/admin/onlinestudent"><i class="fa fa-angle-double-right"></i> Online Admission</a></li>

                                                                    <li class=""><a href="https://easywayglobal.in/student/disablestudentslist"><i class="fa fa-angle-double-right"></i> Disabled Students</a></li>
                                                                    <li class=""><a href="https://easywayglobal.in/student/multiclass"><i class="fa fa-angle-double-right"></i> Multi Class Student</a></li>
                                                                    <li class=""><a href="https://easywayglobal.in/student/bulkdelete"><i class="fa fa-angle-double-right"></i> Bulk Delete</a>
                                </li>
                                
                                <li class=""><a href="https://easywayglobal.in/category"><i class="fa fa-angle-double-right"></i> Student Categories</a></li>

                                                                                        <li class=""><a href="https://easywayglobal.in/admin/schoolhouse"><i class="fa fa-angle-double-right"></i> Student House</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/disable_reason"><i class="fa fa-angle-double-right"></i> Disable Reason</a></li>
                                                              


                        </ul>
                    </li>
                                        <li class="treeview active">
                        <a href="#">
                            <i class="fa fa-money ftlayer"></i> <span> Fees Collection</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                            <li class=""><a href="https://easywayglobal.in/studentfee"><i class="fa fa-angle-double-right"></i> Collect Fees</a></li>
                                                                <li class="active"><a href="https://easywayglobal.in/studentfee/searchpayment"><i class="fa fa-angle-double-right"></i> Search Fees Payment</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/studentfee/feesearch"><i class="fa fa-angle-double-right"></i> Search Due Fees </a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/feemaster"><i class="fa fa-angle-double-right"></i> Fees Master</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/feegroup"><i class="fa fa-angle-double-right"></i> Fees Group</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/feetype"><i class="fa fa-angle-double-right"></i> Fees Type</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/feediscount"><i class="fa fa-angle-double-right"></i> Fees Discount</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/feesforward"><i class="fa fa-angle-double-right"></i> Fees Carry Forward</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/feereminder/setting"><i class="fa fa-angle-double-right"></i> Fees Reminder</a></li>
                                
                        </ul>
                    </li>
                    
                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-usd ftlayer"></i> <span>Income</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                            <li class=""><a href="https://easywayglobal.in/admin/income"><i class="fa fa-angle-double-right"></i>Add Income</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/income/incomesearch"><i class="fa fa-angle-double-right"></i>Search Income</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/incomehead"><i class="fa fa-angle-double-right"></i>Income Head</a></li>
                                                    </ul>
                    </li>
                                        <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-credit-card ftlayer"></i> <span>Expenses</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                            <li class=""><a href="https://easywayglobal.in/admin/expense"><i class="fa fa-angle-double-right"></i> Add Expense</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/expense/expensesearch"><i class="fa fa-angle-double-right"></i> Search Expense</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/expensehead"><i class="fa fa-angle-double-right"></i> Expense Head</a></li>
                                                    </ul>
                    </li>
                                        <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-calendar-check-o ftlayer"></i> <span>Attendance</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                                <li class=""><a href="https://easywayglobal.in/admin/stuattendence"><i class="fa fa-angle-double-right"></i> Student Attendance</a></li>
                                                                        <li class=""><a href="https://easywayglobal.in/admin/stuattendence/attendencereport"><i class="fa fa-angle-double-right"></i> Attendance By Date</a></li>
                                    

                                <li class=""><a href="https://easywayglobal.in/admin/approve_leave"><i class="fa fa-angle-double-right"></i> Approve Leave</a></li>
                                                    </ul>
                    </li>
                    
                                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-map-o ftlayer"></i> <span>Examinations</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">

                                                            <li class=""><a href="https://easywayglobal.in/admin/examgroup"><i class="fa fa-angle-double-right"></i> Exam Group</a></li>
                                                        <li class=""><a href="https://easywayglobal.in/admin/exam_schedule"><i class="fa fa-angle-double-right"></i> Exam Schedule</a></li>
                                                            <li class=""><a href="https://easywayglobal.in/admin/examresult"><i class="fa fa-angle-double-right"></i> Exam Result</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/admitcard"><i class="fa fa-angle-double-right"></i> Design Admit Card</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/examresult/admitcard"><i class="fa fa-angle-double-right"></i> Print Admit Card</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/marksheet"><i class="fa fa-angle-double-right"></i> Design Marksheet</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/examresult/marksheet"><i class="fa fa-angle-double-right"></i> Print Marksheet</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/grade"><i class="fa fa-angle-double-right"></i> Marks Grade</a></li> 


                        </ul>
                    </li>
                
                                <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-rss ftlayer"></i> <span>Online Examinations</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                            <li class=""><a href="https://easywayglobal.in/admin/onlineexam"><i class="fa fa-angle-double-right"></i> Online Exam</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/question"><i class="fa fa-angle-double-right"></i> Question Bank</a></li>
                                


                        </ul>
                    </li>
                                         <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-list-alt ftlayer"></i> <span>Lesson Plan</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                            <li class=""><a href="https://easywayglobal.in/admin/syllabus"><i class="fa fa-angle-double-right"></i> Manage Lesson Plan</a></li>
                                                                                        <li class=""><a href="https://easywayglobal.in/admin/syllabus/status"><i class="fa fa-angle-double-right"></i> Manage Syllabus Status</a></li>
                                                            <li class=""><a href="https://easywayglobal.in/admin/lessonplan/lesson"><i class="fa fa-angle-double-right"></i> Lesson</a></li>
                                                            <li class=""><a href="https://easywayglobal.in/admin/lessonplan/topic"><i class="fa fa-angle-double-right"></i> Topic</a></li>
        
                        </ul>
                    </li>
                                                <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-mortar-board ftlayer"></i> <span>Academics</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">

                                                            <li class=""><a href="https://easywayglobal.in/admin/timetable/classreport"><i class="fa fa-angle-double-right"></i> Class Timetable</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/timetable/mytimetable"><i class="fa fa-angle-double-right"></i> Teachers Timetable</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/teacher/assign_class_teacher"><i class="fa fa-angle-double-right"></i> Assign Class Teacher</a></li>
                                
                                <li class=""><a href="https://easywayglobal.in/admin/stdtransfer"><i class="fa fa-angle-double-right"></i> Promote Students</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/subjectgroup"><i class="fa fa-angle-double-right"></i> Subject Group</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/subject"><i class="fa fa-angle-double-right"></i> Subjects</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/classes"><i class="fa fa-angle-double-right"></i> Class</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/sections"><i class="fa fa-angle-double-right"></i> Batches</a></li>
                                
                        </ul>
                    </li>
                    
                                <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-sitemap ftlayer"></i> <span>Human Resource</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                            <li class=""><a href="https://easywayglobal.in/admin/staff"><i class="fa fa-angle-double-right"></i> Staff Directory</a></li>

                            
                                                            <li class=""><a href="https://easywayglobal.in/admin/staffattendance"><i class="fa fa-angle-double-right"></i> Staff Attendance</a></li>
                                

                                <li class=""><a href="https://easywayglobal.in/admin/payroll"><i class="fa fa-angle-double-right"></i> Payroll</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/leaverequest/leaverequest"><i class="fa fa-angle-double-right"></i> Approve Leave Request</a></li>

                                                                <li class=""><a href="https://easywayglobal.in/admin/staff/leaverequest"><i class="fa fa-angle-double-right"></i> Apply Leave</a></li>
                                
                                <li class=""><a href="https://easywayglobal.in/admin/leavetypes"><i class="fa fa-angle-double-right"></i> Leave Type</a></li>

                                                                <li class=""><a href="https://easywayglobal.in/admin/staff/rating"><i class="fa fa-angle-double-right"></i> Teachers Rating</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/department/department"><i class="fa fa-angle-double-right"></i> Department</a></li>

                                                                <li class=""><a href="https://easywayglobal.in/admin/designation/designation"><i class="fa fa-angle-double-right"></i> Designation</a></li>
                                
                                <li class=""><a href="https://easywayglobal.in/admin/staff/disablestafflist"><i class="fa fa-angle-double-right"></i> Disabled Staff</a></li>
                                            </ul>
                    </li>
                                        <li class = "treeview ">
                        <a href = "#">
                            <i class="fa fa-bullhorn ftlayer"></i> <span>Communicate</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">

                                                            <li class=""><a href="https://easywayglobal.in/admin/notification"><i class="fa fa-angle-double-right"></i> Notice Board</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/mailsms/compose"><i class="fa fa-angle-double-right"></i> Send Email</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/mailsms/compose_sms"><i class="fa fa-angle-double-right"></i> Send SMS</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/mailsms/index"><i class="fa fa-angle-double-right"></i> Email / SMS Log</a></li>
                    						
							<li class=""><a href="https://easywayglobal.in/student/bulkmail"><i class="fa fa-angle-double-right"></i> Login Credentials Send</a></li>
						
                        </ul>
                    </li>
                    
                        <li class="treeview ">
                <a href="#">
                    <i class="fa fa-file-video-o ftlayer"></i> <span>Online Course</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                                            <li class=""><a href="https://easywayglobal.in/onlinecourse/course/index"><i class="fa fa-angle-double-right"></i>Online Course</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/onlinecourse/offlinepayment"><i class="fa fa-angle-double-right"></i>Offline Payment</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/onlinecourse/coursereport/report"><i class="fa fa-angle-double-right"></i>Online Course Report</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/onlinecourse/course/setting"><i class="fa fa-angle-double-right"></i>Setting</a></li>
                                    </ul>
            </li>
            
             
            
                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-download ftlayer"></i> <span>Download Center</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                        <li class=""><a href="https://easywayglobal.in/admin/content"><i class="fa fa-angle-double-right"></i> Upload Content</a></li>
                                    <li class=""><a href="https://easywayglobal.in/admin/content/assignment"><i class="fa fa-angle-double-right"></i> Assignments</a></li>
                            <li class=""><a href="https://easywayglobal.in/admin/content/studymaterial"><i class="fa fa-angle-double-right"></i> Study Material</a></li>
                            <li class=""><a href="https://easywayglobal.in/admin/content/syllabus"><i class="fa fa-angle-double-right"></i> Syllabus</a></li>
                            <li class=""><a href="https://easywayglobal.in/admin/content/other"><i class="fa fa-angle-double-right"></i> Other Downloads</a></li>
                        </ul>
                    </li>
                                        <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-flask ftlayer"></i> <span>Homework</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                    <li class=""><a href="https://easywayglobal.in/homework"><i class="fa fa-angle-double-right"></i> Add Homework</a></li>
                                            </ul>
                    </li>
                                        <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-book ftlayer"></i> <span>Library</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">


                                                            <li class="">
                                    <a href="https://easywayglobal.in/admin/book/getall"><i class="fa fa-angle-double-right"></i>Book List</a></li>
                                                            <li class=""><a href="https://easywayglobal.in/admin/member"><i class="fa fa-angle-double-right"></i>Issue Return</a></li>
                                                                                        <li class=""><a href="https://easywayglobal.in/admin/member/student"><i class="fa fa-angle-double-right"></i>Add Student</a></li>
                                                <li class=""><a href="https://easywayglobal.in/admin/member/teacher"><i class="fa fa-angle-double-right"></i>Add Staff Member</a></li>
        


                        </ul>
                    </li>
                                        <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-object-group ftlayer"></i> <span>Inventory</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                            <li class=""><a href="https://easywayglobal.in/admin/issueitem"><i class="fa fa-angle-double-right"></i>Issue Item</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/itemstock"><i class="fa fa-angle-double-right"></i>Add Item Stock</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/item"><i class="fa fa-angle-double-right"></i>Add Item</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/itemcategory"><i class="fa fa-angle-double-right"></i>Item Category</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/itemstore"><i class="fa fa-angle-double-right"></i>Item Store</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/itemsupplier"><i class="fa fa-angle-double-right"></i>Item Supplier</a></li>
                                            </ul>
                    </li>
                                        <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-bus ftlayer"></i> <span>Transport</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                            <li class=""><a href="https://easywayglobal.in/admin/route"><i class="fa fa-angle-double-right"></i> Routes</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/vehicle"><i class="fa fa-angle-double-right"></i> Vehicles</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/vehroute"><i class="fa fa-angle-double-right"></i> Assign Vehicle</a></li>
                                    </ul>
                    </li>
                                        <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-building-o ftlayer"></i> <span>Hostel</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                            <li class=""><a href="https://easywayglobal.in/admin/hostelroom"><i class="fa fa-angle-double-right"></i> Hostel Rooms</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/roomtype"><i class="fa fa-angle-double-right"></i> Room Type</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/hostel"><i class="fa fa-angle-double-right"></i> Hostel</a></li>
                                    </ul>
                    </li>
                                        <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-newspaper-o ftlayer"></i> <span>Certificate</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                            <li class=""><a href="https://easywayglobal.in/admin/certificate/"><i class="fa fa-angle-double-right"></i>Student Certificate</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/generatecertificate/"><i class="fa fa-angle-double-right"></i>Generate Certificate</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/studentidcard/"><i class="fa fa-angle-double-right"></i>Student ID Card</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/generateidcard/search"><i class="fa fa-angle-double-right"></i>Generate ID Card</a></li>
                                                            <li class=""><a href="https://easywayglobal.in/admin/staffidcard/"><i class="fa fa-angle-double-right"></i>Staff ID Card</a></li>
                                                               <li class=""><a href="https://easywayglobal.in/admin/generatestaffidcard/"><i class="fa fa-angle-double-right"></i>Generate Staff ID Card</a></li>
                                                    </ul>
                    </li>
                                        <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-empire ftlayer"></i> <span>Front CMS</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                            <li class=""><a href="https://easywayglobal.in/admin/front/events"><i class="fa fa-angle-double-right"></i> Event</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/front/gallery"><i class="fa fa-angle-double-right"></i> Gallery</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/front/notice"><i class="fa fa-angle-double-right"></i> News</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/front/media"><i class="fa fa-angle-double-right"></i> Media Manager</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/front/page"><i class="fa fa-angle-double-right"></i> Pages</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/front/menus"><i class="fa fa-angle-double-right"></i> Menus</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/front/banner"><i class="fa fa-angle-double-right"></i> Banner Images</a></li>
                                            </ul>
                    </li>
                                        <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-empire ftlayer"></i> <span>Tutorial</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class=""><a href="https://easywayglobal.in/admin/tutorial/tradegroup"><i class="fa fa-angle-double-right"></i> Trade Group</a></li>
                            <li class=""><a href="https://easywayglobal.in/admin/tutorial/trade"><i class="fa fa-angle-double-right"></i> Trade</a></li>
                            <li class=""><a href="https://easywayglobal.in/admin/tutorial/subject"><i class="fa fa-angle-double-right"></i> Subject</a></li>
                            <li class=""><a href="https://easywayglobal.in/admin/tutorial/chapter"><i class="fa fa-angle-double-right"></i> Chapter</a></li>
                            
                            <li class=""><a href="https://easywayglobal.in/admin/tutorial/topic"><i class="fa fa-angle-double-right"></i> Topic</a></li>
                            <li class=""><a href="https://easywayglobal.in/admin/tutorial/videolibrary"><i class="fa fa-angle-double-right"></i> Video Library</a></li>
                            <li class=""><a href="https://easywayglobal.in/admin/tutorial/documents"><i class="fa fa-angle-double-right"></i> Study Material</a></li>
                        </ul>
                    </li>
                    

                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-universal-access ftlayer"></i> <span>Alumni</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                            <li class=""><a href="https://easywayglobal.in/admin/alumni/alumnilist"><i class="fa fa-angle-double-right"></i> Manage Alumni</a></li>
                                                <li class=""><a href="https://easywayglobal.in/admin/alumni/events"><i class="fa fa-angle-double-right"></i> Events</a></li>
                    
                        </ul>
                    </li>
                                                <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-line-chart ftlayer"></i> <span>Reports</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                            <li class=""><a href="https://easywayglobal.in/report/studentinformation"><i class="fa fa-angle-double-right"></i> Student Information</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/report/finance"><i class="fa fa-angle-double-right"></i> Finance</a></li>
                                
                                <li class=""><a href="https://easywayglobal.in/report/attendance"><i class="fa fa-angle-double-right"></i> Attendance</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/report/examinations"><i class="fa fa-angle-double-right"></i> Examinations</a></li>
                                                                    <li class=""><a href="https://easywayglobal.in/admin/onlineexam/report"><i class="fa fa-angle-double-right"></i> Online Examinations</a></li>
                                                                        <li class=""><a href="https://easywayglobal.in/report/lesson_plan"><i class="fa fa-angle-double-right"></i> Lesson Plan</a></li>
                                    
                                    <li class=""><a href="https://easywayglobal.in/report/staff_report"><i class="fa fa-angle-double-right"></i> Human Resource</a></li>

                                                                        <li class=""><a href="https://easywayglobal.in/report/library"><i class="fa fa-angle-double-right"></i> Library</a></li>
                                                                        <li class=""><a href="https://easywayglobal.in/report/inventory"><i class="fa fa-angle-double-right"></i> Inventory</a></li>
                                                                        <li class=""><a href="https://easywayglobal.in/admin/route/studenttransportdetails"><i class="fa fa-angle-double-right"></i> Transport</a></li>
                                                                        <li class=""><a href="https://easywayglobal.in/admin/hostelroom/studenthosteldetails"><i class="fa fa-angle-double-right"></i> Hostel</a></li>
                                                                        <li class=""><a href="https://easywayglobal.in/report/alumnireport"><i class="fa fa-angle-double-right"></i> Alumni</a></li>
                                                                    <li class=""><a href="https://easywayglobal.in/admin/userlog"><i class="fa fa-angle-double-right"></i> User Log</a></li>
                                                                        <li class=""><a href="https://easywayglobal.in/admin/audit"><i class="fa fa-angle-double-right"></i>
            Audit Trail Report</a></li>
            

                        </ul>
                    </li>
                    
                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-gears ftlayer"></i> <span>System Settings</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                                                            <li class=""><a href="https://easywayglobal.in/schsettings"><i class="fa fa-angle-double-right"></i> General Setting</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/sessions"><i class="fa fa-angle-double-right"></i> Session Setting</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/notification/setting"><i class="fa fa-angle-double-right"></i> Notification Setting</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/smsconfig"><i class="fa fa-angle-double-right"></i> SMS Setting</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/emailconfig"><i class="fa fa-angle-double-right"></i> Email Setting</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/paymentsettings"><i class="fa fa-angle-double-right"></i> Payment Methods</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/print_headerfooter"><i class="fa fa-angle-double-right"></i> Print Header Footer</a></li>
                                                                    <li class=""><a href="https://easywayglobal.in/admin/frontcms"><i class="fa fa-angle-double-right"></i> Front CMS Setting</a></li>
                                                                                                <li class=""><a href="https://easywayglobal.in/admin/roles"><i class="fa fa-angle-double-right"></i> Roles Permissions</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/admin/backup"><i class="fa fa-angle-double-right"></i> Backup / Restore</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/language"><i class="fa fa-angle-double-right"></i> Languages</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/users"><i class="fa fa-angle-double-right"></i> Users</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/module"><i class="fa fa-angle-double-right"></i> Modules</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/admin/customfield"><i class="fa fa-angle-double-right"></i> Custom Fields</a></li>
                                                            <li class=""><a href="https://easywayglobal.in/admin/captcha"><i class="fa fa-angle-double-right"></i> Captcha Setting</a></li>
                                                            <li class=""><a href="https://easywayglobal.in/admin/systemfield"><i class="fa fa-angle-double-right"></i> System Fields</a></li>
                                                                <li class=""><a href="https://easywayglobal.in/student/profilesetting"><i class="fa fa-angle-double-right"></i> Student Profile Update</a></li>
                                                                    <li class=""><a href="https://easywayglobal.in/admin/onlineadmission/admissionsetting"><i class="fa fa-angle-double-right"></i> Online Admission</a></li>
                                                                    <li class=""><a href="https://easywayglobal.in/admin/admin/filetype"><i class="fa fa-angle-double-right"></i> File Types</a></li>
                                                        <li class=""><a href="https://easywayglobal.in/admin/updater"><i class="fa fa-angle-double-right"></i> System Update</a></li>
                        
                        </ul>
                    </li>
                </ul>
    </section>
</aside>            <script>
                function defoult(id){
      var defoult=  $('#languageSwitcher').val();
   

        $.ajax({
            type: "POST",
            url: base_url + "admin/language/default_language/"+id,
            data: {},
            success: function (data) {
                successMsg("Status Change Successfully");
              $('#languageSwitcher').html(data);

            }
        });

        window.location.reload('true');        
    }

    function set_languages(lang_id){       
        $.ajax({
            type: "POST",
            url: base_url + "admin/language/user_language/"+lang_id,
            data: {},
            success: function (data) { 
                successMsg("Status Change Successfully");
                 window.location.reload('true');

            }
        });

    }
 </script>

 
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-money"></i> Fees Collection</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i>                          
                            Search                            Fees                            Payment                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="https://easywayglobal.in/studentfee/searchpayment" method="post" class="form-inline">
                                    <input type='hidden' name='ci_csrf_token' value=''/>                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Payment Id                                            </label><small class="req"> *</small>
                                            <input autofocus="" id="paymentid" name="paymentid" placeholder="" type="text" class="form-control"  value=""/>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="form-group align-text-top">
                                        <div class="col-sm-12">
                                            <button type="submit" name="search" value="search_filter" class="btn btn-primary btn-sm checkbox-toggle mmius15"><i class="fa fa-search"></i> Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>    
                    
                </div>   
            </div>
        </div> 
    </section>
</div><footer class="main-footer">
    &copy;  2022    Easy Way Global</footer>
<div class="control-sidebar-bg"></div>
</div>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<link href="https://easywayglobal.in/backend/toast-alert/toastr.css" rel="stylesheet"/>
<script src="https://easywayglobal.in/backend/toast-alert/toastr.js"></script>
<script src="https://easywayglobal.in/backend/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://easywayglobal.in/backend/plugins/select2/select2.min.css">
<script src="https://easywayglobal.in/backend/plugins/select2/select2.full.min.js"></script>
<script src="https://easywayglobal.in/backend/plugins/input-mask/jquery.inputmask.js"></script>
<script src="https://easywayglobal.in/backend/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="https://easywayglobal.in/backend/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="https://easywayglobal.in/backend/dist/js/moment.min.js"></script>
<script src="https://easywayglobal.in/backend/plugins/daterangepicker/daterangepicker.js"></script>
<script src="https://easywayglobal.in/backend/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="https://easywayglobal.in/backend/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="https://easywayglobal.in/backend/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="https://easywayglobal.in/backend/dist/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript">
    $('body').tooltip({
        selector: '[data-toggle]',
        trigger: 'click hover',
        placement: 'top',
        delay: {
            show: 50,
            hide: 400
        }
    })
</script>
<!--language js-->
<script type="text/javascript" src="https://easywayglobal.in/backend/dist/js/bootstrap-select.min.js"></script>

<script type="text/javascript">
    $(function () {
        $('.languageselectpicker').selectpicker();
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".studentsidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('.studentsideclose, .overlay').on('click', function () {
            $('.studentsidebar').removeClass('active');
            $('.overlay').fadeOut();
        });

        $('#sidebarCollapse').on('click', function () {
            $('.studentsidebar').addClass('active');
            $('.overlay').fadeIn();
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>


<script src="https://easywayglobal.in/backend/plugins/iCheck/icheck.min.js"></script>
<script src="https://easywayglobal.in/backend/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="https://easywayglobal.in/backend/datepicker/js/bootstrap-datetimepicker.js"></script>

<script src="https://easywayglobal.in/backend/plugins/chartjs/Chart.min.js"></script>
<script src="https://easywayglobal.in/backend/plugins/fastclick/fastclick.min.js"></script>
<script src="https://easywayglobal.in/backend/dist/js/app.min.js"></script>
<!--nprogress-->
<script src="https://easywayglobal.in/backend/dist/js/nprogress.js"></script>
<!--file dropify-->
<script src="https://easywayglobal.in/backend/dist/js/dropify.min.js"></script>
<script type="text/javascript" src="https://easywayglobal.in/backend/dist/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://easywayglobal.in/backend/dist/datatables/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://easywayglobal.in/backend/dist/datatables/js/jszip.min.js"></script>
<script type="text/javascript" src="https://easywayglobal.in/backend/dist/datatables/js/pdfmake.min.js"></script>
<script type="text/javascript" src="https://easywayglobal.in/backend/dist/datatables/js/vfs_fonts.js"></script>
<script type="text/javascript" src="https://easywayglobal.in/backend/dist/datatables/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://easywayglobal.in/backend/dist/datatables/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://easywayglobal.in/backend/dist/datatables/js/buttons.colVis.min.js" ></script>
<script type="text/javascript" src="https://easywayglobal.in/backend/dist/datatables/js/dataTables.responsive.min.js" ></script>
<script type="text/javascript" src="https://easywayglobal.in/backend/dist/datatables/js/ss.custom.js" ></script>
<!-- <script src="https://easywayglobal.in/backend/dist/datatables/js/datetime-moment.js"></script>
-->
</body>
</html>
<!-- jQuery 3 -->
<!--script src="https://easywayglobal.in/backend/dist/js/pages/dashboard2.js"></script-->
<script src="https://easywayglobal.in/backend/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="https://easywayglobal.in/backend/fullcalendar/dist/locale-all.js"></script>
<script type="text/javascript">

    $(document).ready(function () {

    });


    function complete_event(id, status) {
        $.ajax({
            url: "https://easywayglobal.in/admin/calendar/markcomplete/" + id,
            type: "POST",
            data: {id: id, active: status},
            dataType: 'json',

            success: function (res)
            {

                if (res.status == "fail") {
                    var message = "";
                    $.each(res.error, function (index, value) {

                        message += value;
                    });
                    errorMsg(message);

                } else {
                    successMsg(res.message);
                    window.location.reload(true);
                }
            }
        });
    }

    function markc(id) {
        $('#newcheck' + id).change(function () {
            if (this.checked) {
                complete_event(id, 'yes');
            } else {
                complete_event(id, 'no');
            }
        });
    }

</script>


<!-- Button trigger modal -->
<!-- Modal -->
<div class="row">
    <div class="modal fade" id="sessionModal" tabindex="-1" role="dialog" aria-labelledby="sessionModalLabel">
        <form action="https://easywayglobal.in/admin/admin/activeSession" id="form_modal_session" class="">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="sessionModalLabel">Session</h4>
                    </div>
                    <div class="modal-body sessionmodal_body pb0">
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary submit_session" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<div id="activelicmodal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Register your purchase code</h4>
            </div>
            <form action="https://easywayglobal.in/admin/admin/updatePurchaseCode" method="POST" id="purchase_code">
                <div class="modal-body lic_modal-body">
                    <div class="form-group">
						<div class="req"><b>Important:</b> Smart School Regular License allows to use Smart School for single school/branch/end/client but for customer convenience registering Smart School allows to register Smart School licence purchase code on upto 3 urls e.g. 1. For localhost 2. For testing environment and 3. For your production url (testing and production url should be on same domain).</div>
                    </div>
					<div class="error_message">

                    </div>
                    <div class="form-group">
                        <label class="ainline"><span>Envato Market Purchase Code for Smart School ( <a target="_blank" href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-"> How to find it?</a> )</span></label>
                        <input type="text" class="form-control" id="input-envato_market_purchase_code" name="envato_market_purchase_code">
                        <div id="error" class="text text-danger"></div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Email registered with Envato</label>
                        <input type="text" class="form-control" id="input-email" name="email">
                        <div id="error" class="text text-danger"></div>
                    </div>
                </div>
                <div class="modal-footer">                   
                    <button type="submit" class="btn btn-success" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Saving...">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="addonModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Register your Addon</h4>
            </div>
            <form action="https://easywayglobal.in/admin/admin/updateaddon" method="POST" id="addon_verify">
                <div class="modal-body addon_modal-body">
                    <div class="error_message">

                    </div>
                    <input type="hidden" name="addon" class="addon_type" value="">
                    <input type="hidden" name="addon_version" class="addon_version" value="0">
                    <div class="form-group">
                        <label class="ainline"><span>Envato Market Purchase Code for Addon ( <a target="_blank" href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-"> How to find it?</a> )</span></label>
                        <input type="text" class="form-control" id="input-app-envato_market_purchase_code" name="app-envato_market_purchase_code">
                        <div id="error" class="input-error text text-danger"></div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Email registered with Envato</label>
                        <input type="text" class="form-control" id="input-app-email" name="app-email">
                        <div id="error" class="input-error text text-danger"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Saving...">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    var calendar_date_time_format = 'DD.MM.YYYY';

    var datetime_format = 'DD.MM.YYYY';

    var date_format = 'dd.mm.yyyy';


    function savedata(eventData) {
        var base_url = 'https://easywayglobal.in/';
        $.ajax({
            url: base_url + 'admin/calendar/saveevent',
            type: 'POST',
            data: eventData,
            dataType: "json",
            success: function (msg) {
                alert(msg);

            }
        });
    }

    $calendar = $('#calendar');
    var base_url = 'https://easywayglobal.in/';
    today = new Date();
    y = today.getFullYear();
    m = today.getMonth();
    d = today.getDate();
    var viewtitle = 'month';
    var pagetitle = "Edit studentfees";

    if (pagetitle == "Dashboard") {

        viewtitle = 'agendaWeek';
    }

    $calendar.fullCalendar({
        viewRender: function (view, element) {

        },

        header: {
            center: 'title',
            right: 'month,agendaWeek,agendaDay',
            left: 'prev,next,today'
        },
        firstDay: start_week,
        defaultDate: today,
        defaultView: viewtitle,
        selectable: true,
        selectHelper: true,
        views: {
            month: {// name of view
                titleFormat: 'MMMM YYYY'
                        // other view-specific options here
            },
            week: {
                titleFormat: " MMMM D YYYY"
            },
            day: {
                titleFormat: 'D MMM, YYYY'
            }
        },
        timezone: 'UTC',
        draggable: false,
        lang: 'en',
        editable: false,
        eventLimit: false, // allow "more" link when too many events

        // color classes: [ event-blue | event-azure | event-green | event-orange | event-red ]
        events: {
            url: base_url + 'admin/calendar/getevents'

        },

        eventRender: function (event, element) {
            element.attr('title', event.title);
            element.attr('onclick', event.onclick);
            element.attr('data-toggle', 'tooltip');
            if ((!event.url) && (event.event_type != 'task')) {
                element.attr('title', event.title + '-' + event.description);
                element.click(function () {
                    view_event(event.id);
                });
            }
        },
        dayClick: function (date, jsEvent, view) {
           console.log('Clicked on the entire day: ' + date.format());


                var newEventModal= $('#newEventModal');
                $("#input-field").val('');
                $("#desc-field").text('');
                var event_start_from = new Date(date);
                console.log(event_start_from);
                $('.event_from',newEventModal).data("DateTimePicker").date(event_start_from);
                $('.event_to',newEventModal).data("DateTimePicker").date(event_start_from);
                $('#newEventModal').modal('show');

            return false;
        }

    });

    function view_event(id) {

        $('.selectevent').find('.cpicker-big').removeClass('cpicker-big').addClass('cpicker-small');
        var base_url = 'https://easywayglobal.in/';
        if (typeof (id) == 'undefined') {
            return;
        }
        $.ajax({
            url: base_url + 'admin/calendar/view_event/' + id,
            type: 'POST',
            //data: '',
            dataType: "json",
            success: function (msg) {


                $("#event_title").val(msg.event_title);
                $("#event_desc").text(msg.event_description);

                $('#eventid').val(id);
                if (msg.event_type == 'public') {

                    $('input:radio[name=eventtype]')[0].checked = true;

                } else if (msg.event_type == 'private') {
                    $('input:radio[name=eventtype]')[1].checked = true;

                } else if (msg.event_type == 'sameforall') {
                    $('input:radio[name=eventtype]')[2].checked = true;

                } else if (msg.event_type == 'protected') {
                    $('input:radio[name=eventtype]')[3].checked = true;

                }
                //===========

                var __viewModal=$('#viewEventModal');
 var event_start_from = new Date(msg.start_date);
 $('.event_from',__viewModal).data("DateTimePicker").date(event_start_from);

  var event_end_to = new Date(msg.end_date);
 $('.event_to',__viewModal).data("DateTimePicker").date(event_end_to);
                //============

                $("#event_color").val(msg.event_color);
                $("#delete_event").attr("onclick", "deleteevent(" + id + ",'Event')");
                $("#" + msg.colorid).removeClass('cpicker-small').addClass('cpicker-big');
                $('#viewEventModal').modal('show');
            }
        });

    }

    $(document).ready(function (e) {
        $("#addevent_form").on('submit', (function (e) {

            e.preventDefault();
            $.ajax({
                url: "https://easywayglobal.in/admin/calendar/saveevent",
                type: "POST",
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (res)
                {

                    if (res.status == "fail") {

                        var message = "";
                        $.each(res.error, function (index, value) {

                            message += value;
                        });
                        errorMsg(message);

                    } else {

                        successMsg(res.message);

                        window.location.reload(true);
                    }
                }
            });
        }));


    });


    $(document).ready(function (e) {
        $("#updateevent_form").on('submit', (function (e) {

            e.preventDefault();
            $.ajax({
                url: "https://easywayglobal.in/admin/calendar/updateevent",
                type: "POST",
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (res)
                {

                    if (res.status == "fail") {

                        var message = "";
                        $.each(res.error, function (index, value) {

                            message += value;
                        });
                        errorMsg(message);

                    } else {

                        successMsg(res.message);
                        window.location.reload(true);
                    }
                }
            });
        }));

    });

    function deleteevent(id, msg) {
        if (typeof (id) == 'undefined') {
            return;
        }
        if (confirm("Are you sure to delete this ")) {
            $.ajax({
                url: base_url + 'admin/calendar/delete_event/' + id,
                type: 'POST',
                dataType: "json",
                success: function (res) {
                    if (res.status == "fail") {
                        errorMsg(res.message);
                    } else {
                        successMsg(msg + " Record Delete Successfully");
                        window.location.reload(true);
                    }
                }
            })
        }
    }

    $("body").on('click', '.cpicker', function () {
        var color = $(this).data('color');
        // Clicked on the same selected color
        if ($(this).hasClass('cpicker-big')) {
            return false;
        }

        $(this).parents('.cpicker-wrapper').find('.cpicker-big').removeClass('cpicker-big').addClass('cpicker-small');
        $(this).removeClass('cpicker-small', 'fast').addClass('cpicker-big', 'fast');
        if ($(this).hasClass('kanban-cpicker')) {
            $(this).parents('.panel-heading-bg').css('background', color);
            $(this).parents('.panel-heading-bg').css('border', '1px solid ' + color);
        } else if ($(this).hasClass('calendar-cpicker')) {
            $("body").find('input[name="eventcolor"]').val(color);
        }
    });

    $(document).ready(function () {
        moment.lang('en', {
          week: { dow: start_week }
        });

        $("body").delegate(".date", "focusin", function () {
            $(this).datepicker({
                todayHighlight: false,
                format: date_format,
                autoclose: true,
                weekStart : start_week,
                language: 'en'
            });
        });

        $("body").delegate(".datetime", "focusin", function () {
            $(this).datetimepicker({
                format: calendar_date_time_format + ' hh:mm a',
                locale:'en',

            });
        });

        $('body').on('focus',".date_fee", function(){
        $(this).datepicker({
            format: date_format,
            autoclose: true,
            language: 'en',
            endDate: '+0d',
              weekStart : start_week,
            todayHighlight: true
        });
      });

        $('.datetime_twelve_hour').datetimepicker({
               format:  calendar_date_time_format + ' hh:mm a'
        });


            $("#event_date").daterangepicker({
            timePickerIncrement: 5,
            locale: {
            format: calendar_date_time_format
            }
           });


///================

        $('.event_from').datetimepicker({
               format:  calendar_date_time_format + ' hh:mm a'
        });

        $('.event_to').datetimepicker({
               format:  calendar_date_time_format + ' hh:mm a'
        });
//==============


    });

    function loadDate() {

        var date_format = 'dd.mm.yyyy';

        $('.date').datetimepicker({
            format: datetime_format,
            locale:
                    'en',

        });
    }

    // showdate('this_year');

    function showdate(type) {

            var date_from = '20.12.2022';
            var date_to = '20.12.2022';
    
        if (type == 'period') {

            $.ajax({
                url: base_url + 'Report/get_betweendate/' + type,
                type: 'POST',
                data: {date_from: date_from, date_to: date_to},
                success: function (res) {

                    $('#date_result').html(res);

                    loadDate();
                }

            });

        } else {
            $('#date_result').html('');
        }

    }
</script>