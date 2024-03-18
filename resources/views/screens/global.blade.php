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
        <h2>Global SEO Services</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/digi4.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Global SEO Services</span>
                        <h2>Understanding Global SEO Optimization</h2>
                        <p>Global SEO optimization involves tailoring your online content to rank well in search engine results across various regions and languages. It's a strategic approach aimed at increasing visibility and driving traffic from diverse international markets. This process requires in-depth research into target audience demographics, cultural nuances, and language preferences to effectively optimize content for global reach. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Our Approach to Global SEO Services</h2>
                        <p>we understand the complexities of global SEO optimization and offer tailored solutions to meet the unique needs of our clients. Our approach begins with comprehensive keyword research and competitor analysis to identify opportunities for maximizing visibility in international search results.  </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Benefits of Partnering with Our Company</h2>
                        <p>Partnering with [Your Company Name] for global SEO services provides numerous benefits for businesses seeking to expand their online presence internationally. By leveraging our expertise and industry-leading strategies, clients can expect increased organic traffic, improved search engine rankings, and enhanced brand visibility across diverse markets </p>
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