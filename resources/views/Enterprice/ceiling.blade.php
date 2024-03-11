@extends('Enterprice.layout.app')

@section('content')
<div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url('{{ asset('public/Enterprice/assets/img/design.png') }}');"
>
        <div class="container">
            <div class="breadcrumb-items">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>False Ceiling Design</h2>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                 
                    <li class="active">Design</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
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
                <img src="{{ asset('public/Enterprice/assets/img/c7.png') }}" style="border-radius: 5%;" alt="Thumb">
            </a>
        </div>
    </div>
</div>
<div class="single-item col-lg-4 col-md-6">
    <div class="item">
        <div class="thumb">
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
   
@endsection

@push('scripts')


@endpush