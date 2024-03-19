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
        <h2>  Search Engine Optimization</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/digi1.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>  Search Engine Optimization</span>
                        <h2>Targeted Keyword Optimization</h2>
                        <p>Our IT company excels in optimizing your website content with strategic placement of targeted keywords. By conducting in-depth keyword research, we ensure that your content aligns perfectly with the search queries your potential customers use. Through meticulous optimization, we enhance your website's visibility, driving organic traffic and maximizing your online reach. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Technical SEO Implementation</h2>
                        <p>At our IT company, we go beyond conventional SEO practices to implement advanced technical strategies. From optimizing website speed and performance to ensuring mobile-friendliness and enhancing site architecture, our technical SEO experts ensure that your website meets all search engine requirements for improved rankings. By addressing technical aspects, we pave the way for seamless user experiences and higher search engine visibility.  </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Quality Content Creation</h2>
                        <p>Content is king in the digital realm, and our IT company specializes in creating high-quality, engaging content that resonates with your target audience. From blog posts and articles to multimedia content and infographics, we craft compelling narratives that not only attract but also retain visitors. By consistently delivering valuable content, we establish your brand authority and credibility, driving sustained organic traffic and fostering customer loyalty. </p>
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