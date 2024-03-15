@extends('Enterprice.layout.app')

@section('content')
<style>
    .product-container {
        display: flex;


        height: 313px;
        margin-bottom: 100px;

    }

    .product-card {

        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        height: 103%;
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
        font-size: 19px;
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
<div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url('{{ asset('public/Enterprice/assets/img/product.png') }}');">
    <div class="container">
        <div class="breadcrumb-items">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our Products</h2>
                </div>
            </div>
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>

                <li class="active">Products</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<h1 style="text-align: center;font-weight: bold;margin-bottom: 30px;">Our Popular Products</h1>

<div class="product-container">
    @php $counter = 0; @endphp
    @foreach($getRecord as $product)
        @if($counter % 4 == 0 && $counter != 0) <!-- Check if counter is not zero to avoid empty container -->
            </div><div class="product-container">
        @endif
        <div class="product-card" style="margin-left: 20px; width: calc(25% - 20px);"> <!-- Adjust width for mobile view -->
            <div class="product-image">
                <img src="{{ asset('public/images/'.$product->machineimage) }}" alt="Product Image" style="width: 100%;"> <!-- Ensure image fills container -->
            </div>
            <div class="product-details">
                <h2 class="product-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $product->machinetitle }}</h2>
                <p class="product-price" style="margin-bottom: 10px;">₹ {{ $product->description }}</p>
            </div>
        </div>
        @php $counter++; @endphp
    @endforeach
</div>





</div>
<!-- End Blog -->

@endsection

@push('scripts')


@endpush