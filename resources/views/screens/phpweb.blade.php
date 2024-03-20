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
        <h2>Php Web Development</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/dev1.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Php Web Development</span>
                        <h2>Introduction to PHP Web Development</h2>
                        <p>Overview of PHP: Provide a brief introduction to PHP (Hypertext Preprocessor), highlighting its role as a server-side scripting language widely used for web development.
                            Importance of PHP: Discuss why PHP is a popular choice for web development projects, emphasizing its versatility, ease of use, and extensive community support.
                            Our Expertise: Showcase your company's proficiency and experience in PHP web development, mentioning any specialized services or solutions offered.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>PHP Web Development Services Offered</h2>
                        <p>Custom Web Development: Detail your company's capabilities in creating custom web applications tailored to clients' specific requirements using PHP.
                            Content Management Systems (CMS): Describe your expertise in developing CMS solutions such as WordPress, Joomla, or Drupal, utilizing PHP to empower clients with easy content management.
                            E-commerce Solutions: Highlight your ability to build robust e-commerce platforms using PHP frameworks like Magento, WooCommerce, or custom solutions to support online businesses.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Benefits of Choosing Our PHP Web Development Services</h2>
                        <p> Expertise and Experience: Highlight your team's expertise and experience in PHP development, emphasizing successful projects and client satisfaction.
                            Scalability and Performance: Discuss how your PHP solutions are designed for scalability and optimized for performance to ensure seamless user experiences.
                            Cost-effectiveness: Explain how your PHP development services offer a cost-effective solution without compromising quality, ensuring clients receive value for their investment.
                            Support and Maintenance: Mention your commitment to providing ongoing support and maintenance services to ensure the smooth operation and longevity of PHP-based web applications developed by your company.</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- Marketing Range Section Start here -->

@include('admin.layouts.message')
<section class="contact-us padding-tb">
    <div class="container" style="background-color: antiquewhite; ">
        <div class="row">

            <div class="col-lg-12 col-md-6 col-xs-12">
                <h1 style="text-align: center; margin-top:50px">Get In Touch</h1>
                <form class="contact-form" action="{{ url('/contacts') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" class="contact-input">
                    <input type="email" name="mail" placeholder="Your Email" class="contact-input">
                    <input type="number" name="phone" placeholder="Your Phone Number" class="contact-input">


                    <textarea rows="5" class="contact-input" name="msg" placeholder="Your Messages"></textarea>
                    <input type="submit" name="submit" value="Send  Request" class="lab-btn" style="margin-bottom:50px">
                </form>
            </div>
        </div>
    </div>
</section>



@endsection