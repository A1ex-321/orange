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
    <h2>Ecommerce</h2>
   
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
								<img src="/public/orange/assets/images/ecom1.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Magento Development</a></h5>
								<span>Ecommerce</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/ecom2.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>PrestaShop Development</a></h5>
								<span>Ecommerce</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/ecom3.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Startup E-Commerce</a></h5>
								<span>Ecommerce</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/ecom4.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Premium E Commerce</a></h5>
								<span>Ecommerce</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/ecom5.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Magento Hosting</a></h5>
								<span>Ecommerce</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/ecom6.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>PrestaShop Hosting</a></h5>
								<span>Ecommerce</span>
							</div>
						</div>
					</div>
					
				
				
			</div>
		</section>
		<!-- Recent Case Section Ending Here -->






@endsection