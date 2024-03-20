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
    <h2>Web Design</h2>
   
  </div>
</section>

	<!-- Recent Case Section Start Here -->
    <section class="recent-case padding-tb">
			<div class="pattern-img">
				<img src="/public/orange/assets/images/pattern/01.png" alt="pattern">
			</div>
			<div class="container">
				
				<div class="section-wrapper">
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
								<img src="/public/orange/assets/images/web2.png" alt="lab-rcpost" style="height:300PX;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Affordable Web Design</a></h5>
								<span>Web Design</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/web1.png" alt="lab-rcpost"style="height:300PX;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Corporate Web Design</a></h5>
								<span>Web Design</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/web3.png" alt="lab-rcpost"style="height:300PX;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Content Management System</a></h5>
								<span>Web Design</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/web4.png" alt="lab-rcpost"style="height:300PX;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Creative Web Design</a></h5>
								<span>Web Design</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/web5.png" alt="lab-rcpost"style="height:300PX;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>HTML5 Web Design</a></h5>
								<span>Web Design</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/web6.png" alt="lab-rcpost"style="height:300PX;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Responsive Web Design</a></h5>
								<span>Web Design</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/web7.png" alt="lab-rcpost"style="height:300PX;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Website Redesigning</a></h5>
								<span>Web Design</span>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		<!-- Recent Case Section Ending Here -->






@endsection