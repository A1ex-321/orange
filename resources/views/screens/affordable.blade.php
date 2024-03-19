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
        <h2>Affordable Web Design</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/web2.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Affordable Web Design</span>
                        <h2>User-Centered Design Approach</h2>
                        <p>Prioritize user experience by focusing on intuitive navigation, clear calls-to-action, and responsive design.
                            Ensure easy accessibility for all users, including those with disabilities, through adherence to web accessibility standards.
                            Conduct thorough usability testing to identify and address any usability issues, ensuring a seamless browsing experience.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Cost-Effective Development Solutions</h2>
                        <p>Utilize open-source platforms like WordPress or Joomla to reduce development costs without compromising quality.
                            Opt for pre-designed templates or themes to expedite the development process and minimize custom coding requirements.
                            Implement scalable solutions that allow for future expansion and integration of additional features as the business grows.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Streamlined Content Management System (CMS)</h2>
                        <p>Implement a user-friendly CMS like WordPress or Drupal that enables easy content updates and management by non-technical users.
                            Provide comprehensive training and support to empower clients to maintain and update their website content independently.
                            Integrate automated backups and security measures to safeguard against data loss and protect the website from potential security threats.</p>
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