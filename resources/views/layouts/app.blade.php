<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EasyBuy</title>
    <link rel="shortcut icon" href="" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles_login.css')}}" rel="stylesheet">
    <link href="{{ asset('css/styles_footer.css')}}" rel="stylesheet">

    <!-- Icons -->
    <link href="{{ asset('font-awesome/css/all.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/login.js') }}" defer></script>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm navbar-login">
            <div class="col-sm-1">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/marca2.png" id="logo easy" alt="Logo Easy-buy" width="200%">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto"></ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <div class="col-sm-1  ">
                        <li class="nav-item item-login">
                            <h1 id="title-login">EasyBuy</h1>
                            <h5>Multitiendas</h5>
                        </li>
                        <div class="col-sm-1">
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->nombres }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>

        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
