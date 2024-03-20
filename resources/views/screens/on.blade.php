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
        <h2> On Page SEO</h2>

    </div>
</section>


<!-- Marketing Range Section Start here -->
<section class="market-range-section padding-tb">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="mr-thumb">
                        <img src="/public/orange/assets/images/digi3.png" alt="mr-thumb" style="border-radius: 5%;height:400px;width:600px">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-header style-2">
                        <span> On Page SEO</span>
                        <h2>Title Tags Optimization</h2>
                        <p>Title tags are crucial for on-page SEO as they directly impact search engine rankings and user click-through rates. At [Your Company Name], we ensure that every page on your website has a unique, descriptive title tag that accurately reflects the content and keywords relevant to that page. By optimizing title tags, we help improve the visibility of your website in search engine results pages (SERPs), driving more organic traffic to your site. </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Meta Descriptions Optimization</h2>
                        <p>Meta descriptions provide a concise summary of what a webpage is about and play a significant role in enticing users to click through to your site from search results. At [Your Company Name], we craft compelling meta descriptions that not only include relevant keywords but also entice users to click through to your website. By optimizing meta descriptions, we enhance the likelihood of users choosing your website over competitors when browsing search results.  </p>
                    </div>
                    <div class="section-header style-2">

                        <h2>Header Tags Optimization</h2>
                        <p>Header tags, such as H1, H2, and H3, structure the content on your webpage and provide search engines with valuable information about the hierarchy and relevance of your content. At [Your Company Name], we strategically use header tags to break up content, improve readability, and highlight important keywords. By optimizing header tags, we make it easier for search engines to understand and rank your content, ultimately improving your website's SEO performance. </p>
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