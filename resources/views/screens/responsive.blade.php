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
        <h2>Responsive Web Design</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/web6.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span>Responsive Web Design</span>
                        <h2>Definition</h2>
                        <p>Responsive web design (RWD) is an approach to web design that makes web pages render well on a variety of devices and window or screen sizes. The primary goal of responsive design is to ensure that users have a consistent and optimal viewing experience across all devices, from desktop computers to smartphones and tablets.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Key Principles</h2>
                        <p>Fluid Grids: Responsive designs use fluid grids, where elements on a web page are sized proportionally rather than using fixed measurements. This allows the layout to adapt smoothly to different screen sizes.
                            Flexible Images and Media: Images and media content within a responsive design are also resized and scaled proportionally to fit different screen sizes without losing quality or distorting the content.
                            Media Queries: Media queries are CSS rules that enable designers to apply different styles based on characteristics of the device, such as screen width, height, resolution, and orientation. This allows for targeted adjustments to layout and presentation based on the user's device.</p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Benefits</h2>
                        <p> Improved User Experience: Responsive design ensures that users can access and navigate a website easily, regardless of the device they're using, leading to higher user satisfaction and engagement.
                            Better SEO Performance: Responsive websites tend to perform better in search engine rankings because they offer a consistent user experience across devices, and search engines like Google prioritize mobile-friendly websites.
                            Cost-Effectiveness: Instead of creating separate websites or apps for different devices, responsive design allows businesses to maintain a single website that adapts to all screen sizes, reducing development and maintenance costs.</p>
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