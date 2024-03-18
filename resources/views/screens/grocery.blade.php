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
        <h2>Grocery Mobile App</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/cat.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:400px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Grocery Mobile App</span>
                        <h2>User Experience Enhancement</h2>
                        <p>Our mobile app prioritizes an intuitive and seamless user experience to ensure effortless navigation and interaction. Leveraging cutting-edge UI/UX design principles, we've crafted a platform that simplifies the grocery shopping process, from browsing items to completing transactions. By prioritizing user-centric design, we aim to provide a satisfying and efficient shopping experience that keeps users engaged and returning. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Efficient Ordering and Delivery Management</h2>
                        <p>With our app, users can easily place orders and manage their delivery preferences with minimal hassle. Our robust backend system streamlines the ordering process, ensuring that customers can swiftly select items, specify delivery times, and track their orders in real-time. Additionally, our delivery management features empower users to make changes to their orders effortlessly, enhancing flexibility and convenience. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Personalization and Recommendation Engine</h2>
                        <p>We understand that every user has unique preferences and requirements when it comes to grocery shopping. That's why our app incorporates a sophisticated personalization and recommendation engine.  </p>
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