<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app="home">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- AngularJS -->
    <script src="{{ asset('js/angularJS/1.8.2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/homeController.js') }}"></script>
    
    <!-- SweetAlert -->
    <script src="{{ asset('js/sweetAlert.js') }}"></script>

</head>

<style>
    body{
        font-family: 'Montserrat', sans-serif;
    }
</style>
<body ng-controller="homeController">
    <div id="app">
        <nav class="navbar navbar-expand-md bg-nb shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img width="200" src="{{ asset('img/logo.png') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="colorTexto1"> 
                        <b>Menú</b>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <br>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto pt-5 pb-0">
                        <li class="nav-item">   
                            <a class="nav-link cabecera" href="/nosotros"><h5><b>Nosotros</b> <span class="not_priority">|</span> </h5></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link cabecera" href="/usuarios"><h5><b>Usuario</b> <span class="not_priority">|</span> </h5></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link cabecera" href="/especialista"><h5><b>Especialista</b> <span class="not_priority">|</span> </h5></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link cabecera" href="/seguridad"><h5><b>Seguridad</b> <span class="not_priority">|</span> </h5></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link cabecera" href="/ayuda"><h5><b>Ayuda</b> </h5></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link cabecera" href="/login">
                                <button class="button1"> &nbsp;&nbsp; Iniciar Sesión &nbsp;&nbsp; </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>



    <!-- Pie de página -->
    <footer class="bg-footer text-white">
        <div class="col-12 p-4 pl-5">
            <div class="row">
                <!-- Enlaces -->
                <div class="col-md-8 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-6 size5">
                            Compañía
                            <dl class="size6">
                                <dd> <a href="/nosotros" class="pie"> Quienes somos </a> </dd>
                                <dd> <a href="/nosotros" class="pie"> Lo que ofrecemos </a> </dd>
                                <dd> <a href="/nosotros" class="pie"> Cómo funciona Health& </a> </dd>
                                <dd> <a href="#" class="pie"> Privacidad / Términos y condiciones</a> </dd>
                            </dl>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 size5">
                            Usuarios
                                <dl class="size6">
                                    <dd> <a href="/ayuda" class="pie"> Especialistas </a> </dd>
                                    <dd> <a href="/ayuda" class="pie"> Preguntas frecuentes </a> </dd>
                                    <dd> <a href="#" class="pie"> Centro de soporte </a> </dd>
                                </dl>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6 size5">
                            Especialistas
                                <dl class="size6">
                                    <dd> <a href="/ayuda#especialistas" class="pie"> Requisitos para realizar consultas en Health& </a> </dd>
                                    <dd> <a href="/especialista#beneficios" class="pie"> Ganancias con Health& </a> </dd>
                                </dl>
                        </div>
                    </div>
                </div>
                <!-- Enlaces externos -->
                <div class="col-md-4 col-12 pt-3">
                   <div class="row pt-5 mt-5 centerXY">
                        <!-- Redes sociales -->
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="row">
                                <a href="#" class="col-6">
                                    <svg class="pie" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg>
                                </a>
                                <a href="#" class="col-6">
                                    <svg class="pie" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <!-- App -->
                        <div class="col-md-9 col-sm-9 col-6">
                            <div class="row">
                                <a href="#" class="col-md-6 col-sm-6 col-10">
                                    <object class="img-fluid" data="{{ asset('img/appstore.svg') }}" type="image/svg+xml"></object>
                                </a>
                                <a href="#" class="col-md-6 col-sm-6 col-10">
                                    <object class="img-fluid" data="{{ asset('img/playstore.svg') }}" type="image/svg+xml"></object>
                                </a>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
