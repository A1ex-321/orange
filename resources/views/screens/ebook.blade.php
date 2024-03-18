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
        <h2>E-Book Writing Services</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/digi5.png" alt="mr-thumb" style="border-radius: 5%;height:300px;width:300px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>E-Book Writing Services</span>
                        <h2>Understanding E-Book Writing</h2>
                        <p>In this section, we delve into the fundamentals of e-book writing services. From defining what an e-book is to discussing its significance in today's digital landscape, we provide insights into why businesses should consider investing in e-book creation. We explore the various types of e-books, their formats, and how they can be tailored to meet specific marketing objectives. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>The Process of E-Book Creation</h2>
                        <p>Here, we break down the step-by-step process of creating an e-book with our IT company. From conceptualization and research to writing, designing, and formatting, we guide you through each stage of e-book production. We highlight the importance of collaboration between our experts and clients to ensure the final product aligns with the client's vision and goals.  </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Maximizing the Impact of Your E-Book</h2>
                        <p>In this final section, we discuss strategies for maximizing the reach and impact of your e-book. From distribution channels to promotion tactics, we provide actionable tips on how to leverage your e-book to generate leads, engage your audience, and establish thought leadership in your industry. We also emphasize the importance of tracking and analyzing metrics to measure the success of your e-book campaign and make data-driven decisions for future endeavors.</p>
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