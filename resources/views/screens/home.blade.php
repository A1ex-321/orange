@extends('partials.app')
@section('content')
<style>
    .service-card {
        background-color: #FFFFFF;
        width: 500px;
        height: 200px;
        border: 1px solid #fdfdfd;
        /* Border */
        padding: 10px;
        /* Padding */
        border-radius: 10px;
        /* Border Radius */
        margin: auto
    }

    #enquiryBox {
        position: fixed;
        bottom: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        z-index: 999999;


    }

    /* Styling for the call back button */
    #callBackButton {
        display: block;
        width: 100%;
        padding: 10px 0;
        margin-top: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;

    }

    /* Styling for the enquiry input */
    #enquiryInput {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    @media screen and (max-width: 768px) {
        .header-btn {
            margin-left: 5%;
            /* Adjust as needed for smaller screens */
        }
    }

    @media screen and (max-width: 768px) {
        .header-btn {
            margin-left: 5%;
            /* Adjust as needed for smaller screens */
        }
    }

    @media screen and (max-width: 768px) {
        .header-btn {
            margin-left: 5%;
            /* Adjust as needed for smaller screens */
        }
    }
</style>


<!-- Banner Section start here -->
<section class="banner-section style-6">
    <div class="banner-area">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="content-part">
                        <div class="section-header style-2">
                            <h2>IT Solutions for Digital <span style="color: #E84E0D;"> Transformation</span></h2>

                            <p>Driving secured and sustainable digital transformation for business growth with technological agility.</p>
                            <a href="contact" class="lab-btn"><span>Connect with Us</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-wrapper">
                        <div class="banner-thumb">
                            <img src="/public/orange/assets/images/banner.png" alt="marketing-banner">
                            <div class="thumb-shape">
                                <div class="th-shape th-shape-1"><img src="/public/orange/assets/images/icon1.png" alt="th-shape"></div>
                                <div class="th-shape th-shape-2"><img src="/public/orange/assets/images/icon3.png" alt="th-shape"></div>
                                <div class="th-shape th-shape-3"><img src="/public/orange/assets/images/icon3.png" alt="th-shape"></div>
                                <div class="th-shape th-shape-4"><img src="/public/orange/assets/images/icon3.png" alt="th-shape"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <div id="enquiryBox">
  <input type="number" id="enquiryInput" placeholder=" Your mobile number...">
  <button id="callBackButton" style="background-color: #E84E0D;">Call Back</button>
</div> -->
<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb" style="background-color: #FFEEF2;">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">

                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>About Us</span>
                        <h2>Our Company</h2>
                        <p>Welcome to <b>OrangeMegaSoftware</b>, where innovation meets excellence in software development. At OrangeMegaSoftware, we're dedicated to crafting cutting-edge software solutions that empower businesses and individuals to thrive in today's dynamic digital landscape.</p>
                    </div>
                    <div class="section-wrapper">
                        <div class="skill-bar-wrapper">
                            <div class="skill-item">
                                <h6>Our Mission</h6>
                                <p>Our mission at OrangeMegaSoftware is to revolutionize the way people interact with technology by delivering innovative software solutions that exceed expectations and drive success for our clients.</p>
                            </div>
                            <div class="skill-item">
                                <div class="skill-title">
                                    <img src="/public/orange/assets/images/i1.png" alt="th-shape">
                                    <img src="/public/orange/assets/images/i2.png" alt="th-shape">
                                </div>

                            </div>
                            <div class="skill-item">
                                <div class="skill-title">
                                    <div class="left" style="font-size: 30px;font-weight:bold">5+ Years </div>
                                    <div class="left" style="font-size: 30px;font-weight:bold">10+ Products </div>
                                </div>

                            </div>
                            <div class="skill-item">
                                <div class="skill-title">
                                    <p class="left">Industry Experience</p>
                                    <p class="left">Progressions</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/ab.jpg" alt="mr-thumb">
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="header-btn" style="margin-left: 10%;"><!-- Adjust the percentage as needed -->
        <a href="about" class="lab-btn"><span>View More</span></a>
    </div>

</section>
<!-- Marketing Range Section Start here -->

