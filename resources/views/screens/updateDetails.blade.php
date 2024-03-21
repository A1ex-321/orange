@extends('partials.app')
@section('content')
<style>
    .two-line-ellipsis {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
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
        <h2>Update Details</h2>

    </div>
</section>



<!-- Blog Section Start Here -->
<div class="blog-section blog-page blog-single padding-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <article>
                    <div class="section-wrapper" id="data">
                        <div class="post-item">
                            <div class="post-item-inner">
                                <div class="post-thumb">
                                    <img src="{{ asset('/public/images/' . $getRecord->image) }}" alt="blog">
                                </div>
                                <div class="post-content">
                                    <h4>{{$getRecord->title}}</h4>
                                    <h6>{{$getRecord->description}}</h6>

                                    <div class="author-date">
                                        <a class="date"><i class="icofont-calendar"></i>{{ \Carbon\Carbon::parse($getRecord->created_at)->format('F j, Y') }}</a>

                                    </div>
                                    <div class="ckeditor-content">
                                        {!! $getRecord->content !!}
                                    </div>






                                </div>
                            </div>
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



                    <div class="widget widget-post">
                        <div class="widget-header">
                            <h5>Recent Posts</h5>
                        </div>
                        <ul class="widget-wrapper">
                            <ul class="widget-wrapper">
                                @foreach($getRecord1 as $record)
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="{{ route('updates', ['id' => $record->id]) }}"><img src="{{ asset('public/images/' . $record->image) }}" alt="product"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="{{ route('updates', ['id' => $record->id]) }}">
                                        <h6 class="two-line-ellipsis">{{ $record->title }}</h6>
                                        </a>
                                        <p>{{ $record->created_at->format('d F Y') }}</p>
                                    </div>
                                </li>
                                @endforeach

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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const blogListContainer = document.getElementById('data');

        const oembedContainers = blogListContainer.querySelectorAll('oembed');
        console.log("fddf", oembedContainers);
        oembedContainers.forEach(oembed => {
            const outerHtml = oembed.outerHTML;
            const urlMatch = outerHtml.match(/url="(.*?)"/);

            if (urlMatch) {
                const url = urlMatch[1];

                const iframe = document.createElement('iframe');
                iframe.setAttribute('src', url);
                iframe.setAttribute('width', '600'); // Set your desired width
                iframe.setAttribute('height', '400'); // Set your desired height
                iframe.setAttribute('frameborder', '0');
                iframe.setAttribute('allowfullscreen', 'true');

                oembed.replaceWith(iframe);
            }
        });

        const anchorInContainer = blogListContainer.querySelectorAll('a');
        anchorInContainer.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Prevents the default behavior (opening the link)
                window.open(link.href, '_blank');
            });
        });
    });
</script>


@endsection