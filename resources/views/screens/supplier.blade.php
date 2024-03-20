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
        <h2>Supplier Quality Management</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/quality6.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:400px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Supplier Quality Management</span>
                        <h2>Supplier Evaluation</h2>
                        <p>Our company prioritizes rigorous supplier evaluation processes to ensure the quality and reliability of the products and services we source. Through comprehensive assessments, we examine factors such as supplier capability, financial stability, past performance, and adherence to industry standards. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Quality Assurance</h2>
                        <p>Once suppliers are onboarded, we implement robust quality assurance measures to maintain consistency and excellence in our supply chain. This includes regular audits, inspections, and performance reviews to monitor adherence to specifications, identify any deviations, and implement corrective actions promptly.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Continuous Improvement</h2>
                        <p>Continuous improvement is ingrained in our supplier quality management approach to drive innovation, efficiency, and competitiveness. Through ongoing collaboration with suppliers, we foster a culture of continuous improvement, encouraging feedback, sharing best practices, and implementing innovative solutions.   </p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- Marketing Range Section Start here -->

@include('admin.layouts.message')
<section class="contact-us padding-tb">
    <div class="container" style="background-color: antiquewhite; ">
        <div class="row">

            <div class="col-lg-12 col-md-6 col-xs-12">
                <h1 style="text-align: center; margin-top:50px">Get In Touch</h1>
                <form class="contact-form" action="{{ url('/contacts') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" class="contact-input">
                    <input type="email" name="mail" placeholder="Your Email" class="contact-input">
                    <input type="number" name="phone" placeholder="Your Phone Number" class="contact-input">


                    <textarea rows="5" class="contact-input" name="msg" placeholder="Your Messages"></textarea>
                    <input type="submit" name="submit" value="Send  Request" class="lab-btn" style="margin-bottom:50px">
                </form>
            </div>
        </div>
    </div>
</section>



@endsection