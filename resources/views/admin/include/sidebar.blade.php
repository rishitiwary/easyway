<aside class="main-sidebar" id="alert2">

    
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
@php 
$quicklink=DB::table("submenu")->where("menu_id","15")->get();
@endphp
@foreach($quicklink as $run_quicklinks)
                    <li role="presentation"><a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="{{url('')}}/{{$run_quicklinks->link}}"><i class="{{$run_quicklinks->icon}}"></i>{{$run_quicklinks->title}}</a></li>
@endforeach

                </ul>
            </li>
        </ul>
      
        <ul class="sidebar-menu verttop">

            @php
             $active_link=Request::path();
            $menu_id=DB::table("submenu")->where("link",$active_link)->first();
      
            $menu=DB::table("menu")->where("id","!=",15)->get();
            @endphp

            @foreach($menu as $run_menu)
 
            <li class="treeview @if($menu_id->menu_id==$run_menu->id) active @endif" >
                <a href="#">
                    <i class="{{$run_menu->icon}}"></i> <span>{{$run_menu->title}}</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    @php
                    $submenu=DB::table("submenu")->where("menu_id",$run_menu->id)->get();
               
                    @endphp
                    @foreach($submenu as $run_sub_menu)
                    <li class="{{$run_sub_menu->icon}} @if($active_link==$run_sub_menu->link) active @endif" ><a href="{{url('')}}/{{$run_sub_menu->link}}"><i class="fa fa-angle-double-right"></i> {{$run_sub_menu->title}} </a></li>
                    @endforeach


                </ul>
            </li>
            @endforeach
        </ul>
    </section>
</aside>