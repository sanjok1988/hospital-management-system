

@extends('layouts.master1')

@section('content')


 <div class="container-fluid">
               
                  
                   
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h1>Doctor List</h1>
                            
                           <div class="container-fluid">
             
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                          
                           
                            <div class="table-responsive-doctor-view">
                                <table class="table table-responsive-doctor-view">
                                    <thead>
                                        <tr>
                                            
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone No</th>
                                            <th>Specialization</th>
                                            <th>Gender</th>
                                           
                                        </tr>
                                    </thead>

                                    <tbody>

                                     
                                     @if($viewdoctor)
                                   @foreach($viewdoctor as $value) 
                                        <tr>
                                           
                                            <td>{{ $value['name'] }}</td>
                                            <td>{{ $value['email']}}</td>
                                            <td>{{ $value['contact']}}</td>
                                            <td>{{ $value['specialization']}}</td>
                                             <td>{{ $value['gender']}}</td>
                                        
                                        </tr>
                                       @endforeach
                                       @endif
                                    </tbody>
                                    
                                
                                    

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
          </div>
            <!-- /.container-fluid -->
            









@endsection