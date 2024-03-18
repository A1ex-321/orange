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
        <h2>React Js Development</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/dev2.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>React Js Development</span>
                        <h2>Expertise in React.js Development</h2>
                        <p>Our Company's Proficiency in Leveraging React.js for Superior Solutions

                            At our company, we specialize in React.js development, harnessing the power of this JavaScript library to craft cutting-edge solutions for our clients. With a deep understanding of React's component-based architecture and virtual DOM, our team of skilled developers creates dynamic and interactive user interfaces that enhance user experience and drive engagement. By utilizing React.js, we ensure that our clients receive scalable, efficient, and maintainable web applications that meet their unique business requirements.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Client-Centric Approach</h2>
                        <p>Tailoring React.js Solutions to Meet Client Needs

                            At our company, we prioritize our clients' needs and preferences, adopting a client-centric approach to React.js development. We collaborate closely with our clients throughout the development process, from initial concept to final implementation, to ensure that the end product aligns perfectly with their vision and objectives</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Continuous Innovation and Improvement</h2>
                        <p> Embracing the Latest Trends and Technologies in React.js

                            In our dynamic and ever-evolving industry, we remain at the forefront of innovation by embracing the latest trends and technologies in React.js development. Our team stays updated with the newest advancements in React.js, constantly refining our skills and methodologies to deliver best-in-class solutions to our clients.</p>
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