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
    <section class="section home home-1" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="home-heading">
                        <h1 class="mt-5 text-white">Your problem - <br>our solution <span class="typewrite text-primary d-none d-sm-inline-block" data-period="2000" data-type='[ "YPOS" ]'>
                                <span class="wrap"></span> </span>
                        </h1> </div>
                    <p class="text-white-50 fs-20">Our project is a multi-functional tool that aims to support and assist people facing problems such as bullying, domestic violence, insecurities and etc.</p>

                    <div class="row">
                        <div class="col col-lg-4">
                            <a class="btn btn-white me-1" href="forum_new.html">Go to forum</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col-->
        </div>
        <!-- end row-->
        <!--end container-->
    </section> <!-- HOME -->

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="home-shape-arrow"> <a href="#features" class="mouse-down"><i class="mdi mdi-arrow-down arrow-icon text-dark h5"></i></a> </div>
            </div>
            <!--end row-->
        </div>
    </section> <!-- Picture -->

    <!-- BENEFITS -->
    <section class="section feature" id="features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-4">
                        <h2 class="heading">Our benefits</h2>
                        <p class="text-muted fs-17">Kazakhstan takes first place among CIS countries, so to cope with it, we wanted to contribute in order to improve to better side this situation. YPOS is a project with a bright future, join us and be healthy! </p>
                    </div>
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 mt-sm-4">
                    <div data-aos="fade-right" data-aos-duration="1800">
                        <div class="feature-card p-3 py-sm-4 rounded d-flex">
                            <div class="flex-shrink-0"> <i class="mdi mdi-responsive text-primary float-start me-3 h2"></i> </div>
                            <div class="flex-grow-1 ms-2">
                                <div class="content">
                                    <h5 class="title">Qualified specialists</h5>
                                    <p class="text-muted">Get sessions with qualified professionals. First session is free. </p> <a href="forum/" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4 col-md-7 mt-sm-4">
                    <div class="feature-card p-3 py-sm-4 rounded"> <i class="mdi mdi-layers-triple-outline text-primary float-start me-3 h2"></i>
                        <div class="content d-block overflow-hidden">
                            <h5 class="title">News portal</h5>
                            <p class="text-muted mt-2">Know more about how to deal with your problems. </p> <a href="forum/newsPortal.html" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a> </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4 col-md-7 mt-sm-4">
                    <div data-aos="fade-left" data-aos-duration="1800">
                        <div class="feature-card p-3 py-sm-4 rounded"> <i class="mdi mdi-clipboard-flow-outline text-primary float-start me-3 h2"></i>
                            <div class="content d-block overflow-hidden">
                                <h5 class="title">YPOS forum</h5>
                                <p class="text-muted mt-2">Place where you can ask your question, share with your experience and know other’s stories who had gone through it.</p> <a href="forum/forum_new.html" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a> </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row my-sm-5 py-5 align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div data-aos="fade-right" data-aos-duration="1800">
                        <div class="card bg-transparent border-0 mb-3 mb-lg-0"> <img src="images/feature1.png" class="img-fluid rounded-3" alt=""> </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-5">
                    <div data-aos="fade-left" data-aos-duration="1800">
                        <h3 class="feature-heading mb-2">Why you need to choose us?</h3>
                        <p class="text-muted">We tend to create the best psychological community in Kazakhstan. Become a part of it too! </p>
                        <ul class="feature-list">
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>Privacy is a number one priority.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>Qualification is what really matters. </li>
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>Communication does everything.</li>
                        </ul>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <section class = "faqSection">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div data-aos="fade-right" data-aos-duration="1800">
                            <h3 class="feature-heading">We aim to help all → FAQ
                            </h3>
                            <p class="text-muted">We answer every question that appears. Here some of them:</p>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item"> <!-- 1 QUESTION -->
                                    <h2 class="accordion-header" id="headingOne">
                                        <a class="accordion-button" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div>
                                                <p class="mb-0">" How can I help you? "</p>
                                            </div>
                                        </a>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Join us, share with friends, donate. </p></div>
                                    </div>
                                </div>

                                <div class="accordion-item"> <!-- 2 QUESTION -->
                                    <h2 class="accordion-header" id="headingTwo">
                                        <a class="accordion-button collapsed" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div>
                                                <p class="mb-0">" What is consultation? / How it is provided? "</p>
                                            </div>
                                        </a>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Consultations are any type of conversations with specialist, provided anonymously, if you want, carried out through our website. </p></div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <a class="accordion-button collapsed" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <div>
                                                <p class="mb-0">" How can I be sure that my messages are sent anonymously? "</p>
                                            </div>
                                        </a>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>No one have no access to your messages sent in your personal chats, they're encoded.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div data-aos="fade-left" data-aos-duration="1800">
                            <div class="card bg-transparent border-0"> <img src="images/feature2.png" class="img-fluid" alt=""> </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
            </section>
        </div>
        <!-- end container -->
    </section> <!-- BENEFITS -->

    <!-- REVIEWS -->
    <section class="section reviews" id="review">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h2 class="heading">Feedback from you</h2>
                        <p class="text-muted fs-17">If you are still undecided about joining our forum, we encourage you to read our feedback. We believe it will change your mind.</p>
                    </div>
                </div>
                <!-- end col-->
                <div class="col-lg-8">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators mb-0">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card bg-transparent reviews-box h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="card reviews-card">
                                                    <div class="card-body text-center"> <img class="img-fluid" src="images/Khabdrazakov%20Kenesary.jpg" alt="">
                                                        <div class="mt-3">
                                                            <h6 class="mb-0">Kenesary Khabdrazakov</h6>
                                                            <p class="text-muted mb-0 fs-14">Classmate</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="reviews-heading">Reviews</h5>
                                                <div class="d-flex align-items-top">
                                                    <div class="flex-shrink-0"> <img class="reviews-quote-1" src="images/quote.png" alt=""> </div>
                                                    <div class="flex-grow-1 ms-2 mt-2">
                                                        <p class="text-muted fs-14 mt-xl-4">Great platform! I'm very satisfied, I had psychological problems but thanks to the forum I was able to solve everything, thank you!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card bg-transparent reviews-box h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="card reviews-card">
                                                    <div class="card-body text-center"> <img class="img-fluid" src="images/Talgat%20Amiralin.jpg" alt="">
                                                        <div class="mt-3">
                                                            <h6 class="mb-0">Amiralin Talgat</h6>
                                                            <p class="text-muted mb-0 fs-14">Classmate</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="reviews-heading">Reviews</h5>
                                                <div class="d-flex align-items-top">
                                                    <div class="flex-shrink-0"> <img class="reviews-quote-1" src="images/quote.png" alt=""> </div>
                                                    <div class="flex-grow-1 ms-2 mt-2">
                                                        <p class="text-muted fs-14 mt-xl-4">I think it's very COOOOOOOOL!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card bg-transparent reviews-box h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="card reviews-card">
                                                    <div class="card-body text-center"> <img class="img-fluid" src="images/Ainabekov%20Alisher.jpg" alt="">
                                                        <div class="mt-3">
                                                            <h6 class="mb-0">Ainabekov Alisher</h6>
                                                            <p class="text-muted mb-0 fs-14">Classmate</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="reviews-heading">Reviews</h5>
                                                <div class="d-flex align-items-top">
                                                    <div class="flex-shrink-0"> <img class="reviews-quote-1" src="images/quote.png" alt=""> </div>
                                                    <div class="flex-grow-1 ms-2 mt-2">
                                                        <p class="text-muted fs-14 mt-xl-4">I Love this site! VERY COOOL!!!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-->
            </div>
            <!-- End row-->
        </div>
        <!-- end container-->
    </section> <!-- REVIEWS -->

    <!-- CTA -->
    <section class="section cta">
        <marquee behavior="" direction="left">
            <p class="mb-0">Kazakhstan takes first place among CIS countries, so to cope with it, we wanted to contribute in order to improve to better side this situation. YPOS is a project with a bright future, join us and be healthy!</p>
        </marquee>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <div data-aos="fade-down" data-aos-duration="1800">
                        <div class="cta-heading">Talk to the best specialists</div>
                        <p>Once you are familiar with us, hurry up and join our FORUM, where you can talk to experts and discuss sensitive issues with other people.</p>
                        <a class="btn btn-primary" href="javascript:void(0)">Learn More</a> </div>
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->
        </div>
        <!-- end container-->
    </section>  <!-- CTA -->

    <!-- TEAM -->
    <section class="section team" id="team" style="z-index: 1;">
        <div id="particles-js" style="z-index: -1;"> </div>
        <!-- end particles -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h2 class="heading">Team</h2>
                    </div>
                </div>
                <!-- end col-->
            </div>
            <!-- end row -->
            <div class="row gy-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card  h-100">
                        <div class="team-card-img"> <img class="img-fluid" src="images/Elnara.png" alt="image">
                            <div class="team-social-icons">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/profile.php?id=100082299007727" target=""> <i class="mdi mdi-facebook"></i> </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://twitter.com/pippeepeepoopoo" target=""> <i class="mdi mdi-twitter"></i> </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.linkedin.com/in/elnara-khanafieva-77bb88241/" target=""> <i class="mdi mdi-linkedin"></i> </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/piiiiiiiiiiiiiiiipp/" target=""> <i class="mdi mdi-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-card-text-2">
                            <h5 class="fw-bold mb-0">Khanafieva Elnara</h5>
                            <p class="mb-0 fs-13 text-muted">Back End Developer</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card  h-100">
                        <div class="team-card-img"> <img class="img-fluid" src="images/Yelaman.png" alt="image">
                            <div class="team-social-icons">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" target=""> <i class="mdi mdi-facebook"></i> </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" target=""> <i class="mdi mdi-linkedin"></i> </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" target=""> <i class="mdi mdi-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-card-text-2">
                            <h5 class="fw-bold mb-0">Yelmuratov Yelaman</h5>
                            <p class="mb-0 fs-13 text-muted">Front End Developer</p>
                        </div>
                    </div>
                </div>
                <!-- End col -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card h-100">
                        <div class="team-card-img"> <img class="img-fluid" src="images/Aikerim.png" alt="image">
                            <div class="team-social-icons">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" target=""> <i class="mdi mdi-linkedin"></i> </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/mutievaai/" target=""> <i class="mdi mdi-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-card-text-2">
                            <h5 class="fw-bold mb-0">Muti Aikerim</h5>
                            <p class="mb-0 fs-13 text-muted">Team Lead</p>
                        </div>
                    </div>
                </div>
                <!-- End col -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card  h-100">
                        <div class="team-card-img"> <img class="img-fluid" src="images/Altynai.png" alt="image">
                            <div class="team-social-icons">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" target=""> <i class="mdi mdi-linkedin"></i> </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/altynymai_/" target=""> <i class="mdi mdi-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-card-text-2">
                            <h5 class="fw-bold mb-0">Kadyrbek Altynay</h5>
                            <p class="mb-0 fs-13 text-muted">Manager</p>
                        </div>
                    </div>
                </div>
                <!-- End col-->
            </div>
            <!-- end row-->
        </div>
        <!-- end cotainer-->
    </section> <!-- TEAM -->
    <section id="donate">
        <div class="container">
            <div class="row my-sm-5 py-5 align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div data-aos="fade-right" data-aos-duration="1800">
                        <div class="card bg-transparent border-0 mb-3 mb-lg-0"> <img src="images/donate.jpg" class="img-fluid rounded-3" alt=""> </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-5">
                    <div data-aos="fade-left" data-aos-duration="1800">
                        <h3 class="feature-heading mb-2">Donate</h3>
                        <p class="text-muted">If you want to help further develop our project, you can do so by clicking on the button and pay through PayPal or card.</p>
                        <div style="margin-top: 1rem; margin-bottom: 1rem;">
                            <input name="amountInput" type="number" id="amountInput" class="form-control" placeholder="Enter the amount of money in USD" min="1">
                        </div>
                        <div id="smart-button-container" style="text-align: center; margin-top: 0.625rem;">
                            <div id="paypal-button-container"></div>
                            <script src="https://www.paypal.com/sdk/js?client-id=Ad62G7YHzhTPYWLejL0aRt5GXqoQvPxnkS7qaSgCji0itA1t6y9I_b24fUsZf2vuJn3vOlP597dDWGZX&disable-funding=venmo,paylater&currency=USD" data-sdk-integration-source="button-factory"></script>
                        </div>

                    </div>
                    <!-- end col -->
                </div>
            </div>
        </div>
    </section>
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
