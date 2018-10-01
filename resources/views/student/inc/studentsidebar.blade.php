@extends('inc.sidebar')

@section('links')

    <div class="menu_section">
        <h3>Student</h3>
        <ul class="nav side-menu">
            <li><a href="{{url('/home')}}"><i class="fa fa-home active"></i> Home </a></li>
            
         
            <li><a><i class="fa fa-group"></i> Progress Report <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                        <li><a href="{{url('/student/results')}}"> Recent Results </a>
                        <li><a href="{{url('/student/report')}}"> My Progress Report </a>                
                </ul>
            </li>

            <li><a ><i class="fa fa-download"></i> Course Materials <span class="fa fa-chevron-down"></span></a>
            
                <ul class="nav child_menu">
                        <li><a href="{{url('/student/viewcourses')}}"> View </a>
                        <li><a href="{{url('/student/uploadcourses')}}"> Upload </a>
                </ul>
            
            </li>      

            <li><a href="{{url('/student/discussions')}}"><i class="fa fa-comments"></i> Discussions </a></li>

            <li><a href="{{url('/student/calendar')}}"><i class="fa fa-calendar"></i> Calender </a></li>

           
        </ul>
    </div>
    
@endsection