<section style="background-color: #FEF4EA;height:500px">
    <h2 style="text-align: center; padding-top:50px">Our Services</h2> <!-- Added title -->
    <div class="owl-carousel owl-theme" style="margin-top:30px;margin-bottom:50px">
        <div class="item">
            <div class="service-card" style="display: flex;">
                <div style="width: 150px; height: 80px; border-radius: 50%; overflow: hidden; border: 1px solid #E84E0D; margin-top: 50px; background-color: #E84E0D">

                    <img src="/public/orange/assets/images/w1.png" alt="th-shape" style="margin-right:5px;margin-top:10px ;padding:5px">
                </div>
                <div>
                    <h4 style="margin-top:30px;margin-left:60px">Web Design</h4>
                    <p style="margin-left:60px">Where Creativity Meets Functionality. Crafting digital experiences that captivate and engage users </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="service-card" style="display: flex;">
                <div style="width: 150px; height: 80px; border-radius: 50%; overflow: hidden; border: 1px solid #E84E0D; margin-top: 50px; background-color: #E84E0D">

                    <img src="/public/orange/assets/images/w5.png" alt="th-shape" style="margin-right:5px;margin-top:10px ;padding:5px">
                </div>
                <div>
                    <h4 style="margin-top:30px;margin-left:60px">Web Development</h4>
                    <p style="margin-left:60px">The art of building digital worlds, coding dreams into reality with precision and innovation </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="service-card" style="display: flex;">
                <div style="width: 150px; height: 80px; border-radius: 50%; overflow: hidden; border: 1px solid #E84E0D; margin-top: 50px; background-color: #E84E0D">

                    <img src="/public/orange/assets/images/w6.png" alt="th-shape" style="margin-right:5px;margin-top:10px ;padding:5px">
                </div>
                <div>
                    <h4 style="margin-top:30px;margin-left:60px">Ecommerce</h4>
                    <p style="margin-left:60px"> Powering global trade, connecting buyers and sellers seamlessly across digital frontiers. </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="service-card" style="display: flex;">
                <div style="width: 150px; height: 80px; border-radius: 50%; overflow: hidden; border: 1px solid #E84E0D; margin-top: 50px; background-color: #E84E0D">

                    <img src="/public/orange/assets/images/w2.png" alt="th-shape" style="margin-right:5px;margin-top:10px ;padding:5px">
                </div>
                <div>
                    <h4 style="margin-top:30px;margin-left:60px">Mobile App Development</h4>
                    <p style="margin-left:60px">Transforming ideas into intuitive experiences, shaping the future of connectivity on handheld screens </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="service-card" style="display: flex;">
                <div style="width: 150px; height: 80px; border-radius: 50%; overflow: hidden; border: 1px solid #E84E0D; margin-top: 50px; background-color: #E84E0D">

                    <img src="/public/orange/assets/images/w3.png" alt="th-shape" style="margin-right:5px;margin-top:10px ;padding:5px">
                </div>
                <div>
                    <h4 style="margin-top:30px;margin-left:60px">Digital Marketing</h4>
                    <p style="margin-left:60px">Harnessing data and creativity to drive growth, shaping brand narratives in the digital landscape </p>
                </div>
            </div>
        </div>

    </div>
    <!-- Add more items here if needed -->
    <div class="header-btn" style="margin-left: 10%;"><!-- Adjust the percentage as needed -->
        <a href="webdesign" class="lab-btn"><span>All Services</span></a>
    </div>

    </div>

</section>




