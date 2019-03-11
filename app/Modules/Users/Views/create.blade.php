@extends('Layouts::master')
@section('content')
<?php
$flag = false;
if(isset($action) && $action == 'edit')
{
    $flag = true;
}
?>
<div class="box-header">
   @if(isset($page))
   <h3 class="box-title">{{ ucfirst(trans('words.'.$page)) }} Create</h3>
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
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{ ($flag)?$data->name:old('name') }}"/>
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
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ ($flag)?$data->email:old('email') }}"/>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
		                        	<strong>{{ $errors->first('email') }}</strong>
		                               </span>
                                    @endif
                                </div>
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

                                <div class="form-group m-b-50">
                                    <div>
                                         <button type="submit" class="btn btn-primary waves-effect waves-light float-right">Create</button>
                                    </div>
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