@extends('layouts.doctor')

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
                            
                            <div class="table-responsive">
                                <table class="table">
                                	
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Gender</th>
                                            
                                            <th>Appointment Date</th>
                                            
                                            <th>Prescription</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1;?>
                                    @if($patients)
                                    @foreach($patients as $patients)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$patients->name}}</td>
                                            <td>{{$patients->address}}</td>
                                            <td>{{$patients->phone}}</td>
                                            <td>{{$patients->gender}}</td>
                                            
                                            <td>{{$patients->appointment_date}}</td>
                                            
                                            <td>{{$patients->preception}}</td>
                                            <td>{{$patients->status}}</td>
                                             <td> 
                                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger">Del</a> 
                                                
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