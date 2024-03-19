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
        <h2> Angular JS App Development</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/mob4.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span> Angular JS App Development</span>
                        <h2>Overview of Angular JS</h2>
                        <p>AngularJS is a powerful JavaScript framework widely used for building dynamic single-page web applications. With its robust features and capabilities, it enables developers to create interactive user interfaces with ease. At our IT company, we leverage AngularJS to develop cutting-edge web applications that meet the evolving needs of our clients.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Benefits of Angular JS Development</h2>
                        <p>AngularJS offers numerous advantages for web development projects. It provides a structured framework that facilitates the development process, resulting in faster turnaround times and reduced development costs. Additionally, AngularJS's two-way data binding feature ensures seamless synchronization between the model and the view, enhancing the overall user experience. At our IT company, we harness the power of AngularJS to deliver scalable and feature-rich web applications that exceed our clients' expectations. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Our Approach to Angular JS Development</h2>
                        <p>At our IT company, we follow a systematic approach to AngularJS development, focusing on delivering high-quality solutions tailored to our clients' specific requirements. Our team of experienced developers collaborates closely with clients to understand their objectives and develop customized solutions that address their unique challenges. By leveraging best practices and adhering to industry standards, we ensure that our AngularJS applications are robust, scalable, and maintainable, enabling our clients to achieve their business goals effectively.</p>
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