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
        <h2> Flutter App Development</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/mob8.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span> Flutter App Development</span>
                        <h2>Our Expertise in Flutter App Development</h2>
                        <p>At OrangeMegaSoftware we specialize in crafting cutting-edge mobile applications using Flutter. With a team of experienced developers proficient in Dart programming language and well-versed in Flutter's rich set of features, we deliver top-notch solutions tailored to meet the unique needs of our clients. Our expertise encompasses everything from UI/UX design to backend integration, ensuring seamless and high-performance applications across various platforms. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Seamless Cross-Platform Solutions</h2>
                        <p>Leveraging Flutter's cross-platform capabilities, we offer seamless app development experiences that run flawlessly on both iOS and Android devices. By utilizing a single codebase, we expedite the development process, minimize maintenance efforts, and ensure consistent performance across different platforms.  </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Focus on Innovation and User Experience</h2>
                        <p>At OrangeMegaSoftware we prioritize innovation and user experience in every Flutter app we develop. Our team adopts a user-centric approach, conducting thorough research and analysis to understand the target audience's preferences and pain points. By incorporating the latest design trends, intuitive navigation, and engaging features, we create immersive experiences that captivate users and drive business growth. </p>
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