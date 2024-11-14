<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>

    <!-- Common CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')

    @yield('head')
</head>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0;">

    <!-- Header -->
    <header style="background-color: #333; color: white; padding: 10px 0;">
        <nav style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
            <a href="{{ route('products.index') }}" style="color: white; font-size: 24px; text-decoration: none; padding: 0 15px;">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" style="height: 60px;">
            </a>
            <ul style="list-style: none; margin: 0; padding: 0; display: flex; gap: 20px;">
                <li><a href="{{ route('products.index') }}" style="color: white; text-decoration: none;">Products</a></li>
                @auth
                    <li><a href="{{ route('logout') }}" style="color: white; text-decoration: none;">Logout</a></li>
                @endauth
                @guest
                    <li><a href="{{ route('login') }}" style="color: white; text-decoration: none;">Login</a></li>
                @endguest
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main style="max-width: 1200px; margin: 20px auto; padding: 0 15px;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer style="background-color: #333; color: white; text-align: center; padding: 10px 0;">
        <p>&copy; 2024 Ecommerce</p>
    </footer>

    <!-- Common JS -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('scripts')
</body>

</html>