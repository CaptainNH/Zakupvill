@extends('layouts.app')
@section('head')
    <title>{{ $product->name }}</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Poppins&display=swap" rel="stylesheet">
@endsection

<div class="modal-container">
    <div class="modal-content">
        <div class="form-group">
            <span class="close" style="text-align: right;">&times;</span>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate fadeInUp ftco-animated">
                <a href="images/product-5.jpg" class="image-popup">
                    <img src="images/product-5.jpg" class="img-fluid" alt="Colorlib Template">
                </a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate fadeInUp ftco-animated">
                <h3 style="color: #000;">{{ $product->name }}</h3>
                <p class="provider">
                    <span>{{ $product->getSupplier() }}</span>
                    <br>
                    <span>{{ $product->warehouse }}</span>
                </p>
                <p class="price"><span>Цена: {{ $product->price }}&#x20bd;</span></p>

                <p>
                    {{ $product->description }}
                </p>
                {{-- <p class="text-center"><a href="cart.html" class="btn btn-black py-3 px-5">Add to Cart</a></p> --}}
            </div>

        </div>

    </div>
</div>
