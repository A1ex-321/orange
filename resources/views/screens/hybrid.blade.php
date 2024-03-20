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
        <h2> Hybrid App Development</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/mob3.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Hybrid App Development</span>
                        <h2>Hybrid App Development Approach</h2>
                        <p>Our company's hybrid app development methodology integrates the best of both native and web technologies to create versatile applications. By leveraging frameworks like Ionic, React Native, or Xamarin, we ensure that your app delivers seamless performance across multiple platforms while maximizing code reusability and minimizing development time.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Cross-Platform Compatibility</h2>
                        <p>With our hybrid app development expertise, we guarantee that your app functions flawlessly on various operating systems, including iOS, Android, and even desktop environments. By utilizing a single codebase, we streamline the development process and ensure consistent user experiences across different devices, saving both time and resources. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Optimized User Experience and Performance</h2>
                        <p>Our team prioritizes user experience and performance optimization in every hybrid app project we undertake. Through careful design and development practices, we ensure that your app not only meets but exceeds user expectations in terms of speed, responsiveness, and functionality. By incorporating native features and leveraging device capabilities, we deliver immersive experiences that keep users engaged and satisfied.</p>
                    </div>

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