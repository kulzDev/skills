@extends('layouts.main')


@section('sidebar')   

@include('inc.adminsidebar')

@endsection

@section('content')

    <div class="">
        <div class="page-title">    
        </div>
        <div class="clearfix"></div>
      
      {{-- This is the one we take  start --}}
      
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">

                <h2>List of Courses</h2>
               
                <ul class="nav navbar-right panel_toolbox">
                 
                  <li> <a href="{{url('/course/create')}}"><span class="btn btn-primary">Add Course</span> </a></li>  
                             
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content"> 
         
                
                <table id="datatable-buttons" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Course Name</th>
                      <th>Number of Students Enrolled</th>
                      <th>Action</th>                 
                    </tr>
                  </thead>      
      
                  <tbody>

                    @if($courses)

                      @foreach ($courses as $course)

                        <tr>
                          <td>{{$course->id}}</td>
                          <td>{{$course->name}}</td>
                          <td>{{21}}</td>
                          
                          {{-- <td>
                            {{$user->is_active ?  'Active' : 'Not Active'}}
                            </td> --}}
                          {{-- <td>{{$user->created_at}}</td>  --}}
                          {{-- <td><img  height="20" src="{{url($user->photo ? $user->photo->file : '/images/profiles/placeholder.png')}}" alt=" "></td>    --}}
                          {{-- //  use ->diffForHumans() for better readability                                   --}}
                          <td>
                              <a href="{{url('/add/students',$course->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Add Students </a>
                              <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                              <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
          
                          </td>
                        </tr>
                          
                      @endforeach                       

                    @endif
                 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        
    </div>

@endsection
