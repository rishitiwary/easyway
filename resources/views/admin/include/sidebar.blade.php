<aside class="main-sidebar" id="alert2">
    <form class="navbar-form navbar-left search-form2" role="search" action="search" method="POST">
        <input type='hidden' name='ci_csrf_token' value='' />
        <div class="input-group ">

            <input type="text" name="search_text" class="form-control search-form" placeholder="Search By Student Name, Roll Number, Enroll Number, National Id, Local Id Etc.">
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

                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="student/search"><i class="fa fa-user-plus"></i>Student
                            Details</a></li>


                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="studentfee"><i class="fa fa-money"></i>Collect Fees</a>
                    </li>


                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="income"> &nbsp;<i class="fa fa-usd"></i> Add Income</a>
                    </li>

                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="expense"><i class="fa fa-credit-card"></i>Add
                            Expense</a></li>


                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="stuattendence"><i class="fa fa-calendar-check-o"></i>Student Attendance</a></li>


                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="staffattendance"><i class="fa fa-calendar-check-o"></i>Staff Attendance</a></li>


                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="staff"><i class="fa fa-calendar-check-o"></i>Staff
                            Directory</a></li>


                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="examgroup"><i class="fa fa-map-o"></i>Exam Group</a>
                    </li>


                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="examresult"><i class="fa fa-columns"></i>Exam Result</a>
                    </li>


                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="timetable/create"><i class="fa fa-calendar-times-o"></i>Class Timetable</a></li>


                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="enquiry"><i class="fa fa-calendar-check-o"></i>Admission
                            Enquiry</a></li>

                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="complaint"><i class="fa fa-calendar-check-o"></i>Complain</a></li>

                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="content"><i class="fa fa-download"></i>Upload
                            Content</a></li>


                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="itemstock"><i class="fa fa-object-group"></i>Add Item
                            Stock</a></li>


                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="notification"><i class="fa fa-bullhorn"></i>Notice
                            Board</a></li>

                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="mailsms/compose"><i class="fa fa-envelope-o"></i>Send
                            Email / SMS</a></li>
                </ul>
            </li>
        </ul>
        <ul class="sidebar-menu verttop">

            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-ioxhost ftlayer"></i> <span>Front Office</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li class=""><a href="enquiry"><i class="fa fa-angle-double-right"></i> Admission Enquiry </a></li>

                    <li class=""><a href="visitors"><i class="fa fa-angle-double-right"></i> Visitor Book</a></li>


                </ul>
            </li>

            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-empire ftlayer"></i> <span>Front CMS</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{url('admin/events')}}"><i class="fa fa-angle-double-right"></i> Event</a></li>
                    <li class=""><a href="{{url('admin/gallery')}}"><i class="fa fa-angle-double-right"></i> Gallery</a></li>
                    <li class=""><a href="{{url('admin/notice')}}"><i class="fa fa-angle-double-right"></i> News</a></li>
                    <li class=""><a href="{{url('admin/media')}}"><i class="fa fa-angle-double-right"></i> Media Manager</a></li>
                    <li class=""><a href="{{url('admin/banner')}}"><i class="fa fa-angle-double-right"></i> Banner Images</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-empire ftlayer"></i> <span>Master</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{url('master/tradegroup')}}"><i class="fa fa-angle-double-right"></i> Trade Group</a>
                    </li>
                    <li class=""><a href="{{url('master/trade')}}"><i class="fa fa-angle-double-right"></i> Trade</a></li>
                    <li class=""><a href="{{url('master/subject')}}"><i class="fa fa-angle-double-right"></i> Subject</a></li>
                    <li class=""><a href="{{url('master/chapter')}}"><i class="fa fa-angle-double-right"></i> Chapter</a></li>

                    <li class=""><a href="{{url('master/topic')}}"><i class="fa fa-angle-double-right"></i> Topic</a></li>
                    <li class=""><a href="{{url('master/videolibrary')}}"><i class="fa fa-angle-double-right"></i> Video
                            Library</a></li>
                    <li class=""><a href="{{url('master/studymaterials')}}"><i class="fa fa-angle-double-right"></i> Study
                            Material</a></li>
                            <li class=""><a href="{{url('admin/roles')}}"><i class="fa fa-angle-double-right"></i> Roles Permissions</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-user-plus ftlayer"></i> <span>Student Information</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li class=""><a href="{{url('student/search')}}"><i class="fa fa-angle-double-right"></i> Student Details</a>
                    </li>


                    <li class=""><a href="{{url('student/create')}}"><i class="fa fa-angle-double-right"></i> Student Admission</a>
                    </li>

                    <li class=""><a href="{{url('student/onlinestudent')}}"><i class="fa fa-angle-double-right"></i> Online Admission</a>
                    </li>

                    <li class=""><a href="{{url('student/disablestudentslist')}}"><i class="fa fa-angle-double-right"></i> Disabled
                            Students</a></li>
                    <li class=""><a href="{{url('student/multiclass')}}"><i class="fa fa-angle-double-right"></i> Multi Class
                            Student</a></li>
                    <li class=""><a href="{{url('student/bulkdelete')}}"><i class="fa fa-angle-double-right"></i> Bulk Delete</a>
                    </li>
                  
                    <li class=""><a href="{{url('student/disable_reason')}}"><i class="fa fa-angle-double-right"></i> Disable Reason</a>
                    </li>

                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-money ftlayer"></i> <span> Fees Collection</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="studentfee"><i class="fa fa-angle-double-right"></i> Collect Fees</a></li>
                    <li class=""><a href="studentfee/searchpayment"><i class="fa fa-angle-double-right"></i> Search Fees
                            Payment</a></li>
                    <li class=""><a href="studentfee/feesearch"><i class="fa fa-angle-double-right"></i> Search Due Fees
                        </a></li>
                    <li class=""><a href="feemaster"><i class="fa fa-angle-double-right"></i> Fees Master</a></li>
                    <li class=""><a href="feegroup"><i class="fa fa-angle-double-right"></i> Fees Group</a></li>
                    <li class=""><a href="feetype"><i class="fa fa-angle-double-right"></i> Fees Type</a></li>
                    <li class=""><a href="feediscount"><i class="fa fa-angle-double-right"></i> Fees Discount</a></li>
                    <li class=""><a href="feesforward"><i class="fa fa-angle-double-right"></i> Fees Carry Forward</a>
                    </li>
                    <li class=""><a href="feereminder/setting"><i class="fa fa-angle-double-right"></i> Fees
                            Reminder</a></li>

                </ul>
            </li>


            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-calendar-check-o ftlayer"></i> <span>Attendance</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="stuattendence"><i class="fa fa-angle-double-right"></i> Student Attendance</a>
                    </li>
                    <li class=""><a href="stuattendence/attendencereport"><i class="fa fa-angle-double-right"></i>
                            Attendance By Date</a></li>


                    <li class=""><a href="approve_leave"><i class="fa fa-angle-double-right"></i> Approve Leave</a></li>
                </ul>
            </li>



            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-rss ftlayer"></i> <span>Online Examinations</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="onlineexam"><i class="fa fa-angle-double-right"></i> Online Exam</a></li>
                    <li class=""><a href="question"><i class="fa fa-angle-double-right"></i> Question Bank</a></li>



                </ul>
            </li>

            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-mortar-board ftlayer"></i> <span>Academics</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li class=""><a href="{{url('timetable/classreport')}}"><i class="fa fa-angle-double-right"></i> Class
                            Timetable</a></li>
                    <li class=""><a href="{{url('timetable/mytimetable')}}"><i class="fa fa-angle-double-right"></i> Teachers
                            Timetable</a></li>
                    <li class=""><a href="{{url('teacher/assign_class_teacher')}}"><i class="fa fa-angle-double-right"></i> Assign
                            Class Teacher</a></li>

                    <li class=""><a href="{{url('admin/stdtransfer')}}"><i class="fa fa-angle-double-right"></i> Promote Students</a>
                    </li>
                    <li class=""><a href="{{url('admin/subjectgroup')}}"><i class="fa fa-angle-double-right"></i> Subject Group</a></li>
                    <li class=""><a href="{{url('admin/subject')}}"><i class="fa fa-angle-double-right"></i> Subjects</a></li>
                    <li class=""><a href="{{url('admin/classes')}}"><i class="fa fa-angle-double-right"></i> Class</a></li>
                    <li class=""><a href="{{url('admin/batches')}}"><i class="fa fa-angle-double-right"></i> Batches</a></li>

                </ul>
            </li>

            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-sitemap ftlayer"></i> <span>Human Resource</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{url('admin/staff')}}"><i class="fa fa-angle-double-right"></i> Staff Directory</a></li>


                    <li class=""><a href="{{url('admin/staffattendance')}}"><i class="fa fa-angle-double-right"></i> Staff Attendance</a>
                    </li>


                    <li class=""><a href="{{url('admin/payroll')}}"><i class="fa fa-angle-double-right"></i> Payroll</a></li>
                    <li class=""><a href="{{url('admin/staff/approve_leaverequest')}}"><i class="fa fa-angle-double-right"></i> Approve
                            Leave Request</a></li>

                    <li class=""><a href="{{url('admin/staff/leaverequest')}}"><i class="fa fa-angle-double-right"></i> Apply Leave</a>
                    </li>

                    <li class=""><a href="{{url('admin/leavetypes')}}"><i class="fa fa-angle-double-right"></i> Leave Type</a></li>

                    <li class=""><a href="{{url('admin/staff/rating')}}"><i class="fa fa-angle-double-right"></i> Teachers Rating</a>
                    </li>
                    <li class=""><a href="{{url('admin/department')}}"><i class="fa fa-angle-double-right"></i> Department</a>
                    </li>

                    <li class=""><a href="{{url('admin/designation')}}"><i class="fa fa-angle-double-right"></i>
                            Designation</a></li>

                    <li class=""><a href="{{url('admin/disablestafflist')}}"><i class="fa fa-angle-double-right"></i> Disabled
                            Staff</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-bullhorn ftlayer"></i> <span>Communicate</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li class=""><a href="notification"><i class="fa fa-angle-double-right"></i> Notice Board</a></li>
                    <li class=""><a href="mailsms/compose"><i class="fa fa-angle-double-right"></i> Send Email</a></li>
                    <li class=""><a href="mailsms/compose_sms"><i class="fa fa-angle-double-right"></i> Send SMS</a>
                    </li>
                    <li class=""><a href="mailsms/index"><i class="fa fa-angle-double-right"></i> Email / SMS Log</a>
                    </li>

                    <li class=""><a href="student/bulkmail"><i class="fa fa-angle-double-right"></i> Login Credentials
                            Send</a></li>

                </ul>
            </li>

            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-file-video-o ftlayer"></i> <span>Online Course</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="onlinecourse/course/index"><i class="fa fa-angle-double-right"></i>Online
                            Course</a></li>
                    <li class=""><a href="onlinecourse/offlinepayment"><i class="fa fa-angle-double-right"></i>Offline
                            Payment</a></li>
                    <li class=""><a href="onlinecourse/coursereport/report"><i class="fa fa-angle-double-right"></i>Online Course Report</a></li>
                    <li class=""><a href="onlinecourse/course/setting"><i class="fa fa-angle-double-right"></i>Setting</a></li>
                </ul>
            </li>


            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-building-o ftlayer"></i> <span>Hostel</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{url('admin/hostelroom')}}"><i class="fa fa-angle-double-right"></i> Hostel Rooms</a></li>
                    <li class=""><a href="{{url('admin/roomtype')}}"><i class="fa fa-angle-double-right"></i> Room Type</a></li>
                    <li class=""><a href="{{url('admin/hostel')}}"><i class="fa fa-angle-double-right"></i> Hostel</a></li>
                </ul>
            </li>





            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-gears ftlayer"></i> <span>System Settings</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="schsettings"><i class="fa fa-angle-double-right"></i> General Setting</a></li>
                    <li class=""><a href="sessions"><i class="fa fa-angle-double-right"></i> Session Setting</a></li>
                    <li class=""><a href="notification/setting"><i class="fa fa-angle-double-right"></i> Notification
                            Setting</a></li>
                    <li class=""><a href="smsconfig"><i class="fa fa-angle-double-right"></i> SMS Setting</a></li>
                    <li class=""><a href="emailconfig"><i class="fa fa-angle-double-right"></i> Email Setting</a></li>
                    <li class=""><a href="paymentsettings"><i class="fa fa-angle-double-right"></i> Payment Methods</a>
                    </li>
                    <li class=""><a href="print_headerfooter"><i class="fa fa-angle-double-right"></i> Print Header
                            Footer</a></li>
                    <li class=""><a href="frontcms"><i class="fa fa-angle-double-right"></i> Front CMS Setting</a></li>
                   
                    <li class=""><a href="backup"><i class="fa fa-angle-double-right"></i> Backup / Restore</a></li>
                    <li class=""><a href="language"><i class="fa fa-angle-double-right"></i> Languages</a></li>
                    <li class=""><a href="users"><i class="fa fa-angle-double-right"></i> Users</a></li>
                    <li class=""><a href="module"><i class="fa fa-angle-double-right"></i> Modules</a></li>
                    <li class=""><a href="customfield"><i class="fa fa-angle-double-right"></i> Custom Fields</a></li>
                    <li class=""><a href="captcha"><i class="fa fa-angle-double-right"></i> Captcha Setting</a></li>
                    <li class=""><a href="systemfield"><i class="fa fa-angle-double-right"></i> System Fields</a></li>
                    <li class=""><a href="student/profilesetting"><i class="fa fa-angle-double-right"></i> Student
                            Profile Update</a></li>
                    <li class=""><a href="onlineadmission/admissionsetting"><i class="fa fa-angle-double-right"></i>
                            Online Admission</a></li>
                    <li class=""><a href="filetype"><i class="fa fa-angle-double-right"></i> File Types</a></li>
                    <li class=""><a href="updater"><i class="fa fa-angle-double-right"></i> System Update</a></li>

                </ul>
            </li>
        </ul>
    </section>
</aside>