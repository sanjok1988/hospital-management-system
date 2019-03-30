<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HMS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        

<!-- Bootstrap Core CSS 
<link href="{{ asset('html/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">-->

        <link href="{{ asset('fonts/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('html/css/style.css')}}" rel="stylesheet"> 
        <link href="{{ asset('fonts/lineo-icon/style.cssfonts/lineo-icon/style.css')}}" 
        rel="stylesheet" type="text/css">

        <!-- Loading main css file -->
        <link rel="stylesheet" href="{{ asset('style.css')}}">




        <!-- Styles 
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .logo {
                width: 60%;
                margin-left: -243px;
            }
        </style>  -->
    </head>
    <body>
       <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
</div> -->
            <div class="content">
                <header class="site-header">
                <div class="top-header">
                    <div class="container">
                        <a href="{{url('home')}}" id="branding">
                            <img src="./images.png" alt="Company Name" class="logo" >
                           
                        </a> <!-- #branding -->
                    
                        <div class="right-section pull-right">
                            <a href="#" class="phone"><i class="fa fa-phone"></i>  +977  9863859081
                            </a>
                    
                            <form action="#" class="search-form">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><img src="images/icon-search.png" alt=""></button>
                            </form>
                        </div>
                    </div> <!-- .container -->
                </div> <!-- .top-header -->

                
                <div class="bottom-header">
                    <div class="container">
                        <div class="main-navigation">
                            <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                            <ul class="menu">
                                <li class="menu-item"><a href="#">About us</a></li>
                                <li class="menu-item"><a href="{{url ('viewdoctor')}}">Doctors</a></li>
                                <li class="menu-item"><a href="{{url ('appointment')}}">Book Your Appointment</a>
                                </li>
                                <li class="menu-item"><a href="#">Contact</a></li>
                            </ul> <!-- .menu -->
                        </div> <!-- .main-navigation -->
                        
                        <div class="login">
                            <a href="{{ route('login')}}">login</a>
                        </div>
                        
                        <div class="mobile-navigation"><ul class="menu">
                                <li class="menu-item"><a href="#">About us</a></li>
                                <li class="menu-item"><a href="#">Doctors</a></li>
                                <li class="menu-item"><a href="{{ url('appointment')}}">Book Your Appointment</a>
                                </li>
                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                            </ul></div>
                    </div>
                </div>
                
            </header>
               
            </div>
      <!-- slider -->
      
  <div id="body-content">
           @yield('content')
               
            </div>

     



       <script src= "{{ asset('js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{ asset('js/plugins.js')}}"></script>
        <script src="{{ asset('js/app.js')}}"></script>







    </body>
</html>
