<style type="text/css">
.table-sortable tbody tr {
    cursor: move;
}
@media print
    {
        .no-print, .no-print *
        {
            display: none !important;
        }
    }
</style>
 <?php $general_setting=DB::select('select * from general_setting');?>
<header class="main-header" id="alert">
    <a href="admin/dashboard" class="logo">
        <span class="logo-mini"><img src="{{asset('')}}<?=$general_setting[0]->small_logo;?>"
                alt="Easy Way Global" /></span>
        <span class="logo-lg"><img src="{{asset('')}}<?=$general_setting[0]->admin_logo;?>"
                alt="Easy Way Global" /></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a onclick="collapseSidebar()" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="col-lg-5 col-md-3 col-sm-2 col-xs-5">
            <span href="#" class="sidebar-session">
                Easy Way Global </span>
        </div>
        <div class="col-lg-7 col-md-9 col-sm-10 col-xs-7">
            <div class="pull-right">

                <form id="header_search_form" class="navbar-form navbar-left search-form" role="search"
                    action="admin/search" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" value="" name="search_text1" id="search_text1"
                            class="form-control search-form search-form3"
                            placeholder="Search By Student Name, Roll Number, Enroll Number, National Id, Local Id Etc.">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" onclick="getstudentlist()" style=""
                                class="btn btn-flat topsidesearchbtn"><i class="fa fa-search"></i></button>
                        </span>
                    </div>

                </form>
                <div class="navbar-custom-menu">
                    <div class="langdiv"><select class="languageselectpicker" onchange="set_languages(this.value)"
                            type="text" id="languageSwitcher">

                            <option data-content='<span class="flag-icon flag-icon-us"></span> English' value="4"
                                Selected></option>

                        </select></div>


                    <ul class="nav navbar-nav headertopmenu">
                        <li class="cal15"><a data-placement="bottom" data-toggle="tooltip" title="Calendar"
                                href="admin/calendar/events"><i class="fa fa-calendar"></i></a>

                        </li>
                        <li class="dropdown" data-placement="bottom" data-toggle="tooltip" title="Task">
                            <a href="#" class="dropdown-toggle todoicon" data-toggle="dropdown">
                                <i class="fa fa-check-square-o"></i>
                            </a>
                            <ul class="dropdown-menu menuboxshadow">

                                <li class="todoview plr10 ssnoti">Today you have 0 pending task.<a
                                        href="/admin/calendar/events" class="pull-right pt0">View All</a></li>
                                <li>
                                    <ul class="todolist">

                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="cal15"><a data-placement="bottom" data-toggle="tooltip" title="" href="/admin/chat"
                                data-original-title="Chat" class="todoicon"><i class="fa fa-whatsapp"></i> <span
                                    class="todo-indicator">9</span></a></li>


                        <li class="dropdown user-menu">
                            <a class="dropdown-toggle" style="padding: 15px 13px;" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <img src="{{asset('public/uploads/staff_images/default_male.jpg')}}"
                                    class="topuser-image" alt="User Image">
                            </a>
                            <ul class="dropdown-menu dropdown-user menuboxshadow">
                                <li>
                                    <div class="sstopuser">
                                        <div class="ssuserleft">
                                            <a href="/admin/staff/profile/1"><img
                                                    src="{{asset('public/uploads/staff_images/default_male.jpg')}}"
                                                    alt="User Image"></a>
                                        </div>

                                        <div class="sstopuser-test">
                                            <h4 class="text-capitalize">Super Admin</h4>
                                            <h5>Super Admin</h5>

                                        </div>

                                        <div class="divider"></div>
                                        <div class="sspass">
                                            <a href="/admin/staff/profile/1" data-toggle="tooltip" title=""
                                                data-original-title="My Profile"><i class="fa fa-user"></i>Profile </a>
                                            <a class="pl25" href="/admin/admin/changepass" data-toggle="tooltip"
                                                title="" data-original-title="Change Password"><i
                                                    class="fa fa-key"></i>Password</a> <a class="pull-right"
                                                href="{{url('admin/logout')}}"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                                        </div>
                                    </div>
                                    <!--./sstopuser-->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>