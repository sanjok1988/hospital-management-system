@extends('layouts.master1')

<style type="text/css">
    .type-desises {
        padding: 0px 67px 0px 65px;
    } 
</style>

@section('content')

    

    
    <h1>Hospital Management System</h1>   
      <div class="hero hero-slider">


          <div class="row type-desises">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                         <a href="{{'Doctor_types/neurology'}}">
                        <div class="white-box update-card" style="padding:8px; text-align: center; border-bottom: 10px solid #0077ff; background-color: #359475">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                <h5 class="text-muted vb" style="color: #fff; font-size: 35px; font-weight: 600;">Neurology</h5> 
                                <p style="color: #fff; font-size: 18px; font-weight: 600;">Click for details</p></div>
                            </div>
                        </div>
                    </a>
                    </div>
                   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                         <a href="{{'#'}}">
                        <div class="white-box  update-card" style="padding:8px; text-align: center; border-bottom: 10px solid #4a157f; background-color: #646384;">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                <h5 class="text-muted vb" style="color: #fff; font-size: 35px; font-weight: 600;">Surgical</h5> 
                                <p style="color: #fff; font-size: 18px; font-weight: 600;">Click for details</p></div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                         <a href="{{'#'}}">
                        <div class="white-box  update-card" style="padding:8px; text-align: center; border-bottom: 10px solid #b96030; background-color: #77447d;">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                <h5 class="text-muted vb" style="color: #fff; font-size: 35px; font-weight: 600;">Urology</h5> 
                                <p style="color: #fff; font-size: 18px; font-weight: 600;">Click for details</p></div>
                            </div>
                        </div>
                    </a>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 25px;">
                         <a href="{{'#'}}">
                        <div class="white-box update-card" style="padding:8px; text-align: center; border-bottom: 10px solid #9531ab; background-color: #38b950;">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                <h5 class="text-muted vb" style="color: #fff; font-size: 35px; font-weight: 600;">Endocrinology</h5> 
                                <p style="color: #fff; font-size: 18px; font-weight: 600;">Click for details</p></div>
                            </div>
                        </div>
                    </a>
                    </div>
                   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 25px;">
                         <a href="{{'#'}}">
                        <div class="white-box card update-card" style="padding:8px; text-align: center; border-bottom: 10px solid #ff0041; background-color: #38b9ac;">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                <h5 class="text-muted vb" style="color: #fff; font-size: 35px; font-weight: 600;">Gynecology</h5> 
                                <p style="color: #fff; font-size: 18px; font-weight: 600;">Click for details</p></div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 25px;">
                         <a href="{{'#'}}">
                        <div class="white-box update-card" style="padding:8px; text-align: center; border-bottom: 10px solid #26478c; background-color: #822249;">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                <h5 class="text-muted vb" style="color: #fff; font-size: 35px; font-weight: 600;">Cardiology</h5> 
                                <p style="color: #fff; font-size: 18px; font-weight: 600;">Click for details</p></div>
                            </div>
                        </div>
                    </a>
                    </div>
               </div>            
          
      </div>        

</div>
<!--
<div class="bottom-footer">
                    <div class="container">
                        <nav class="footer-navigation">
                            <a href="#">Home</a>
                            <a href="#">About us</a>
                            <a href="#">Doctors</a>
                            <a href="#">Resources</a>
                            <a href="#">Contact</a>
                        </nav>
                        <div class="colophon">Copyright hospital management system @2019. Designed by Manish Rayamajhi</div>
                    </div>
                </div>
-->

@endsection