@extends('Enterprice.layout.app')

@section('content')

<style>

      
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
                                            <a data-animation="animated fadeInUp"
                                                class="btn circle btn-light effect btn-md" href="contact.html">CALL
                                                US</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover"
                    style="background-image: url('{{ asset('public/Enterprice/assets/img/banner7.jpg') }}'); object-fit: contain;"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h2 data-animation="animated slideInRight">Celebrate Elegance
                                                <strong>PRIYANKA ENTERPRISES</strong></h2>
                                            <p data-animation="animated slideInLeft">
                                                Transform Your Space with Our False Ceiling Solutions!
                                            </p>
                                            <a data-animation="animated fadeInUp"
                                                class="btn circle btn-light effect btn-md" href="contact.html">CALL
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
    <div class="about-area default-padding"style="overflow: hidden;">
        <div class="container">
            <div class="row align-center">

                <div class="col-lg-6">
                    <div class="thumb">
                    <img src="{{ asset('public/Enterprice/assets/img/about.jpg') }}" alt="Thumb">

                    </div>
                </div>

                <div class="col-lg-6 info">
                    <h5>About Us</h5>
                    <h2 class="text-blur">About</h2>
                    <h2 class="area-title">"Innovative False Ceiling Solutions: Redefining Space Design and
                        Functionality"




                    </h2>
                    <p>
                        At <b>Priyanka Enterprises,</b> we're passionate about creating stunning and functional spaces
                        through innovative false ceiling solutions. With years of industry experience and a commitment
                        to excellence, we have established ourselves as a trusted name in the false ceiling industry.
                    </p>


                </div>

            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Star Recent Causes Area
    ============================================= -->
    <div class="recent-causes-area carousel-shadow causes-area default-padding-bottom"style="overflow: hidden;">
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
                        <!-- Single Item -->
                        <div class="item"> 
                            <div class="thumb">
                                <a href="#">
                                <img src="{{ asset('public/Enterprice/assets/img/Gypsum-False-Ceiling.png') }}" style="height: 300px; border-radius: 5%;" alt="Thumb">


                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">All Types of GYPSUM</a>
                                </h4>
                                <p>
                                    Suspended, curved, decorative gypsum ceilings. Versatile, durable, easy installation. Enhance spaces with various finishes, textures. Perfect for any environment.
                                </p>

                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                <img src="{{ asset('public/Enterprice/assets/img/plaster-of-paris.png') }}" style="height: 300px; border-radius: 5%;" alt="Thumb">

                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Plaster of Paris</a>
                                </h4>
                                <p>
                                    Versatile Plaster of Paris. Ideal for sculpting, molds, and false ceiling designs. Easy to shape and lightweight. Perfect for creative projects.
                                </p>

                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                <img src="{{ asset('public/Enterprice/assets/img/carnish.jpg') }}" style="height: 300px; border-radius: 5%;" alt="Thumb">


                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Carnish Designs</a>
                                </h4>
                                <p>
                                    Unique Carnish designs for false ceilings. Add elegance and style. Enhance aesthetic appeal of any space. Customized solutions available.

                                </p>

                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                <img src="{{ asset('public/Enterprice/assets/img/pvc.jpg') }}" style="height: 300px; border-radius: 5%;" alt="Thumb">


                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">PVC Panel Work</a>
                                </h4>
                                <p>
                                    Expert PVC panel installations. Enhance interiors with durable, low-maintenance solutions. Wide range of designs and finishes available. Perfect for modern spaces.
                                </p>

                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                <img src="{{ asset('public/Enterprice/assets/img/flower.jpg') }}" style="height: 300px; border-radius: 5%;" alt="Thumb">


                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Flower Designs</a>
                                </h4>
                                <p>
                                    Flower-inspired false ceiling designs. Bring nature indoors. Enhance ambiance with delicate floral patterns. Customize to suit your space.
                                </p>

                            </div>
                        </div>
                        <!-- <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/sales.png" style="height: 300px; border-radius: 5%;" alt="Thumb">

                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Sales & Services</a>
                                </h4>
                                <p>
                                    Comprehensive sales and service solutions. Expert guidance and support for all your false ceiling needs. Customer satisfaction guaranteed.
                                </p>

                            </div>
                        </div> -->
                        <!-- End Single Item -->
                    </div>
                </div>
                <a class="btn circle btn-md btn-gradient wow fadeInUp" style="float: right;" href="service.html">View All <i
                        class="fas fa-angle-right"></i></a>

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
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                <img src="{{ asset('public/Enterprice/assets/img/c1.png') }}" style="border-radius: 5%;" alt="Thumb">

                                </a>
                            </div>
                        
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                <img src="{{ asset('public/Enterprice/assets/img/c2.png') }}" style="border-radius: 5%;" alt="Thumb">

                                </a>
                            </div>
                          
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                <img src="{{ asset('public/Enterprice/assets/img/c3.png') }}" style="border-radius: 5%;" alt="Thumb">

                                  
                                </a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                <img src="{{ asset('public/Enterprice/assets/img/c4.png') }}" style="border-radius: 5%;" alt="Thumb">

                                  
                                </a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                            <a href="#">
    <img src="{{ asset('public/Enterprice/assets/img/c5.png') }}" style="border-radius: 5%;" alt="Thumb">
