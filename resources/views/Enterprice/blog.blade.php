@extends('Enterprice.layout.app')

@section('content')
<div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url('{{ asset('public/Enterprice/assets/img/blogbanner.png') }}');"
>
        <div class="container">
            <div class="breadcrumb-items">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Blog </h2>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
                
                    <li class="active">Blog</li>
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
                   
                    <!-- Start Sidebar -->
                    <div class="sidebar wow fadeInLeft col-lg-12 col-md-12">
                        <aside>
                          
                          
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent Post</h4>
                                </div>
                                <ul>
                                @foreach($getRecord as $record)
        <li>
            <div class="thumb">
                <a href="blog-single.html">
                <img src="{{ asset('public/images/'.$record->singleimage) }}" alt="Product Image" >
                </a>
            </div>
            <div class="info">
            <a href="{{ route('singleblog', ['id' => $record->id]) }}">{{ $record->title }}</a>

                <h6 style="color: crimson;">By {{ $record->description }}</h6>
                <div class="meta-title">
                    <span class="post-date"><i class="fas fa-clock"></i> {{ $record->created_at->format('d M, Y') }}</span>
                    <!-- Adjust the date format as needed -->
                </div>
            </div>
        </li>
    @endforeach
                                    
                                    
                                </ul>
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