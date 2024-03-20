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
        <h2>Startup E-Commerce</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/ecom3.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Startup E-Commerce</span>
                        <h2>Our Company's Unique Value Proposition</h2>
                        <p>Our e-commerce startup, backed by cutting-edge technology and innovative solutions, aims to revolutionize the online shopping experience. We prioritize seamless user interaction, personalized recommendations, and efficient logistics to ensure customer satisfaction at every touchpoint. With a focus on user-centric design and advanced algorithms, we strive to anticipate and meet the evolving needs of modern consumers.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2> Tech-driven Solutions for Enhanced User Experience</h2>
                        <p>Leveraging the expertise of our IT company, we deploy state-of-the-art technologies to create a dynamic platform that caters to the diverse preferences of our users. Through sophisticated AI algorithms, we provide personalized product suggestions and tailored shopping experiences, enhancing engagement and driving conversions. Additionally, our robust backend infrastructure ensures swift and secure transactions, fostering trust and reliability among our customer base.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Seamless Integration of IT Solutions for Scalable Growth</h2>
                        <p>At the heart of our e-commerce venture lies the seamless integration of IT solutions, enabling us to scale and adapt to the demands of a rapidly evolving market landscape. Through continuous optimization and innovation, we strive to elevate operational efficiency, expand our product offerings, and penetrate new market segments. By embracing agility and leveraging technology as a strategic enabler, we position ourselves for sustained growth and long-term success in the competitive e-commerce arena. </p>
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