<!-- About Section Start Here -->
<section class="about-section style-2 style-3 style-4 padding-tb" style="background-color: #E8EFDF;">
    <div class="container">
        <div class="section-header">
            <span>what we do</span>
            <h2>We Bring Creative Solutions To Our Clients Both In Marketing And optimization.</h2>
        </div>
        <div class="section-wrapper">
            <div class="lab-item">
                <div class="lab-inner">
                    <div class="">
                        <img src="/public/orange/assets/images/br.png" alt="lab-thumb" style="height: 100px; width:100px;margin-left:60px">
                    </div>
                    <div class="lab-content">
                        <h4>Branding</h4>
                        <p>At OrangeMegaSoftware, we understand the power of branding in today's competitive market.</p>
                    </div>
                </div>
            </div>
            <div class="lab-item">
                <div class="lab-inner">
                    <div>
                        <img src="/public/orange/assets/images/mr.png" alt="lab-thumb" style="height: 100px; width:100px;margin-left:60px">
                    </div>
                    <div class="lab-content">
                        <h4>Marketing Strategy</h4>
                        <p>In today's fast-paced digital world, effective marketing is essential for businesses to stand out,drive growth</p>
                    </div>
                </div>
            </div>
            <div class="lab-item">
                <div class="lab-inner">
                    <div>
                        <img src="/public/orange/assets/images/dev.png" alt="lab-thumb" style="height: 100px; width:100px;margin-left:60px">
                    </div>
                    <div class="lab-content">
                        <h4>Growth Business</h4>
                        <p>We offer a comprehensive range of development services tailored to help businesses thrive in the digital age. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section Ending Here -->


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb" style="background-color: #FBD8DF;">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/what.png" alt="mr-thumb" style="border-radius: 5%; height:400px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>WHY CHOOSE US?</span>
                        <h2>We're OrangeMegaSoftware Pvt Ltd</h2>
                        <p>You're choosing a partner dedicated to your success. Here are just a few reasons why clients trust us with their most important projects</p>
                    </div>
                    <div class="section-wrapper">
                        <div class="skill-bar-wrapper">
                            <div class="skill-item">
                                <div class="skill-title">
                                    <div class="left">Expertise</div>
                                    <div class="right">95%</div>
                                </div>
                                <div class="skillbar-container clearfix" data-percent="95%">
                                    <div class="skills" style="background: linear-gradient(to top, #23cc88, #8ecf35);"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-title">
                                    <div class="left">Innovation</div>
                                    <div class="right">90%</div>
                                </div>
                                <div class="skillbar-container clearfix" data-percent="90%">
                                    <div class="skills" style="background: linear-gradient(to top, #ff4f58, #ffb400);"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-title">
                                    <div class="left">Collaboration</div>
                                    <div class="right">80%</div>
                                </div>
                                <div class="skillbar-container clearfix" data-percent="80%">
                                    <div class="skills" style="background: linear-gradient(to top, #01cbad, #47a1f2);"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-title">
                                    <div class="left">Quality</div>
                                    <div class="right">99%</div>
                                </div>
                                <div class="skillbar-container clearfix" data-percent="99%">
                                    <div class="skills" style="background: linear-gradient(to top,#a8ff78, #78ffd6);"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-title">
                                    <div class="left">Customer Satisfaction</div>
                                    <div class="right">97%</div>
                                </div>
                                <div class="skillbar-container clearfix" data-percent="97%">
                                    <div class="skills" style="background: linear-gradient(to top, #fffc00, #ffffff);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-area">
            <div class="section-wrapper">
                <div class="contact-count-item">
                    <div class="contact-count-inner">
                        <div class="contact-count-content">
                            <h5 style="color: #fb4f6b;"><span class="counter">370</span>+</h5>
                            <p>Completed Projects</p>
                        </div>
                    </div>
                </div>
                <div class="contact-count-item">
                    <div class="contact-count-inner">
                        <div class="contact-count-content">
                            <h5 style="color: #ffb400;"><span class="counter">348</span></h5>
                            <p>Award Winner</p>
                        </div>
                    </div>
                </div>
                <div class="contact-count-item">
                    <div class="contact-count-inner">
                        <div class="contact-count-content">
                            <h5 style="color: #c961fa;"><span class="counter">25</span>+</h5>
                            <p>Years of Market</p>
                        </div>
                    </div>
                </div>
                <div class="contact-count-item">
                    <div class="contact-count-inner">
                        <div class="contact-count-content">
                            <h5 style="color: #38cd78;"><span class="counter">5</span>K +</h5>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Marketing Range Section Start here -->
