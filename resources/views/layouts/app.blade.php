<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/init.js')}}" defer></script>

    <!-- Fonts And CSS -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.loli.net/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <!--<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />-->
    <link href="https://fonts.loli.net/css?family=Nunito" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="wine-red lighten-1" role="navigation">
        <div class="nav-wrapper container ">
            <a id="logo-container" href="{{ url('/') }}" class="brand-logo">
                {{ config('app.name', 'Laravel') }}
            </a>
            <!-- <ul class="right hide-on-med-and-down red-wine-text text-lighten-1">
                @guest
                <li><a href="{{ url('login') }}" class="white-text">缴费</a></li>
                @if (Route::has('register'))
                <li><a href="{{ url('register') }}" class="white-text">报名</a></li>
                @endif @else @endguest
            </ul>

            <ul id="nav-mobile" class="sidenav">
                @guest
                <li><a href="{{ url('login') }}" class="wine-red-text text-lighten-1"><i class="material-icons">account_balance_wallet</i>缴费</a></li>
                @if (Route::has('register'))
                <li><a href="{{ url('register') }}" class="wine-red-text text-lighten-1"><i class="material-icons">account_box</i>报名</a></li>
                @endif @else @endguest
            </ul>
            <a href="{{ url('login') }}" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">dehaze</i></a> -->
        </div>
    </nav>

    <div id="app">
        <!-- <nav class="nav-wrapper wine-red  lighten-1">
            <div class="container">
                <a class="navbar-brand " href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <ul id="nav-mobile" class="sidenav">
                    @guest
                    <li>
                        <a href="{{ route('login') }}">{{ __('登陆') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}">{{ __('注册') }}</a>
                    </li>
                    @endif
                    @else
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="profile">我的资料</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                登出
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    <li>
                        <a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a>
                    </li>
                    @endguest
                </ul>
            </div>
    </div>
    </nav>-->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="page-footer wine-red" >
        <div class="footer-copyright">
            <div class="container">
                <a class="brown-text text-lighten-3" href="http://www.miitbeian.gov.cn/">冀ICP备17022988-号3</a>
                <p>©2019 MicroDistance. Powered by <a class="brown-text text-lighten-3" href="https://github.com/dz-paji/PortalPanel">PortalPanel</a></p>
            </div>
        </div>
    </footer>
</body>

</html>