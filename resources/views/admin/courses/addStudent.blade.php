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
          
                <div class="x_content">
                  
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2> Add Student to class</h2>                             
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">                           
                                <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                                    <thead>
                                        <tr>                                            
                                            <th>Stundent Name</th>
                                            <th>Stundent Surname</th>                                          
                                            <th><input type="checkbox" id="check-all" class="flat">  SELECT ALL</th>
                                                                                
                                        </tr>
                                    </thead>                       
                        
                                    <tbody>
                                        <tr>                                           
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>                                
                                            <th> <input type="checkbox" class="flat" name="table_records"> </th>
                                            
                                        </tr>
                                        <tr>
                                           
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>                                           
                                         
                                            <th><input type="checkbox" class="flat" name="table_records"></th>
                                            
                                        </tr>

                                        <tr>                                           
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <th><input type="checkbox" class="flat" name="table_records"></th>                                            
                                        </tr>
                                        <tr>                                           
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <th><input type="checkbox" class="flat" name="table_records"></th>                                            
                                        </tr> 
                                            
                                        <tr>                                           
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <th><input type="checkbox" class="flat" name="table_records"></th>                                            
                                        </tr> 


                                        <tr>                                           
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <th><input type="checkbox" class="flat" name="table_records"></th>                                            
                                        </tr>
                                        <tr>                                           
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <th><input type="checkbox" class="flat" name="table_records"></th>                                            
                                            </tr>
                                            <tr>                                           
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <th><input type="checkbox" class="flat" name="table_records"></th>                                            
                                            </tr> 
                                                
                                            <tr>                                           
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <th><input type="checkbox" class="flat" name="table_records"></th>                                            
                                            </tr> 
    
    
                                            <tr>                                           
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <th><input type="checkbox" class="flat" name="table_records"></th>                                            
                                            </tr>
                                            <tr>                                           
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <th><input type="checkbox" class="flat" name="table_records"></th>                                            
                                            </tr> 
                                                
                                            <tr>                                           
                                                <td>Katlego Nixon</td>
                                                <td>System Architect</td>
                                                <th><input type="checkbox" class="flat" name="table_records"></th>                                            
                                            </tr> 
    
    
                                            <tr>                                           
                                                <td>Tiger Nixon</td>
                                                <td>Katlego</td>
                                                <th><input type="checkbox" class="flat" name="table_records"></th>                                            
                                            </tr>    


                                    </tbody>
                                </table>

                                <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                                            <a href="#" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Add Selected Students</a>
                                            {{-- <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Generate Profile PDF</a> --}}
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>

               

             
          </div>
          
         
    </div>

@endsection



