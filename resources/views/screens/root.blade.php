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
        <h2>Root Cause Analysis</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/quality4.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Root Cause Analysis</span>
                        <h2>Incident Identification</h2>
                        <p>In the realm of IT, incident identification is crucial for understanding the root cause of any issues that arise. This phase involves the initial recognition of an incident or problem within the IT infrastructure or software systems. Whether it's a sudden system outage, a security breach, or a performance bottleneck, swift and accurate identification is paramount. Utilizing monitoring tools, logs analysis, user reports, or automated alerts can aid in promptly recognizing and flagging potential incidents </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Root Cause Analysis</h2>
                        <p>Root cause analysis (RCA) is a structured method used by IT companies to delve deep into the underlying reasons behind incidents. It involves systematically analyzing the chain of events that led to the issue, aiming to identify the fundamental cause rather than merely addressing symptoms.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Corrective Action and Preventive Measures</h2>
                        <p>After uncovering the root cause through thorough analysis, the next step for the IT company is to implement corrective actions and preventive measures. This involves devising strategies to address the identified issues and mitigate risks proactively. Corrective actions may include software patches, configuration changes, or infrastructure upgrades to resolve the immediate problem. Meanwhile, preventive measures focus on implementing safeguards and best practices to prevent similar incidents from happening again.  </p>
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