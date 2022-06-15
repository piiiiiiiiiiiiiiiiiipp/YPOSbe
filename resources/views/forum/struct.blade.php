<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name', 'Laravel')}}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Styles -->


    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('forumcss/bootstrap.min.css')}}" type="text/css"/>
    <!-- animation -->
    <link rel="stylesheet" href="{{asset('forumcss/aos.css')}}"/>
    <!-- slider -->
    <link rel="stylesheet" href="{{asset('forumcss/swiper-bundle.min.css')}}"/>
    <!-- Icon -->
    <link rel="stylesheet" href="{{asset('forumcss/materialdesignicons.min.css')}}" type="text/css"/>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('forumcss/style.min.css')}}" type="text/css"/>
    <!-- App Js -->

    <link rel="stylesheet" href="{{asset('forumcss/create-topic.css')}}">

    <link rel="stylesheet" href="{{asset('dropdown-15/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('dropdown-15/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('dropdown-15/css/bootstrap.min.css')}}">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('dropdown-15/css/style.css')}}">

</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">
@include('forum.nav')
<div class="overflow-hidden-x">
@yield('content')
</div>
@if(Route::is('forum'))
    @include('components.contact_us')
@endif
@include('components.footer')
<button onclick="topFunction()" id="back-to-top"> <i class="mdi mdi-arrow-up"></i> </button>
<section class = "scripts">
    <!-- Droprown notifications -->
    <script src="{{asset('dropdown-15/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('dropdown-15/js/popper.min.js')}}"></script>
    <script src="{{asset('dropdown-15/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dropdown-15/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('dropdown-15/js/main.js')}}"></script>

    <!--Custom js-->
    <script src="{{asset('scripts/counter.js')}}"></script>
    <!--Bootstrap Js-->
    <script src="{{asset('scripts/bootstrap.bundle.min.js')}}"></script>
    <!-- animation -->
    <script src="{{asset('scripts/aos.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('scripts/swiper-bundle.min.js')}}"></script>
    <!-- contact -->
    <script src="{{asset('scripts/contact.js')}}"></script>
    <!-- Team particles-->
    <script src="{{asset('scripts/particles.min.js')}}"></script>
    <!-- App Js -->
    <script src="{{asset('scripts/app.js')}}"></script>
    <script src="{{asset('dropdown-15/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('dropdown-15/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</section> <!--SCRIPTS-->
</body>
</html>
