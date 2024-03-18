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
        <h2>Hospital Management System</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/prohos.jpg" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Hospital Management System</span>
                        <h2>Overview of Hospital Management System (HMS)</h2>
                        <p>Our HMS solution is designed to streamline and optimize various operational processes within healthcare facilities. It encompasses modules for patient management, appointment scheduling, billing and invoicing, inventory management, staff management, and more. By integrating these functions into a cohesive system, our HMS enhances efficiency, reduces errors, and improves overall patient care. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Customization and Scalability</h2>
                        <p>Our HMS platform is highly customizable to meet the unique needs of each healthcare institution. Whether it's a small clinic or a large hospital network, our system can be tailored to accommodate specific workflows, protocols, and regulatory requirements. Moreover, it's built with scalability in mind, allowing for seamless expansion as the institution grows or evolves over time.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Security and Compliance</h2>
                        <p>Security and compliance are paramount in the healthcare industry, and our HMS is equipped with robust features to ensure the confidentiality, integrity, and availability of sensitive patient data. We adhere to industry standards and regulations such as HIPAA to safeguard patient information against unauthorized access or breaches. Additionally, our system includes audit trails and access controls to monitor and manage user permissions effectively, enhancing overall data security and compliance posture.  </p>
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