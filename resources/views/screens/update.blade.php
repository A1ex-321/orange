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
    <h2>Blog</h2>
   
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
                                    <div class="col-12">
                                        <div class="post-item slider-post">
                                            <div class="post-item-inner">
                                                <div class="post-thumb post-thumb-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img src="/public/orange/assets/images/blog7.png" alt="blog">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="/public/orange/assets/images/blog6.png" alt="blog">
                                                        </div>
                                                    </div>
                                                    <div class="post-thumb-slider-next"><i class="icofont-double-left"></i></div>
                                                    <div class="post-thumb-slider-prev"><i class="icofont-double-right"></i></div>
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="blogDetail">How can developers optimize website performance for better user experience?</a></h4>
                                                    <div class="author-date">
                                                        <a href="#" class="date"><i class="icofont-calendar"></i>July 12, 2023</a>
                                                        <a href="#" class="admin"><i class="icofont-ui-user"></i>Somrat Islam</a>
                                                        <a href="#" class="comments"><i class="fa fa-comments"></i>24 Comments</a>
                                                    </div>
                                                    <p> Developers can optimize website performance by minimizing HTTP requests, leveraging browser caching, optimizing images, using content delivery networks (CDNs), and implementing lazy loading techniques. Additionally, reducing server response times, optimizing CSS and JavaScript files, and utilizing compression techniques can further enhance performance.</p>
                                                    <a href="blogDetail" class="lab-btn"><span>Read More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="post-item video-post">
                                            <div class="post-item-inner">
                                                <div class="post-thumb">
                                                    <div class="video-thumb">
                                                        <img src="/public/orange/assets/images/blog8.png" alt="video">
                                                        <a href="https://www.youtube.com/embed/eTl2Cxb74r0" data-rel="lightcase" class="video-icon"><i class="icofont-youtube-play"></i></a>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="#">What are the key considerations when choosing a database for a software project?</a></h4>
                                                    <div class="author-date">
                                                        <a href="#" class="date"><i class="icofont-calendar"></i>July 12, 2023</a>
                                                        <a href="#" class="admin"><i class="icofont-ui-user"></i>Somrat Islam</a>
                                                        <a href="#" class="comments"><i class="fa fa-comments"></i>24 Comments</a>
                                                    </div>
                                                    <p>When selecting a database for a software project, factors to consider include scalability, data consistency, performance requirements, query complexity, data modeling flexibility, and support for ACID transactions. Developers should also evaluate the database's compatibility with the chosen programming language/framework and its community support.</p>
                                                    <a href="blog-single.html" class="lab-btn"><span>Read More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="post-item qute-post">
                                            <div class="post-item-inner">
                                                <div class="post-thumb">
                                                    <div class="qute-content">
                                                        <img src="/public/orange/assets/images/learning1.png" alt="qute">
                                                        <h5>Rapdiou Qntegrat Distrbute Supply Chains Through Markey Position Bestng Chans Throug Marke Posito Bestin Practces Ieractve Fashon Sound Qources Fashion Economically And Sound Qources</h5>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="#"> How can developers ensure the security of web applications against common vulnerabilities?</a></h4>
                                                    <div class="author-date">
                                                        <a href="#" class="date"><i class="icofont-calendar"></i>July 12, 2023</a>
                                                        <a href="#" class="admin"><i class="icofont-ui-user"></i>Somrat Islam</a>
                                                        <a href="#" class="comments"><i class="fa fa-comments"></i>24 Comments</a>
                                                    </div>
                                                    <p>Developers can enhance the security of web applications by implementing measures such as input validation, output encoding, authentication and authorization mechanisms, secure session management, HTTPS encryption, and secure coding practices. Regular security audits, vulnerability assessments, and penetration testing are also essential to identify and mitigate potential security risks.</p>
                                                    <a href="blog-single.html" class="lab-btn"><span>Read More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="paginations">
                                            <ul class="d-flex flex-wrap justify-content-center">
                                                <li>
                                                    <a href="#">1</a>
                                                </li>
                                                <li class="d-none d-sm-block">
                                                    <a href="#">2</a>
                                                </li>
                                                <li class="d-none d-sm-block">
                                                    <a href="#" class="active">3</a>
                                                </li>
                                                <li>
                                                    <a class="dot">...</a>
                                                </li>
                                                <li class="d-none d-sm-block">
                                                    <a href="#">9</a>
                                                </li>
                                                <li class="d-none d-sm-block">
                                                    <a href="#">10</a>
                                                </li>
                                                <li>
                                                    <a href="#">11</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    
                    <div class="col-lg-4 col-md-7 col-12">
                        <aside>
                            <div class="widget widget-search">
                                <form action="/" class="search-wrapper">
                                    <input type="text" name="s" placeholder="Search...">
                                    <button type="submit"><i class="icofont-search-2"></i></button>
                                </form>
                            </div>

                            <div class="widget widget-category">
                                <div class="widget-header">
                                    <h5>Post Categorys</h5>
                                </div>
                                <ul class="widget-wrapper">
                                    <li>
                                        <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>Technical Tutorials</span><span>06</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>Best Practices & Tips</span><span>11</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex active flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>Industry Trends & Insights</span><span>07</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>Case Studies & Success Stories</span><span>09</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>Interviews & Profiles</span><span>50</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>Product Updates & Announcements</span><span>20</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>Coding Challenges & Exercise</span><span>93</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>Community & Events</span><span>27</span></a>
                                    </li>
                                </ul>
                            </div>
        
                            <div class="widget widget-post">
                                <div class="widget-header">
                                    <h5>Recent Posts</h5>
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
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="#"><img src="/public/orange/assets/images/blog2.png" alt="product"></a>
                                        </div>
                                        <div class="post-content">
                                            <a href="#"><h6>What are the advantages of adopting microservices architecture in software development?</h6></a>
                                            <p>04 February 2021</p>
                                        </div>
                                    </li>
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="#"><img src="/public/orange/assets/images/blog4.png" alt="product"></a>
                                        </div>
                                        <div class="post-content">
                                            <a href="#"><h6>How can developers leverage cloud computing for their software projects?</h6></a>
                                            <p>04 February 2021</p>
                                        </div>
                                    </li>
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="#"><img src="/public/orange/assets/images/what.png" alt="product"></a>
                                        </div>
                                        <div class="post-content">
                                            <a href="#"><h6> What are the emerging trends shaping the future of software development?</h6></a>
                                            <p>04 February 2021</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
        
                            <div class="widget widget-archive">
                                <div class="widget-header">
                                    <h5>Archives</h5>
                                </div>
                                <ul class="widget-wrapper">
                                    <li><a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>January</span><span>2021</span></a> </li>
                                    <li><a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>February</span><span>2018</span></a></li>
                                    <li><a href="#" class="d-flex active flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>March</span><span>2017</span></a></li>
                                    <li><a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>April</span><span>2016</span></a></li>
                                    <li><a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>June</span><span>2015</span></a></li>
                                    <li><a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>July</span><span>2014</span></a></li>
                                    <li><a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>August</span><span>2013</span></a></li>
                                </ul>
                            </div>

                            <div class="widget widget-instagram">
                                <div class="widget-header">
                                    <h5>Photo Gallery</h5>
                                </div>
                                <ul class="widget-wrapper d-flex flex-wrap justify-content-center">
                                    <li><a href="#"><img src="/public/orange/assets/images/bl1.png" alt="product"></a></li>
                                    <li><a href="#"><img src="/public/orange/assets/images/blog1.png" alt="product"></a></li>
                                    <li><a href="#"><img src="/public/orange/assets/images/blog2.png" alt="product"></a></li>
                                    <li><a href="#"><img src="/public/orange/assets/images/what.png" alt="product"></a></li>
                                    <li><a href="#"><img src="/public/orange/assets/images/blog4.png" alt="product"></a></li>
                                    <li><a href="#"><img src="/public/orange/assets/images/teamwork.png" alt="product"></a></li>
                                    <li><a href="#"><img src="/public/orange/assets/images/w3.png" alt="product"></a></li>
                                    <li><a href="#"><img src="/public/orange/assets/images/w1.png" alt="product"></a></li>
                                    <li><a href="#"><img src="/public/orange/assets/images/w2.png" alt="product"></a></li>
                                </ul>
                            </div>

                         
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section Ending Here -->



@endsection
