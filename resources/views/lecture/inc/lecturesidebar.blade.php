@extends('inc.sidebar')

@section('links')

    <div class="menu_section">
        <h3>Lecture</h3>
        <ul class="nav side-menu">
            <li><a href="{{url('/lecture/dashboard')}}"><i class="fa fa-dashboard active"></i> Dashboard </a></li>
            
         
            <li><a><i class="fa fa-group"></i> Students <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                        <li><a href="{{url('/lecture/student/list')}}"> Student list </a>
                        <li><a href="{{url('/lecture/student/report')}}"> Progress Report </a>     
                            <li><a href="{{url('uploads/results')}}"> Upload Results </a>            
                </ul>
            </li>

            <li><a ><i class="fa fa-download"></i> Course Materials <span class="fa fa-chevron-down"></span></a>
            
                <ul class="nav child_menu">
                        <li><a href="{{url('/lecture/viewmaterial')}}"> View </a>
                        <li><a href="{{url('/lecture/uploadmaterial')}}"> Upload </a>
                </ul>
            
            </li>      

            <li><a href="{{url('/lecture/discussions')}}"><i class="fa fa-comments"></i> Discussions </a></li>

            <li><a href="{{url('/lecture/calendar')}}"><i class="fa fa-calendar"></i> Calender </a></li>

           
        </ul>
    </div>
    
@endsection