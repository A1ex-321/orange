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
        <h2>Premium E Commerce</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/ecom4.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Premium E Commerce</span>
                        <h2>Enhanced User Experience</h2>
                        <p>Our premium e-commerce solutions prioritize user experience above all else. Through intuitive design, seamless navigation, and personalized recommendations, we ensure that every interaction with your online platform is engaging and effortless. By understanding your customers' preferences and behaviors, we tailor the shopping journey to meet their needs, resulting in higher satisfaction and increased conversions.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2> Robust Security Measures</h2>
                        <p>Security is paramount in today's digital landscape, especially in e-commerce. With our advanced security protocols and encryption technologies, we safeguard your customers' sensitive information, including payment details and personal data, against any potential threats or breaches. By implementing rigorous security measures, we instill trust and confidence in your brand, fostering long-term relationships with your customers.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Scalability and Flexibility</h2>
                        <p>In the dynamic world of e-commerce, adaptability is key to staying ahead of the curve. Our premium solutions are built with scalability and flexibility in mind, allowing your online platform to grow seamlessly as your business expands. Whether it's accommodating increased traffic during peak seasons or integrating new features and functionalities, we provide a robust infrastructure that can evolve alongside your evolving needs, ensuring sustained success in the competitive e-commerce landscape. </p>
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