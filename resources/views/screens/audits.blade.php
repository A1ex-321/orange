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
        <h2>Quality Audits</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/quality2.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Quality Audits</span>
                        <h2>Purpose and Scope</h2>
                        <p>Quality audits in OrangeMegaSoftware serve the fundamental purpose of ensuring that all processes, products, and services meet the established standards and requirements. The scope of these audits encompasses various aspects such as software development, project management, customer support, and infrastructure management. By conducting regular audits, we aim to identify areas for improvement, mitigate risks, and enhance overall quality across the organization. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Audit Process</h2>
                        <p>The audit process in follows a systematic approach, beginning with planning and preparation. This involves defining audit objectives, selecting appropriate audit criteria, and assembling an audit team comprising qualified professionals. During the execution phase, auditors conduct thorough evaluations of processes, documentation, and performance metrics against predefined standards and benchmarks</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Continuous Improvement</h2>
                        <p> Audit findings are not merely viewed as indicators of shortcomings but rather opportunities for growth and refinement. Following each audit, corrective actions and preventive measures are identified and implemented to address any identified non-conformities and prevent recurrence.  </p>
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