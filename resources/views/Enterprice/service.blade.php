@extends('Enterprice.layout.app')

@section('content')
<div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url('{{ asset('public/Enterprice/assets/img/service.jpg') }}');"
>
        <div class="container">
            <div class="breadcrumb-items">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Our Services</h2>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                    
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

       <!-- Star Recent Causes Area
    ============================================= -->
    <div class="recent-causes-area carousel-shadow causes-area default-padding-bottom">
        <div class="container" style="margin-top: 100px;">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-6 left-info">
                        <h5>Our Services</h5>
                        <h2>
                            Expertise,Quality,Innovation,<br>Customer Satisfaction.
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
                        @foreach($service as $item)
<div class="item"> 
    <div class="thumb">
        <a href="#">
            <img src="{{ asset('public/images/' . $item->machineimage) }}" style="height: 300px;border-radius: 5%;" alt="Thumb">
        </a>
    </div>
    <div class="info">
        <h4>
            <a href="#">{{ $item->machinetitle }}</a>
        </h4>
        <p>
            {{ $item->description }}
        </p>
    </div>
</div>
@endforeach



                        
                        <!-- End Single Item -->
                        <!-- Single Item -->
                       
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
                <!-- <a class="btn circle btn-md btn-gradient wow fadeInUp" style="float: right;" href="service.html">View All <i
                        class="fas fa-angle-right"></i></a> -->

            </div>
        </div>
    </div>






   
@endsection

@push('scripts')


@endpush