@extends('Enterprice.layout.app')

@section('content')
  <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url('{{ asset('public/Enterprice/assets/img/blogsingle.jpg') }}');"
>
        <div class="container">
            <div class="breadcrumb-items">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Blog Details</h2>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <!-- <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li> -->
                 
                    <li class="active">Blog Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
  <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-lg-8 col-md-12">
                        <div class="blog-item-box">
                            <!-- Single Item -->
                            <div class="single-item">
                                <div class="item wow fadeInUp">
                                    <div class="thumb">
                                        <img src="{{ asset('public/images/' . $single->singleimage) }}"  alt="Thumb"  width="100%">

                                    </div>
                                    <div class="info">
                                      
                                        <h4>
                                            <a href="#">{{$single->title}}</a>
                                        </h4>
                                        <p>
                                          {{$single->description}}
                                        </p>
                                       
                                    </div>
                                    <div class="thumb">
                                    <div class="thumb">
                                    <div class="thumb">
    @php
        // Explode the image_data string by comma and remove empty elements
        $images = array_filter(explode(',', $single->image_data));
    @endphp
    @foreach ($images as $image)
        <img src="{{ asset('public/images/' . trim($image)) }}" alt="Thumb" width="100%" style="padding-top:15px;">
    @endforeach
</div>

</div>

</div>

                                </div>
                            </div>
                         
                        </div>
                        
                        <!-- Pagination -->
                       
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar wow fadeInLeft col-lg-4 col-md-12">
                        <aside>
                          
                        
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent Post</h4>
                                </div>
                                <ul>
                                @foreach ($blog as $blog)
    <li>
        <div class="thumb">
            <a href="{{ route('singleblog', ['id' => $blog->id, 'slug' => str_replace(' ', '-', $blog->slug)]) }}">
                <img src="{{ asset('public/images/'.$blog->singleimage) }}" alt="Thumb">
            </a>
        </div>
        <div class="info">
            <a href="{{ route('singleblog', ['id' => $blog->id, 'slug' => str_replace(' ', '-', $blog->slug)]) }}">{{ $blog->title }}</a>
            <h6 style="color: crimson;">By {{ substr($blog->description, 0, 70) }}{{ strlen($blog->description) > 50 ? '...' : '' }}</h6>
            <div class="meta-title">
                <span class="post-date"><i class="fas fa-clock"></i> {{ $blog->created_at->format('d M, Y') }}</span>
            </div>
        </div>
    </li>
@endforeach

                                   
                                </ul>
                            </div>
                         
                            <div class="sidebar-item gallery">

</div>

                           
                          
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
  


   
@endsection

@push('scripts')


@endpush