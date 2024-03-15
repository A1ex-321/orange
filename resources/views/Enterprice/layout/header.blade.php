<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Poora - Fundraising & Charity Template">

    <!-- ========== Page Title ========== -->
    <title>Priyanka Enterprises</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('public/Enterprice/assets/img/logoimage.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('public/Enterprice/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/Enterprice/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
<link href="{{ asset('public/Enterprice/assets/css/themify-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('public/Enterprice/assets/css/flaticon-set.css') }}" rel="stylesheet" />
<link href="{{ asset('public/Enterprice/assets/css/magnific-popup.css') }}" rel="stylesheet" />
<link href="{{ asset('public/Enterprice/assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
<link href="{{ asset('public/Enterprice/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
<link href="{{ asset('public/Enterprice/assets/css/animate.css') }}" rel="stylesheet" />
<link href="{{ asset('public/Enterprice/assets/css/bootsnav.css') }}" rel="stylesheet" />
<link href="{{ asset('public/Enterprice/assets/css/style.css') }}" rel="stylesheet" />
<link href="{{ asset('public/Enterprice/assets/css/responsive.css') }}" rel="stylesheet" />

    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

   

</head>
<body class="hibiscus" >

   

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area inc-pad bg-dark text-light" style="overflow: hidden;">
        <div class="container-full">
            <div class="row align-center">
                <div class="col-lg-6 info">
                    <ul>
                        <li>
                            <i class="fas fa-envelope-open"></i> demo@gmail.com
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>+91 99808 10233
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right item-flex">
                  
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->


    <!-- Header 
    ============================================= -->
    <header id="home" style="overflow: hidden;">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <div class="container-full">

                <!-- Start Atribute Navigation -->
          
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('public/Enterprice/assets/img/newlogo1.png') }}" class="logo" id="logo1"alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                
                <div class="collapse navbar-collapse" id="navbar-menu">
                    
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp" style="margin-bottom:10px ;">
                    <li>
    <a href="{{ url('/') }}">Home</a>
</li>
                        <li>
                            <a href="{{ url('/about') }}">About Us</a>

                        </li>
                        <li>
                            <a href="{{ url('/service') }}">Services</a>

                        </li>
                        <li>
                            <a href="{{ url('/ceiling') }}">false Ceiling</a>

                        </li>
                        <li>
                            <a href="{{ url('/product') }}">products</a>

                        </li>
                        <li>
                            <a href="{{ url('/port') }}">Portfolio</a>

                        </li>
                        <li>
                            <a href="{{ url('/blog') }}">Blog</a>

                        </li>
                        <li>
                            <a href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
          
        </nav>
        <!-- End Navigation -->

    </header>