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
        <h2>PrestaShop Development</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="assets/images/ecom2.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span> PrestaShop Development</span>
                        <h2>PrestaShop Customization Services</h2>
                        <p>Our IT company specializes in providing tailored PrestaShop customization services to meet the unique needs of your e-commerce business. Whether it's modifying existing PrestaShop themes, adding new functionalities, or integrating third-party modules, our team of experienced developers ensures that your PrestaShop store reflects your brand identity and enhances user experience.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2> PrestaShop Module Development</h2>
                        <p> At our IT company, we offer expert PrestaShop module development services to extend the capabilities of your e-commerce platform. Our developers leverage their in-depth knowledge of PrestaShop's architecture and best practices to create high-quality modules that address specific requirements and enhance the functionality of your online store.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>PrestaShop Maintenance and Support</h2>
                        <p>Partnering with our IT company ensures ongoing maintenance and support for your PrestaShop store, allowing you to focus on growing your business while we handle the technical aspects. From routine updates and security patches to troubleshooting issues and optimizing performance, our dedicated support team ensures that your PrestaShop store operates smoothly and efficiently. </p>
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