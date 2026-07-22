<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RANSPOINT')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            background-color: #f4f6f9;
        }

        /* HEADER */
        .site-header {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            padding: 18px 10px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-bottom: 3px solid #1a365d;
        }

        .site-header .logo-text {
            color: white;
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 3px;
            text-transform: uppercase;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            margin-bottom: 2px;
        }

        .site-header .sub-text {
            color: #90cdf4;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 2px;
            opacity: 0.9;
        }

        /* LAYOUT: sidebar + content */
        .site-body {
            display: flex;
            min-height: calc(100vh - 90px);
        }

        .site-menu {
            width: 220px;
            flex-shrink: 0;
            background-color: #1a252f;
            padding: 20px 10px;
        }

        .menu-container {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .menu-item {
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            padding: 14px 20px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            background-color: #2c3e50;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .menu-item.active,
        .menu-item:hover {
            background-color: #3498db;
            color: white;
            padding-left: 25px;
            box-shadow: 0 4px 10px rgba(52, 152, 219, 0.4);
        }

        .site-content {
            flex: 1;
            padding: 30px 20px;
        }
    </style>
    @stack('styles')
</head>
<body>

    <div class="site-header">
        <div class="logo-text">RANSPOINT</div>
        <div class="sub-text">Premium Gaming Store &amp; Top Up Instan</div>
    </div>

    <div class="site-body">
        <div class="site-menu">
            <div class="menu-container">
                <a class="menu-item @if(request()->routeIs('beranda')) active @endif" href="{{ route('beranda') }}">Beranda</a>
                <a class="menu-item @if(request()->routeIs('menugame')) active @endif" href="{{ route('menugame') }}">Menu Game</a>
                <a class="menu-item @if(request()->routeIs('profil')) active @endif" href="{{ route('profil') }}">Profil</a>
                <a class="menu-item @if(request()->routeIs('pendaftaran.create')) active @endif" href="{{ route('pendaftaran.create') }}">Form</a>
                <a class="menu-item @if(request()->routeIs('pendaftaran.index')) active @endif" href="{{ route('pendaftaran.index') }}">Data</a>
            </div>
        </div>

        <div class="site-content">
            @yield('content')
        </div>
    </div>

</body>
</html>
