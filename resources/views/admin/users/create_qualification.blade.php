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
                    <h2>Add Qualification </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div  class="  col-md-6 col-sm-6 col-xs-6 col-md-offset-3">

                          @include('inc.form_errors')               
                    

                            {!! Form::open(['action'=>['AdminUsersController@store_qualification', $id ],'class' => 'form-horizontal','files'=>true]) !!}         
                    
                    
                                <fieldset>           
                                
                                    <!-- Company Name -->
                                    <div class="form-group">
                                        {!! Form::label('name', 'Name : *', ['class' => 'col-lg-2 control-label']) !!}
                                        <div class="col-lg-10">
                                            {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Qualification Name']) !!}
                                        </div>
                                    </div>

                                    <!-- Designation -->
                                    <div class="form-group">
                                        {!! Form::label('institution', 'Institution:*', ['class' => 'col-lg-2 control-label']) !!}
                                        <div class="col-lg-10">
                                            {!! Form::text('institution', $value = null, ['class' => 'form-control', 'placeholder' => 'Institution Name']) !!}
                                        </div>
                                    </div>
                                    
                                    <!-- Duration -->
                                    <div class="form-group">
                                        {!! Form::label('year', 'Year:*', ['class' => 'col-lg-2 control-label']) !!}
                                        <div class="col-lg-10">
                                            {!! Form::date('year', $value = null, ['class' => 'form-control', 'placeholder' => 'Year completed ']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('', '', ['class' => 'col-lg-2 control-label']) !!}
                                        <div class="col-lg-10">
                                            {!! Form::text('user_id', $value = $id, ['class' => 'form-control','readonly']) !!}
                                        </div>
                                    </div>
                            
                                    <!-- Submit Button -->
                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            {!! Form::submit('Create Qualification', ['class' => 'btn  btn-primary'] ) !!}
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