@extends('layouts.master')

@section('content')
 <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Hello Admin / Dashboard</h4> </div>
                   
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                         <a href="{{'patient'}}">
                        <div class="white-box card bg-c-yellow update-card" style="background-color: #4898ce;">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb" style="color: #fff; font-size: 18px; font-weight: 600;">Total Patients</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15" style="color: #fff;">0</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">0% Complete (success)</span> </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                         <a href="{{'viewappointment'}}">
                        <div class="white-box card bg-c-green update-card" style="background-color: #923e94;">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                <h5 class="text-muted vb" style="color: #fff; font-size: 16px; font-weight: 600;">Total Appointments</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-megna" style="color: #fff;">{{ \App\Appointment::count() }}</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                       <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">0% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <a href="{{'doctor'}}">
                        <div class="white-box card bg-c-pink update-card" style="background-color: #39ca99;">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                <h5 class="text-muted vb" style="color: #fff; font-size: 18px; font-weight: 600;">Total Doctors</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-primary" style="color: #fff;">{{ \App\Doctor::count() }}</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">0% Complete (success)</span> </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <!-- /.col -->
                </div>
@endsection