<!-- Service Section Start Here -->
<section class="service-section style-4 padding-tb" style="background-color: #DFFDFF;">
    <div class="container">
        <div class="section-header">
            <span>Our Products</span>
            <h2>All Kind of Technology Solutions For You</h2>
        </div>
        <div class="section-wrapper">
            <div class="lab-item">
                <div class="lab-inner">
                    <div class="lab-thumb">
                        <img src="/public/orange/assets/images/hospital1.png" alt="service-vpn" style="border-radius: 10%;">
                    </div>
                    <div class="lab-content">
                        <h4> Hospital Management System</h4>
                        <p>Streamline hospital operations with our efficient management system</p>
                    </div>
                </div>
            </div>
            <div class="lab-item">
                <div class="lab-inner">
                    <div class="lab-thumb">
                        <img src="/public/orange/assets/images/school1.png" alt="service-vpn" style="border-radius: 10%;">
                    </div>
                    <div class="lab-content">
                        <h4>School Management System</h4>
                        <p>Optimize school operations with our comprehensive management .</p>
                    </div>
                </div>
            </div>
            <div class="lab-item">
                <div class="lab-inner">
                    <div class="lab-thumb">
                        <img src="/public/orange/assets/images/food2.png" alt="service-vpn" style="border-radius: 10%;">
                    </div>
                    <div class="lab-content">
                        <h4>Restaurant Food Delivery App</h4>
                        <p>Enhance restaurant services with our food delivery app.</p>
                    </div>
                </div>
            </div>
            <div class="lab-item">
                <div class="lab-inner">
                    <div class="lab-thumb">
                        <img src="/public/orange/assets/images/ecomm1.png" alt="service-vpn" style="border-radius: 10%;">
                    </div>
                    <div class="lab-content">
                        <h4>Ecommerce Mobile App</h4>
                        <p>Empower your business with our mobile commerce app.</p>
                    </div>
                </div>
            </div>
            <div class="lab-item">
                <div class="lab-inner">
                    <div class="lab-thumb">
                        <img src="/public/orange/assets/images/onexam.png" alt="service-vpn" style="border-radius: 10%;">
                    </div>
                    <div class="lab-content">
                        <h4>Online Exam Software</h4>
                        <p>Simplify exams with our reliable online testing tool</p>
                    </div>
                </div>
            </div>
            <div class="lab-item">
                <div class="lab-inner">
                    <div class="lab-thumb">
                        <img src="/public/orange/assets/images/learning1.png" alt="service-vpn" style="border-radius: 10%;">
                    </div>
                    <div class="lab-content">
                        <h4>LMS</h4>
                        <p>Learning Management System(LMS) Manage learning effectively </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Service Section Ending Here -->
<!-- faq section start here -->
<section class="faq-section padding-tb">
    <div class="container">
        <div class="row justify-content-center flex-row-reverse">
            <div class="col-xl-6 col-12">
                <div class="faq-right-part">
                    <div class="faq-thumb">
                        <img src="/public/orange/assets/images/faq.png" alt="vpn-gaq">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="faq-left-part">
                    <div class="section-header style-2">
                        <h2>F.A.Q</h2>
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <div class="section-wrapper">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <div class="accordion-list">
                                    <div class="left">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="right">
                                        <h6>How can I sign up for your service?</h6>
                                    </div>
                                </div>
                                <div class="accordion-answer">
                                    <p>Signing up for our service is quick and easy! Simply navigate to the registration page on our website and follow the prompts to create your account. Once registered, you'll have access to all our features and resources.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-list">
                                    <div class="left">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="right">
                                        <h6>What payment methods do you accept?</h6>
                                    </div>
                                </div>
                                <div class="accordion-answer">
                                    <p>We accept a variety of payment methods to accommodate our customers' preferences. These include credit/debit cards, PayPal, and bank transfers. Rest assured, our payment system is secure and encrypted to protect your financial information.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-list">
                                    <div class="left">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="right">
                                        <h6>Can I upgrade or downgrade my subscription plan?</h6>
                                    </div>
                                </div>
                                <div class="accordion-answer">
                                    <p>Absolutely! We understand that your needs may change over time, so we offer flexible subscription options. You can easily upgrade or downgrade your plan at any time through your account settings. Changes will take effect immediately, and you'll only be billed for the new plan's prorated amount.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-list">
                                    <div class="left">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="right">
                                        <h6>How do I access customer support?</h6>
                                    </div>
                                </div>
                                <div class="accordion-answer">
                                    <p> We're here to help! Our dedicated customer support team is available to assist you with any questions or issues you may have. You can reach us through email, phone, or our live chat feature on the website. We strive to provide timely and helpful support to ensure your experience with our service is smooth and enjoyable.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-list">
                                    <div class="left">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="right">
                                        <h6> Is my data secure with your platform?</h6>
                                    </div>
                                </div>
                                <div class="accordion-answer">
                                    <p>Yes, we take the security of your data very seriously. Our platform employs state-of-the-art encryption protocols and follows industry best practices to safeguard your information. Additionally, we regularly conduct security audits and updates to ensure the integrity of our system and protect against potential threats.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-list">
                                    <div class="left">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="right">
                                        <h6>Can I customize the platform to suit my organization's needs?</h6>
                                    </div>
                                </div>
                                <div class="accordion-answer">
                                    <p> Absolutely! Our platform is designed to be flexible and customizable to accommodate a wide range of use cases. You can tailor the interface, features, and workflows to align with your organization's specific requirements. Additionally, we offer customization services and support to help you optimize the platform for your unique needs.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-btn" style="margin-left: 10%;">
        <a href="faq" class="lab-btn"><span>View More</span></a>
    </div>