</a>

                            </div>
                           
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
    <img src="{{ asset('public/Enterprice/assets/img/c6.png') }}" style="border-radius: 5%;" alt="Thumb">
</a>

                                  
                            </div>
                           
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                <a href="#">
    <img src="{{ asset('public/Enterprice/assets/img/c7.png') }}" style="border-radius: 5%;" alt="Thumb">
                                  
                                </a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                <a href="#">
    <img src="{{ asset('public/Enterprice/assets/img/c8.png') }}" style="border-radius: 5%;" alt="Thumb">
                                  
                                </a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                <a href="#">
    <img src="{{ asset('public/Enterprice/assets/img/c9.png') }}" style="border-radius: 5%;" alt="Thumb">
                                  
                                </a>
                            </div>
                           
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

<h1 style="text-align: center;font-weight: bold;margin-bottom: 30px;">Our Popular Products</h1>
  
        <div class="product-container">
            <div class="product-card"  style="margin-left: 20px;">
                <div class="product-image">
                <img src="{{ asset('public/Enterprice/assets/img/n5.png') }}" alt="Product Image">
                </div>
                <div class="product-details">
                    <h2 class="product-title">Pvc False Ceiling </h2>
                  
                    <p class="product-price">₹ 10000</p>
                  
                </div>
            </div>
            <div class="product-card"  style="margin-left: 20px;">
                <div class="product-image">
                <img src="{{ asset('public/Enterprice/assets/img/n2.png') }}" alt="Product Image">
                </div>
                <div class="product-details">
                    <h2 class="product-title">Gypsum False Ceilings</h2>
                   
                    <p class="product-price">₹ 12000</p>
                    
                </div>
            </div>
            <div class="product-card" style="margin-left: 20px;" >
                <div class="product-image">
                <img src="{{ asset('public/Enterprice/assets/img/pop.png') }}" alt="Product Image">
                </div>
                <div class="product-details">
                    <h2 class="product-title">P.O.P False Ceiling</h2>
                  
                    <p class="product-price">₹ 13000</p>
                  
                </div>
            </div>
            <div class="product-card" style="margin-left: 20px;" >
                <div class="product-image">
                <img src="{{ asset('public/Enterprice/assets/img/n3.png') }}" alt="Product Image">
                </div>
                <div class="product-details">
                    <h2 class="product-title">Metal False Ceilings</h2>
                  
                    <p class="product-price">₹15000</p>
                  
                </div>
            </div>
            <div class="product-card" style="margin-left: 20px;" >
                <div class="product-image">
                <img src="{{ asset('public/Enterprice/assets/img/n4.png') }}" alt="Product Image">
                </div>
                <div class="product-details">
                    <h2 class="product-title">Plastic ceiling tiles</h2>
                  
                    <p class="product-price">₹ 9000</p>
                  
                </div>
            </div>
    
            <!-- Repeat this product card div for each product -->
    
        </div>
    </div>
    <h1 style="text-align: center;font-weight: bold;">Our Recent Works</h1>

    <div class="blog-area full-blog blog-standard full-blog grid-colum default-padding">
        <div class="container">
            <div class="blog-items content-less">
                <div class="blog-content">
                    <div class="blog-item-box">
                        <div class="row">
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" >
                                    <div class="thumb">
                                        <a href="event-1.html">
                                        <img src="{{ asset('public/Enterprice/assets/img/ns1.png') }}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                       
                                     
                                        <h4>
                                            <a href="event-1.html">PVC Panel Works</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" >
                                    <div class="thumb">
                                        <a href="event-1.html">
                                        <img src="{{ asset('public/Enterprice/assets/img/ns2.png') }}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                       
                                        <div class="meta">
                                            
                                        </div>
                                        <h4>
                                            <a href="event-1.html">Gypsum Works</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" >
                                    <div class="thumb">
                                        <a href="event-1.html">
                                        <img src="{{ asset('public/Enterprice/assets/img/ns3.png') }}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                       
                                        <div class="meta">
                                           
                                        </div>
                                        <h4>
                                            <a href="event-1.html">Simple False Ceiling Designs</a>
                                        </h4>

                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        <div class="row">
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" >
                                    <div class="thumb">
                                        <a href="event-1.html">
                                        <img src="{{ asset('public/Enterprice/assets/img/ns4.png') }}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                       
                                     
                                        <h4>
                                            <a href="event-1.html">Horizontal design works</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" >
                                    <div class="thumb">
                                        <a href="event-1.html">
                                        <img src="{{ asset('public/Enterprice/assets/img/ns5.png') }}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                       
                                        <div class="meta">
                                            
                                        </div>
                                        <h4>
                                            <a href="event-1.html">Concreate Design Works</a>
                                        </h4>
                                        <a class="btn circle btn-theme border btn-sm" href="event-1.html">View More</i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" >
                                    <div class="thumb">
                                        <a href="event-1.html">
                                        <img src="{{ asset('public/Enterprice/assets/img/ns6.png') }}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                       
                                        <div class="meta">
                                           
                                        </div>
                                        <h4>
                                            <a href="event-1.html">Simple PVC Ceiling Designs</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                     
                     
                    </div>
                </div>
            </div>
        </div>
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
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" >
                                    <div class="thumb">
                                        <a href="#">
                                        <img src="{{ asset('public/Enterprice/assets/img/port1.png') }}" alt="Thumb">
                                        </a>
                                    </div>
                              
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" >
                                    <div class="thumb">
                                        <a href="#">
                                        <img src="{{ asset('public/Enterprice/assets/img/portfolio1.png') }}" alt="Thumb">

                                        </a>
                                    </div>
                                  
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" >
                                    <div class="thumb">
                                        <a href="#">
                                        <img src="{{ asset('public/Enterprice/assets/img/portfolio5.png') }}" alt="Thumb">

                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" >
                                    <div class="thumb">
                                        <a href="#">
                                        <img src="{{ asset('public/Enterprice/assets/img/portfolio4.png') }}" alt="Thumb">

                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp">
                                    <div class="thumb">
                                        <a href="#">
                                        <img src="{{ asset('public/Enterprice/assets/img/portfolio2.png') }}" alt="Thumb">

                                        </a>
                                    </div>
                                  
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" >
                                    <div class="thumb">
                                        <a href="#">
                                        <img src="{{ asset('public/Enterprice/assets/img/portfolio3.png') }}" alt="Thumb">

                                        </a>
                                    </div>
                                  
                                </div>
                            </div>
                            <!-- End Single Item -->
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

    <div class="blog-area full-blog blog-standard full-blog grid-colum default-padding">
        <div class="container">
            <div class="blog-items content-less">
                <div class="blog-content">
                    <div class="blog-item-box">
                        <div class="row">
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" >
                                    <div class="thumb">
                                        <a href="#">
                                        <img src="{{ asset('public/Enterprice/assets/img/b1.png') }}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                       
                                        <div class="meta">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"></i> 05 Dec, 2024</li>
                                                <li>By <a href="#">Joes</a></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">What kind of installation process is required for your false ceiling products?</a>
                                        </h4>
                                        <a class="btn circle btn-theme border btn-sm" href="blog.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" >
                                    <div class="thumb">
                                        <a href="#">
                                        <img src="{{ asset('public/Enterprice/assets/img/b2.png') }}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                       
                                        <div class="meta">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"></i> 26 Sep, 2024</li>
                                                <li>By <a href="#">Franklin</a></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">Are your false ceiling products fire-resistant or compliant with building safety codes?</a>
                                        </h4>
                                        <a class="btn circle btn-theme border btn-sm" href="blog.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" >
                                    <div class="thumb">
                                        <a href="#">
                                        <img src="{{ asset('public/Enterprice/assets/img/b3.png') }}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                       
                                        <div class="meta">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"></i> 18 Nov, 2023</li>
                                                <li>By <a href="#">Xaviour</a></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">How do your false ceiling products compare in terms of durability and longevity?</a>
                                        </h4>
                                        <a class="btn circle btn-theme border btn-sm" href="blog.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                     
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
  
    <!-- Start Footer 
    ============================================= -->
   
@endsection

@push('scripts')


@endpush