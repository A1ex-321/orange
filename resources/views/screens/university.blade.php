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
        <h2>University/Institution/College ERP</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="public/orange/assets/images/college.png" alt="mr-thumb" style="border-radius: 5%;height:500px;width:500px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>University/Institution/College ERP </span>
                        <h2>System Overview</h2>
                        <p>Our University/Institution/College ERP solution offers a comprehensive platform tailored to streamline administrative, academic, and financial operations within educational institutions. Leveraging cutting-edge technology, our ERP system provides a unified interface for managing student data, faculty information, course schedules, admissions, billing, and more. By integrating disparate processes into a cohesive digital ecosystem, our solution empowers institutions to optimize efficiency, enhance data accuracy, and improve decision-making capabilities. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Customization and Scalability</h2>
                        <p>At OrangeMegaSoftware we understand that every educational institution has unique requirements and operational nuances. Therefore, our ERP solution is highly customizable, allowing administrators to configure modules and workflows according to their specific needs. Moreover, our scalable architecture ensures seamless expansion and adaptation as institutions grow or evolve over time. Whether it's accommodating changes in enrollment numbers, introducing new programs, or complying with regulatory standards.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Features and Benefits</h2>
                        <p>With our University/Institution/College ERP, institutions can unlock a myriad of features designed to streamline operations and enhance productivity. From automated student enrollment processes to real-time academic performance tracking, our solution empowers administrators, faculty, and staff with tools to efficiently manage daily tasks and foster a conducive learning environment. </p>
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