</section>
<!-- faq section ending here -->
<!-- testimonial section start here -->
<section class="testimonial-section padding-tb" style="background-color: #DAEBFB;">
    <div class="container">
        <div class="section-header">
            <p style="color:#FF5E09;">OUR PRODUCTS</p>
            <h1>Latest Projects From Our Team</h1>
        </div>
        <div class="testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testi-item">
                        <div class="testi-inner">
                            <div class="testi-header">

                                <div class="testi-content">
                                    <h5 style="color:#FF5E09;">Ecommerce</h5>

                                </div>

                            </div>
                            <div class="testi-body">
                                <img src="/public/orange/assets/images/ec1.png" alt="vpn-gaq">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testi-item">
                        <div class="testi-inner">
                            <div class="testi-header">

                                <div class="testi-content">
                                    <h5 style="color:#FF5E09;">Repo Site</h5>

                                </div>

                            </div>
                            <div class="testi-body">
                                <img src="/public/orange/assets/images/repo1.png" alt="vpn-gaq">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testi-item">
                        <div class="testi-inner">
                            <div class="testi-header">

                                <div class="testi-content">
                                    <h5 style="color:#FF5E09;">Integrated ERP</h5>

                                </div>

                            </div>
                            <div class="testi-body">
                                <img src="/public/orange/assets/images/crm1.png" alt="vpn-gaq">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial section ending -->
