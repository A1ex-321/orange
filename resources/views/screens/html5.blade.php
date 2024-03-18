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
        <h2>HTML5 Web Design</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/web5.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>HTML5 Web Design</span>
                        <h2>Structure</h2>
                        <p>HTML5 introduces new semantic elements that improve the structure of web pages. These elements, such as header, footer, nav, article, section, and aside, provide clearer definitions of different parts of a webpage. Semantic elements help search engines understand the content better and improve accessibility for users.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Multimedia Support</h2>
                        <p>HTML5 includes native support for embedding multimedia content, such as audio and video, without requiring third-party plugins like Flash. The audio and video elements allow developers to integrate media files directly into web pages, making it easier to deliver rich multimedia experiences across different devices and browsers.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Canvas and SVG</h2>
                        <p> HTML5 introduces new ways to create graphics and visual elements on web pages. The  element enables dynamic rendering of graphics, animations, and interactive content using JavaScript. Scalable Vector Graphics (SVG) provide a resolution-independent way to display vector graphics directly within HTML documents, allowing for sharp and scalable graphics that adapt to different screen sizes and resolutions.</p>
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