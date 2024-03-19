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
        <h2>Website Redesigning</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/web7.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Website Redesigning</span>
                        <h2>User Experience Enhancement</h2>
                        <p>Improve navigation: Ensure that your website is easy to navigate with clear menus and intuitive links. Make it effortless for visitors to find the information they are looking for.
                            Optimize for mobile: With the increasing use of smartphones, it's crucial to have a mobile-responsive design that provides a seamless experience across all devices.
                            Streamline the layout: Simplify the design layout to reduce clutter and enhance readability. Use whitespace effectively to make the content more digestible.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Visual Refresh</h2>
                        <p>Update the design: Give your website a modern look and feel that reflects the latest design trends and your company's branding. Use high-quality images and graphics to capture visitors' attention.
                            Incorporate multimedia elements: Integrate videos, animations, or interactive elements to make the website more engaging and dynamic.
                            Ensure consistency: Maintain a consistent visual style throughout the website to create a cohesive brand identity and reinforce professionalism.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Content Optimization</h2>
                        <p> Revise content: Review and update the existing content to ensure accuracy, relevance, and clarity. Tailor the messaging to resonate with your target audience and address their needs and pain points.</p>
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