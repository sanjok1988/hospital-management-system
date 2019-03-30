@extends('layouts.master')

@section('content')

 @include('sweet::alert') 


  <div class="container-fluid">
               
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Users Details</h3>
                            <a href="{{'users/create'}}" ><button class="btn btn-primary" style=" background: #198cd4;">Add Users</button></a> 
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> <b>Name</b> </th>
                                            <th> <b>Email</b> </th>
                                            <th> <b>Roles </b> </th>
                                           <th>Action</th> 
                                        </tr>
                                    </thead>

                                    <tbody>

                                    <?php $i=1;?>
                                   @foreach($users as $value) 
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>doctor</td>
                                            
                                            
                                           
                                         <td> 
                                         <a href="#" 
                                            class="btn btn-sm btn-primary">Edit</a>

                                         <a href="#" 
                                            class="btn btn-sm btn-danger">Del</a>
                                          
                                         <a href="{{url('add/doctor/' .$value->id)}}" 
                                            class="btn btn-sm btn-secondary" style="background-color: #838392;">Add more Info</a>
                                            
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