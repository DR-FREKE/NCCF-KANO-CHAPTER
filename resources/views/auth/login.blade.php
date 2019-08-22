<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/nccfpic-128x156-1.png" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexboxgrid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/adminloginStyle.css')}}">


    <script type="text/javascript" src="{{ asset('js/SmoothScroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/AjaxClass.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/LoginClass.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AjaxScript/Starter.js') }}"></script>
</head>

<body>
    <div id="app">
        <header id="main-header">
            <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="assets/images/nccfpic-122x149.png" alt="" title="" height="50"> <strong>NCCF Kano Chapter</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}"><strong>Home</strong></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="">
            <div class="container" style="margin-top: 10em;">
                <div class="row justify-content-center">
                    <div class="col-md-4 holder">
                        <div class="card">
                            <div class="card-header">{{ __('Login') }}</div>

                            <div class="card-body">
                                <form class="form-horizontal">

                                    <div class="form-group row form-g">
                                        <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                                        <div class="col-md-12 mInput">
                                            <input id="email" type="email" placeholder="enter email" class="input_field" name="email" autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row form-g">
                                        <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                                        <div class="col-md-12">
                                            <input id="password" type="password" placeholder="enter password" class="input_field" name="password">
                                        </div>
                                    </div>

                                    <!-- <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="form-group row mb-0">
                                        <div class="col-md-5 offset-md-0">
                                            <button type="button" class="mLogin" id="btnLogin">
                                                Login
                                            </button>
                                            <!--@if (Route::has('password.request'))-->
                                        </div>
                                        <div class="col-md-7 offset-md-0">
                                            <a class="btn btn-link" id="forgotpsw" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            <!--@endif-->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- <script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/countdown.js') }}"></script> -->
</body>

</html>