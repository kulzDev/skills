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
                <h2>Student List</h2>
               
                <ul class="nav navbar-right panel_toolbox">
                 
                  <li> <a href="{{url('/users/create')}}"><span class="btn btn-primary">Add Student</span> </a></li>  
                             
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">                    
                <table id="datatable-buttons" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      {{-- <th>Id</th> --}}
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Status</th>                      
                      <th>Created</th> 
                      <th>Updated</th>                    
                      <th>Action</th>
                    </tr>
                  </thead>      
      
                  <tbody>

                    @if($users)

                      @foreach ($users as $user)

                       <tr>
                          {{-- <td>{{$user->id}}</td> --}}
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->role->name}}</td>
                          <td>
                            {{$user->is_active ?  'Active' : 'Not Active'}}
                            </td>
                          <td>{{$user->created_at}}</td> 
                          <td>{{$user->updated_at->diffForHumans()}}</td>                                       
                          <td>
                              <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
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
