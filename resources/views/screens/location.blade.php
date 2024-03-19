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
        <h2>Location-Based Mobile App Development</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/mob6.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Location-Based Mobile App Development</span>
                        <h2>Conceptualization</h2>
                        <p>Our company begins by thoroughly conceptualizing the location-based mobile app development project. We analyze the client's requirements, target audience, and the purpose of the app. This phase involves brainstorming sessions to ideate features and functionalities that align with the client's goals. Our team works closely with the client to understand their vision and translate it into a concrete plan for development. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Development</h2>
                        <p>Once the conceptualization phase is complete, our skilled developers embark on the development journey. Leveraging cutting-edge technologies and industry best practices, we bring the app to life. This stage involves coding, designing the user interface, integrating location-based services, and rigorous testing to ensure the app's functionality, performance, and security.  </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Deployment and Maintenance</h2>
                        <p>With the development phase accomplished, we move towards deployment, where the app is launched on relevant platforms such as Google Play Store or Apple App Store. Our deployment process is meticulous, ensuring a smooth rollout to users. Post-launch, our commitment to our clients doesn't end; we offer ongoing maintenance and support services to ensure the app's optimal performance and user satisfaction. </p>
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