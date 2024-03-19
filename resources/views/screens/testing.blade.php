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
        <h2>Quality Testing</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/quality1.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:400px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Quality Testing</span>
                        <h2>Quality Assurance Framework</h2>
                        <p>Our company's robust quality assurance framework ensures that every software product undergoes rigorous testing at every stage of development. From requirement analysis to deployment, our dedicated QA team meticulously checks for bugs, defects, and discrepancies to ensure the highest standards of quality and reliability.  </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Automated Testing Solutions</h2>
                        <p>Leveraging cutting-edge automated testing tools and techniques, we streamline the testing process, saving time and resources while ensuring comprehensive test coverage. Our automated testing solutions not only enhance efficiency but also increase the accuracy and repeatability of tests, leading to faster delivery of high-quality software products.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Continuous Improvement Initiatives</h2>
                        <p>At our company, quality testing is not just a phase but a continuous journey towards excellence. Through regular feedback loops, performance metrics analysis, and ongoing skill development programs, we constantly strive to improve our testing methodologies and adapt to emerging technologies and industry best practices. </p>
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