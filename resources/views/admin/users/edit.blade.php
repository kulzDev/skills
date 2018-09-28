@extends('layouts.main')

@section('sidebar')   

@include('inc.adminsidebar')

@endsection

@section('content') 


<!-- page content -->

<div class="">

    <div class="clearfix"></div>
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit User </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                          <div class="profile_img">
                            <div id="crop-avatar">
                              <!-- Current avatar -->
                              <img class="img-responsive avatar-view" src="{{url($user->photo ? $user->photo->file : '/images/profiles/placeholder.png')}}" alt="Avatar" title="Change the avatar">
                            </div>
                          </div>  
                        </div>


                        <div class="col-md-9 col-sm-9 col-xs-12">
    
                        
                          <!-- start of user-activity-graph -->
                       
                          <!-- end of user-activity-graph -->
    
                  
                            @include('inc.form_errors')  
{{--                           
                          {{$roles}} --}}

                      
                              {{-- {{(new DateTime())->format('Y-m-d H:i:s')}}
                        --}}


                            {{-- {!! Form::model(['action'=>'AdminUsersController@store', 'class' => 'form-horizontal','files'=>true]) !!}           --}}
                            {!! Form::model($user, ['method'=>'PATCH',  'class' => 'form-horizontal', 'action'=> ['AdminUsersController@update', $user->id],'files'=>true]) !!}
                    
                                <fieldset>
            
                                
                                        <!-- Name -->
                                        <div class="form-group">
                                            {!! Form::label('name', 'Name: *', ['class' => 'col-lg-2 control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="form-group">
                                            {!! Form::label('email', 'Email: *', ['class' => 'col-lg-2 control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'Email ']) !!}
                                            </div>
                                        </div>


                                
                                        <!-- Password -->
                                        <div class="form-group">
                                            {!! Form::label('password', 'Password: *', ['class' => 'col-lg-2 control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']) !!}
                                            </div>
                                        </div>

                                        <!-- Role -->
                                        <div class="form-group">
                                            {!! Form::label('role_id', 'Role: *', ['class' => 'col-lg-2 control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::select('role_id', [''=>'Choose Options'] + $roles ,null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>


                                        <!-- Status -->
                                        <div class="form-group">
                                            {!! Form::label('is_Active', 'Status: *', ['class' => 'col-md-2 control-label']) !!}
                                            <div class="col-md-10">
                                                {!! Form::select('is_active', array(1=>'Active',0 =>'Not Active'),null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                         <!-- File -->
                                        <div class="form-group">
                                            {!! Form::label('photo_id', 'Profile Pic:', ['class' => 'col-md-2 control-label']) !!}
                                            <div class="col-md-10">
                                                {!! Form::file('photo_id',null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        
                                          {{-- <!-- Created at -->
                                         <div class="form-group">                                               
                                            <div class="col-md-10">
                                                {!! Form::hidden('created_at',(new DateTime())->format('Y-m-d H:i:s'), ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        
                                           <!-- Updated at -->
                                           <div class="form-group">                                               
                                                <div class="col-md-10">
                                                    {!! Form::hidden('updated_at',(new DateTime())->format('Y-m-d H:i:s'), ['class' => 'form-control']) !!}
                                                </div>
                                            </div> --}}
                        
                                  
                                
                                        <!-- Submit Button -->
                                        <div class="form-group">
                                            <div class="col-lg-10 col-lg-offset-2">
                                                {!! Form::submit('Edit Student', ['class' => 'btn  btn-primary'] ) !!}
                                            </div>
                                        </div>
                                
                                    </fieldset> 
                                    
                        {!! Form::close() !!}

                    
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>

@endsection