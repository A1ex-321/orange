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
        <h2>Quality Control</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/quality3.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Quality Control</span>
                        <h2>Process Optimization</h2>
                        <p>Our company employs rigorous quality control measures to optimize processes across all stages of development, ensuring efficiency, accuracy, and consistency in our deliverables. By continuously refining our workflows and implementing cutting-edge technologies, we enhance productivity while maintaining the highest standards of quality. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Continuous Improvement</h2>
                        <p>Through ongoing evaluation and feedback mechanisms, we foster a culture of continuous improvement within our organization. Our quality control strategies involve regular assessments of performance metrics, identification of areas for enhancement, and proactive measures to address any deviations from desired outcomes. This commitment to refinement enables us to adapt swiftly to evolving market demands and deliver unparalleled solutions to our clients.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Client Satisfaction</h2>
                        <p> Central to our quality control framework is a steadfast dedication to ensuring client satisfaction. We prioritize open communication channels with our clients, actively soliciting their feedback and incorporating their input into our processes. By consistently exceeding expectations and delivering solutions that align with their objectives, we forge lasting partnerships built on trust and mutual success.   </p>
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