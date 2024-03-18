@extends('Enterprice.layout.app')

@section('content')

<style>
    .description {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* Number of lines to show */
        -webkit-box-orient: vertical;
    }

    .product-container {
        display: flex;
        height: 300px;
        margin-bottom: 100px;
    }

    .product-card {

        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        height: 100%;
        width: 300px;
        box-sizing: border-box;
        padding: 20px;
    }

    .product-image {
        width: 100%;

    }

    .product-image img {

        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    .product-details {
        padding: 10px;
    }

    .product-title {
        font-size: 18px;
        margin-top: 0;
    }

    .product-description {
        font-size: 14px;
        color: #555;
    }

    .product-price {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        margin-top: 5px;
    }

    .add-to-cart-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        padding: 8px 15px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
    }

    .add-to-cart-btn:hover {
        background-color: #0056b3;
    }

    @media screen and (max-width: 576px) {
        .product-container {
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 1200px;
            height: 250px;
            width: 200px;
            margin-left: 100px;

        }

        .product-card {
            flex: 0 0 calc(100% - 20px);
            margin-left: 0;
            margin-right: 0;
        }
    }
</style>



<!-- End Header -->

<!-- Start Banner 
    ============================================= -->
<div class="banner-area inc-indicator content-less text-large" style="overflow: hidden;">
    <div id="bootcarousel" class="carousel text-light slide carousel-fade animate_text" data-ride="carousel">

        <!-- Indicators for slides -->
        <div class="carousel-indicator">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="carousel-indicators">
                            <li data-target="#bootcarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#bootcarousel" data-slide-to="1"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wrapper for slides -->
        <div class="carousel-inner carousel-zoom">
            <div class="carousel-item active">
                <div class="slider-thumb bg-cover" style="background-image: url('{{ asset('public/Enterprice/assets/img/banner5.jpg') }}');">
                </div>
                <div class="box-table">
                    <div class="box-cell shadow dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="content">
                                        <h2 data-animation="animated slideInRight">Welcome to <strong>PRIYANKA
                                                FURNITURE</strong></h2>
                                        <p data-animation="animated slideInLeft">
                                            Your Premier False Ceiling Solution Provider!
                                        </p>
                                        <a data-animation="animated fadeInUp" class="btn circle btn-light effect btn-md" href="{{ url('/contact') }}">CALL
                                            US</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slider-thumb bg-cover" style="background-image: url('{{ asset('public/Enterprice/assets/img/banner7.jpg') }}'); object-fit: contain;"></div>
                <div class="box-table">
                    <div class="box-cell shadow dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="content">
                                        <h2 data-animation="animated slideInRight">Celebrate Elegance
                                            <strong>PRIYANKA ENTERPRISES</strong>
                                        </h2>
                                        <p data-animation="animated slideInLeft">
                                            Transform Your Space with Our False Ceiling Solutions!
                                        </p>
                                        <a data-animation="animated fadeInUp" class="btn circle btn-light effect btn-md" href="{{ url('/contact') }}">CALL
                                            US</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Wrapper for slides -->

    </div>
</div>
<!-- End Banner -->

<!-- Star About Area
    ============================================= -->
<div class="about-area default-padding" style="overflow: hidden;">
    <div class="container">
        <div class="row align-center">

            <div class="col-lg-6">
                <div class="thumb">
                    <img src="{{ asset('public/Enterprice/assets/img/1998.png') }}" alt="Thumb">

                </div>
            </div>

            <div class="col-lg-6 info">
                <h5>About Us</h5>
                <h2 class="text-blur">About</h2>
                <h2 class="area-title">"Innovative False Ceiling Solutions: Redefining Space Design and
                    Functionality"




                </h2>
                <p>
                 

                    <b>Priyanka Enterprises,</b> has been catering to the needs of the Aquaculture Industry across India by providing them with high quality products. Its diverse portfolio consists of an extensive range of products like Artemia, Hatchery Feeds, Nursery Feeds, Grow out Feeds, Probiotics, Chemicals.
                </p>


            </div>

        </div>
    </div>
</div>
<!-- End About Area -->

<!-- Star Recent Causes Area
    ============================================= -->
<div class="recent-causes-area carousel-shadow causes-area default-padding-bottom" style="overflow: hidden;">
    <div class="container">
        <div class="heading-left">
            <div class="row">
                <div class="col-lg-6 left-info">
                    <h5>Our Services</h5>
                    <h2>
                        Expertise,Quality,<br>Customer Satisfaction.
                    </h2>
                </div>
                <div class="col-lg-6 right-info">
                    <p>
                        Our team comprises skilled professionals with extensive experience in false ceiling
                        installation, design, and customization. We leverage our expertise to deliver tailored
                        solutions that meet the unique requirements of each project.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-full">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="recent-causes-carousel owl-carousel owl-theme">
                    @foreach($service as $service)
                    <div class="item">
                        <div class="thumb">
                            <!-- Ensure you have an image or a placeholder for each service -->
                            <img src="{{ asset('public/images/' . $service->machineimage) }}" style="height: 300px; border-radius: 5%;" alt="Thumb">

                        </div>
                        <div class="info">
                            <h5 style="text-align: center; margin-top: 10px;">
                                <!-- Dynamic service name -->
                                {{ $service->machinetitle }}
                            </h5>

                            <p class="description" style="margin-top: 0; margin-bottom: 10px;">
                                <!-- Dynamic service description -->
                                {{ $service->description }}
                            </p>


                        </div>
                    </div>
                    @endforeach






                    <!-- End Single Item -->
                </div>
            </div>


        </div>
        <div class="d-flex justify-content-center justify-content-lg-end"> <!-- Apply Bootstrap classes for flexbox and alignment -->
            <a class="btn circle btn-md btn-gradient wow fadeInUp" href="{{ url('/service') }}">View All <i class="fas fa-angle-right"></i></a>
        </div>

    </div>
