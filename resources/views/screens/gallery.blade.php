@extends('partials.app')
@section('content')

<style>
    .banner {
        background-color: #E9F2FE;
        /* You can replace 'banner-image.jpg' with your own image file */
        background-size: cover;
        background-position: center;
        color: #fff;
        padding: 50px 20px;
        text-align: center;
    }

    .banner-content {
        max-width: 800px;
        margin: 0 auto;
    }

    .banner h2 {
        font-size: 2.5em;
        margin-bottom: 20px;
    }

    .banner p {
        font-size: 1.2em;
    }
</style>

<section class="banner">
    <div class="banner-content">
        <h2>Gallery</h2>

    </div>
</section>

<!-- Contact -->

<!-- Contact -->


<!-- Team Member Section Start here -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-6">
                <img style="height:376px;"src="{{ asset('/public/orange/assets/images/g2.jpg') }}" alt="pos-thumb" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-12 col-sm-6">
                <img style="height:376px;"src="height:376px;"src="{{ asset('/public/orange/assets/images/g3.jpg') }}" alt="pos-thumb" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-12 col-sm-6">
                <img style="height:376px;" src="height:376px;"src="{{ asset('/public/orange/assets/images/g4.jpg') }}" alt="pos-thumb" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-6">
                <img style="margin-top:10px;height:376px;"src="height:376px;"src="{{ asset('/public/orange/assets/images/g1.jpg') }}" alt="pos-thumb" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-12 col-sm-6">
                <img style="margin-top:10px;height:376px;"src="height:376px;"src="{{ asset('/public/orange/assets/images/g5.jpg') }}" alt="pos-thumb" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-12 col-sm-6">
                <img style="margin-top:10px;height:376px;"src="height:376px;"src="{{ asset('/public/orange/assets/images/g6.webp') }}" alt="pos-thumb" class="img-fluid">
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-6">
                <img src="assets/images/career.jpg" alt="pos-thumb" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-12 col-sm-6">
                <img src="assets/images/career.jpg" alt="pos-thumb" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md- col-sm-6">
                <img src="assets/images/career.jpg" alt="pos-thumb" class="img-fluid">
            </div>
        </div> -->
    </div>
</section>


<!-- Team Member Section Ending here -->

@endsection