<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<body>
<div id="app">
    <!-- Authentication Links -->
@if (Auth::guest())
    <!-- Right Side Of Navbar -->
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
    @else
        @include('layouts/header')
    @endif
</div>
</body>
</html>
