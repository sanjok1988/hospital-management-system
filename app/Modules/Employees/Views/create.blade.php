@extends('Layouts::master')
@section('content')
<?php
$flag = false;
if(isset($action) && $action == 'edit')
{
    $flag = true;
}
$show = false;
if(request()->has('action') && request()->action == 'show'){
   $show = true;
  
}
?>
<div class="box-header">
   @if(isset($page))
   <h3 class="box-title">{{ ucfirst(trans('words.'.$page)) }} {{ $action or request()->action }}</h3>
   @endif
   <a class="btn btn-success btn-sm pull-right" title="List" href="{{ route($page.'.index')}}" ><i class="fa fa-list"></i> List</a>
</div>
<!-- /.box-header -->
<div class="box-body">
   <!-- form start -->
   <form role="form" method="POST" action="{{ route($page.'.store')}}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @if($flag)
      <input type="hidden" name="id" value="{{ $data->id }}">
      @endif
      <div class="box-body">
          <div class="row">
         <div class="col-md-6">
            <div class="form-group">
               <label for="">First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ ($flag)?$data->first_name:'' }}" {{ ($show)?'disabled':'' }}>
            </div>
            <div class="form-group">
               <label for="">Middle Name</label>
               <input type="text" class="form-control" name="middle_name" placeholder="Middle Name" value="{{ ($flag)?$data->middle_name:'' }}" {{ ($show)?'disabled':'' }}>
            </div>
            <div class="form-group">
               <label for="">Last Name</label>
               <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ ($flag)?$data->last_name:'' }}" {{ ($show)?'disabled':'' }}>
            </div>
            <div class="form-group">
                    <label for="">Gender</label>
                    <input type="radio"  name="gender" value="{{ ($flag)?$data->gender:'' }}" {{ ($show)?'disabled':'' }} checked>Male 
                    <input type="radio" name="gender" value="{{ ($flag)?$data->gender:'' }}" {{ ($show)?'disabled':'' }}>Female
                 </div>
            <div class="form-group">
               <label for="">Nationality</label>
               <input type="text" class="form-control" name="nationality" placeholder="Nationality" value="{{ ($flag)?$data->nationality:'' }}" {{ ($show)?'disabled':'' }}>
            </div>
            <div class="form-group">
               <label for="">Date of birth</label>
               <input type="date" class="form-control" name="dob" placeholder="Date of birth" value="{{ ($flag)?$data->dob:'' }}" {{ ($show)?'disabled':'' }}>
            </div>
            
            <div class="form-group">
                    <label for="">Home Phone</label>
                    <input type="text" class="form-control" name="home_phone" placeholder="Home Phone" value="{{ ($flag)?$data->home_phone:'' }}" {{ ($show)?'disabled':'' }}>
                 </div>
                 <div class="form-group">
                    <label for="">Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="{{ ($flag)?$data->mobile:'' }}" {{ ($show)?'disabled':'' }}>
                 </div>
                 <div class="form-group">
                        <label for="">Private Email</label>
                        <input type="text" class="form-control" name="private_email" placeholder="Private Email" value="{{ ($flag)?$data->private_email:'' }}" {{ ($show)?'disabled':'' }}>
                     </div>

                     <div class="form-group <?php  if($errors->has('password')){ echo 'has-error'; }?> ">
                        <label for="websiteurl" class="col-lg-3 control-label">
                                <a href="#" id="generate_pass" class="btn">Generate Password</a>
                        </label>
                        <div class="col-lg-9">
                            <input type="password" name="password" id="pass" placeholder="@lang('words.password')" class="form-control" >
                            @if ($errors->has('password')) <p class="help-block m-b-none">{{ $errors->first('password') }}</p> @endif
                        </div>
                    </div>
    
            
         </div>
         <h4 class="pull-right" style="margin-right:25px">For Official Purpose Only</h4>
         <div class="col-md-6">        
            
            <div class="form-group">
               <label for="">Job Title</label>
               <input type="text" class="form-control" name="job_title" placeholder="Job Title" value="{{ ($flag)?$data->job_title:'' }}" {{ ($show)?'disabled':'' }}>
            </div>
            {{-- <div class="form-group">
               <label for="">Pay Grade</label>
               <input type="text" class="form-control" name="pay_grade" placeholder="Pay Grade" value="{{ ($flag)?$data->pay_grade:'' }}" {{ ($show)?'disabled':'' }}>
            </div> --}}
            {{-- <div class="form-group">
               <label for="">Work Phone</label>
               <input type="text" class="form-control" name="work_phone" placeholder="Work Phone" value="{{ ($flag)?$data->work_phone:'' }}" {{ ($show)?'disabled':'' }}>
            </div> --}}
            <div class="form-group">
               <label for="">Work Email</label>
               <input type="text" class="form-control" name="work_email" placeholder="Work Email" value="{{ ($flag)?$data->work_email:'' }}" {{ ($show)?'disabled':'' }}>
            </div>
            
            <div class="form-group">
               <label for="">Joined Date</label>
               <input type="date" class="form-control" name="joined_date" placeholder="Joined Date" value="{{ ($flag)?$data->joined_date:'' }}" {{ ($show)?'disabled':'' }}>
            </div>
            {{-- <div class="form-group">
               <label for="">Termination Date</label>
               <input type="date" class="form-control" name="termination_date" placeholder="Termination Date" value="{{ ($flag)?$data->termination_date:'' }}" {{ ($show)?'disabled':'' }}>
            </div> --}}
            <div class="form-group">
               <label for="">Department</label>
               <input type="text" class="form-control" name="department" placeholder="Department" value="{{ ($flag)?$data->department:'' }}" {{ ($show)?'disabled':'' }}>
            </div>
            
            <div class="form-group">
               <label for="">Supervisor</label>
               <input type="text" class="form-control" name="supervisor" placeholder="Supervisor" value="{{ ($flag)?$data->supervisor:'' }}" {{ ($show)?'disabled':'' }}>
            </div>
            {{-- <div class="form-group">
                  <label for="">Employee Status</label>
                  <input type="text" class="form-control" name="employee_status" placeholder="Employee Status" value="{{ ($flag)?$data->employee_status:'' }}" {{ ($show)?'disabled':'' }}>
               </div> --}}
           
         </div>
        </div>
        <div class="col-md-12">
                <div class="box-header">
                      
                        <h3 class="box-title">Optional Information</h3>
                      <hr>
                        
                     </div>
                {{-- <div class="form-group">
                        <label for="">Martial Status</label>
                        <input type="text" class="form-control" name="martial_status" placeholder="Martial Status" value="{{ ($flag)?$data->martial_status:'' }}" {{ ($show)?'disabled':'' }}>
                    
                     </div> --}}
                     {{-- <div class="form-group">
                        <label for="">Immigration Status</label>
                        <input type="text" class="form-control" name="immigration_status" placeholder="Immigration Status" value="{{ ($flag)?$data->immigration_status:'' }}" {{ ($show)?'disabled':'' }}>
                     </div> --}}
                {{-- <div class="form-group">
                        <label for="">Other ID</label>
                        <input type="text" class="form-control" name="other_id" placeholder="Other ID" value="{{ ($flag)?$data->other_id:'' }}">
                     </div>
                     <div class="form-group">
                        <label for="">Driving licence No.</label>
                        <input type="text" class="form-control" name="driving_licence_no" placeholder="Driving licence No." value="{{ ($flag)?$data->driving_licence_no:'' }}" {{ ($show)?'disabled':'' }}>
                     </div> --}}
                     <div class="form-group">
                        <label for="">Temporary Address</label>
                        <input type="text" class="form-control" name="temp_address" placeholder="Temporary Address" value="{{ ($flag)?$data->temp_address:'' }}" {{ ($show)?'disabled':'' }}>
                     </div>
                     <div class="form-group">
                        <label for="">Permanent Address</label>
                        <input type="text" class="form-control" name="per_address" placeholder="Permanent Address" value="{{ ($flag)?$data->per_address:'' }}" {{ ($show)?'disabled':'' }}>
                     </div>
                     {{-- <div class="form-group">
                        <label for="">City</label>
                        <input type="text" class="form-control" name="city" placeholder="City" value="{{ ($flag)?$data->city:'' }}" {{ ($show)?'disabled':'' }}>
                     </div>
                     <div class="form-group">
                        <label for="">Country</label>
                        <input type="text" class="form-control" name="country" placeholder="Country" value="{{ ($flag)?$data->country:'' }}" {{ ($show)?'disabled':'' }}>
                     </div> --}}
                     <div class="form-group">
                           <label for="">notes</label>
                           <input type="text" class="form-control" name="notes" placeholder="notes" value="{{ ($flag)?$data->notes:'' }}" {{ ($show)?'disabled':'' }}>
                     </div>
                     {{-- <div class="form-group">
                        <label for="">Province</label>
                        <input type="text" class="form-control" name="province" placeholder="Province" value="{{ ($flag)?$data->province:'' }}" {{ ($show)?'disabled':'' }}>
                     </div>
                     <div class="form-group">
                        <label for="">Postal Code</label>
                        <input type="text" class="form-control" name="postal_code" placeholder="Postal Code" value="{{ ($flag)?$data->postal_code:'' }}" {{ ($show)?'disabled':'' }}>
                     </div> --}}
                    
                     
        </div>
         <!-- /.box-body -->
         <div class="box-footer pull-right">
            @if(!$show)
            <button type="submit" class="btn btn-primary">{{ ($flag)?"Update":"Add New" }}</button>
            @endif
         </div>
   </form>
   </div>
</div>
@endsection
@section('script')
<script>    
    $(document).ready(function(){
       // $("#pass").hidden(true);
        $("#generate_pass").click(function(e){
            e.preventDefault();            
            var pass = '{{ str_random(8) }}';
            $("#pass").val(pass);
            $("#pass").attr('type', 'text');
        });
    });

</script>
@endsection