<!-- Pos Section Section Start Here -->
<section class="pos-section padding-tb" style="background-color: #FAEFD3;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="pos-thmub">
                    <img src="/public/orange/assets/images/career.jpg" alt="pos-=thumb" style="border-radius: 5%;">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="pos-content-area">
                    <div class="section-header style-3">
                        <h2>
                            Join Our Team at <span style="color:#FF5E09">OrangeMegaSoftware</span></h2>
                        <p> As a leading IT company, we're committed to pushing the boundaries of what's possible and delivering exceptional solutions to our clients worldwide. Join us and be part of a team that's shaping the future of technology.</p>
                    </div>
                    <div class="section-wrapper">
                        <ul>
                            <li><i class="icofont-tick-mark"></i>Opportunities for professional development and advancement</li>
                            <li><i class="icofont-tick-mark"></i>Flexible work arrangements</li>
                            <li><i class="icofont-tick-mark"></i>Sell on-the-go</li>
                            <li><i class="icofont-tick-mark"></i>Collaborative and inclusive work culture</li>
                            <li><i class="icofont-tick-mark"></i>Access to cutting-edge technologies and tools</li>
                            <li><i class="icofont-tick-mark"></i>Supportive and mentorship-oriented environment</li>

                        </ul>
                        <a href="/career" class="lab-btn"><span>Start your Career</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="portfolio-section padding-tb">
    <div class="container">
        <div class="section-wrapper">
            <h1 style="text-align: center;">Our Portfolio</h1>
            <div class="grid">
                <div class="lab-item-3 port-item business">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="/public/orange/assets/images/portfolio1.png" alt="lab-rcpost">
                            <div class="port-share">
                                <div class="lab-content">

                                </div>

                                <a href="/public/orange/assets/images/portfolio1.png" data-rel="lightcase:myCollection"><i class="icofont-drag1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab-item-3 port-item consumer">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="/public/orange/assets/images/portfolio2.png" alt="lab-rcpost">
                            <div class="port-share">
                                <div class="lab-content">

                                </div>

                                <a href="/public/orange/assets/images/portfolio2.png" data-rel="lightcase:myCollection"><i class="icofont-drag1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab-item-3 port-item financial">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="/public/orange/assets/images/portfolio3.png" alt="lab-rcpost">
                            <div class="port-share">
                                <div class="lab-content">

                                </div>

                                <a href="/public/orange/assets/images/portfolio3.png" data-rel="lightcase:myCollection"><i class="icofont-drag1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab-item-3 port-item business">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="/public/orange/assets/images/portfolio4.png" alt="lab-rcpost">
                            <div class="port-share">
                                <div class="lab-content">

                                </div>

                                <a href="/public/orange/assets/images/portfolio4.png" data-rel="lightcase:myCollection"><i class="icofont-drag1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab-item-3 port-item consumer">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="/public/orange/assets/images/portfolio5.png" alt="lab-rcpost">
                            <div class="port-share">
                                <div class="lab-content">

                                </div>

                                <a href="/public/orange/assets/images/portfolio5.png" data-rel="lightcase:myCollection"><i class="icofont-drag1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab-item-3 port-item financial">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="/public/orange/assets/images/portfolio6.png" alt="lab-rcpost">
                            <div class="port-share">
                                <div class="lab-content">

                                </div>

                                <a href="/public/orange/assets/images/portfolio6.png" data-rel="lightcase:myCollection"><i class="icofont-drag1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center">
                <a href="portfolio" class="lab-btn"><span>View Our Portfolio</span></a>
            </div>
        </div>
</section>
<!-- Recent Case Section Ending Here -->
<!-- Sponsor Section Start Here -->
<div class="sponsor-section pos-page padding-tb" style="background-color: #C5E6A2; ">
    <div class="container">
        <div class="section-header">
            <h6 style="color:#FF5E09;padding-top:50px">TOOLS WE USE</h6>
            <h1 style="margin-bottom: -50px;">Platform + Frameworks</h1>
        </div>
        <div class="section-wrapper">
            <div class="sponsor-slider-one">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <div class="sponsor-thumb">
                                <a href="#"><img src="/public/orange/assets/images/lara.png" alt="lab-sponsor" style="border-radius: 5%;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <div class="sponsor-thumb">
                                <a href="#"><img src="/public/orange/assets/images/node1.png" alt="lab-sponsor" style="border-radius: 5%;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <div class="sponsor-thumb">
                                <a href="#"><img src="/public/orange/assets/images/net.png" alt="lab-sponsor" style="border-radius: 5%;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <div class="sponsor-thumb">
                                <a href="#"><img src="/public/orange/assets/images/react1.png" alt="lab-sponsor" style="border-radius: 5%;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <div class="sponsor-thumb">
                                <a href="#"><img src="/public/orange/assets/images/angular1.png" alt="lab-sponsor" style="border-radius: 5%;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <div class="sponsor-thumb">
                                <a href="#"><img src="/public/orange/assets/images/html.png" alt="lab-sponsor" style="border-radius: 5%;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <div class="sponsor-thumb">
                                <a href="#"><img src="/public/orange/assets/images/css.png" alt="lab-sponsor" style="border-radius: 5%;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <div class="sponsor-thumb">
                                <a href="#"><img src="/public/orange/assets/images/boot.png" alt="lab-sponsor" style="border-radius: 5%;"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sponsor Section Ending Here -->

