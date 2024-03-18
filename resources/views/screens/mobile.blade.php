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
        <h2>Ecommerce Mobile App</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/mobileapp.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Ecommerce Mobile App</span>
                        <h2>User-Friendly Interface</h2>
                        <p>Our ecommerce mobile app developed by OrangeMegaSoftware offers a seamlessly navigable interface, ensuring a smooth and intuitive user experience. With a focus on simplicity and clarity, users can effortlessly browse through products, add items to their cart, and complete transactions with minimal friction. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Secure Payment Gateway Integration</h2>
                        <p>At OrangeMegaSoftware we prioritize the security of transactions conducted through our ecommerce mobile app. Through robust encryption protocols and secure payment gateway integration, we safeguard sensitive financial information, instilling confidence in your customers to make purchases without concerns about data breaches or unauthorized access. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Personalized Shopping Experience</h2>
                        <p>Leveraging advanced algorithms and data analytics, our ecommerce mobile app from OrangeMegaSoftware delivers personalized recommendations and tailored shopping experiences to each user. By analyzing user behavior, preferences, and past purchases, we curate product suggestions and promotions that resonate with individual interests, increasing the likelihood of conversion and maximizing customer lifetime value. </p>
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