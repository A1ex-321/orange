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
        <h2> Android App Development</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/mob1.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span> Android App Development</span>
                        <h2>Company Background</h2>
                        <p>Our IT company specializes in Android app development, leveraging cutting-edge technologies and innovative solutions to meet the diverse needs of our clients. With a team of experienced developers and designers, we have a proven track record of delivering high-quality, scalable, and user-friendly Android applications across various industries.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Development Process</h2>
                        <p>Our development process is streamlined and agile, ensuring efficient project management and timely delivery. We begin by thoroughly understanding our clients' requirements and objectives, conducting comprehensive research, and crafting a detailed project plan. Our team then follows industry best practices and utilizes the latest tools and frameworks to develop robust Android apps that exceed expectations.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Client Satisfaction and Support</h2>
                        <p>At our company, client satisfaction is our top priority. We maintain open communication channels throughout the development process, providing regular updates and incorporating feedback to ensure alignment with our clients' vision. Even after the app is launched, we offer ongoing support and maintenance services to address any issues and keep the application running smoothly, thereby fostering long-term partnerships with our clients.</p>
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