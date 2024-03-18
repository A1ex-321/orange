
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
    <h2>Our Portfolio</h2>
   
  </div>
</section>



<section class="portfolio-section padding-tb">
    <div class="container">
        <div class="section-wrapper">
          
            <div class="grid">
                <div class="lab-item-3 port-item business">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="public/orange/assets/images/portfolio1.png" alt="lab-rcpost">
                            <div class="port-share">
                                <div class="lab-content">

                                </div>

                                <a href="public/orange/assets/images/portfolio1.png" data-rel="lightcase:myCollection"><i class="icofont-drag1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab-item-3 port-item consumer">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="public/orange/assets/images/portfolio2.png" alt="lab-rcpost">
                            <div class="port-share">
                                <div class="lab-content">

                                </div>

                                <a href="public/orange/assets/images/portfolio2.png" data-rel="lightcase:myCollection"><i class="icofont-drag1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab-item-3 port-item financial">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="public/orange/assets/images/portfolio3.png" alt="lab-rcpost">
                            <div class="port-share">
                                <div class="lab-content">

                                </div>

                                <a href="public/orange/assets/images/portfolio3.png" data-rel="lightcase:myCollection"><i class="icofont-drag1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab-item-3 port-item business">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="public/orange/assets/images/portfolio4.png" alt="lab-rcpost">
                            <div class="port-share">
                                <div class="lab-content">

                                </div>

                                <a href="public/orange/assets/images/portfolio4.png" data-rel="lightcase:myCollection"><i class="icofont-drag1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab-item-3 port-item consumer">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="public/orange/assets/images/portfolio5.png" alt="lab-rcpost">
                            <div class="port-share">
                                <div class="lab-content">

                                </div>

                                <a href="public/orange/assets/images/portfolio5.png" data-rel="lightcase:myCollection"><i class="icofont-drag1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab-item-3 port-item financial">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="public/orange/assets/images/portfolio6.png" alt="lab-rcpost">
                            <div class="port-share">
                                <div class="lab-content">

                                </div>

                                <a href="public/orange/assets/images/portfolio6.png" data-rel="lightcase:myCollection"><i class="icofont-drag1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
         
        </div>
</section>
<!-- Recent Case Section Ending Here -->

<!-- testimonial section start here -->
<section class="testimonial-section padding-tb"   style="background-color: #DAEBFB;">
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
                                <img src="public/orange/assets/images/ec1.png" alt="vpn-gaq">

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
                                <img src="public/orange/assets/images/repo1.png" alt="vpn-gaq">

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
                                <img src="public/orange/assets/images/crm1.png" alt="vpn-gaq">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial section ending -->








@endsection