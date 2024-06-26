<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>{{ 'Admin Area || ' . Auth::user()->name}} </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    @stack('admin.layouts.styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel" style="position: fixed; width: 100%; z-index: 2;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 container-fluid">
            <div id="sidebar" class="sidebar">
                <div class="text-center">
                    <img src="https://via.placeholder.com/100" alt="">
                    <h5>{{ Auth::user()->name}}</h5>
                </div>
                <div class="items-container">
                <a href="{{ route('home')}}">
                        <h6 class="menu-item"><i class="fas fa-tachometer-alt"></i> Dashboard</h6>
                    </a>
                    <a href="{{ route('admin.users') }}">
                        <h6 class="menu-item"><i class="fas fa-users"></i> Users</h6>
                    </a>
                    <a href="{{ route('admin.prospects') }}">
                        <h6 class="menu-item"><i class="fas fa-users"></i> Prospects</h6>
                    </a>
                    <a href="#">
                        <h6 class="menu-item"><i class="far fa-handshake"></i>Clients</h6>
                    </a>
                    <a href="#">
                        <h6 class="menu-item"><i class="fas fa-table"></i> Estimates</h6>
                    </a>
                    <hr>
                    <a href="#">
                        <h6 class="menu-item"><i class="fas fa-cog"></i> Settings</h6>
                    </a>
                </div>
            </div>{{-- End of sidebar --}}
            
            <div class="content" style="margin-top: 3.5rem;">
                @yield('content')
            </div>
        </main>
        
    </div>
    @stack('admin.layouts.scripts.scripts')
</body>
</html>