@extends('layout')
  
@section('content')
<style>
    .card2 {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
    }

    .price {
    color: grey;
    font-size: 22px;
    }

    .card2 button {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
    }

    .card2 button:hover {
    opacity: 0.7;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products') }}
                    <a href="{{ route('add-product') }}" class="card-link">Add Product</a>
                </div>
                <div class="card-body">
                    @foreach ($products as $product)
                        <div class="card2">
                            {{-- <img src="jeans3.jpg" alt="Denim Jeans" style="width:100%"> --}}
                            <h1>{{ $product->name }}</h1>
                            <p class="price">${{ $product->price }}</p>
                            <p>{{ $product->description }}</p>
                            <p><button>Add to Cart</button></p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection