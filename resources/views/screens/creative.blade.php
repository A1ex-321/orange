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
        <h2>Creative Web Design</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/web4.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Creative Web Design</span>
                        <h2>User-Centric Design Approach</h2>
                        <p>Explanation: This approach focuses on understanding the needs, preferences, and behaviors of the target audience. Design decisions are made based on user research, usability testing, and iterative improvements to ensure that the website is intuitive, engaging, and easy to navigate. User-centric design prioritizes the user experience, resulting in higher satisfaction and increased engagement.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Visual Storytelling and Branding</h2>
                        <p>Explanation: Visual storytelling involves using images, graphics, and multimedia elements to convey the brand's story, values, and personality. Through consistent use of color schemes, typography, imagery, and visual elements, web designers create a cohesive brand identity that resonates with the audience. Effective branding helps to establish trust, evoke emotions, and differentiate the website from competitors.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Responsive and Interactive Design</h2>
                        <p> Explanation: Responsive design ensures that the website adapts seamlessly to various devices and screen sizes, providing an optimal viewing experience for users on desktops, laptops, tablets, and smartphones. Interactive design elements such as animations, parallax scrolling, hover effects, and microinteractions enhance user engagement and create memorable browsing experiences. By combining responsiveness with interactivity, web designers can captivate audiences and encourage deeper interaction with the content.</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- Marketing Range Section Start here -->

<section class="contact-us padding-tb">
    <div class="container" style="background-color: antiquewhite; ">
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