@extends('layouts.app')

@section('title', 'Payment Success')

@section('content')
    <div class="payment-success">
        <h1>Payment Successful!</h1>
        <p>Your payment was successfully processed. Thank you for your purchase!</p>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Go to Home</a>
    </div>
@endsection

@section('styles')
<style>
    .payment-success {
        text-align: center;
        margin-top: 50px;
        padding: 20px;
    }

    .payment-success h1 {
        font-size: 32px;
        color: green;
    }

    .payment-success p {
        font-size: 18px;
        margin-top: 10px;
    }

    .btn {
        display: inline-block;
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        margin-top: 20px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }
</style>
@endsection