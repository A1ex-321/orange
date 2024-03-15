<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    @if($link->isNotEmpty())
    @foreach($link as $item2)
    {!! $item2->scolink !!}
@endforeach
@endif
@if(isset($index) && $index->isNotEmpty())
    @foreach($index as $item)
        <meta charset="UTF-8">
        <title>{{ $item->metatitle }}</title>
        <meta name="description" content="{{ $item->metadescription }}">

        <meta property="og:title" content="{{ $item->ogtitle }}">
        <meta property="og:description" content="{{ $item->ogdescription }}">
        <meta property="og:image" content="{{ $item->ogimage }}">
        <meta property="og:url" content="{{ $item->ogurl }}">
        <meta property="og:type" content="{{ $item->ogtype }}">
    @endforeach
    @elseif(isset($about) && $about->isNotEmpty())
    @foreach($about as $aboutItem)
        <meta charset="UTF-8">
        <title>{{ $aboutItem->metatitle }}</title>
        <meta name="description" content="{{ $aboutItem->metadescription }}">

        <meta property="og:title" content="{{ $aboutItem->ogtitle }}">
        <meta property="og:description" content="{{ $aboutItem->ogdescription }}">
        <meta property="og:image" content="{{ $aboutItem->ogimage }}">
        <meta property="og:url" content="{{ $aboutItem->ogurl }}">
        <meta property="og:type" content="{{ $aboutItem->ogtype }}">
    @endforeach
    @elseif(isset($serviceseo) && $serviceseo->isNotEmpty())
    @foreach($serviceseo as $serviceseo1)
        <meta charset="UTF-8">
        <title>{{ $serviceseo1->metatitle }}</title>
        <meta name="description" content="{{ $serviceseo1->metadescription }}">

        <meta property="og:title" content="{{ $serviceseo1->ogtitle }}">
        <meta property="og:description" content="{{ $serviceseo1->ogdescription }}">
        <meta property="og:image" content="{{ $serviceseo1->ogimage }}">
        <meta property="og:url" content="{{ $serviceseo1->ogurl }}">
        <meta property="og:type" content="{{ $serviceseo1->ogtype }}">
    @endforeach
    @elseif(isset($blogseo) && $blogseo->isNotEmpty())
    @foreach($blogseo as $blog1)
        <meta charset="UTF-8">
        <title>{{ $blog1->metatitle }}</title>
        <meta name="description" content="{{ $blog1->metadescription }}">

        <meta property="og:title" content="{{ $blog1->ogtitle }}">
        <meta property="og:description" content="{{ $blog1->ogdescription }}">
        <meta property="og:image" content="{{ $blog1->ogimage }}">
        <meta property="og:url" content="{{ $blog1->ogurl }}">
        <meta property="og:type" content="{{ $blog1->ogtype }}">
    @endforeach
    @elseif(isset($contact) && $contact->isNotEmpty())
    @foreach($contact as $contacts)
        <meta charset="UTF-8">
        <title>{{ $contacts->metatitle }}</title>
        <meta name="description" content="{{ $contacts->metadescription }}">

        <meta property="og:title" content="{{ $contacts->ogtitle }}">
        <meta property="og:description" content="{{ $contacts->ogdescription }}">
        <meta property="og:image" content="{{ $contacts->ogimage }}">
        <meta property="og:url" content="{{ $contacts->ogurl }}">
        <meta property="og:type" content="{{ $contacts->ogtype }}">
    @endforeach
    @elseif(isset($portseo) && $portseo->isNotEmpty())
    @foreach($portseo as $portseo1)
        <meta charset="UTF-8">
        <title>{{ $portseo1->metatitle }}</title>
        <meta name="description" content="{{ $portseo1->metadescription }}">

        <meta property="og:title" content="{{ $portseo1->ogtitle }}">
        <meta property="og:description" content="{{ $portseo1->ogdescription }}">
        <meta property="og:image" content="{{ $portseo1->ogimage }}">
        <meta property="og:url" content="{{ $portseo1->ogurl }}">
        <meta property="og:type" content="{{ $portseo1->ogtype }}">
    @endforeach
    @elseif(isset($ceilingseo) && $ceilingseo->isNotEmpty())
    @foreach($ceilingseo as $ceilingseo1)
        <meta charset="UTF-8">
        <title>{{ $ceilingseo1->metatitle }}</title>
        <meta name="description" content="{{ $ceilingseo1->metadescription }}">

        <meta property="og:title" content="{{ $ceilingseo1->ogtitle }}">
        <meta property="og:description" content="{{ $ceilingseo1->ogdescription }}">
        <meta property="og:image" content="{{ $ceilingseo1->ogimage }}">
        <meta property="og:url" content="{{ $ceilingseo1->ogurl }}">
        <meta property="og:type" content="{{ $ceilingseo1->ogtype }}">
    @endforeach
    @elseif(isset($productseo) && $productseo->isNotEmpty())
    @foreach($productseo as $productseo1)
        <meta charset="UTF-8">
        <title>{{ $productseo1->metatitle }}</title>
        <meta name="description" content="{{ $productseo1->metadescription }}">

        <meta property="og:title" content="{{ $productseo1->ogtitle }}">
        <meta property="og:description" content="{{ $productseo1->ogdescription }}">
        <meta property="og:image" content="{{ $productseo1->ogimage }}">
        <meta property="og:url" content="{{ $productseo1->ogurl }}">
        <meta property="og:type" content="{{ $productseo1->ogtype }}">
    @endforeach
    @elseif(isset($singleseo))
    <meta charset="UTF-8">
    <title>{{ $singleseo->metatitle }}</title>
    <meta name="description" content="{{ $singleseo->metadescription }}">

    <meta property="og:title" content="{{ $singleseo->ogtitle }}">
    <meta property="og:description" content="{{ $singleseo->ogdescription }}">
    <meta property="og:image" content="{{ $singleseo->ogimage }}">
    <meta property="og:url" content="{{ $singleseo->ogurl }}">
    <meta property="og:type" content="{{ $singleseo->ogtype }}">
@endif

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Poora - Fundraising & Charity Template">

    <!-- ========== Page Title ========== -->

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
                            <!-- <li>
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
                            </li> -->
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