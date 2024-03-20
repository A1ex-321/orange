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
        <h2>Dot Net Web Development</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/dev3.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Dot Net Web Development</span>
                        <h2>Our Expertise in .NET Web Development</h2>
                        <p>Our company excels in .NET web development, leveraging the power of Microsoft's robust framework to craft dynamic and scalable web solutions for our clients. With our deep understanding of the .NET ecosystem, including ASP.NET, MVC, and Core, we deliver cutting-edge web applications tailored to meet the unique requirements of businesses across various industries.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Customized Solutions for Your Business Needs</h2>
                        <p>At our IT company, we believe in providing tailored solutions that perfectly align with our clients' business objectives. Through .NET web development, we offer customizable solutions that address specific challenges and goals, empowering businesses to enhance their online presence, streamline operations, and drive growth. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Seamless Integration and Scalability</h2>
                        <p> Integration and scalability are crucial aspects of any web development project, and our expertise in .NET ensures seamless integration with existing systems and third-party services. Whether integrating with enterprise databases, payment gateways, or external APIs, we ensure that our .NET web solutions are interoperable and future-ready.</p>
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