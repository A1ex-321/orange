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
<div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url('{{ asset('public/Enterprice/assets/img/product.png') }}');"
>
        <div class="container">
            <div class="breadcrumb-items">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Our Products</h2>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                  
                    <li class="active">Products</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <h1 style="text-align: center;font-weight: bold;margin-bottom: 30px;">Our Popular Products</h1>
  
    <div class="product-container">
        <div class="product-card"  style="margin-left: 20px;">
            <div class="product-image">
            <img src="{{ asset('public/Enterprice/assets/img/n5.png') }}" alt="Product Image">
            </div>
            <div class="product-details">
                <h2 class="product-title">Pvc False Ceiling </h2>
              
                <p class="product-price">₹ 10000</p>
              
            </div>
        </div>
        <div class="product-card" style="margin-left: 20px;">
    <div class="product-image">
        <img src="{{ asset('public/Enterprice/assets/img/n2.png') }}" alt="Product Image">
    </div>
    <div class="product-details">
        <h2 class="product-title">Gypsum False Ceilings</h2>
        <p class="product-price">₹ 12000</p>
    </div>
</div>

<div class="product-card" style="margin-left: 20px;">
    <div class="product-image">
        <img src="{{ asset('public/Enterprice/assets/img/pop.png') }}" alt="Product Image">
    </div>
    <div class="product-details">
        <h2 class="product-title">P.O.P False Ceiling</h2>
        <p class="product-price">₹ 13000</p>
    </div>
</div>

<div class="product-card" style="margin-left: 20px;">
    <div class="product-image">
        <img src="{{ asset('public/Enterprice/assets/img/n3.png') }}" alt="Product Image">
    </div>
    <div class="product-details">
        <h2 class="product-title">Metal False Ceilings</h2>
        <p class="product-price">₹15000</p>
    </div>
</div>

<div class="product-card" style="margin-left: 20px;">
    <div class="product-image">
        <img src="{{ asset('public/Enterprice/assets/img/n4.png') }}" alt="Product Image">
    </div>
    <div class="product-details">
        <h2 class="product-title">Plastic ceiling tiles</h2>
        <p class="product-price">₹ 9000</p>
    </div>
</div>

        <!-- Repeat this product card div for each product -->

    </div>
    <div class="product-container">
    <div class="product-card" style="margin-left: 20px;">
        <div class="product-image">
            <img src="{{ asset('public/Enterprice/assets/img/old1.png') }}" alt="Product Image">
        </div>
        <div class="product-details">
            <h2 class="product-title">Armstrong Ceiling Tiles</h2>
            <p class="product-price">₹ 10000</p>
        </div>
    </div>

    <div class="product-card" style="margin-left: 20px;">
        <div class="product-image">
            <img src="{{ asset('public/Enterprice/assets/img/old2.png') }}" alt="Product Image">
        </div>
        <div class="product-details">
            <h2 class="product-title">A La Maison Ceilings</h2>
            <p class="product-price">₹ 12000</p>
        </div>
    </div>

    <div class="product-card" style="margin-left: 20px;">
        <div class="product-image">
            <img src="{{ asset('public/Enterprice/assets/img/old4.png') }}" alt="Product Image">
        </div>
        <div class="product-details">
            <h2 class="product-title">GypSerra Ceiling Section</h2>
            <p class="product-price">₹ 13000</p>
        </div>
    </div>

    <div class="product-card" style="margin-left: 20px;">
        <div class="product-image">
            <img src="{{ asset('public/Enterprice/assets/img/old5.png') }}" alt="Product Image">
        </div>
        <div class="product-details">
            <h2 class="product-title">KSE White Red Foam 3D Ceiling Sheet</h2>
            <p class="product-price">₹ 15000</p>
        </div>
    </div>

    <div class="product-card" style="margin-left: 20px;">
        <div class="product-image">
            <img src="{{ asset('public/Enterprice/assets/img/old6.png') }}" alt="Product Image">
        </div>
        <div class="product-details">
            <h2 class="product-title">Gypsum Gyprex Granular Ceiling Tiles</h2>
            <p class="product-price">₹ 9000</p>
        </div>
    </div>
</div>

<div class="product-container">
    <div class="product-card" style="margin-left: 20px;">
        <div class="product-image">
            <img src="{{ asset('public/Enterprice/assets/img/old7.png') }}" alt="Product Image">
        </div>
        <div class="product-details">
            <h2 class="product-title">Jitex Oceanic Cement Fiber</h2>
            <p class="product-price">₹ 10000</p>
        </div>
    </div>

    <div class="product-card" style="margin-left: 20px;">
        <div class="product-image">
            <img src="{{ asset('public/Enterprice/assets/img/old8.png') }}" alt="Product Image">
        </div>
        <div class="product-details">
            <h2 class="product-title">Armstrong Fiber False Ceiling</h2>
            <p class="product-price">₹ 12000</p>
        </div>
    </div>

    <div class="product-card" style="margin-left: 20px;">
        <div class="product-image">
            <img src="{{ asset('public/Enterprice/assets/img/old9.png') }}" alt="Product Image">
        </div>
        <div class="product-details">
            <h2 class="product-title">White Coated PVC Ceiling Design</h2>
            <p class="product-price">₹ 13000</p>
        </div>
    </div>

    <div class="product-card" style="margin-left: 20px;">
        <div class="product-image">
            <img src="{{ asset('public/Enterprice/assets/img/old10.png') }}" alt="Product Image">
        </div>
        <div class="product-details">
            <h2 class="product-title">Ceilings Design</h2>
            <p class="product-price">₹ 15000</p>
        </div>
    </div>

    <div class="product-card" style="margin-left: 20px;">
        <div class="product-image">
            <img src="{{ asset('public/Enterprice/assets/img/old11.png') }}" alt="Product Image">
        </div>
        <div class="product-details">
            <h2 class="product-title">Simple False Ceiling Design</h2>
            <p class="product-price">₹ 9000</p>
        </div>
    </div>
</div>

</div>
<!-- End Blog -->
   
@endsection

@push('scripts')


@endpush