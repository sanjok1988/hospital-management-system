<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login/css/main.css')}}">
<!--===============================================================================================-->
</head>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" style="margin-right: 307px;" 
				action="{{ route('login')}}" method ="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
					<span class="login100-form-title p-b-34">
						 Login
					</span>
					<label><b> {{ __('Email:') }}</b></label>
					<!--validate-input m-b-20-->
					<div class="wrap-input100 rs1-wrap-input100" data-validate="Type user name">

						<input id="first-name" class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="User name"value="{{ old('email') }}" required autofocus>
						 @if ($errors->has('email'))
						<span class="focus-input100" role="alert">
							 <strong>{{ $errors->first('email') }}</strong>
						</span>
						 @endif
					</div>
					<label style="margin-top: 10px;"><b>{{ __('Password:') }} </b></label>
					<div class="wrap-input100 rs2-wrap-input100 " data-validate="Type password">
						<input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" required>
						@if ($errors->has('password'))
						<span class="focus-input100"  role="alert">
							  <strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
					</div>
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							{{ __('Login') }}
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						

						<a href="{{'welcome'}}" class="txt2">
							click here go to home page
						</a>
					</div>

				<!--	<div class="w-full text-center">
						<a href="#" class="txt3">
							Sign Up
						</a>
					</div>
				-->
				</form>
                
	
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/js/main.js')}}"></script>

</body>
</html>