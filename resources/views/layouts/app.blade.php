<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Nadia's Garden Restaurant") }}@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="{{ asset('/images/favicon.ico') }}"> 
</head>
<body>

    <div id="app" class="container">
        <div class="top-bar">
            <div>Call us at (123) 456-7891</div>
            <div><a href="#">get driving directions</a></div>
        </div>            
        <header>
            <a href="/"><img src="{{ asset('/images/logo.png') }}"></a>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="separator"></li>
                    <li><a href="#">About</a></li>
                    <li class="separator"></li>
                    <li><a href="/menu">Menu</a></li>
                    <li class="separator"></li>
                    <li><a href="#">Reservations</a></li>
                    <li class="separator"></li>
                    <li><a href="#">Location &amp; Hours</a></li>
                    <li class="separator"></li>
                    <li><a href="#">Contact</a></li>
                    <li class="separator"></li>
                    @guest
                        @if (Route::has('login'))
                            <li>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                            <li class="separator"></li>

                        @if (Route::has('register'))
                            <li>
                                <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>   
                        @endguest

                </ul>
            </nav>
        </header>  
        <main class="page-content">
            @yield('content')
        </main>    
        <footer>
            Testing APP
        </footer>   
    </div>
</body>
</html>
