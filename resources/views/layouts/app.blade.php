<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'epsilex') }}</title>
    
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href=" {{ asset('images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vende/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vende/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vende/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vende/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vende/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vende/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/nunito-font.css') }}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a href="{{route('index')}}" class="btn btn-outline-primary"><em>{{ env('APP_NAME')}}</em></a>
                    @guest 
                        <div class="form-inline cash-nav fo my-2 my-lg-0" style="margin-left:70%">
                        <a href="{{route('register')}}" class="btn btn-primary">Inscription</a>
                        <a href="{{route('login')}}" class="btn btn-outline-primary">Connection</a>
                        </div>
                    @endguest
                    @auth
                        <div class="nav-item dropdown" style="margin-left:85%">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ ('se déconnecter') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                          </div>
                     </div>
                  @endauth
            </div>
        </div>
    </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vende/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vende/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vende/bootstrap/js/popper.js"></script>
	<script src="vende/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vende/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vende/daterangepicker/moment.min.js"></script>
	<script src="vende/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vende/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>
