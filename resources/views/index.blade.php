<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>YPOS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="YPOS - your problem our solution" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <!-- animation -->
    <link rel="stylesheet" href="css/aos.css"/>
    <!-- slider -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css"/>
    <!-- Icon -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css" type="text/css"/>
    <!-- css -->
    <link rel="stylesheet" href="css/style.min.css" type="text/css"/>
</head>
<!-- BODY -->
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71"> <!-- BODY -->

<!-- NABVAR -->
@include('components.navbar')
<div class="overflow-hidden-x">

    <!-- HOME -->
    @include('indexsection')
    <!-- CONRACT FORM -->
    @include('components.contact_us')

   @include('components.footer')
    <!--BACK TO TOP-->
    <button onclick="topFunction()" id="back-to-top"> <i class="mdi mdi-arrow-up"></i> </button>   <!--BACK TO TOP-->

    <!--SCRIPTS-->
    <section class = "scripts">
        <!--Custom scripts-->
        <script src="scripts/counter.js"></script>
        <!--Bootstrap Js-->
        <script src="scripts/bootstrap.bundle.min.js"></script>
        <!-- animation -->
        <script src="scripts/aos.js"></script>
        <!-- swiper scripts -->
        <script src="scripts/swiper-bundle.min.js"></script>
        <!-- contact -->
        <script src="scripts/contact.js"></script>
        <!-- Team particles-->
        <script src="scripts/particles.min.js"></script>
        <!-- App Js -->
        <script src="scripts/app.js"></script>

        <!--        <script type="module" src="index.scripts"></script>-->

        <script type="module" src="scripts/donate.js"></script>
    </section> <!--SCRIPTS-->

</div>

</body>

</html>
