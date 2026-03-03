<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Awash Farm Clone')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">
</head>
<body>
<header class="site-header">
    <div class="container nav-wrap">
        <a href="{{ route('home') }}" class="brand">Awash Farm Ethiopia</a>
        <nav>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('consultancy') }}">Consultancy</a>
            <a href="{{ route('research') }}">Research</a>
            <a href="{{ route('payments') }}">Payments</a>
            <a href="{{ route('donate') }}" class="btn btn-sm">Donate</a>
        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer class="site-footer">
    <div class="container">
        <p>© {{ date('Y') }} Awash Farm Clone. Built in Laravel for Ethiopian agricultural transformation.</p>
    </div>
</footer>
</body>
</html>
