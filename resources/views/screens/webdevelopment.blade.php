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
    <h2>Web Development</h2>
   
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
								<img src="/public/orange/assets/images/dev1.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Php Web Development</a></h5>
								<span>Web Development</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/dev2.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>React Js Development</a></h5>
								<span>Web Development</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/dev3.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Dot Net Web Development</a></h5>
								<span>Web Development</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/dev4.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Real Time Web Application <br>Development</a></h5>
								<span>Web Development</span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
                            <img src="/public/orange/assets/images/dev5.png" alt="lab-rcpost" style="height:300px;width:600px">
							</div>
							<div class="lab-content">
								<h5><a>Special Framework <br>Development</a></h5>
								<span>Web Development</span>
							</div>
						</div>
					</div>
				
				
			</div>
		</section>
		<!-- Recent Case Section Ending Here -->






@endsection