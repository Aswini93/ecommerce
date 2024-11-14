@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="login-container">
    <div class="login-box">
        <h2>Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="textbox">
                <input type="email" placeholder="Email" name="email" required>
            </div>

            <div class="textbox">
                <input type="password" placeholder="Password" name="password" required>
            </div>

            <div class="remember-me">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </div>

            <button type="submit" class="btn">Login</button>

            @if (Route::has('password.request'))
                <p><a href="{{ route('password.request') }}">Forgot your password?</a></p>
            @endif
        </form>
    </div>
</div>
@endsection

@section('styles')
<style>
    form{
        margin-right: 10px;
    }
    /* General reset and layout */
    .login-container {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .login-container {
        font-family: 'Arial', sans-serif;
        background-color: #f4f7fc;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 76vh;
    }

    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }

    /* Login box styling */
    .login-box {
        background-color: #fff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 380px;
        text-align: center;
    }

    h2 {
        font-size: 28px;
        margin-bottom: 25px;
        color: #333;
    }

    .textbox {
        margin-bottom: 25px;
    }

    .textbox input {
        width: 100%;
        padding: 14px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 8px;
        outline: none;
        transition: border 0.3s ease;
        margin-right: 10px;
    }

    .textbox input:focus {
        border: 1px solid #007bff;
    }

    /* Remember Me section */
    .remember-me {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .remember-me input {
        margin-right: 10px;
    }

    .remember-me label {
        font-size: 14px;
        color: #555;
    }

    /* Button Styling */
    .btn {
        background-color: #007bff;
        color: #fff;
        padding: 14px;
        border: none;
        border-radius: 8px;
        width: 100%;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 10px;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    /* Forgot Password and Register link styling */
    p {
        margin-top: 15px;
    }

    a {
        color: #007bff;
        text-decoration: none;
        font-size: 14px;
    }

    a:hover {
        text-decoration: underline;
    }

    /* Responsive Design */
    @media (max-width: 480px) {
        .login-box {
            width: 90%;
            padding: 30px;
        }

        h2 {
            font-size: 24px;
        }

        .textbox input {
            font-size: 14px;
            padding: 12px;
        }

        .btn {
            font-size: 14px;
            padding: 12px;
        }
    }
</style>
@endsection