</div>
<!-- End Recent Causes Area -->
<div class="blog-area default-padding bottom-less">
    <div class="container" style="margin-top: -100px;">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5>False Ceiling Designs</h5>
                    <h2>
                        "Creative False Ceiling Designs: Elevate Your Space with Style"
                    </h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog-items">
            <div class="row">

                <!-- End Single Item -->
                <!-- Single Item -->
                @php $count = 0; @endphp
                @foreach($ceiling as $ceil)
                @if($count < 6) <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">

                            <img src="{{ asset('public/images/' . $ceil->image) }}" style="border-radius: 5%;" alt="Thumb">
                        </div>
                    </div>
            </div>
            @php $count++; @endphp
            @else
            @break
            @endif
            @endforeach




            <!-- End Single Item -->
        </div>
    </div>

</div>
<div class="text-center"> <!-- Apply Bootstrap class for text centering -->
    <a class="btn circle btn-md btn-gradient wow fadeInUp" style="display: inline-block; " href="{{ url('/ceiling') }}">View All <i class="fas fa-angle-right"></i></a>
</div>
</div>
<!-- End Blog Area -->

<h1 style="text-align: center;font-weight: bold;margin-bottom: 30px;">Our Popular Products</h1>

<div class="product-container">
    @php $count = 0; @endphp
    @foreach($product as $pro)
    @if($count < 5) <div class="product-card" style="margin-left: 20px;">
        <div class="product-image">
            <img src="{{ asset('public/images/' . $pro->machineimage) }}" alt="Product Image">
        </div>
        <div class="product-details">
            <h2 class="product-title">{{$pro->machinetitle}} </h2>

            <p class="product-price">₹ {{$pro->description}}</p>

        </div>
</div>
@php $count++; @endphp
@else
@break
@endif
@endforeach


<!-- Repeat this product card div for each product -->

</div>

</div>
<div class="text-center"> <!-- Apply Bootstrap class for text centering -->
    <a class="btn circle btn-md btn-gradient wow fadeInUp" style="display: inline-block; margin-top:-50px;" href="{{ url('/product') }}">View All <i class="fas fa-angle-right"></i></a>
</div>

<!-- End Blog -->
<!-- End Blog -->
<h1 style="text-align: center;font-weight: bold;">Our Portfolio</h1>

<div class="blog-area full-blog blog-standard full-blog grid-colum default-padding">
    <div class="container">
        <div class="blog-items content-less">
            <div class="blog-content">
                <div class="blog-item-box">
                    <div class="row">
                        <!-- Single Item -->
                        @php $count = 0; @endphp
                        @foreach($port as $port)
                        @if($count < 5) <div class="col-lg-4 col-md-6 single-item">
                            <div class="item wow fadeInUp">
                                <div class="thumb">
                                    <img src="{{ asset('public/images/' . $port->machineimage) }}" alt="Thumb">
                                </div>

                            </div>
                    </div>
                    @php $count++; @endphp
                    @else
                    @break
                    @endif
                    @endforeach
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <!-- End Single Item -->
                </div>
                <div class="text-center"> <!-- Apply Bootstrap class for text centering -->
                    <a class="btn circle btn-md btn-gradient wow fadeInUp" style="display: inline-block; " href="{{ url('/product') }}">View All <i class="fas fa-angle-right"></i></a>
                </div>
                <!-- Pagination -->

            </div>
        </div>
    </div>
</div>
</div>
<!-- Start Blog
    ============================================= -->

<h1 style="text-align: center;font-weight: bold;">Blogs</h1>


</div>
<!-- End Single Item 1 -->

<!-- Add additional carousel items using the same structure -->

</div>

</div>

<!-- End Blog -->

<!-- Start Footer 
    ============================================= -->
<div class="container-full">
    <div class="row">
        <div class="col-lg-12">
            <div class="recent-causes-carousel owl-carousel owl-theme">
                @foreach($blog as $blogItem) <!-- Renamed variable to avoid confusion -->
                <div class="item">
                    <div class="thumb">
                        <a href="{{ route('singleblog', ['id' => $blogItem->id, 'slug' => str_replace(' ', '-', $blogItem->slug)]) }}">
                            <img src="{{ asset('public/images/' . $blogItem->singleimage) }}" style="height: 300px; border-radius: 5%;" alt="Thumb">
                        </a>
                    </div>
                    <div class="info">
                        <div class="text-center">
                            <h4 style="margin-top:10px;">
                                <a href="{{ route('singleblog', ['id' => $blogItem->id, 'slug' => str_replace(' ', '-', $blogItem->slug)]) }}">{{ $blogItem->title }}</a>
                            </h4>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center justify-content-lg-end"> <!-- Apply Bootstrap classes for flexbox and alignment -->
    <a class="btn circle btn-md btn-gradient wow fadeInUp" href="{{ url('/blog') }}">View All <i class="fas fa-angle-right"></i></a>
</div>
@endsection


@push('scripts')
<script></script>


@endpush