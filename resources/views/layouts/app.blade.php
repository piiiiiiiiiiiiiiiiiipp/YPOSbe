<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
</head>
<body class="vh-100 bg-account-pages">
            @yield('content')

</body>
</html>
