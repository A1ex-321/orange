@extends('Enterprice.layout.app')

@section('content')
<div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url('{{ asset('public/Enterprice/assets/img/blogbanner.png') }}');"
>
        <div class="container">
            <div class="breadcrumb-items">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Blog </h2>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                
                    <li class="active">Blog</li>
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
                   
                    <!-- Start Sidebar -->
                    <div class="sidebar wow fadeInLeft col-lg-12 col-md-12">
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