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
        <h2>Corporate Web Design</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/web1.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Corporate Web Design</span>
                        <h2>Branding and Visual Identity</h2>
                        <p>This section focuses on creating a visually appealing and cohesive representation of the company's brand. It includes elements such as logo design, color schemes, typography, and imagery.
                            The branding and visual identity of a corporate website should reflect the company's values, mission, and overall identity. Consistency across all visual elements is crucial to building brand recognition and trust among users.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>User Experience (UX) Design</h2>
                        <p>User experience design involves creating a seamless and intuitive browsing experience for website visitors. It encompasses factors such as navigation, layout, responsiveness, and accessibility.</p>
                        <p>The goal of UX design is to ensure that users can easily find the information they need and complete desired actions, such as making a purchase or contacting the company. This often involves conducting user research, prototyping, and testing to optimize the website's usability and effectiveness.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Content Strategy</h2>
                        <p>Content strategy focuses on creating and organizing the content of the website to effectively communicate with the target audience. This includes defining the site's information architecture, developing engaging copywriting, and incorporating multimedia elements such as videos and images.</p>
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