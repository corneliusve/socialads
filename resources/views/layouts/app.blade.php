<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">
            <div class="container">
                <div class="navbar-start">
                    <a href="{{ route('home') }}" class="navbar-item"><img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28"></a>

                    <a href="#" class="navbar-item is-tab hidden-mobile m-l-10 is-primary">Search socials</a>
                    <a href="#" class="navbar-item is-tab hidden-mobile is-primary">Search advertisers</a>
                </div>
                <div class="navbar-end" style="overflow: visable;">

                    @if (Auth::guest())
                        <a href="{{ route('login') }}" class="navbar-item is-tab is-primary">Log in</a>
                        <a href="" class="navbar-item is-tab is-primary">/</a>
                        <a href="{{ route('register') }}" class="navbar-item is-tab is-primary">Sign up</a>
                    @else
                        <a href="{{ route('profile', ['slug' => Auth::user()->slug]) }}" class="navbar-item">My profile</a>
                    @endif


                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
