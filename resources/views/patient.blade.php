@extends('layouts.master')

@section('content')

 
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Patient Details</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Patient Details</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Patient Details</h3>
                            <a href="{{'addpatient'}}" ><button class="btn btn-primary">Add Patient</button></a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Gender</th>
                                            <th>Date of Birth</th>
                                            <th>Appointment Date</th>
                                         
                                       
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if($patients)
                                    @foreach($patients as $patient)
                                        <tr>
                                            <td>{{ $patient->id}}</td>
                                            <td>{{ $patient->name}}</td>
                                            <td>{{ $patient->address}}</td>
                                            <td>{{ $patient->phone}}</td>
                                            <td>{{ $patient->gender}}</td>
                                            <td>{{ $patient->dob}}</td>
                                            <td>{{ $patient->appointment_date}}</td>
                                            
                                             <td> 
                                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger">Del</a> 
                                                <a href="#" 
                                            class="btn btn-sm btn-success" style="background-color: #80b534;"> <span class="glyphicon glyphicon-eye-open"></span> Generate Bill </a>
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