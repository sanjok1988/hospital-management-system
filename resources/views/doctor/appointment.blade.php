@extends('layouts.doctor')

@section('content')


<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Appointment Details</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Appointment Details</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Appointment Details</h3>
                             
                            <h2 class="box-title" style="text-align: right; margin-top: -35px;">
                             
                             @foreach($data as $value)
                             Doctor: {{$value->doctor}} </h2>
                            @endforeach
                           
                            <div class="table-responsive">
                                <table class="table" style="text-align: center;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Address</th>
                                            <th>Phone No</th>
                                            <th>Gender</th>
                                            <th>Date of Birth</th>
                                            <th>Appointment Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i=1;?>
                                     @if($data)
                               
                                   @foreach($data as $value) 

                                     
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $value->name}}</td>
                                            <td>{{ $value->address}}</td>
                                            <td>{{ $value->phone}}</td>
                                            <td>{{ $value->gender}}</td>
                                            <td>{{ $value->dob}}</td>
                                            <td>{{ $value->appointment_date}}</td>
                                          
                                       <td>
                                            <a 
                                   href="{{url('doctor/preception/' .$value->id)}}"  
                                            class="btn btn-sm btn-primary">Checked</a>

                                         <a href="#"
                                            class="btn btn-sm btn-danger">Cancel</a>
                                            
                                       </td>
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



@endsection