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
        <h2>Content Marketing</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/digi6.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Content Marketing</span>
                        <h2>Strategic Content Planning</h2>
                        <p>Our approach to content marketing revolves around meticulous strategic planning tailored to your IT company's objectives. We delve deep into understanding your target audience, industry landscape, and competitive positioning to craft content that resonates and drives results. By aligning content with your business goals, we ensure every piece serves a purpose, whether it's to boost brand awareness, generate leads, or establish thought leadership. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Engaging Multimedia Content Creation</h2>
                        <p>Leveraging the power of multimedia, we create compelling content that captivates your audience across various channels. From informative blog posts and engaging social media updates to visually stunning infographics and immersive videos, our content arsenal is diverse and dynamic. By employing a mix of text, graphics, and interactive elements, we amplify your brand's message, fostering deeper connections and driving engagement.  </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Data-Driven Optimization</h2>
                        <p>Continuous improvement lies at the heart of our content marketing strategy. Through rigorous analysis of metrics and feedback, we refine and optimize content performance to maximize its impact. By harnessing data insights, we uncover what resonates with your audience, allowing us to fine-tune content strategies for optimal results.</p>
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