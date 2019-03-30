@extends('layouts.master')

@section('content')

 <div class="container-fluid">
               
                  
                   
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        	 <h1>Doctor Schedule</h1>
                        	 
                           <div class="container-fluid">


                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                          <a href="{{ url('manage_schedule/'.$id)}}" ><button class="btn btn-primary" style=" background: #198cd4;">Manage Doctor Schedule</button></a>
                           
                            <div class="table-responsive-doctor-view">
                            	
			                    @if($schedules)
			                    
                          

                           <h2 style="float: right">Doctor: <b>{{ $schedules->doctor}}</b></h2> 
                                <table class="table table-responsive-doctor-view">
                                    <thead>
                                        <tr>
                                            
                                            <th>Day</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>

                                    <tbody>

                                         
                                        <tr>
                                        	<td>Sunday</td>
                                            <td>{{ $schedules->sunday}}</td>
                                              <td>
                                                <a href="{{ url('doctor/schedule/edit/'.$schedules->id)}}"
                                                class="btn btn-sm btn-primary">Edit</a> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Monday</td>
                                            <td>{{ $schedules->monday}}</td>
                                              <td>
                                                <a href="{{ url('doctor/schedule/edit/'.$schedules->id)}}"
                                                class="btn btn-sm btn-primary">Edit</a> 
                                            </td>
                                        </tr>
                                        <tr>
                                        	  <td>Tuesday</td>
                                            <td>{{ $schedules->tuesday}}</td>
                                              <td>
                                                <a href="{{ url('doctor/schedule/edit/'.$schedules->id)}}"
                                                class="btn btn-sm btn-primary">Edit</a> 
                                            </td>
                                        </tr>
                                        <tr>
                                        	  <td>Wednesday</td>
                                            <td>{{ $schedules->wednesday}}</td>
                                              <td>
                                                <a href="{{ url('doctor/schedule/edit/'.$schedules->id)}}"
                                                class="btn btn-sm btn-primary">Edit</a> 
                                            </td>
                                        </tr>
                                        <tr>
                                        	  <td>Thursday</td>
                                            <td>{{ $schedules->thursday}}</td>
                                              <td>
                                                <a href="{{ url('doctor/schedule/edit/'.$schedules->id)}}"
                                                class="btn btn-sm btn-primary">Edit</a> 
                                            </td>
                                        </tr>
                                        <tr>
                                        	  <td>Friday</td>
                                            <td>{{ $schedules->friday}}</td>
                                             <td>
                                                <a href="{{ url('doctor/schedule/edit/'.$schedules->id)}}"
                                                class="btn btn-sm btn-primary">Edit</a> 
                                            </td>
                                        </tr>
                                        <tr>
                                        	  <td>Saturday</td>
                                            <td>{{ $schedules->saturday}}</td>
                                              <td>
                                                <a href="{{ url('doctor/schedule/edit/'.$schedules->id)}}"
                                                class="btn btn-sm btn-primary">Edit</a> 
                                            </td>
                                        </tr>
         
                                    </tbody>
                                    
                               

                                </table>
                                
                                       @endif
                                    
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