<!-- testimonial section start here -->
<section class="testimonial-section style-2 padding-tb">
    <div class="container">
        <div class="section-header">
            <span>OUR TESTIMONIALS</span>
            <h2>Our Customer Always Happy With Our Services</h2>
        </div>
        <div class="section-wrapper">
            <div class="testimonial-slider-two">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active">
                            <img src="/public/orange/assets/images/avatara1.png" alt="testimonial">
                        </li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1">
                            <img src="/public/orange/assets/images/avatara1.png" alt="testimonial">
                        </li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2">
                            <img src="/public/orange/assets/images/avatara1.png" alt="testimonial">
                        </li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3">
                            <img src="/public/orange/assets/images/avatara1.png" alt="testimonial">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testi-item">
                                <div class="testi-inner">
                                    <div class="testi-thumb">
                                        <img src="/public/orange/assets/images/avatara1.png" alt="testimonial" height="50px" width="50px">
                                    </div>
                                    <div class="testi-content">
                                        <p>We had a great time working with Entire Team. Their Creativity, Patience, Passion, Dedication & Commitment to Work have impressed us.</p>
                                        <h6>Saran <span>(Civil Engg)</span></h6>
                                        <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testi-item">
                                <div class="testi-inner">
                                    <div class="testi-thumb">
                                        <img src="/public/orange/assets/images/avatara1.png" alt="testimonial" height="50px">
                                    </div>
                                    <div class="testi-content">


                                        <p>OrangeMegaSoftware team has done excellent website design work for us. Creative team! We wish them all the success</p>
                                        <h6>Chanru <span>(Astrologyst)</span></h6>
                                        <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testi-item">
                                <div class="testi-inner">
                                    <div class="testi-thumb">
                                        <img src="/public/orange/assets/images/avatara1.png" alt="testimonial" height="50px">
                                    </div>
                                    <div class="testi-content">

                                        <p>OrangeMegaSoftware is very professional and dedicated. We highly appreciate their prompt and responsive service.</p>
                                        <h6>Rajan <span>(Digital Marketer)</span></h6>
                                        <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testi-item">
                                <div class="testi-inner">
                                    <div class="testi-thumb">
                                        <img src="/public/orange/assets/images/avatara1.png" alt="testimonial" height="50px">
                                    </div>
                                    <div class="testi-content">

                                        <p>From start to finish, They exceeded our expectations. Their professionalism, attention to detail, and commitment to delivering quality work were evident every step of the way. </p>
                                        <h6>Sanjay <span>(Designer)</span></h6>
                                        <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial section ending -->

<!-- Blog Section Start Here -->
<section class="blog-section marketing padding-tb" style="background-color: #DFFDFF;">
    <div class="container">
        <div class="section-header">
            <span>Blog</span>
            <h2>Our Latest Blog And News</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center">
                @foreach($getRecord->take(3) as $record)
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="post-item">
                        <div class="post-item-inner">
                            <div class="post-thumb">
                                <!-- Assuming $record->image contains the image URL -->
                                <a href="{{ route('Blog', ['id' => $record->id]) }}"><img src="{{ asset('public/images/' . $record->image) }}" alt="lab-blog"></a>
                            </div>
                            <div class="post-content">
                                <h4 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-height: 2.4em;">
                                    <a href="{{ route('Blog', ['id' => $record->id]) }}" style="display: block;">{{ $record->title }}</a>
                                </h4>
                                <div class="author-date">
                                    <!-- Assuming $record->date contains the date -->
                                    <a class="date"><i class="icofont-calendar"></i>{{ $record->created_at->format('F j, Y') }}</a>

                                    <!-- Assuming $record->author contains the author name -->

                                </div>
                                <div class="post-footer">
                                    <!-- You can change the href attribute to the appropriate URL -->
                                    <a href="{{ route('Blog', ['id' => $record->id]) }}" class="text-btn">Read More<i class="icofont-double-right"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
            <a style="float:right;" href="/blog" class="lab-btn"><span>View More</span></a>

        </div>
    </div>
</section>
<!-- Blog Section Ending Here -->




@endsection