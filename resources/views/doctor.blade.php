@extends('layouts.master')

@section('content')

 @include('sweet::alert') 

            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">List of Doctors </h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Doctor Details</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Doctor Details</h3>
                           <a href="{{url('add/doctor')}}" ><button class="btn btn-primary" 
                            style=" background: #198cd4;">Add Doctor</button></a> 
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone No</th>
                                            <th>Address</th>
                                            <th>NMC num</th>
                                            <th>Specialization</th>
                                            <th>Gender</th>
                                            <th>Consult Fee</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                     <?php $i=1;?>
                                   @foreach($doctor as $value) 
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $value->name}}</td>
                                            <td>{{ $value->email}}</td>
                                            <td>{{ $value->contact}}</td>
                                            <td>{{ $value->address}}</td>
                                            <td>{{ $value->nmc_num}}</td>
                                            <td>{{ $value->specialization}}</td>
                                            <td>{{ $value->gender}}</td>
                                            <td>{{ $value->fee}}</td>
                                            
                                         <td> 
                                         <a href="{{ url('doctor/edit/'.$value->id)}}" 
                                            class="btn btn-sm btn-primary">Edit</a>

                                         <a href="{{ url('doctor/del/'.$value->id)}}" 
                                            class="btn btn-sm btn-danger">Del</a>

                                        <a href="{{ url('schedule/' .$value->id)}}" 
                                            class="btn btn-sm btn-success" style="background-color: #80b534;"> <span class="glyphicon glyphicon-eye-open"></span>schedule</a>
                                            
                                      </td>
                                        </tr>
                                       @endforeach
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