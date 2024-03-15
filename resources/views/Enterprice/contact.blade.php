@extends('Enterprice.layout.app')

@section('content')

 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url('{{ asset('public/Enterprice/assets/img/contact.jpg') }}');"
>
        <div class="container">
            <div class="breadcrumb-items">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <ul class="breadcrumb">
                <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>                   
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact 
    ============================================= -->
    <div class="contact-form-area default-padding">
        <div class="container">
            <div class="row align-center">
                <!-- Start Contact Form -->
                <div class="col-lg-7 contact-forms">
                    <div class="content">
                        <div class="heading">
                            <h3>Let’s make the world better, together</h3>
                        </div>
                        <form action="{{ route('contacts') }}" method="POST" class="contact-for">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                <span class="alert-error"></span>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" required>
                <span class="alert-error"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group comments">
                <textarea class="form-control" id="msg" name="msg" placeholder="Tell Us About Project *" required></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <button type="submit" name="submit" id="submit">
                Send Message <i class="fa fa-paper-plane"></i>
            </button>
        </div>
    </div>
    <!-- Alert Message -->
    
</form>

                    </div>
                </div>
    @include('Enterprice.layout.message')

                <!-- End Contact Form -->
                <div class="col-lg-5 address-info">
                    <div class="address-items">
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p>
                                    Our Location
                                    <span>No.3/80H,Gandhi Road,Ponnai,Katpadi TK,Vellore Dist-632514.</span>
                                </p>
                            </li>
                            <!-- <li>
                                <i class="fas fa-envelope-open"></i>
                                <p>
                                    Send Us Mail
                                    <span>Info@yourdomain.com</span>
                                </p>
                            </li> -->
                            <li>
                                <i class="fas fa-mobile-alt"></i>
                                <p>
                                    Call Us
                                    <span>+91 99808 10233</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62169.973876380805!2d79.24209822440585!3d13.123029674681954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad4e05f31d29dd%3A0xd1735f9aa7ca24ec!2sKeeraisathu%2C%20632514!5e0!3m2!1sen!2sin!4v1708408104329!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- End Google Maps -->


   
@endsection

@push('scripts')


@endpush