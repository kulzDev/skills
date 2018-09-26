@extends('inc.sidebar')

@section('links')

    <div class="menu_section">
        <h3>Admin</h3>
        <ul class="nav side-menu">
            <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard active"></i> Dashboard </a></li>
            
            <li><a><i class="fa fa-group"></i> Instructors <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                        <li><a href="{{url('/instructorlist')}}">List </a>
                        <li><a href="{{url('/instructorprofiles')}}">Profiles </a>
                </ul>
            </li>

            <li><a><i class="fa fa-group"></i> Students <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                        <li><a href="{{url('/studentlist')}}"> List </a>
                        <li><a href="{{url('/studentprofile')}}"> Profiles </a>
                        <li><a href="{{url('/progressreport')}}"> Progress Report </a>
                </ul>
            </li>
            <li><a href="{{url('/courses')}}"><i class="fa fa-group"></i> Courses </a></li>

            <li><a ><i class="fa fa-download"></i> Course Materials <span class="fa fa-chevron-down"></span></a>
            
                <ul class="nav child_menu">
                        <li><a href="{{url('/viewcourses')}}"> View </a>
                        <li><a href="{{url('/uploadcourses')}}"> Upload </a>
                </ul>
            
            </li>      

            <li><a href="{{url('/discussions')}}"><i class="fa fa-comments"></i> Discussions </a></li>

            <li><a href="{{url('/calendar')}}"><i class="fa fa-calendar"></i> Calender </a></li>

           
        </ul>
    </div>
    
@endsection

      