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


    /* Center align the button */
.lab-btn {
    display: block;
    text-align: center;
}

/* Style the button */
.lab-btn span {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}

/* Adjust button styles for mobile */
@media (max-width: 768px) {
    .lab-btn span {
        padding: 8px 16px; /* Adjust padding for smaller screens */
        font-size: 14px; /* Adjust font size for smaller screens */
    }
}

</style>

<section class="banner">
    <div class="banner-content">
        <h2>School Management System</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/schoolmanage.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>School Management System</span>
                        <h2>Overview of Our School Management System</h2>
                        <p>Our School Management System is a comprehensive software solution designed to streamline the administrative tasks of educational institutions. Developed by [Your IT Company Name], this system offers a robust platform for managing various aspects of school operations efficiently and effectively. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Key Features and Functionality</h2>
                        <p>Our School Management System integrates a range of features to meet the diverse needs of schools, including student enrollment, attendance tracking, academic scheduling, grade management, and communication tools for teachers, students, and parents. The system also facilitates financial management, resource allocation, and reporting functionalities, empowering administrators with actionable insights to make informed decisions.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Benefits and Impact</h2>
                        <p>Implemented by numerous educational institutions, our School Management System has demonstrated tangible benefits such as increased administrative efficiency, improved communication between stakeholders, enhanced student engagement, and better resource utilization. By leveraging cutting-edge technology, our system drives positive outcomes and fosters a conducive learning environment for students while simplifying administrative tasks for staff and administrators. </p>
                    </div>
                    <a href="contact" class="lab-btn"><span>pay Rs1000</span></a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Marketing Range Section Start here -->

@include('admin.layouts.message')
<section class="contact-us padding-tb">
    <div class="container" style="background-color: antiquewhite; ">
        <div class="row">

            <div class="col-lg-12 col-md-6 col-xs-12">
                <h1 style="text-align: center; margin-top:50px">Get In Touch</h1>
                <form class="contact-form" action="{{ url('/contacts') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" class="contact-input">
                    <input type="email" name="mail" placeholder="Your Email" class="contact-input">
                    <input type="number" name="phone" placeholder="Your Phone Number" class="contact-input">


                    <textarea rows="5" class="contact-input" name="msg" placeholder="Your Messages"></textarea>
                    <input type="submit" name="submit" value="Send  Request" class="lab-btn" style="margin-bottom:50px">
                </form>
            </div>
        </div>
    </div>
</section>



@endsection