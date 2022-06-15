<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{__('Admin dashboard')}} }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css"/>
    <!-- animation -->
    <link rel="stylesheet" href="{{asset('css/aos.css')}}"/>
    <!-- slider -->
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}"/>
    <!-- Icon -->
    <link rel="stylesheet" href="{{asset('css/materialdesignicons.min.css')}}" type="text/css"/>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}" type="text/css"/>
    <!-- App Js -->

</head>
<body>
<section class="navBar">
    <nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky nav-sticky" id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand text-uppercase" href="/"> <img class="logo-dark"
                                                                  src="{{ asset('images/logo-dark.png') }}" alt=""
                                                                  style="height: 70px" height="70"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="mdi mdi-menu"></span>
                <!-- toggle button -->
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto" id="navbar-navlist">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Benefits</a></li>
                    <li class="nav-item"><a class="nav-link" href="#review">Review</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#donate">Donate</a></li>
                </ul>
                <!-- Button trigger modal -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    @guest('admin')
                        @if (Route::has('admin.login'))
                            <button class="btn btn-primary  nav-btn me-md-2"><a href="{{ route('admin.login') }}">Log in</a>
                            </button>
                        @endif
                        @if (Route::has('admin.register'))
                            <button class="btn btn-outline-primary nav-btn"><a
                                    href="{{ route('admin.register') }}">Register</a></button>
                        @endif
                    @else
                        <div class="row">
                            <div class="col">
                                <div class="btn-group">
                                    <div class="profile">
                                        <button type="button" class="btn btn-primary  nav-btn me-md-2">
                                            <span id="name" class="my-auto link-white">{{ admin()->name }}</span>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary  nav-btn">
                                            <a  href="{{ route('admin.logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                                      class="d-none">
                                                    @csrf
                                                </form>
                                            </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
        <!-- End container -->
    </nav>
</section> <!-- NABVAR -->


<main class="vh-100 bg-account-pages">
    @yield('content')
</main>
</body>
</html>
