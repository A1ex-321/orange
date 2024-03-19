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
        <h2>React Native App Development</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/mob5.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>React Native App Development</span>
                        <h2>Company Overview</h2>
                        <p>Our IT company specializes in React Native app development, offering cutting-edge solutions to meet the diverse needs of our clients. With a focus on innovation and efficiency, we strive to deliver high-quality mobile applications that exceed expectations. Leveraging our expertise in React Native, we harness the power of this technology to create robust, scalable, and user-friendly apps across various industries.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Development Process</h2>
                        <p>Our development process begins with a comprehensive analysis of client requirements and objectives. We collaborate closely with our clients to understand their vision and tailor our approach accordingly. Our team of skilled developers utilizes agile methodologies to ensure flexibility and adaptability throughout the project lifecycle. From design and development to testing and deployment, we maintain transparent communication to keep our clients informed and engaged at every stage. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Value Proposition</h2>
                        <p>At our IT company, we prioritize customer satisfaction and strive to deliver exceptional value with every project. By choosing us for React Native app development, clients can expect seamless integration of advanced features, intuitive user interfaces, and robust performance. Our commitment to quality, coupled with our technical expertise, enables us to deliver solutions that drive business growth and enhance user experiences. With a focus on innovation and excellence, we empower our clients to stay ahead in today's competitive market landscape.</p>
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