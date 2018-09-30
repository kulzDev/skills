@extends('layouts.main')

@section('sidebar')   

@include('inc.adminsidebar')

@endsection

@section('content') 


<!-- page content -->

<div class="">

    <div class="clearfix"></div>
    <div class="row">

        {{-- <div class="col-md-12 col-sm-12 col-xs-12">

  
  
               
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
                
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#about1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">About</a>
                                </li>
                                <li role="presentation" class=""><a href="#skills" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Skills and Competencies</a>
                                </li>
                                <li role="presentation" class=""><a href="#education" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Education and Qualifications</a>
                                </li>
                                <li role="presentation" class=""><a href="#archievements" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Archievements</a>
                                </li>
                                <li role="presentation" class=""><a href="#career_overview" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Career Overview</a>
                                </li>
                                <li role="presentation" class=""><a href="#references" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">References</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="about1" aria-labelledby="home-tab">

                                        @include('inc.form_errors')
                
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
                                                    
                                                        <!-- Mobile Number -->
                                                    <div class="form-group">
                                                        {!! Form::label('mobile_number', 'Mobile Number: ', ['class' => 'col-lg-2 control-label']) !!}
                                                        <div class="col-lg-10">
                                                            {!! Form::number('mobile_number', $value = null, ['class' => 'form-control', 'placeholder' => 'Mobile Number']) !!}
                                                        </div>
                                                    </div>
            
                                                    <!-- Tell Number -->
                                                    <div class="form-group">
                                                        {!! Form::label('tel_number', 'Tell Number: ', ['class' => 'col-lg-2 control-label']) !!}
                                                        <div class="col-lg-10">
                                                            {!! Form::number('tel_number', $value = null, ['class' => 'form-control', 'placeholder' => 'Tell Number']) !!}
                                                        </div>
                                                    </div>
            
                                                        <!-- ID  -->
                                                        <div class="form-group">
                                                        {!! Form::label('id_number', 'ID Number: ', ['class' => 'col-lg-2 control-label']) !!}
                                                        <div class="col-lg-10">
                                                            {!! Form::number('id_number', $value = null, ['class' => 'form-control', 'placeholder' => 'ID Number']) !!}
                                                        </div>
                                                    </div>
            
                                                        <!-- Gender -->
                                                        <div class="form-group">
                                                        {!! Form::label('gender', 'Gender: ', ['class' => 'col-md-2 control-label']) !!}
                                                        <div class="col-md-10">
                                                            {!! Form::select('gender', array('male' => 'Male','female'=>'Female','other'=>'Other'),null, ['class' => 'form-control']) !!}
                                                        </div>
                                                    </div> 
            
                                                    
                                                        <!-- Profile Picture -->
                                                    <div class="form-group">
                                                        {!! Form::label('photo_id', 'Profile Pic:', ['class' => 'col-md-2 control-label']) !!}
                                                        <div class="col-md-10">
                                                            {!! Form::file('photo_id',null, ['class' => 'form-control']) !!}
                                                        </div>
                                                    </div>         
                                                
                                            
                                                    <!-- Submit Button -->
                                                    <div class="form-group">
                                                        <div class="col-lg-10 col-lg-offset-2">
                                                            {!! Form::submit('Edit Student', ['class' => 'btn  btn-primary'] ) !!}
                                                        </div>
                                                    </div>
                                            
                                            </fieldset> 
                                                
                                    {!! Form::close() !!}


                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="skills" aria-labelledby="profile-tab">
                                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                    booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="education" aria-labelledby="profile-tab">
                                <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                    booth letterpress, commodo enim craft beer mlkshk </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="archievements" aria-labelledby="profile-tab">
                                     <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                        booth letterpress, commodo enim craft beer mlkshk </p>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div> --}}
        
        
        <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">
                    <div class="x_title">
                        <h2>Profile </h2>
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
                                <h3>{{ucfirst($user->name)}}</h3>
    
                                <ul class="list-unstyled user_data">
                                  <li><i class="fa fa-envelope user-profile-icon"></i> {{$user->email}}
                                  </li>
          
                                  <li>
                                    <i class="fa fa-briefcase user-profile-icon"></i> {{$user->role->name}}
                                  </li>
          
                                 </ul>
          
                              
                                <br />
            
                            </div>
                            
                            <div class="col-md-9 col-sm-9 col-xs-12">                           
                                <div class="x_panel">                            
                                    <div class="x_content">                
                                        <div class="col-xs-3">
                                            <!-- required for floating -->
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs tabs-left">
    
                                                <li class="active"><a href="#about" data-toggle="tab">About</a> </li>
                                                <li><a href="#skills" data-toggle="tab">Skills and Competencies</a> </li>
                                                <li><a href="#education" data-toggle="tab">Education and Qualifications</a> </li>
                                                <li><a href="#archievements" data-toggle="tab">Archievements</a> </li>
                                                <li><a href="#career_overview" data-toggle="tab">Career Overview</a> </li>
                                                <li><a href="#references" data-toggle="tab">References</a> </li>
    
                                            </ul>
                                        </div>            
                                        <div class="col-xs-9">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="about">

