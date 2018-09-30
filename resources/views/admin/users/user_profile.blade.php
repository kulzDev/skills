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
                            <h3>{{ucfirst($user->name). ' ' .ucfirst($user->surname) }} </h3>

                            <ul class="list-unstyled user_data">

                                <li>
                                    <i class="fa fa-briefcase user-profile-icon"></i> {{$user->role->name}}
                                </li>
                                <li><i class="fa fa-envelope user-profile-icon"></i> {{$address->first()->street . ' , '. $address->first()->province}}
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
                                                <p class="lead">About {{ucfirst($user->name)}}  </p>                                         
                                                <div class="x_panel">                                                    
                                                    <div class="x_content">                                        
                                                    <table class="table table-striped">                                                              
                                                        <tbody>
                                                            <tr>
                                                                <th>Full Name </th>
                                                                <th>{{ucfirst($user->name).' '}}  {{ucfirst($user->surname)}} </tr>                                                         
                                                            </tr>                                                        

                                                            <tr>
                                                                <th>Email </th>
                                                                <th>{{$user->email}} </tr>                                                         
                                                            </tr>
                                                            <tr>
                                                                <th>Address </th>
                                                                <th>{{$address->first()->street . ' , '. $address->first()->province . ' , '. $address->first()->postal_code}} </tr>                                                         
                                                            </tr>
                                                            <tr>
                                                                <th>ID </th>
                                                                <th>{{$user->id_number}} </tr>                                                         
                                                            </tr>
                                                            <tr>
                                                                <th>Cell Number </th>
                                                                <th>{{$user->mobile_number}} </tr>                                                         
                                                            </tr>                                                               
                                                        </tbody>
                                                    </table>                                        
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
                            
                             
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <a href="{{url('/users/edit',$user->id)}}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                                    <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Generate Profile PDF</a>
                                </div>
                            </div>
                             
                        </div>
                        
                    
                    </div>
                
            </div>
            
        </div> 
        
    </div>
    
</div>

@endsection
