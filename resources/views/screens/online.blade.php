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
        <h2>Online Exam Software</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/onlineexam.jpg" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Online Exam Software</span>
                        <h2>Platform Development</h2>
                        <p>Our company specializes in crafting robust online exam software solutions tailored to meet the diverse needs of educational institutions, corporate entities, and certification bodies. Leveraging cutting-edge technologies and innovative methodologies, we ensure seamless functionality and user-friendly interfaces for both administrators and test-takers. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Customization and Scalability</h2>
                        <p>With a focus on adaptability and scalability, our online exam software offers extensive customization options to align with specific requirements and branding guidelines. Whether it's integrating advanced proctoring features, accommodating various question types, or facilitating multi-platform accessibility, we empower clients to tailor the software according to their unique preferences and evolving needs. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Security and Reliability</h2>
                        <p>Security is paramount in our online exam software, with robust measures implemented to safeguard the integrity of assessments and protect sensitive data. Through encryption protocols, anti-cheating mechanisms, and secure authentication processes, we ensure a trustworthy environment conducive to fair evaluations. Furthermore, our software undergoes rigorous testing and maintenance to guarantee uninterrupted performance and reliability during high-stakes examinations.</p>
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