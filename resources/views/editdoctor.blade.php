  @extends('layouts.master')

@section('content')

 
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit Doctor</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Edit  Doctor</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                  <div class="col-md-2">
                      
                  </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                                   <form class="form-horizontal form-material" method="POST" 
                                           action="{{url('doctor/update/'.$doctor->id)}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="form-group">
                                    <label class="col-md-12">Full Name *</label>
                                    <div class="col-md-12">
                                        <input type="text" name="name" value="{{$doctor->name}}" placeholder="Full Name" class="form-control form-control-line" required>
                                         </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email *</label>
                                    <div class="col-md-12">
                                    <input type="email" name="email" value="{{$doctor->email}}"  placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email" 
                                    required> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Password *</label>
                                    <div class="col-md-12">
                                    <input type="password" name="password" value="{{$doctor->password}}"   class="form-control form-control-line" required> </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-12">Phone No</label>
                                    <div class="col-md-12">
                                        <input type="text" name="contact" value="{{$doctor->contact}}"  placeholder="123 456 7890" class="form-control form-control-line" required> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Address</label>
                                    <div class="col-md-12">
                                        <textarea rows="5"  name="address"  placeholder="Address" class="form-control form-control-line" required>{{$doctor->address}}
                                        </textarea>
                                    </div>
                                </div>
                               
                                 <div class="form-group">
                                    <label class="col-md-12">NMC num</label>
                                    <div class="col-md-12">
                                        <input type="text" name="nmc_num" value="{{$doctor->nmc_num}}"  placeholder="123" class="form-control form-control-line" required> </div>
                                </div>
                               
                                 <div class="form-group">
                                    <label class="col-md-12">Specialization</label>
                                    <div class="col-md-12">
                                        <input type="text" name="specialization" 
                                        value="{{$doctor->specialization}}"  placeholder="Specialization" class="form-control form-control-line" required> </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-md-12 title">Gender: </label>
                                   <div class="col-md-12">
                                       <div class="col-md-2">
                                            <input type="radio" name="gender" 
                                            value="{{$doctor->gender}}" required> Male
                                       </div>
                                      <div class="col-md-2">
                                            <input type="radio" name="gender" 
                                            value="{{$doctor->gender}}"> Female
                                       </div>
                                   </div>           
                             </div>
                             <div class="form-group">
                                    <label class="col-md-12 col-sm-12">Consult Fee</label>
                                    <div class="col-md-12 col-sm-12">
                                        <input type="text" name="fee" value="{{$doctor->fee}}" class="form-control form-control-line" required> </div>
                                </div>
                                </div>
                               
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary" style="padding: 12px 65px 10px 62px;"> Update </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
           
        

@endsection