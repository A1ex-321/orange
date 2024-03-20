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
        <h2> IOS App Development</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/mob2.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>IOS App Development</span>
                        <h2>Overview of Our iOS App Development Services</h2>
                        <p>Our iOS app development services at OrangeMegaSoftware are tailored to meet the unique needs and requirements of businesses seeking to establish a strong presence in the iOS ecosystem. Leveraging cutting-edge technologies and industry best practices, we specialize in crafting highly intuitive and visually appealing iOS applications that resonate with your target audience. From ideation to deployment. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Key Features of Our iOS App Development Process</h2>
                        <p> we follow a rigorous development process that ensures the successful delivery of top-notch iOS applications. Our approach emphasizes thorough planning, meticulous design, and agile development methodologies to create apps that stand out in the competitive marketplace. From conceptualizing the app architecture to rigorous testing and optimization, we prioritize quality and performance at every stage of the development lifecycle. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Benefits of Choosing OrangeMegaSoftware for iOS App Development</h2>
                        <p>From custom feature development to seamless integration with existing systems, our team goes the extra mile to ensure client satisfaction. Moreover, our transparent communication, flexible engagement models, and competitive pricing make us the preferred choice for businesses of all sizes looking to elevate their iOS app experiences. With [Your Company Name], you can unlock the full potential of iOS app development and drive sustainable growth for your business.</p>
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