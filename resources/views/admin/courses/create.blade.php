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
                    <h2>Add References </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div  class="  col-md-6 col-sm-6 col-xs-6 col-md-offset-3">

                          @include('inc.form_errors')               
                    

                            {!! Form::open(['action'=>['AdminUsersController@store_course'],'class' => 'form-horizontal','files'=>true]) !!} 
                    
                    
                                <fieldset>           
                                
                                    <!--  Name -->
                                    <div class="form-group">
                                        {!! Form::label('name', 'Name : *', ['class' => 'col-lg-2 control-label']) !!}
                                        <div class="col-lg-10">
                                            {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => ' Course Name']) !!}
                                        </div>
                                    </div>

                                    <!-- Surname -->
                                    <div class="form-group">
                                        {!! Form::label('description', 'Description:*', ['class' => 'col-lg-2 control-label']) !!}
                                        <div class="col-lg-10">
                                            {!! Form::textarea('description', $value = null, ['class' => 'form-control', 'placeholder' => 'Course Description']) !!}
                                        </div>
                                    </div>
                                    
                                    <!-- Tell Number -->
                                    <div class="form-group">
                                        {!! Form::label('duration', 'Duration:*', ['class' => 'col-lg-2 control-label']) !!}
                                        <div class="col-lg-10">
                                            {!! Form::text('duration', $value = null, ['class' => 'form-control', 'placeholder' => 'Duration ']) !!}
                                        </div>
                                    </div>                                   
                                  
                            
                                    <!-- Submit Button -->
                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            {!! Form::submit('Create Course', ['class' => 'btn  btn-primary'] ) !!}
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