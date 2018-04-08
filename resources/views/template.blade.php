
<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{\Illuminate\Support\Facades\URL::asset('images/favicon.png')}}" rel="icon">
    <link href= "{{url('/images/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    <script src="/js/app.js"></script>
    <!-- Bootstrap CSS File -->
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/ionicons/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('css/owlcarousel/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/lightbox/css/lightbox.min.css')}}" />

    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}" />

    <!-- =======================================================
      Theme Name: BizPage
      Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body @if (Route::currentRouteName()==='login')
style="background-color: black"    
@endif>

<!--==========================
  Header
============================-->
<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1><a href="#intro" class="scrollto">{{__('template.name')}}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
           <a href="#intro"><img src="{{url('/images/logo.png')}}"  alt="" title="" /></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#intro">{{__('template.buthome')}}</a></li>
                <li><a href="#about">{{__('template.butus')}}</a></li>
                <li><a href="#services">{{__('template.butservice')}}</a></li>
                <li><a href="#portfolio">{{__('template.but')}}</a></li>
                <li><a href="#team">Team</a></li>
                <li class="menu-has-children"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="{{route('home')}}">{{__('template.butlogin')}}</a></li>
                <li><a href="#contact">{{__('template.butcontact')}}</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div> 
</header><!-- #header -->

@yield('content')
<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3></h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{__('template.usefullinks')}}{{--Useful Links--}}</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">{{__('template.buthome')}}</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">{{__('template.butus')}}</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">{{__('template.butservice')}}s</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">{{__('template.buttos')}}</a></li>{{--Terms of service--}}
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">{{__('template.butprivacyp')}}</a></li>{{--Privacy policy--}}
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>{{__('template.butcontact')}}</h4>
                    <p>
                     {{--   A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>--}}
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit"  value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy;{{__('template.copyright')}} {{--Copyright--}} <strong>{{__('template.name')}}</strong>.{{__('template.copyright')}} {{--All Rights Reserved--}}
        </div>
        <div class="credits">


        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

</body>
</html>
<?php

