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
                                @foreach($getRecord as $record)
    <div class="col-12">
        <div class="post-item">
            <div class="post-item-inner">
                <div class="post-thumb">
                <a href="{{ route('Blog', ['id' => $record->id]) }}"><img src="{{ asset('/public/images/' . $record->image) }}" alt="lab-blog"></a>

                </div>
                <div class="post-content">
                    <h4><a href="{{ route('Blog', ['id' => $record->id]) }}">{{ $record->title }}</a></h4>
                    <div class="author-date">
                        <a  class="date"><i class="icofont-calendar"></i>{{ $record->created_at->format('F d, Y') }}</a>
                        
                        
                    </div>
                    <p>{{ $record->description }}</p>
                    <a href="{{ route('Blog', ['id' => $record->id]) }}" class="lab-btn"><span>Read More</span></a>
                </div>
            </div>
        </div>
    </div>
@endforeach

                                   
                                    <!-- <div class="col-12">
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
                                    </div> -->
                                </div>
                            </div>
                        </article>
                    </div>
                    
                    <div class="col-lg-4 col-md-7 col-12">
                        <aside>
                            <!-- <div class="widget widget-search">
                                <form action="/" class="search-wrapper">
                                    <input type="text" name="s" placeholder="Search...">
                                    <button type="submit"><i class="icofont-search-2"></i></button>
                                </form>
                            </div> -->

                            <!-- <div class="widget widget-category">
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
                            </div> -->
        
                            <div class="widget widget-post">
                                <div class="widget-header">
                                    <h5>Recent Posts</h5>
                                </div>
                                <ul class="widget-wrapper">
                                @foreach($getRecord1 as $record)
    <li class="d-flex flex-wrap justify-content-between">
        <div class="post-thumb">
            <a href="{{ route('Blog', ['id' => $record->id]) }}"><img src="{{ asset('public/images/' . $record->image) }}" alt="product"></a>
        </div>
        <div class="post-content">
            <a href="{{ route('Blog', ['id' => $record->id]) }}"><h6>{{ $record->title }}</h6></a>
            <p>{{ $record->created_at->format('d F Y') }}</p>
        </div>
    </li>
@endforeach


                                    
                                </ul>
                            </div>
        
                            <!-- <div class="widget widget-archive">
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
                            </div> -->

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