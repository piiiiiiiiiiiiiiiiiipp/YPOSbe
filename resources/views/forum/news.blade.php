<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>News Portal</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('news-css/base.css')}}">
    <link rel="stylesheet" href="{{asset('news-css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('news-css/news.css')}}">
    <link rel="stylesheet" href="{{asset('forumcss/materialdesignicons.min.css')}}" type="text/css"/>


    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('forumcss/bootstrap.min.css')}}" type="text/css"/>
    <!-- animation -->
    <!-- slider -->
    <link rel="stylesheet" href="{{asset('forumcss/swiper-bundle.min.css')}}"/>
    <!-- Icon -->
    <link rel="stylesheet" href="{{asset('forumcss/materialdesignicons.min.css')}}" type="text/css"/>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('forumcss/style.min.css')}}" type="text/css"/>
    <!-- App Js -->


    <link rel="stylesheet" href="{{asset('dropdown-15/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('dropdown-15/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('dropdown-15/css/bootstrap.min.css')}}">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('dropdown-15/css/style.css')}}">
    <!-- App Js -->

</head>

<body id="top">
@include('forum.nav')
@yield('content')

@include('components.footer')

<section>
<!-- Java Script
================================================== -->
</section>
</body>

</html>
