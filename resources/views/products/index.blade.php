@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h1>Products</h1>
    <div class="product-list">
        @foreach($products as $product)
            <div class="product">
                <div class="product-details">
                    <h2>{{ $product->name }}</h2>
                    <p>{{ Str::limit($product->description, 100) }}</p>
                    <p>Price: ${{ $product->price }}</p>
                    <a href="{{ route('products.show', $product->uuid) }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('styles')
<style>
    /* Main container to display products in a grid */
    .product-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    /* Individual product card */
    .product {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .product-image img {
        max-width: 100%;
        border-radius: 8px;
        object-fit: cover;
    }

    .product-details {
        text-align: center;
    }

    .product-details h2 {
        font-size: 20px;
        margin: 10px 0;
    }

    .product-details p {
        font-size: 16px;
        color: #666;
        margin: 10px 0;
    }

    .btn {
        display: inline-block;
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }
</style>
@endsection