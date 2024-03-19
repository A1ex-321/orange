@extends('partials.app')
@section('content')

<style>
    .banner {
  background-color:#E9F2FE; /* You can replace 'banner-image.jpg' with your own image file */
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
    <h2>About Us</h2>
   
  </div>
</section>


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
</section>
<!-- Marketing Range Section Start here -->

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
                        <img src="/public/orange/assets/images/what.png" alt="mr-thumb">
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



@endsection