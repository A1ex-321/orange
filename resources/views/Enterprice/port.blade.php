@extends('Enterprice.layout.app')

@section('content')
<style>

      
.product-container {
            display: flex;
    
          
            height: 300px;
        margin-bottom: 100px;
     
        }

        .product-card {
         
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            height: 100%;
            width: 300px;
            box-sizing: border-box;
            padding: 20px;
        }

        .product-image {
            width: 100%;
          
        }

        .product-image img {
           
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .product-details {
            padding: 10px;
        }

        .product-title {
            font-size: 18px;
            margin-top: 0;
        }

        .product-description {
            font-size: 14px;
            color: #555;
        }

        .product-price {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-top: 5px;
        }

        .add-to-cart-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 8px 15px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .add-to-cart-btn:hover {
            background-color: #0056b3;
        }
        @media screen and (max-width: 576px) {
    .product-container {
       flex-wrap: wrap;
       justify-content: center;
        margin-bottom: 1200px;
        height: 250px;
        width: 200px;
        margin-left: 100px;
     
    }

    .product-card {
        flex: 0 0 calc(100% - 20px);
        margin-left: 0;
        margin-right: 0;
    }
}


    </style>
 <div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url('{{ asset('public/Enterprice/assets/img/portbanner.png') }}');"
>
        <div class="container">
            <div class="breadcrumb-items">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Our Portfolio</h2>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                 
                    <li class="active">Portfolio</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <h1 style="text-align: center;font-weight: bold;">Our Portfolio</h1>

    <div class="blog-area full-blog blog-standard full-blog grid-colum default-padding">
        <div class="container">
            <div class="blog-items content-less">
                <div class="blog-content">
                    <div class="blog-item-box">
                        <div class="row">
                            <!-- Single Item -->
                            @foreach($getRecord as $record)
        <div class="col-lg-4 col-md-6 single-item">
            <div class="item wow fadeInUp">
                <div class="thumb">
                    <a href="#">
                    <img src="{{ asset('public/images/'.$record->machineimage) }}" alt="Product Image" > <!-- Ensure image fills container -->

                    </a>
                </div>
                <!-- You can add more details from the $record here -->
            </div>
        </div>
    @endforeach
                            <!-- End Single Item -->
                            <!-- Single Item -->
                          
                            <!-- End Single Item -->
                        </div>
                        
                        
                        
                        <!-- Pagination -->
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Blog

   
@endsection

@push('scripts')


@endpush