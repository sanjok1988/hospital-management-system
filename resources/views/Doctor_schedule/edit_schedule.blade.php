@extends('layouts.master')

@section('content')

 <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit Schedule </h4> </div>
                   
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

                	 <h4 class="page-title"> Doctor Name</h4> </div>

                         

                <!-- /.row -->
                <!-- .row -->
                
                  <div class="col-md-2">
                      
                  </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
        <form class="form-horizontal form-material" method="POST" 
               action="{{ url('doctor/schedule/update/' .$schedules->id)}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                                <div class="form-group">
                                    <label class="col-md-12 col-sm-12">Sunday</label>
                                    <div class="col-md-12 col-sm-12">
                                        <input type="text" name="sunday"  
                                        value="{{$schedules->sunday}}" class="form-control form-control-line" required>
                                         </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12 col-sm-12">Monday
                                    </label>
                                    <div class="col-md-12 col-sm-12">
                                    <input type="text" name="monday" value="{{$schedules->monday}}" class="form-control form-control-line" name="example-email" id="example-email" required> </div>
                                </div>
                                 <div class="form-group">
                                    <label for="example-email" class="col-md-12 col-sm-12">Tuesday
                                    </label>
                                    <div class="col-md-12 col-sm-12">
                                    <input type="text" name="tuesday" value="{{$schedules->tuesday}}"  class="form-control form-control-line" name="example-email" id="example-email" required> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 col-sm-12">Wednesday</label>
                                    <div class="col-md-12">
                                        <input type="text" name="wednesday" 
                                        value="{{$schedules->wednesday}}" class="form-control form-control-line" required> </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-12 col-sm-12">Thursday</label>
                                    <div class="col-md-12 col-sm-12">
                                        <input type="text" name="thursday" 
                                        value="{{$schedules->thursday}}" class="form-control form-control-line" required> </div>
                                </div>
                               
                                 <div class="form-group">
                                    <label class="col-md-12 col-sm-12">Friday</label>
                                    <div class="col-md-12 col-sm-12">
                                        <input type="text" name="friday" value="{{$schedules->friday}}" class="form-control form-control-line" required> </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-md-12 col-sm-12">Saturday</label>
                                    <div class="col-md-12 col-sm-12">
                                        <input type="text" name="saturday" 
                                        value="{{$schedules->saturday}}" class="form-control form-control-line" required> </div>
                                    </div>
                                        
                                     
                                    
                               
                                <div class="form-group">
                                    <div class="col-sm-12 col-sm-12">
                                        <button class="btn btn-primary" 
                                        style="padding: 12px 65px 10px 62px;"> Update </button>
                                    </div>
                                </div>
                            </form>
                             </div>
                         
                     </div>
                        </div>
                   
                
                
            


@endsection