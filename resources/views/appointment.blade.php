
@extends('layouts.master1')

@section('content')

@include('sweet::alert') 

<div class="row" style= "background-color: gray;"> 
  <div class="col-md-2">
		
	</div>
	  <div class="col-md-8 col-sm-12 form">
								
								<form action="{{ url('appointmentstore')}}" method="POST" class="contact-form" style="text-align: center;">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                  <h1 class="section-title text-left primary">Appointment form</h1>
                                     <div class="form-group">
                                    <label class="col-md-12 title">Full Name: </label>
                                    <div class="col-md-12">
                                        <input type="text" name="name" placeholder="Ful Name" class="form-control form-control-line" required>
                                         </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 title">Address: </label>
                                    <div class="col-md-12">
                                        <input type="text" name="address" placeholder="Address" class="form-control form-control-line" required>
                                         </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 title">Phone No: </label>
                                    <div class="col-md-12">
                                        <input type="text" name="phone" placeholder=" Phone Number" class="form-control form-control-line" required>
                                         </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 title">Gender: </label>
                                   <div class="col-md-12">
                                       <div class="col-md-2">
                                            <input type="radio" name="gender" value="male" required> Male
                                       </div>
                                      <div class="col-md-2">
                                            <input type="radio" name="gender" value="female"> Female
                                       </div>
                                   </div>           
                             </div>

                             <div class="form-group">
                                <label class="col-md-12 title">Date of Birth:</label>
                                         <div class='col-md-12'>
                                    <input type="date" name="dob" class="form-control" required/>
                                 </div>
                             </div>

                     
                               <div class="form-group">
                                <label class="col-md-12 title">Doctor:</label>
                                <div class="col-md-12">
                                    <select id="inputState" name="doctor_id" class="form-control" required>
                                            <option selected>============ Choose ============
                                            </option>
                                            @if($doctor)
                                            @foreach($doctor as $d)

                                            <option value="{{ $d->id }}">{{ $d->name}}</option>
                                            @endforeach
                                            @endif
                                          </select>
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label class="col-md-12 title">Consult Fee: </label>
                                    <div class="col-md-12">
                                       
                                        <input type="" name="fee" value="" class="form-control form-control-line">
                                      
                                            
                                         </div>
                                </div>
                               <div class="form-group">
                                <label class="col-md-12 title">Appointment Date:</label>
                                    <div class="col-md-12">

                                    <input type="date" name="appointment_date" value="" class="form-control form-control-line" required>
                                    </div>
                                </div>
                               <!-- <div class="form-group">
                                <label class="col-md-12 title">Appointment Day:</label>
                                    <div class="col-md-12">

                                    <input type="" name="day" value="" class="form-control form-control-line" required>
                                    </div>
                                </div> -->

                                 


                                   <button class= "btn aapbtn">Submit</button>
                           </form>   
                    </div>     

							</div>

                          




@endsection