@extends('Enterprice.layout.app')

@section('content')
  <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url('{{ asset('public/Enterprice/assets/img/blogsingle.jpg') }}');"
>
        <div class="container">
            <div class="breadcrumb-items">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Blog Details</h2>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                 
                    <li class="active">Blog Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
  <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-lg-8 col-md-12">
                        <div class="blog-item-box">
                            <!-- Single Item -->
                            <div class="single-item">
                                <div class="item wow fadeInUp">
                                    <div class="thumb">
                                        <a href="#">
                                        <img src="{{ asset('public/Enterprice/assets/img/about.jpg') }}" alt="Thumb" height="400px" width="100%">

                                        </a>
                                    </div>
                                    <div class="info">
                                        <!-- <div class="tags">
                                            <a href="#">Donation</a>
                                            <a href="#">Poor</a>
                                        </div> -->
                                        <!-- <div class="meta">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"></i> 18 Nov, 2020</li>
                                                <li>By <a href="#">Park Lee</a></li>
                                            </ul>
                                        </div> -->
                                        <h4>
                                            <a href="#">Recent Works Showcase</a>
                                        </h4>
                                        <p>
                                            We transformed a dull corporate office space into a modern and vibrant work environment. Our team installed sleek gypsum false ceilings with integrated LED lighting, creating a more energy-efficient and aesthetically pleasing atmosphere.
                                        </p>
                                       
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                        
                        <!-- Pagination -->
                       
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar wow fadeInLeft col-lg-4 col-md-12">
                        <aside>
                          
                        
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent Post</h4>
                                </div>
                                <ul>
                                    <li>
                                        <div class="thumb">
                                            <a href="blog-single.html">
                                            <img src="{{ asset('public/Enterprice/assets/img/b1.png') }}" alt="Thumb">

                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="blog-single.html">What kind of installation process is required for your false ceiling products?</a>
                                            <h6 style="color: crimson;">By Joes</h6>
                                            <div class="meta-title">
                                                <span class="post-date"><i class="fas fa-clock"></i> 12 Feb, 2023</span>
                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="blog-single.html">
                                            <img src="{{ asset('public/Enterprice/assets/img/b2.png') }}" alt="Thumb">

                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="blog-single.html">Are your false ceiling products fire-resistant or compliant with building safety codes?</a>
                                            <h6 style="color: crimson;">By Frankilin</h6>
                                            <div class="meta-title">
                                                <span class="post-date"><i class="fas fa-clock"></i> 05 Jul, 2023</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="blog-single.html">
                                            <img src="{{ asset('public/Enterprice/assets/img/b3.png') }}" alt="Thumb">

                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="blog-single.html">How do your false ceiling products compare in terms of durability and longevity?</a>
                                            <h6 style="color: crimson;">By Xaviour</h6>
                                            <div class="meta-title">
                                                <span class="post-date"><i class="fas fa-clock"></i> 29 Aug, 2023</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                         
                            <div class="sidebar-item gallery">
    <div class="title">
        <h4>Gallery</h4>
    </div>
    <div class="sidebar-info">
        <ul>
            <li>
                <a href="#">
                    <img src="{{ asset('public/Enterprice/assets/img/portfolio5.png') }}" alt="thumb">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('public/Enterprice/assets/img/product.png') }}" alt="thumb">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('public/Enterprice/assets/img/portfolio1.png') }}" alt="thumb">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('public/Enterprice/assets/img/portfolio2.png') }}" alt="thumb">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('public/Enterprice/assets/img/portfolio3.png') }}" alt="thumb">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('public/Enterprice/assets/img/portfolio4.png') }}" alt="thumb">
                </a>
            </li>
        </ul>
    </div>
</div>

                           
                          
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
  


   
@endsection

@push('scripts')


@endpush