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
        <h2>Apply For Job</h2>

    </div>
</section>
@include('admin.layouts.message')

<!-- Contact -->
<section class="contact-us padding-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">


                <div class="pos-thmub">
                    <img src="/public/orange/assets/images/career.jpg" alt="pos-=thumb">
                </div>


            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <form class="contact-form" action="/care" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="text" name="name" placeholder="Your Name" class="contact-input" value="{{ old('name') }}" required>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <input type="email" name="mail" placeholder="Your Email" class="contact-input" value="{{ old('mail') }}" required>
                    @error('mail')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <input type="number" name="number" placeholder="Your Phone Number" class="contact-input" value="{{ old('number') }}" required>
                    @error('number')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <input type="text" name="location" placeholder="Your Location" class="contact-input" value="{{ old('location') }}" required>
                    @error('location')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <input type="text" name="position" placeholder="Position Apply For" class="contact-input" value="{{ old('position') }}" required>
                    @error('position')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <input type="file" name="file" class="contact-input" required>
                    @error('file')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <textarea rows="5" class="contact-input" name="message" placeholder="Your Messages" required>{{ old('message') }}</textarea>
                    @error('message')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <input type="submit" name="submit" value="Apply Now" class="lab-btn">
                </form>

            </div>
        </div>
    </div>
</section>
<!-- Contact -->


<!-- Team Member Section Start here -->
<div class="team-section style-2 padding-tb" style="background-color: #DFFDFF;">
    <div class="container">
        <h1 style="text-align: center;margin-bottom:50px">Opening Positions</h1>
        <div class="row">
            <div class="col-12">
                <div class="team-bottom">
                    <div class="team-bottom-area">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="team-item style-2">
                                    <div class="team-item-inner">

                                        <div class="team-content">
                                            <a>
                                                <h5 class="member-name">Software Engineer(Backend Development) </h5>
                                            </a>

                                            <p class="member-details">We are seeking a talented and motivated Software Engineer to join our Backend Development team. </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="team-item style-2">
                                    <div class="team-item-inner">
                                        <div class="team-thumb">
                                            <div class="t-thumb">

                                            </div>

                                        </div>
                                        <div class="team-content">
                                            <a>
                                                <h5 class="member-name">Full Stack Developer</h5>
                                            </a>

                                            <p class="member-details">Join our dynamic team as a Full Stack Developer and play a key role in developing innovative web applications from concept to deployment. </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="team-item style-2">
                                    <div class="team-item-inner">
                                        <div class="team-thumb">
                                            <div class="t-thumb">

                                            </div>

                                        </div>
                                        <div class="team-content">
                                            <a>
                                                <h5 class="member-name">UI/UX Designer</h5>
                                            </a>

                                            <p class="member-details">Are you a creative UI/UX Designer with a passion for crafting engaging user experiences? We are looking for a talented individual to join our design team</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="team-item style-2">
                                    <div class="team-item-inner">
                                        <div class="team-thumb">
                                            <div class="t-thumb">

                                            </div>

                                        </div>
                                        <div class="team-content">
                                            <a>
                                                <h5 class="member-name">Quality Assurance Engineer</h5>
                                            </a>

                                            <p class="member-details">We are seeking a detail-oriented Quality Assurance Engineer to ensure the quality and reliability of our software products. </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="team-item style-2">
                                    <div class="team-item-inner">
                                        <div class="team-thumb">
                                            <div class="t-thumb">

                                            </div>

                                        </div>
                                        <div class="team-content">
                                            <a>
                                                <h5 class="member-name">DevOps Engineer</h5>
                                            </a>
                                            <span class="member-dagi">Founder & CEO</span>
                                            <p class="member-details">Join our DevOps team and play a crucial role in automating and streamlining our software development processes.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="team-item style-2">
                                    <div class="team-item-inner">

                                        <div class="team-content">
                                            <a>
                                                <h5 class="member-name">Software Architect</h5>
                                            </a>

                                            <p class="member-details">We are looking for a seasoned professional to lead the architectural design and development of our products. </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Member Section Ending here -->

@endsection