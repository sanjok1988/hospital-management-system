@extends('Layouts::master')
@section('content')
<?php
$flag = false;
$assignRole = false;
if(isset($action) && $action == 'edit')
{
    $flag = true;
}
if(isset($action) && $action == 'assignRole')
{
    $assignRole = true;
    
}
?>
<div class="box-header">
   @if(isset($page))
<h3 class="box-title">{{ ucfirst(trans('words.'.$page)) }} {{ $assignRole?"Assign Role": $action}}</h3>
   @endif
   <a class="btn btn-success btn-sm pull-right" title="List" href="{{ route($page.'.index')}}" ><i class="fa fa-list"></i> List</a>
</div>
   
                        <div class="box-body">
                            <form   method="post" class="" action="{{ route('users.store') }}" enctype='multipart/form-data' >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if($flag)
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                @endif

                                <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{ ($flag || $assignRole)?$data->name:old('name') }}" {{ ($assignRole)? "disabled":"" }}/>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
			                             <strong>{{ $errors->first('name') }}</strong>
		                                  </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>
                                        Email
                                    </label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ ($flag || $assignRole)?$data->email:old('email') }}" {{ ($flag || $assignRole)?"disabled":"" }}/>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
		                        	<strong>{{ $errors->first('email') }}</strong>
		                               </span>
                                    @endif
                                </div>
                                @if(!$assignRole)
                                <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password"/>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
		                          	<strong>{{ $errors->first('password') }}</strong>
		                           </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label> Re Password</label>
                                    <input type="password" class="form-control" placeholder="Password Confirmation" name="password_confirmation"/>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
			                        <strong>{{ $errors->first('password_confirmation') }}</strong>
		                          </span>
                                    @endif
                                </div>
                                @endif
                                @if($assignRole)
                                <div class="form-group has-feedback {{ $errors->has('role_id') ? ' has-error' : '' }}">
                                    <label> Assign Role</label>
                                    <select>
                                        @foreach($roles as $role)
                                            <option class="form-control" name="role_id" value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('role_id'))
                                        <span class="help-block">
			                        <strong>{{ $errors->first('role_id') }}</strong>
		                          </span>
                                    @endif
                                </div>
                                @endif

                                <div class="form-group m-b-50">
                                    
                                         <button type="submit" class="btn btn-primary waves-effect waves-light pull-right">{{ strtoupper($assignRole?"Assign Role":$action) }}</button>
                                   
                                </div>
                        </div>
                       
                    </div>
                </div>

                <!-- end col -->

    
@endsection
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $(".content").fadeOut(1500);
        },3000);
    });
</script>