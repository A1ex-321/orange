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
    <h2>update</h2>
   
  </div>
</section>

  <!-- Blog Section Start Here -->
  <div class="blog-section blog-page padding-tb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <article>
                            <div class="section-wrapper">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="post-item">
                                            <div class="post-item-inner">
                                                <div class="post-thumb">
                                                    <a href="blogDetail"><img src="/public/orange/assets/images/blog5.png" alt="lab-blog"></a>
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="blogDetail">What are the benefits of using version control in software development?</a></h4>
                                                    <div class="author-date">
                                                        <a href="#" class="date"><i class="icofont-calendar"></i>July 12, 2023</a>
                                                        <a href="#" class="admin"><i class="icofont-ui-user"></i>Somrat Islam</a>
                                                        <a href="#" class="comments"><i class="fa fa-comments"></i>24 Comments</a>
                                                    </div>
                                                    <p>CVersion control systems like Git offer numerous benefits, including collaboration facilitation, code organization, tracking changes, and enabling rollbacks to previous versions. They enhance team productivity, streamline development workflows, and ensure code integrity and reliability.</p>
                                                    <a href="blogDetail" class="lab-btn"><span>Read More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                        </article>
                    </div>
                    
                    <div class="col-lg-4 col-md-7 col-12">
                        <aside>
                    

                       
                            <div class="widget widget-post">
                                <div class="widget-header">
                                    <h5>Recent Updates</h5>
                                </div>
                                <ul class="widget-wrapper">
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="#"><img src="/public/orange/assets/images/blog1.png" alt="product"></a>
                                        </div>
                                        <div class="post-content">
                                            <a href="#"><h6>What role does automated testing play in the software development process?</h6></a>
                                            <p>04 February 2021</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
        
                            

                            <div class="widget widget-instagram">
                                <div class="widget-header">
                                    <h5>Photo Gallery</h5>
                                </div>
                                <ul class="widget-wrapper d-flex flex-wrap justify-content-center">
                                    <li><a><img src="/public/orange/assets/images/bl1.png" alt="product"></a></li>
                                    <li><a><img src="/public/orange/assets/images/blog1.png" alt="product"></a></li>
                                    <li><a><img src="/public/orange/assets/images/blog2.png" alt="product"></a></li>
                                    <li><a><img src="/public/orange/assets/images/what.png" alt="product"></a></li>
                                    <li><a><img src="/public/orange/assets/images/blog4.png" alt="product"></a></li>
                                    <li><a><img src="/public/orange/assets/images/teamwork.png" alt="product"></a></li>
                                    <li><a><img src="/public/orange/assets/images/w3.png" alt="product"></a></li>
                                    <li><a><img src="/public/orange/assets/images/w1.png" alt="product"></a></li>
                                    <li><a><img src="/public/orange/assets/images/w2.png" alt="product"></a></li>
                                </ul>
                            </div>

                         
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section Ending Here -->



@endsection
