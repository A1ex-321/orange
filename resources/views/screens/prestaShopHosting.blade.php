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
        <h2>PrestaShop Hosting</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/ecom6.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>PrestaShop Hosting</span>
                        <h2>Optimized Performance</h2>
                        <p>PrestaShop Hosting ensures that your e-commerce website operates at peak efficiency, providing swift loading times and seamless user experiences. Through meticulous optimization techniques, our hosting services prioritize speed and reliability, enabling your online store to handle high traffic volumes effortlessly. With advanced caching mechanisms and state-of-the-art infrastructure, we guarantee minimal downtime and maximum performance for your PrestaShop platform.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Robust Security Measures</h2>
                        <p>Safeguarding your PrestaShop website against potential threats is paramount in today's digital landscape. Our hosting solutions integrate cutting-edge security protocols to fortify your online store against malware, hacking attempts, and data breaches. From SSL encryption to regular security audits, we employ a multi-layered approach to ensure that your customers' sensitive information remains protected at all times. With proactive monitoring and timely updates, we mitigate risks and uphold the integrity of your e-commerce operations.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>24/7 Technical Support</h2>
                        <p>Your journey with PrestaShop Hosting is backed by our dedicated team of technical experts, available round-the-clock to address any concerns or queries you may encounter. Whether you require assistance with server configurations, troubleshooting website issues, or optimizing performance parameters, our support staff is just a click or call away. With prompt responses and personalized solutions, we strive to empower you with the resources and guidance needed to succeed in the competitive online marketplace.</p>
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