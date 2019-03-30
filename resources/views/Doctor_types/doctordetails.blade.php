@extends('layouts.master1')

@section('content')

<style type="text/css">
	#prices {
    padding: 89px 0 89px;
}
.grey_section {
    background-color: #343434;
}
.pricing-table.style2 {
    background-color: rgba(100,100,100,0.2);
    border-bottom: 10px solid #FBCF61;
    position: relative;
}
.pricing-table {
    overflow: hidden;
    list-style: none;
    padding: 0;
    text-align: center;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -o-transition: all .2s linear;
    -ms-transition: all .2s linear;
    transition: all .2s linear;
}
.pricing-table.style2 li.plan-name {
    font-size: 24px;
    font-weight: 700;
    font-family: 'Raleway', sans-serif;
    padding: 14px 0 14px;
    color: #343434;
    background: #FBCF61;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -o-transition: all .2s linear;
    -ms-transition: all .2s linear;
    transition: all .2s linear;
}
.pricing-table li p {
    padding: 6px;
    margin: 0;
}
.pricing-table.style2.border-color2 li.plan-name {
    background: #FF6F6F;
}
.pricing-table {
    overflow: hidden;
    list-style: none;
    padding: 0;
    text-align: center;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -o-transition: all .2s linear;
    -ms-transition: all .2s linear;
    transition: all .2s linear;
}
.border-color2 {
    border-color: #ff6f6f !important;
}
.pricing-table li.plan-price {
    padding: 30px 0 10px;
}

.pricing-table li + li {
    border-top: 0;
}
.plan-price span:first-child {
    font-size: 20px;
    position: relative;
    top: -21px;
    color: #fff;
}
.plan-price span + span img{
 
    border-radius: 50px;
    border 2px solid #fff;
}
.pricing-table.style2 li.plan-price p {
    color: #fff;
    padding: 8px 0;
    text-transform: uppercase;
}
.pricing-table ul {
    list-style: none;
    padding: 0;
}
.pricing-table ul li {
    padding: 10px 0;
    border-top: 1px solid #525252;
    border-bottom: 1px solid #525252;
    margin: 0 40px;
    color: #fff;
}
.pricing-table.style2.border-color3 li.plan-name {
    background: #A8D164;
}
.style2 .call-to-action a {
    color: #fff;
    border-color: #fff;
    display: inline-block;
    margin: 40px 0;
    background: transparent;
    font-size: 12px;
    font-weight: 750;


}
.style2 .call-to-action a:hover {
  text-decoration: none;
  background-color: #fff;
  color: #242424;
  font-size: 12px;
  font-weight: 750;
}
.theme_btn {
    font-weight: 700;
    background-color: transparent;
    text-transform: uppercase;
    font-size: 12px;
    padding: 16px 28px;
    color: #ff6f6f;
    border: 4px solid #ff6f6f;
    border-radius: 0px;
    line-height: 1;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    -o-transition: all 0.35s ease-in-out;
    -ms-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
a {
    color: #242424;
    text-decoration: none;
    -webkit-transition: all 0.3s linear 0s;
    -moz-transition: all 0.3s linear 0s;
    -o-transition: all 0.3s linear 0s;
    -ms-transition: all 0.3s linear 0s;
    transition: all 0.3s linear 0s;
}
a {
    color: #428bca;
    text-decoration: none;
}
a {
    background: transparent;
}
.grey_section h2 {
    color: #fff;
}
</style>

<section id="prices" class="grey_section">
       
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
    
         
        </div>
      </div>

  <div class="row">

  <div class="col-sm-12">
      
    <div class="col-sm-4">
        <ul class="pricing-table style2">
        		 @if($viewneurologist)
                 @foreach($viewneurologist as $value) 
            <li class="plan-name"><p>Doctor's Profile</p></li>
            <li class="plan-price"> <span></span></li>
            <li class="features-list">
              <ul>
              
                <li>Doctor Name : {{ $value->name}}</li>
                <li> Email : {{ $value->email}}</li>
                <li> Contact : {{ $value->contact}}</li>
                <li> Specialization : {{ $value->specialization}}</li>
                <li> Consult Fee : Rs. {{ $value->fee}}</li>
                

               
              </ul>
            </li>
            <li class="call-to-action"><a href="{{url ('appointment')}}" class="theme_btn">Book Appointment </a></li>
             @endforeach
                @endif
        </ul>
    </div>
     
    <div class="col-sm-8">
        <center><h2 style="margin-top: -50px; color: #fff;">Doctor's Schedules</h2></center>
        <table class="table table-responsive-doctor-view">
                         @if($schedules)
                         @foreach($schedules as $schedules)
                                    <thead>
                                        <tr>
                                            
                                            <th>Day</th>
                                            <th>Time</th>
                                            
                                           
                                        </tr>
                                    </thead>

                                    <tbody>

                                         
                                        <tr>
                                            <td>Sunday</td>
                                            <td>{{$schedules->sunday}}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Monday</td>
                                            <td>{{$schedules->monday}}</td>
                                            
                                        </tr>
                                        <tr>
                                              <td>Tuesday</td>
                                            <td>{{$schedules->tuesday}}</td>
                                             
                                        </tr>
                                        <tr>
                                              <td>Wednesday</td>
                                            <td>{{$schedules->wednesday}}</td>
                                              
                                        </tr>
                                        <tr>
                                              <td>Thursday</td>
                                            <td>{{$schedules->thursday}}</td>
                                             
                                        </tr>
                                        <tr>
                                              <td>Friday</td>
                                            <td>{{$schedules->friday}}</td>
                                            
                                        </tr>
                                        <tr>
                                              <td>Saturday</td>
                                            <td>{{$schedules->saturday}}</td>
                                              
                                        </tr>
         
                                    </tbody>
                                    
                            @endforeach
                            @endif

                                </table>
                                
    </div>
    
   
    
</div>
  </div>
</div>
</section>

@endsection