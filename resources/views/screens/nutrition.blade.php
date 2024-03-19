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
        <h2> Nutrition / Fitness App</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/mob7.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span> Nutrition / Fitness App</span>
                        <h2>User Engagement Features</h2>
                        <p>Our nutrition and fitness app integrates various features aimed at maximizing user engagement and motivation. Through personalized goal setting, progress tracking, and gamification elements, users are incentivized to stay committed to their health and wellness journey. We utilize push notifications to remind users of their upcoming workouts or meal plans, fostering accountability and consistency. Additionally, social sharing functionalities allow users to connect with friends, share achievements, and partake in friendly challenges, enhancing their sense of community and support. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Comprehensive Nutritional Database</h2>
                        <p>Central to our app is a comprehensive nutritional database that provides users with accurate and detailed information about the foods they consume. Leveraging cutting-edge technology, we offer a vast array of food items, including branded products and restaurant meals, with corresponding macronutrient breakdowns and portion sizes. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Workout Planning and Progression</h2>
                        <p>Our app offers robust workout planning and progression features designed to cater to users of all fitness levels and preferences. From customizable workout routines to pre-designed programs crafted by fitness experts, users have access to a diverse range of exercises targeting various muscle groups and fitness goals. </p>
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