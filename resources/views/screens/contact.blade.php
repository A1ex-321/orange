    
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
    <h2>Contact Us</h2>
   
  </div>
</section>




    
    
    
    
    
    
@include('admin.layouts.message')
    
    
    <!-- Contact -->
    <section class="contact-us padding-tb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <ul class="contact-area">
                            <li class="contact-item">
                                <div class="contact-icon">
                                    <img src="/public/orange/assets/images/location.png" alt="contact">
                                </div>
                                <div class="content">
                                    <h6>Our Location</h6>
                                    <p>Ground Floor, Clover Plaza, Market Rd, Marthandam,<br> Tamil Nadu 629165</p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <div class="contact-icon">
                                    <img src="/public/orange/assets/images/phone.png" alt="contact">
                                </div>
                                <div class="content">
                                    <h6>Phone Number</h6>
                                    <p>+91-8148160694 <br> +91-7845158684</p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <div class="contact-icon">
                                    <img src="/public/orange/assets/images/email.png" alt="contact">
                                </div>
                                <div class="content">
                                    <h6>Email Address</h6>
                                    <p>orangemegasoftware@gmail.com </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-8 col-md-6 col-xs-12">
                        <form class="contact-form" action="{{ url('/contacts') }}" method="POST">
                        @csrf
                            <input type="text" name="name" placeholder="Your Name" class="contact-input" required>
                            <input type="number" name="phone" placeholder="Your phone Number" class="contact-input" required>
                        
                            <textarea rows="5" name="msg"class="contact-input" placeholder="Your Messages" required></textarea>
                            <input type="submit" value="Send Message" class="lab-btn">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact -->

        <!-- G-Map Section Start Here -->
        <div class="gmaps-section">
            <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7895.9723124106085!2d77.22020469134735!3d8.304173666924013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sGround%20Floor%2C%20Clover%20Plaza%2C%20Market%20Road%2C%20Marthandam%2C%20map%5C!5e0!3m2!1sen!2sin!4v1709635588763!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- G-Map Section Ending Here -->

        @endsection