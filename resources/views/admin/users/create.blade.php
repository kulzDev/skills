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
                    <h2>Create User </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div  class="  col-md-6 col-sm-6 col-xs-6 col-md-offset-3">

                          @include('inc.form_errors')  
{{--                           
                          {{$roles}} --}}

                      
                              {{-- {{(new DateTime())->format('Y-m-d H:i:s')}} --}}
                       


                            {!! Form::open(['action'=>'AdminUsersController@store', 'class' => 'form-horizontal','files'=>true]) !!}          
                    
                    
                                <fieldset>
            
                                
                                        <!-- Name -->
                                        <div class="form-group">
                                            {!! Form::label('name', 'Name: *', ['class' => 'col-lg-2 control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                                            </div>
                                        </div>


                                        <!-- Surname -->
                                        <div class="form-group">
                                            {!! Form::label('surname', 'Surname: *', ['class' => 'col-lg-2 control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::text('surname', $value = null, ['class' => 'form-control', 'placeholder' => 'Surname']) !!}
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
                                                {!! Form::select('is_active', array(1=>'Active',0 =>'Not Active'),0, ['class' => 'form-control']) !!}
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
                                                {!! Form::submit('Create Student', ['class' => 'btn  btn-primary'] ) !!}
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