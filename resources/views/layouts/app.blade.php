<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Library') }}</title> --}}
    <title>Library</title>
    
    <!-- Fonts -->
    <link href="{{ asset('webfonts/Nunito-Regular.ttf') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top navbar-light bg-white shadow-sm" style="z-index: 2">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">                    
                    <svg class="text-primary" width="25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><title>Online LEarning</title><g id="Online_LEarning" data-name="Online LEarning"><path d="M57,6H56V5a1,1,0,0,0-1-1H52V1a1,1,0,0,0-1-1C42,0,37.12-.86,32,3.65,26.85-.88,22,0,13,0a1,1,0,0,0-1,1V4H9A1,1,0,0,0,8,5V6H7a5,5,0,0,0-5,5V47a5,5,0,0,0,5,5H24.92l-.62,7.92A2.31,2.31,0,0,1,22,62H20a1,1,0,0,0,0,2H44a1,1,0,0,0,0-2H42a2.3,2.3,0,0,1-2.3-2.07L39.08,52H57a5,5,0,0,0,5-5V11A5,5,0,0,0,57,6ZM54,6V36H34.84c3.95-2.54,6.81-2,16.16-2a1,1,0,0,0,1-1V6ZM50,2V32c-8.16,0-12.26-.66-17,2.83V5.42A12.56,12.56,0,0,1,41.66,2ZM14,2c7.83,0,12.48-.82,17,3.42V34.83C26.16,31.27,21.91,32,14,32ZM10,6h2V33a1,1,0,0,0,1,1c9.28,0,12.21-.54,16.16,2H10ZM7,8H8V37a1,1,0,0,0,1,1H55a1,1,0,0,0,1-1V8h1a3,3,0,0,1,3,3V42H4V11A3,3,0,0,1,7,8ZM38.35,62H25.64c.77-1.21.61-1.38,1.29-10H37.08C37.68,59.84,37.52,60.69,38.35,62ZM60,47a3,3,0,0,1-3,3H7a3,3,0,0,1-3-3V44H60Z"/><path d="M31,48h2a1,1,0,0,0,0-2H31A1,1,0,0,0,31,48Z"/><path d="M18,8h9a1,1,0,0,0,0-2H18A1,1,0,0,0,18,8Z"/><path d="M18,13h9a1,1,0,0,0,0-2H18A1,1,0,0,0,18,13Z"/><path d="M18,18h9a1,1,0,0,0,0-2H18A1,1,0,0,0,18,18Z"/><path d="M18,23h9a1,1,0,0,0,0-2H18A1,1,0,0,0,18,23Z"/><path d="M18,28h9a1,1,0,0,0,0-2H18A1,1,0,0,0,18,28Z"/><path d="M37,8h9a1,1,0,0,0,0-2H37A1,1,0,0,0,37,8Z"/><path d="M37,13h9a1,1,0,0,0,0-2H37A1,1,0,0,0,37,13Z"/><path d="M37,18h9a1,1,0,0,0,0-2H37A1,1,0,0,0,37,18Z"/><path d="M37,23h9a1,1,0,0,0,0-2H37A1,1,0,0,0,37,23Z"/><path d="M37,28h9a1,1,0,0,0,0-2H37A1,1,0,0,0,37,28Z"/></g></svg>
                    Library
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="ion-md-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-5 mr-auto">
                        <li class="nav-item"><a class="nav-link" href="/">
                            <i class="ion-md-home"></i> Home                            
                        </a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" type="button" id="browse-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ion-md-list"></i> Browse
                            </a>
                            <div class="dropdown-menu" aria-labelledby="browse-dropdown">
                                <a class="dropdown-item" href="/books"><i class="ion-md-book"></i> Books</a>                                                                
                                <a class="dropdown-item" href="/exams"><i class="ion-md-paper"></i> Exams</a>                                
                                <a class="dropdown-item" href="/projects"><i class="ion-md-school"></i> Projects</a>
                            </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="ion-md-person"></i> {{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><i class="ion-md-person-add"></i> {{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="ion-md-contact"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="ion-md-log-out"></i> {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="p-2 mt-0 bg-dark text-white text-center">
            <div class="container">
                <div class="social">
                    <ul class="d-flex nav text-center align-items-center justify-content-center"> 
                        <li class="nav-item"><a class="nav-link text-white" href="#"><i class="ion-logo-facebook"></i></a></li>
                        <li class="nav-item"><a class="nav-link text-white" href=""><i class="ion-logo-github"></i></a></li>
                        <li class="nav-item"><a class="nav-link text-white"href=""><i class="ion-logo-youtube"></i></a></li>
                    </ul>
                </div>
                <p>Copy Rights &copy; All Rights Reserved 2020</p>                
            </div>
        </footer>
    </div>
    <!-- Scripts -->    
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/wow.min.js') }}" defer></script>    
</body>
</html>
