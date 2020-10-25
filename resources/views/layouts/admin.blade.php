<!doctype html>
<html dir="auto" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Library') }}</title> --}}
    <title>{{__('web.library')}}</title>
    

    @if ( app()->getLocale() == 'ar') 
        <!-- Font  -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet"> 
        <!-- Styles -->
        <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            *:not(i) {
                font-family: 'Cairo' !important;
                text-align: right;
            }
            #contact h5 ,#contact p {
                text-align: right;
            }
            #last-nav{
                margin-right: auto;
            }
        </style>
    @else
        <!-- Styles -->
        <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            #last-nav{
                margin-left: auto;
            }
        </style>
    @endif 

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top bg-black" style="border-bottom: 2px solid #333;z-index: 2">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/admin/users') }}">
                    <i class="text-primary ion-md-cog"></i>
                    <b class="text-white">{{__('web.dashboard')}}</b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="ion-md-menu text-white"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ">
                        <li class="nav-item"><a class="nav-link text-white" href="/admin/users">
                            {{__('web.users')}}
                        </a></li>
                        <li class="nav-item d-none d-sm-inline-block"><span class="nav-link text-gray">|</span></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/admin/books"> {{trans_choice('web.book',10)}}</a></li>
                        <li class="nav-item d-none d-sm-inline-block"><span class="nav-link text-gray">|</span></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/admin/exams"> {{trans_choice('web.exam',10)}}</a></li>
                        <li class="nav-item d-none d-sm-inline-block"><span class="nav-link text-gray">|</span></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/admin/projects"> {{trans_choice('web.project',10)}}</a></li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav" id="last-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}"><i class="ion-md-person"></i> {{ __('web.login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}"><i class="ion-md-person-add"></i> {{ __('web.register') }}</a>
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
                                        <i class="ion-md-log-out"></i> {{ __('web.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link text-white dropdown-toggle" href="#" role="button" id="lang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-flag"></i> {{__('web.lang')}}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="lang">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-5" style="background: #f2f2f2">
            @yield('content')
        </main>

        <footer class="pt-4 pb-2 px-3 mt-0 text-white ">
            <div class="container text-center">
                <p class="text-center"> <i class="ion-ios-book text-primary"></i> {{__('web.copyright')}}</p>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
