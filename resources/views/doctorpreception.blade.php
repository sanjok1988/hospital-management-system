

@extends('layouts.master')

<style type="text/css">

.preception  h2 {
	text-align: center;
	font-size: 35px;
	font-weight: 700;
	color: #807177;
	background-color: #fff;


}
	.preception {
		margin-top: 20px;
		margin-left: 30px;

	}
	form {
		border: 1px solid #d4a527;
		border-bottom: none;
	}
	.submit {
		text-align: center;
		padding: 18px 121px 17px 117px;
		border: 1px solid #fff;
		border-radius: 15px;
		background-color: #4b7972;
		color: #fff;
		font-size: 18px;
		font-weight: 500;
	}
</style>
@section('content')
 
      <div class="col-md-12 col-xs-12" style="padding: 30px;">
      
          <div class="white-box preception">
          		<h2> Give Prescription To the Patient </h2>
        <form class="form-horizontal form-material" method="POST" action="{{ url('patient/details')}}">
        	  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="form-group" style="margin-top: 20px;">
            
            <div class="col-md-12">
                <textarea rows="10" name="preception" placeholder="Preception here" class="form-control form-control-line"></textarea>
            </div>
        </div>
    </form>
    <center><button class= "submit">Submit</button></center>
</div>
</div>







@endsection