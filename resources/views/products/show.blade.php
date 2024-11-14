@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
    <div class="product-detail">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>Price: ${{ $product->price }}</p>
        <form action="{{ route('products.charge', $product->uuid) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Pay Now</button>
        </form>
    </div>
@endsection