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
    <h2>FAQ</h2>
   
  </div>
</section>

<!-- faq section start here -->
<section class="faq-section padding-tb">
    <div class="container">
        <div class="row justify-content-center flex-row-reverse">
            <div class="col-xl-6 col-12">
                <div class="faq-right-part">
                    <div class="faq-thumb">
                        <img src="/public/orange/assets/images/faq.png" alt="vpn-gaq">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="faq-left-part">
                    <div class="section-header style-2">
                        <h2>F.A.Q</h2>
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <div class="section-wrapper">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <div class="accordion-list">
                                    <div class="left">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="right">
                                        <h6>How can I sign up for your service?</h6>
                                    </div>
                                </div>
                                <div class="accordion-answer">
                                    <p>Signing up for our service is quick and easy! Simply navigate to the registration page on our website and follow the prompts to create your account. Once registered, you'll have access to all our features and resources.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-list">
                                    <div class="left">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="right">
                                        <h6>What payment methods do you accept?</h6>
                                    </div>
                                </div>
                                <div class="accordion-answer">
                                    <p>We accept a variety of payment methods to accommodate our customers' preferences. These include credit/debit cards, PayPal, and bank transfers. Rest assured, our payment system is secure and encrypted to protect your financial information.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-list">
                                    <div class="left">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="right">
                                        <h6>Can I upgrade or downgrade my subscription plan?</h6>
                                    </div>
                                </div>
                                <div class="accordion-answer">
                                    <p>Absolutely! We understand that your needs may change over time, so we offer flexible subscription options. You can easily upgrade or downgrade your plan at any time through your account settings. Changes will take effect immediately, and you'll only be billed for the new plan's prorated amount.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-list">
                                    <div class="left">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="right">
                                        <h6>How do I access customer support?</h6>
                                    </div>
                                </div>
                                <div class="accordion-answer">
                                    <p> We're here to help! Our dedicated customer support team is available to assist you with any questions or issues you may have. You can reach us through email, phone, or our live chat feature on the website. We strive to provide timely and helpful support to ensure your experience with our service is smooth and enjoyable.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-list">
                                    <div class="left">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="right">
                                        <h6> Is my data secure with your platform?</h6>
                                    </div>
                                </div>
                                <div class="accordion-answer">
                                    <p>Yes, we take the security of your data very seriously. Our platform employs state-of-the-art encryption protocols and follows industry best practices to safeguard your information. Additionally, we regularly conduct security audits and updates to ensure the integrity of our system and protect against potential threats.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-list">
                                    <div class="left">
                                        <div class="icon"></div>
                                    </div>
                                    <div class="right">
                                        <h6>Can I customize the platform to suit my organization's needs?</h6>
                                    </div>
                                </div>
                                <div class="accordion-answer">
                                    <p> Absolutely! Our platform is designed to be flexible and customizable to accommodate a wide range of use cases. You can tailor the interface, features, and workflows to align with your organization's specific requirements. Additionally, we offer customization services and support to help you optimize the platform for your unique needs.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq section ending here -->

@endsection