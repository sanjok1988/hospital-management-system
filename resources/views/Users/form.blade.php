@extends('layouts.master')

@section('content')

 @include('sweet::alert') 

 <div class="container-fluid">
                <div class="row bg-title">
                    
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Create User</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                
                  <div class="col-md-2">
                      
                  </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
        <form class="form-horizontal form-material" method="POST" action="{{ url('create')}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="form-group">
                                    <label class="col-md-12 col-sm-12">Full Name</label>
                                    <div class="col-md-12 col-sm-12">
                                        <input type="text" name="name" placeholder="Full Name" class="form-control form-control-line" required>
                                         </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12 col-sm-12">Login Email
                                    </label>
                                    <div class="col-md-12 col-sm-12">
                                    <input type="email" name="email" placeholder="@gmail.com" class="form-control form-control-line" name="example-email" id="example-email" required> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 col-sm-12">Password</label>
                                    <div class="col-md-12 col-sm-12">
                                        <input type="password" name="password" class="form-control form-control-line" required>
                                         </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-12 col-sm-12">Role</label>
                                    <div class="col-md-12 col-sm-12">
                                        <input type="radio" name="role" value="doctor"> doctor
                                        <input type="radio" name="role" value="admin"> admin
                                </div>
                            </div>
                        
                                <div class="form-group">
                                    <div class="col-sm-12 col-sm-12">
                                        <button class="btn btn-primary" 
                                        style="padding: 12px 65px 10px 62px; float: left;"> Add </button>
                                    </div>
                                </div>
                            </form>
                             </div>
                         
                     </div>
                        </div>
                   
                
           







  @endsection