{{-- 
                                                    <p class="lead">About {{ucfirst($user->name)}}  </p>   --}}

                                                    <div class="x_panel">                                                    
                                                        <div class="x_content"> 
                                                            
                                                            
                                                                @include('inc.form_errors')
                
                                                                {!! Form::model($user, ['method'=>'PATCH',  'class' => 'form-horizontal', 'action'=> ['AdminUsersController@update', $user->id],'files'=>true]) !!}
                                                        
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
                                                                                    {!! Form::label('surname', 'Surame: *', ['class' => 'col-lg-2 control-label']) !!}
                                                                                    <div class="col-lg-10">
                                                                                        {!! Form::text('surname', $value = null, ['class' => 'form-control', 'placeholder' => 'Surame']) !!}
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
                                                                            
                                                                                <!-- Mobile Number -->
                                                                            <div class="form-group">
                                                                                {!! Form::label('mobile_number', 'Mobile Number: ', ['class' => 'col-lg-2 control-label']) !!}
                                                                                <div class="col-lg-10">
                                                                                    {!! Form::number('mobile_number', $value = null, ['class' => 'form-control', 'placeholder' => 'Mobile Number']) !!}
                                                                                </div>
                                                                            </div>
                                    
                                                                            <!-- Tell Number -->
                                                                            <div class="form-group">
                                                                                {!! Form::label('tel_number', 'Tell Number: ', ['class' => 'col-lg-2 control-label']) !!}
                                                                                <div class="col-lg-10">
                                                                                    {!! Form::number('tel_number', $value = null, ['class' => 'form-control', 'placeholder' => 'Tell Number']) !!}
                                                                                </div>
                                                                            </div>
                                    
                                                                                <!-- ID  -->
                                                                                <div class="form-group">
                                                                                {!! Form::label('id_number', 'ID Number: ', ['class' => 'col-lg-2 control-label']) !!}
                                                                                <div class="col-lg-10">
                                                                                    {!! Form::number('id_number', $value = null, ['class' => 'form-control', 'placeholder' => 'ID Number']) !!}
                                                                                </div>
                                                                            </div>
                                    
                                                                            <!-- Gender -->
                                                                            <div class="form-group">
                                                                                {!! Form::label('gender', 'Gender: ', ['class' => 'col-md-2 control-label']) !!}
                                                                                <div class="col-md-10">
                                                                                    {!! Form::select('gender', array('male' => 'Male','female'=>'Female','other'=>'Other'),null, ['class' => 'form-control']) !!}
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            
                                                                            <!-- Address  -->
                                                                            <div class="form-group">
                                                                                {!! Form::label('street', 'Address:', ['class' => 'col-md-2 control-label']) !!}
                                                                                <div class="col-lg-10">
                                                                                    {!! Form::text('street', $value = null, ['class' => 'form-control', 'placeholder' => 'Street']) !!}
                                                                                </div>                                     
                                                                            </div>
                                                                            
                                                                            <div class="form-group">
                                                                                {!! Form::label('', '', ['class' => 'col-md-2 control-label']) !!}
                                                                                <div class="col-lg-10">
                                                                                    {!! Form::select('province', array('Eastern Cape' => 'Eastern Cape','Free State'=>'Free State','Gauteng' =>'Gauteng','KwaZulu Natal'=>'KwaZulu Natal','Limpopo'=>'Limpopo','Mpumalanga'=>'Mpumalanga','North West'=>'North West','Northern Cape' =>'Northern Cape','Western Cape' =>'Western Cape'),null, ['class' => 'form-control', 'placeholder' => 'Select Province']) !!}
                                                                                </div>                                     
                                                                            </div>
                                                                            
                                                                            <div class="form-group">
                                                                                {!! Form::label('', '', ['class' => 'col-md-2 control-label']) !!}
                                                                                <div class="col-lg-10">
                                                                                    {!! Form::number('postal_code', $value = null, ['class' => 'form-control', 'placeholder' => 'Postal Code']) !!}
                                                                                </div>                                     
                                                                            </div>
                                    
                                                                            
                                                                                <!-- Profile Picture -->
                                                                            <div class="form-group">
                                                                                {!! Form::label('photo_id', 'Profile Pic:', ['class' => 'col-md-2 control-label']) !!}
                                                                                <div class="col-md-10">
                                                                                    {!! Form::file('photo_id',null, ['class' => 'form-control']) !!}
                                                                                </div>
                                                                            </div>
                                                                            
                                                                      
                                                                        
                                                                    
                                                                            <!-- Submit Button -->
                                                                            <div class="form-group">
                                                                                <div class="col-lg-10 col-lg-offset-2">
                                                                                    {!! Form::submit('Update ' .$user->role->name, ['class' => 'btn  btn-primary'] ) !!}
                                                                                </div>
                                                                            </div>
                                                                    
                                                                    </fieldset> 
                                                                        
                                                            {!! Form::close() !!}
                        
                                                        

                                                        </div>
                                                    </div>                                      
    
                                                </div>
                                                <div class="tab-pane" id="skills">
                                                    <p class="lead">Skills and Competencies</p>
                                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                                            synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                                </div>
    
                                                <div class="tab-pane" id="education">
                                                    <p class="lead">Education and Qualifications</p>
                                                    <div class="x_panel">                                           
                                                        <div class="x_content">                                      
                                                            <table class="table table-striped">
                                                                <thead>
                                                                  <tr>
                                                                    <th>Qualifications</th>
                                                                    <th>Institution</th>
                                                                    <th>Year(completed)</th>                                                              
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>                                                               
                                                                        <td>Larry</td>
                                                                        <td>the Bird</td>
                                                                        <td>@twitter</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>                                    
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="tab-pane" id="archievements">
                                                    <p class="lead">Archievements</p>
                                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                                </div>
    
                                                <div class="tab-pane" id="career_overview">
                                                    <p class="lead">Career Overview</p>
                                                    <div class="x_panel">                                           
                                                        <div class="x_content">                                      
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                    <th>Company</th>
                                                                    <th>Designation</th>
                                                                    <th>Duration</th>                                                              
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>                                                               
                                                                        <td>Larry</td>
                                                                        <td>the Bird</td>
                                                                        <td>@twitter</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>                                    
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="tab-pane" id="references">
                                                    <p class="lead">References</p>                                              
                                                        <div class="x_panel">                                           
                                                            <div class="x_content">                                      
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                        <th>Company</th>
                                                                        <th>Designation</th>
                                                                        <th>Duration</th>                                                              
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>                                                               
                                                                            <td>Larry</td>
                                                                            <td>the Bird</td>
                                                                            <td>@twitter</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                            </div>
                                        </div>            
                                         <div class="clearfix"></div>            
                                    </div>
                                </div>
                                
                                 
                                {{-- <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <a href="{{url('/users/edit',$user->id)}}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                                        <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Generate Profile PDF</a>
                                    </div>
                                </div> --}}
                                 
                            </div>
                            
                        
                        </div>
                    
                </div>
    </div>
</div>

@endsection