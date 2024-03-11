@extends('Enterprice.layout.app')

@section('content')

    <div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url('{{ asset('public/Enterprice/assets/img/aboutbanner.png') }}');"

>
        <div class="container">
            <div class="breadcrumb-items">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>About Us</h2>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                   
                    <li class="active">About</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <div class="about-area default-padding">
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

    <!-- Start Fun Factor Area
    ============================================= -->
    <!-- <div class="fun-factor-area bg-gray half-bg default-padding-bottom">
        <div class="container">
            <div class="fact-items text-center bg-cover" style="background-image: url(assets/img/2440x1578.png);">
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="95" data-speed="2000">%</div>
                            <span class="medium">All type of Gypsum</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="780" data-speed="5000">780</div>
                            <span class="medium"> Plaster of Paris</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="1600" data-speed="5000">1600</div>
                            <span class="medium">Carnish Design</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="688" data-speed="5000">688</div>
                            <span class="medium">Pvc Panel Work</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Fun Factor Area -->


   
@endsection

@push('scripts')


@endpush