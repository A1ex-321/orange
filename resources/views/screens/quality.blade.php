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
    <h2>Quality Assurence</h2>
   
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
								<img src="/public/orange/assets/images/quality1.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Quality Testing</a></h5>
								<span>Quality Assurence</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/quality2.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Quality Audits</a></h5>
								<span>Quality Assurence</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/quality3.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Quality Control</a></h5>
								<span>Quality Assurence</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/quality4.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Root Cause Analysis</a></h5>
								<span>Quality Assurence</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/quality6.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Supplier Quality<br> Management</a></h5>
								<span>Quality Assurence</span>
							</div>
						</div>
					</div>
				
					
				
				
			</div>
		</section>
		<!-- Recent Case Section Ending Here -->






@endsection