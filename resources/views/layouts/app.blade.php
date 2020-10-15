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

    <footer class="container-fluid footer-login">

        <div class="row mt-5 lista-links">
            <div class="col-md-1"></div>
            <div class="col-12 col-sm-12 col-md mt-5 mb-5 lista-links">
                <h4 class="text-center-sm">Información de contacto</h4>
                <ul class="list-group list-unstyled">
                    <li><i class="fas fa-directions"></i> Carrera 9 N° 71N-60 Popayán, Cauca</li>
                    <li class="mt-1 ml-1"><i class="fas fa-mobile-alt mr-1"></i> +57 3154954820</li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-3 mt-5 mb-5 lista-links">
                <h4 class="text-center-sm">Redes sociales</h4>
                <ul class="list-group list-unstyled ">
                    <li> <a href="" target="_blank"><i class="fab fa-facebook-square fa-2x" id="icon-fot"></i> </a>
                        <a href="" target="_blank"><i class="fab fa-twitter-square fa-2x" id="icon-fot"></i> </a>
                        <a href="" target="_blank"><i class="fab fa-instagram fa-2x" id="icon-fot"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md mt-5 mb-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1993.0374246986253!2d-76.56287287983018!3d2.4821742503692894!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e300410eb607c65%3A0x614545787e90bea6!2sSENA!5e0!3m2!1ses-419!2sco!4v1576603028265!5m2!1ses-419!2sco" width="100%" height="200px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 mb-1 text-center">
            <span id="copy">Copyright&copy;2020</span>
            </div>
        </div>

    </footer>
</body>

</html>
