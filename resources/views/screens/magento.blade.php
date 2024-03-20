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
        <h2> Magento Development</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/ecom1.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span> Magento Development</span>
                        <h2> Magento Expertise</h2>
                        <p>Our team at OrangeMegaSoftware boasts extensive expertise in Magento development. We have honed our skills over years of dedicated work within the Magento ecosystem. From crafting bespoke themes to implementing complex e-commerce functionalities, we excel in leveraging Magento's robust platform to meet diverse client requirements.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2> Tailored Solutions</h2>
                        <p> We understand that every business has unique needs. That's why we specialize in delivering tailored Magento solutions that align perfectly with our clients' objectives. Whether it's developing custom extensions, optimizing performance, or integrating third-party systems, we prioritize understanding our clients' business goals to deliver solutions that drive growth and success.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Collaborative Approach</h2>
                        <p>Collaboration lies at the heart of our approach to Magento development . We believe in fostering strong partnerships with our clients, working closely with them throughout every stage of the project lifecycle. From initial ideation to post-launch support, we ensure transparent communication and active involvement, empowering our clients to contribute their insights and feedback at every step. </p>
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