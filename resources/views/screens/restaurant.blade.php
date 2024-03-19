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
        <h2>Restaurant Food Delivery App</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/food-app.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Restaurant Food Delivery App</span>
                        <h2>Overview of Our School Management System</h2>
                        <p>Our team at OrangeMegaSoftware follows a meticulous app development process to ensure the delivery of a top-notch restaurant food delivery application. From conceptualization to deployment, we leverage the latest technologies and industry best practices. Our process involves thorough market research, user experience design, agile development methodologies, rigorous testing, and seamless integration of features. By adhering to a systematic approach, we guarantee the creation of a robust and user-friendly app that meets the specific requirements of your restaurant business. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Customization and Scalability</h2>
                        <p>At OrangeMegaSoftware we understand that every restaurant business has unique needs and objectives. Hence, we offer comprehensive customization options to tailor the food delivery app according to your preferences and branding guidelines. Whether it's designing a sleek user interface, implementing personalized features, or integrating third-party services, our team ensures that the app reflects the identity of your restaurant. Moreover, our scalable architecture enables effortless expansion and adaptation to accommodate future growth and evolving market demands.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Ongoing Support and Maintenance</h2>
                        <p>Our commitment to client satisfaction extends beyond the initial launch of the restaurant food delivery app. With OrangeMegaSoftware, you can expect continuous support and maintenance services to keep your app running smoothly. Our dedicated support team is available round-the-clock to address any technical issues, implement updates, and incorporate new features as per your requirements. By entrusting us with the maintenance of your app, you can focus on delivering exceptional culinary experiences while we handle the technical aspects efficiently. </p>
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