<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>
<body>
    <nav class="bar">
        <div class="logo" href="/">Omnium</div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li>
                <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Home</span>
                </a>
            </li>
            <li>
                @guest
                <a href="/user/create" class="{{ Request::is('user/create') ? 'active' : '' }}">
                    <i class="fas fa-plus"></i>
                    <span class="nav-text">Create Request</span>
                </a>
                @else
                <a href="/user/create" class="{{ Request::is('user/create') ? 'active' : '' }}">
                    <i class="fas fa-plus"></i>
                    <span class="nav-text">Create Request</span>
                </a>
                @endguest
            </li>
            <li>
                @guest
                <a href="/user/index" class="{{ Request::is('user/index') ? 'active' : '' }}">
                    <i class="fas fa-eye"></i>
                    <span class="nav-text">View Requests</span>
                </a>
                @else
                <a href="/user/index" class="{{ Request::is('user/index') ? 'active' : '' }}">
                    <i class="fas fa-eye"></i>
                    <span class="nav-text">View Requests</span>
                </a>
                @endguest
            </li>
            <li>
                <a href="/home/about" class="{{ Request::is('home/about') ? 'active' : '' }}">
                    <i class="fas fa-info-circle"></i>
                    <span class="nav-text">About</span>
                </a>
            </li>
            @if (Route::has('login'))
            @auth
            <li>
                <x-app-layout>
                </x-app-layout>
            </li>
            @else
            <li>
                <a href="{{ route('login') }}" style="background: #008959;">
                    <i class="fas fa-sign-in-alt"></i>
                    <span class="nav-text">Login</span>
                </a>
            </li>
            <li>
                <a href="{{ route('register') }}" style="background: #0070FC;">
                    <i class="fas fa-user-plus"></i>
                    <span class="nav-text">Register</span>
                </a>
            </li>
            @endauth
            @endif
        </ul>
    </nav>


    <div class="container">
        @yield('content')

    </div>


</body>
</html>
