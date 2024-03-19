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
        <h2>Real Time Web Application Development</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/dev4.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Real Time Web Application Development</span>
                        <h2>Technologies Utilized</h2>
                        <p>Our real-time web application development leverages cutting-edge technologies to ensure seamless performance and responsiveness. We employ robust frameworks such as React.js or Angular for frontend development, Node.js for backend operations, and WebSocket protocol for real-time communication. By harnessing these technologies, we deliver dynamic web applications that offer users an immersive and interactive experience.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Agile Development Process</h2>
                        <p>We follow an agile development methodology to build real-time web applications. This approach emphasizes iterative development, enabling us to adapt to evolving requirements and deliver incremental updates regularly. Through close collaboration with our clients, we prioritize features, tackle challenges promptly, and ensure that the final product meets their expectations. By embracing agility, we optimize development timelines and maintain flexibility throughout the project lifecycle. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Scalability and Performance Optimization</h2>
                        <p>Scalability and performance are paramount in real-time web applications, and we prioritize these aspects from the outset. Our development team employs strategies such as microservices architecture, load balancing, and caching mechanisms to ensure that the application can handle increasing user loads without compromising speed or stability. Additionally, we conduct thorough performance testing and optimization to identify bottlenecks and fine-tune the application for optimal responsiveness.</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- Marketing Range Section Start here -->

<section class="contact-us padding-tb">
    <div class="container" style="background-color: antiquewhite; ">
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