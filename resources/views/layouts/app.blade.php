<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="uk-background-primary uk-light">
        <nav class="uk-navbar-container uk-navbar-transparent">
            <div class="uk-container">
                <div class="uk-navbar" data-uk-navbar>                    
                    <a class="uk-navbar-item uk-logo" href="/">                                                
                        <i class="fas fa-book-reader uk-margin-small-right"></i> 
                        Library 
                    </a>
                    <div class="uk-navbar-center uk-visible@m">                        
                        <ul class="uk-navbar-nav">
                            <li><a href="/">Home</a></li>
                            <li><a href="#">Books</a></li>                            
                        </ul>
                    </div>
                    <a class="uk-navbar-toggle uk-navbar-right uk-hidden@m" uk-navbar-toggle-icon href="#offcanvas" uk-toggle></a>                                                
                    <div class="uk-navbar-right uk-visible@m">                                                
                        <ul class="uk-navbar-nav">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li>
                                        <a href="{{ route('login') }}">{{ __('Log In') }}</a>
                                    </li>
                                @endif
                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li>
                                    <a href="#">
                                        <span  class="fa fa-user mr-1"></span>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="uk-navbar-dropdown" uk-dropdown="offset: 10;pos: bottom-center">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li>
                                                <a class="" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <span data-uk-icon="sign-out"></span>
                                                    {{ __('Log Out') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endguest
                            <li>
								<a href="#"><i class="fa fa-flag mx-1"></i> Language</a>
								<div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-left" uk-dropdown="offset: 10;pos: bottom-left">
									<ul class="uk-nav uk-navbar-dropdown-nav">										
										<li><a href="#"> English</a></li>
										<li><a href="#"> Arabic</a></li>																				
									</ul>
								</div>
							</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </nav>        
    </div>

    <div class="uk-offcanvas-content">                    
        <!-- This is the off-canvas -->
        <div id="offcanvas" uk-offcanvas="mode: slide;">
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <div class="uk-flex uk-flex-column">                    
                    <a class="uk-navbar-item uk-logo" href="/">                                                
                        <i class="fas fa-book-reader uk-margin-small-right"></i> 
                        Library 
                    </a>
                
                    <ul class="uk-nav uk-flex uk-flex-column">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Books</a></li>                                                                                        
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a href="{{ route('login') }}">{{ __('Log In') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a href="#">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li>
                                            <a class="uk-rounded" href="{{ route('logout') }}"                                            
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">                                                                                                
                                                {{ __('Log Out') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endguest
                        <br>    
                        <li class="uk-parent">
                                <a href="#"><i class="fa fa-flag"></i> Language</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Arabic</a></li>
                                </ul>                            
                        </li>
                    </ul>
                        
                </div>
            </div>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="uk-section uk-section-xsmall uk-section-secondary">
        <div class="uk-container">
            <div class="uk-grid uk-text-center uk-text-left@s uk-flex-middle" data-uk-grid>
                <div class="uk-text-small uk-text-muted uk-width-1-3@s">
                    Copy Rights 2020 | All Rights Reserved
                </div>
                <div class="uk-text-center uk-width-1-3@s">
                    <a target="_blank" href="https://facebook.com/omer.mahdi.90"
                       class="uk-icon-button uk-margin-small-right" data-uk-icon="facebook"></a>
                    <a target="_blank" href="https://github.com/Torrix"
                       class="uk-icon-button uk-margin-small-right" data-uk-icon="github"></a>                    
                    <a target="_blank" href="https://twitter.com/mattfletcher"
                        class="uk-icon-button uk-margin-small-right" data-uk-icon="twitter"></a>
                    <a target="_blank" href="https://github.com/Torrix"
                        class="uk-icon-button" data-uk-icon="behance"></a>
                </div>
                <div class="uk-text-small uk-text-muted uk-text-center uk-text-right@s uk-width-1-3@s">
                    Built with <a target="_blank" href="http://getuikit.com"><span data-uk-icon="uikit"></span></a>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
