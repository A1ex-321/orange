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
        <h2>Magento Hosting</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/ecom5.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Magento Hosting</span>
                        <h2>Server Infrastructure</h2>
                        <p>Our Magento hosting solution is built on robust server infrastructure tailored to meet the specific requirements of Magento-based websites. We utilize high-performance servers equipped with the latest technologies to ensure optimal speed, reliability, and scalability.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Security Measures</h2>
                        <p>Security is paramount in eCommerce, and our Magento hosting service prioritizes the protection of your website and customer data. We implement industry-leading security measures, including regular security audits, firewalls, DDoS protection, and SSL encryption, to safeguard against potential threats and vulnerabilities. Our team of experts continuously monitors for suspicious activities and proactively addresses any security issues to ensure the integrity and confidentiality of your online transactions</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Expert Support</h2>
                        <p>As your trusted IT partner, we provide exceptional support to help you get the most out of your Magento hosting experience. Our team of certified professionals is available 24/7 to assist you with any technical inquiries, performance optimizations, or troubleshooting needs. Whether you're facing challenges with server configuration, extension compatibility, or performance tuning, our experts are here to provide timely and effective solutions. </p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- Marketing Range Section Start here -->

<section class="contact-us padding-tb">
    <div class="container" style="background-color: antiquewhite;">
        <div class="row">

            <div class="col-lg-12 col-md-6 col-xs-12">
                <h1 style="text-align: center; margin-top:50px">Get In Touch</h1>
                <form class="contact-form" action="/">
                    <input type="text" name="name" placeholder="Your Name" class="contact-input">
                    <input type="email" name="email" placeholder="Your Email" class="contact-input">
                    <input type="number" name="text" placeholder="Your Phone Number" class="contact-input">
                    <input type="text" name="text" placeholder="Your Location" class="contact-input">

                    <textarea rows="5" class="contact-input" placeholder="Your Messages"></textarea>
                    <input type="submit" name="submit" value="Send  Request" class="lab-btn" style="margin-bottom:50px">
                </form>
            </div>
        </div>
    </div>
</section>



@endsection