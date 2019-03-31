<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>HMS</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('html/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{ asset('plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{ asset('plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('html/bootstrap/dist/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('html/css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('html/css/colors/blue-dark.css')}}" id="theme" rel="stylesheet">

    <!-- My css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" >

    <!-- Sweet alert -->
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
    

@media (min-width: 768px){
    .content-wrapper .top-left-part {
    width: 199px;

}
a {
    color: #fff;
}
</style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header" style="background-color: #454952;"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part"><span class="hidden-xs">
                    <div class="my-auto">
                        <h1 class="mb-0">H
                     <span class="text-primary">M</span>
                            S
                                </h1>
                           </div> 

                </span>
                </div>
               <!-- <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul> -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="{{url('/')}}"> <img src="plugins/images/users/manish.jpg" alt="user-img" width="48" height="48" class="img-circle" style="margin-top: 15px;">
                            <b class="hidden-xs" style="margin-right: 10px; margin-left: -5px;">logout</b> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation" style="background-color: #454952;">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar ">
                <ul class="nav" id="side-menu ">
                    <li style="padding: 27px 0 0;">
                        <a href="{{url('doctor/dashboard')}}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    
                    <li>
                        <a href="{{url('view/patient')}}" class="waves-effect"><i class="fa fa-users fa-fw" aria-hidden="true"></i><span class="hide-menu">view your Patients</span></a>
                    </li>
                   
                    <li>
                        <a href="{{url('view/appointment')}}" class="waves-effect"><i class=" 
                            fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">View Your Appointment</span></a>
                    </li>

                   
                    
                  
                </ul>
               
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
           @yield('content')
               
            </div>
            <!-- /.container-fluid 
            <footer class="footer text-center"> 2019 &copy; hospital management system develop by Manish Rayamajhi </footer>-->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js')}}">
        
    </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('html/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('html/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('html/js/waves.js')}}"></script>
    <!--Counter js -->
    <script src="{{ asset('plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{ asset('plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <!--Morris JavaScript -->
    <script src="{{ asset('plugins/bower_components/raphael/raphael-min.js')}}"></script>
    <script src="{{ asset('plugins/bower_components/morrisjs/morris.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('html/js/custom.min.js')}}"></script>
    <script src="{{ asset('html/js/dashboard1.js')}}"></script>
    <script src="{{ asset('plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> 

    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to Hospital Management System',
            text: '',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
</body>

</html>
