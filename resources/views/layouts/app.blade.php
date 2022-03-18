<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('images/jameson.svg') }}" type="image/svg" sizes="16x16">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
    @stack('scripts')
</head>
<body>
    <div id="app">
        @include('partials.navbar')
        <!-- Page header with logo and tagline-->
        @if (Request::routeIs('login') || Request::routeIs('register') || Request::routeIs('user.*') || Request::routeIs('posts.create'))
        @else
            @include('partials.search')
        @endif
        <main class="container py-5 min-vh-100">
            @yield('content')
            {{ $slot ?? '' }}
        </main>
        @include('partials.footer')
    </div>
</body>
</html>
