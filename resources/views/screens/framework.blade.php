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
        <h2>Special Framework Development</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/dev5.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Special Framework Development</span>
                        <h2> Purpose of Special Framework Development</h2>
                        <p>In today's rapidly evolving technological landscape, custom framework development plays a pivotal role in addressing unique business needs and challenges. At [Your IT Company], our focus on special framework development is driven by the necessity to provide tailored solutions that not only meet but exceed the expectations of our clients. This involves understanding the intricate requirements of each project and crafting a specialized framework that optimizes performance, scalability, and maintainability.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2> Methodology and Approach</h2>
                        <p>Our methodology for special framework development revolves around a comprehensive understanding of the project objectives, coupled with an in-depth analysis of existing systems and technologies. We adopt a collaborative approach, working closely with our clients to gather insights and feedback throughout the development lifecycle. Leveraging the latest tools and technologies, our team of skilled developers meticulously design </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Benefits and Impact</h2>
                        <p>The development of specialized frameworks at [Your IT Company] brings forth a multitude of benefits for our clients. By customizing solutions to their specific requirements, we enable greater efficiency, agility, and innovation within their organizations. Our frameworks empower businesses to streamline processes, reduce operational costs, and gain a competitive edge in their respective industries.</p>
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