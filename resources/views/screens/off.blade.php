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
        <h2> Off Page SEO</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/digi2.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span> Off Page SEO</span>
                        <h2>Backlink Building Strategy</h2>
                        <p>Backlinks are vital for enhancing your website's authority and visibility on search engines. Our approach focuses on cultivating high-quality backlinks from reputable websites within the industry. Through strategic outreach, collaboration, and content partnerships, we aim to establish a network of backlinks that not only drive traffic but also signal to search engines the credibility and relevance of your website. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Social Media Engagement</h2>
                        <p>Leveraging the power of social media platforms is indispensable in today's digital landscape. We implement a comprehensive social media engagement strategy to amplify your brand presence and drive traffic to your website. By curating compelling content, fostering community engagement, and leveraging targeted advertising, we ensure that your brand maintains a strong presence across various social channels, ultimately boosting your off-page SEO performance.  </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Online Reputation Management</h2>
                        <p>Managing your online reputation is crucial for maintaining trust and credibility with your audience. We employ proactive measures to monitor and manage your brand's online reputation, addressing any negative feedback or mentions promptly and effectively. Through proactive reputation management strategies, including review management, sentiment analysis, and brand monitoring, we safeguard your brand's image and ensure positive visibility across digital platforms. </p>
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