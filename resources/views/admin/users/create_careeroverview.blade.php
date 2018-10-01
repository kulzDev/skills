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
                    

                            {!! Form::open(['action'=>['AdminUsersController@store_careeroverview', $id ],'class' => 'form-horizontal','files'=>true]) !!}         
                    
                    
                                <fieldset>           
                                
                                    <!-- Company Name -->
                                    <div class="form-group">
                                        {!! Form::label('company_name', 'Company:*', ['class' => 'col-lg-2 control-label']) !!}
                                        <div class="col-lg-10">
                                            {!! Form::text('company_name', $value = null, ['class' => 'form-control', 'placeholder' => 'Company Name']) !!}
                                        </div>
                                    </div>

                                    <!-- Designation -->
                                    <div class="form-group">
                                        {!! Form::label('designation', 'Designation:*', ['class' => 'col-lg-2 control-label']) !!}
                                        <div class="col-lg-10">
                                            {!! Form::text('designation', $value = null, ['class' => 'form-control', 'placeholder' => 'Position Held']) !!}
                                        </div>
                                    </div>
                                    
                                    <!-- Duration -->
                                    <div class="form-group">
                                        {!! Form::label('duration', 'Duration:*', ['class' => 'col-lg-2 control-label']) !!}
                                        <div class="col-lg-10">
                                            {!! Form::text('duration', $value = null, ['class' => 'form-control', 'placeholder' => 'Period. e.g(2001-2010)']) !!}
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
                                            {!! Form::submit('Create CareerOverview', ['class' => 'btn  btn-primary'] ) !!}
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