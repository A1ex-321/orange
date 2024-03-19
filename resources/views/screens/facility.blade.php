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
        <h2>Facility Management Software </h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/facility.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Facility Management Software </span>
                        <h2>Overview of Facility Management Software</h2>
                        <p>Facility management software is a crucial tool for streamlining the operations and maintenance of various facilities within your IT company. This software offers a comprehensive platform to manage /public/orange/assets, space utilization, maintenance schedules, and resource allocation efficiently. By centralizing all facility-related data and processes, it enables your company to enhance productivity, reduce operational costs, and ensure compliance with regulatory standards. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Key Features and Functionality</h2>
                        <p>The facility management software tailored for your IT company should encompass essential features such as asset tracking, preventive maintenance scheduling, space management, and energy optimization. It should also integrate with other systems like IT infrastructure monitoring tools to provide a holistic view of facility operations. Advanced analytics capabilities enable data-driven decision-making, allowing your company to identify trends, predict maintenance needs, and optimize resource utilization for maximum efficiency.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Benefits and ROI</h2>
                        <p>Implementing facility management software yields numerous benefits for your IT company, including increased operational efficiency, reduced downtime, improved asset lifespan, and enhanced employee productivity. By automating routine tasks and providing real-time insights into facility performance, the software empowers your team to focus on strategic initiatives that drive business growth. Moreover, the return on investment (ROI) from deploying this software is significant, as it leads to cost savings, regulatory compliance, and a competitive edge in the market. </p>
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