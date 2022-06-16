<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>YPOS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="YPOS - your problem our solution" />
  <meta name="keywords" content="YPOS - your problem our solution" />
  <meta content="Themesdesign" name="author" />
  <!-- fevicon -->
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

    <link rel="stylesheet" href="css/spec.css">
    <style> .modal-backdrop {
           bottom: 0;
           }
    </style>
  </head> <!-- HEAD -->

<!-- BODY -->
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71"> <!-- BODY -->

@include('forum.nav')

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
            <p class="text-white-50 fs-20">Our project is a multi-functional tool that aims to support and assist people facing problems such as bullying, domestic violence, etc.</p>

            <div class="row">
    <div class="col col-lg-4">
      <a class="btn btn-white me-1" href="#contact">Contact us</a>
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
  <div class="container">
      <h1>Specialists</h1>
      </div>
      <div class="container-xxl">
          @if(Session::has('message_sent'))
              <div class="alert alert-success" role="alert">
                  {{Session::get('message_sent')}}<i class="mdi mdi-heart text-danger"></i>
              </div>
      @endif
      <!-- Main Container for List of Doctors -->
<div class="list">
<!--  Container for Each Doctors Profile  -->
    <div class="drProfile">
        <!-- Container for Profile Picture, Fullname & Specialization -->
        <div class="drPicAndName">
            <div class="drPic" style="background-image:url('images/elena.jpg')" alt="Doctor Mary"></div>
            <div class="drNameAndSpec">
                <h3>Elena Alexsandrovna</h3>
                <p class="drSpec">
                    <i class="mdi mdi-doctor"></i> clinical psychologist</p>
                <p class="drAddress"><i class="mdi mdi-home"></i>  work experience-10 years</p>
            </div>
        </div>
        <!--  Container for Doctors Profile Information  -->
        <div class="drInfo">
            <span><i class="mdi mdi-email"></i> Worked with major depressive illnesses</span>
            <span></span>
        </div><!--drInfo-->
        <!--  Container for Doctors Googlemap Location  -->
        <div class="drLocation">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Make an appointment
            </button>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Appointment Request Form
                                <p>Make your appointments more easier</p></h5>
                        </div>
                        <div class="modal-body">
                            @if(Session::has('message_sent'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('message_sent')}}<i class="mdi mdi-heart text-danger"></i>
                                </div>
                            @endif
                            <form action="{{route('appoint')}}" method="post" enctype="multipart/form-data">
                                <fieldset>

                                    <legend>Your basic details</legend>
                                    <div class="mb-3">
                                    <label class="fs-14 mb-2" for="email">E-mail</label>
                                    <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                    <div class="mb-3">
                                    <label class="fs-14 mb-2" for="date">Date:</label>
                                    <input type="date" class="form-control "name="date" value="" required>
                                    </div>
                                    <div class="mb-3">
                                    <label for="time">Time*:</label>
                                    <input type="time" name="time"class="form-control " value="" required>
                                    </div>
                                    <div class="mb-3">
                                    <label for="time">Description*:</label>
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message*" required></textarea>
                                    </div>
                                </fieldset>
                                <button type="submit">Request For Appointment</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>






  <div class="drProfile">
    <!-- Container for Profile Picture, Fullname & Specialization -->
    <div class="drPicAndName">
      <div class="drPic" style="background-image:url('images/Yelaman.png')" alt="Doctor Mary"></div>
      <div class="drNameAndSpec">
        <h3>Yelaman Yelmuratov</h3>
        <p class="drSpec">
          <i class="mdi mdi-doctor"></i> Cardiology</p>
        <p class="drAddress"><i class="mdi mdi-home"></i> Аddress: Shakarim Kudaiberdiuly 38, 16.</p>
      </div>
    </div>
    <!--  Container for Doctors Profile Information  -->
      <div class="drInfo">
        <span><i class="mdi mdi-email"></i> e-mail: e99xxx.gmail.com</span>
        <span><i class="mdi mdi-cellphone"></i> phone: +7 (776) 230-92-81</span>
      </div><!--drInfo-->
    <!--  Container for Doctors Googlemap Location  -->
      <div class="drLocation">
        <button><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Read more</button>
      </div>
    </div>
      <div class="drProfile">
    <!-- Container for Profile Picture, Fullname & Specialization -->
    <div class="drPicAndName">
      <div class="drPic" style="background-image:url('images/Yelaman.png')" alt="Doctor Mary"></div>
      <div class="drNameAndSpec">
        <h3>Yelaman Yelmuratov</h3>
        <p class="drSpec">
          <i class="mdi mdi-doctor"></i> Cardiology</p>
        <p class="drAddress"><i class="mdi mdi-home"></i> Аddress: Shakarim Kudaiberdiuly 38, 16.</p>
      </div>
    </div>
    <!--  Container for Doctors Profile Information  -->
      <div class="drInfo">
        <span><i class="mdi mdi-email"></i> e-mail: e99xxx.gmail.com</span>
        <span><i class="mdi mdi-cellphone"></i> phone: +7 (776) 230-92-81</span>
      </div><!--drInfo-->
    <!--  Container for Doctors Googlemap Location  -->
      <div class="drLocation">
        <button><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Read more</button>
      </div>
    </div>
      <div class="drProfile">
    <!-- Container for Profile Picture, Fullname & Specialization -->
    <div class="drPicAndName">
      <div class="drPic" style="background-image:url('images/Yelaman.png')" alt="Doctor Mary"></div>
      <div class="drNameAndSpec">
        <h3>Yelaman Yelmuratov</h3>
        <p class="drSpec">
          <i class="mdi mdi-doctor"></i> Cardiology</p>
        <p class="drAddress"><i class="mdi mdi-home"></i> Аddress: Shakarim Kudaiberdiuly 38, 16.</p>
      </div>
    </div>
    <!--  Container for Doctors Profile Information  -->
      <div class="drInfo">
        <span><i class="mdi mdi-email"></i> e-mail: e99xxx.gmail.com</span>
        <span><i class="mdi mdi-cellphone"></i> phone: +7 (776) 230-92-81</span>
      </div><!--drInfo-->
    <!--  Container for Doctors Googlemap Location  -->
      <div class="drLocation">
        <button><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Read more</button>
      </div>
    </div>
      <div class="drProfile">
    <!-- Container for Profile Picture, Fullname & Specialization -->
    <div class="drPicAndName">
      <div class="drPic" style="background-image:url('images/Yelaman.png')" alt="Doctor Mary"></div>
      <div class="drNameAndSpec">
        <h3>Yelaman Yelmuratov</h3>
        <p class="drSpec">
          <i class="mdi mdi-doctor"></i> Cardiology</p>
        <p class="drAddress"><i class="mdi mdi-home"></i> Аddress: Shakarim Kudaiberdiuly 38, 16.</p>
      </div>
    </div>
    <!--  Container for Doctors Profile Information  -->
      <div class="drInfo">
        <span><i class="mdi mdi-email"></i> e-mail: e99xxx.gmail.com</span>
        <span><i class="mdi mdi-cellphone"></i> phone: +7 (776) 230-92-81</span>
      </div><!--drInfo-->
    <!--  Container for Doctors Googlemap Location  -->
      <div class="drLocation">
        <button><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Read more</button>
      </div>
    </div>
      <div class="drProfile">
    <!-- Container for Profile Picture, Fullname & Specialization -->
    <div class="drPicAndName">
      <div class="drPic" style="background-image:url('images/Yelaman.png')" alt="Doctor Mary"></div>
      <div class="drNameAndSpec">
        <h3>Yelaman Yelmuratov</h3>
        <p class="drSpec">
          <i class="mdi mdi-doctor"></i> Cardiology</p>
        <p class="drAddress"><i class="mdi mdi-home"></i> Аddress: Shakarim Kudaiberdiuly 38, 16.</p>
      </div>
    </div>
    <!--  Container for Doctors Profile Information  -->
      <div class="drInfo">
        <span><i class="mdi mdi-email"></i> e-mail: e99xxx.gmail.com</span>
        <span><i class="mdi mdi-cellphone"></i> phone: +7 (776) 230-92-81</span>
      </div><!--drInfo-->
    <!--  Container for Doctors Googlemap Location  -->
      <div class="drLocation">
        <button><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Read more</button>
      </div>
    </div>
      <div class="drProfile">
    <!-- Container for Profile Picture, Fullname & Specialization -->
    <div class="drPicAndName">
      <div class="drPic" style="background-image:url('images/Yelaman.png')" alt="Doctor Mary"></div>
      <div class="drNameAndSpec">
        <h3>Yelaman Yelmuratov</h3>
        <p class="drSpec">
          <i class="mdi mdi-doctor"></i> Cardiology</p>
        <p class="drAddress"><i class="mdi mdi-home"></i> Аddress: Shakarim Kudaiberdiuly 38, 16.</p>
      </div>
    </div>
    <!--  Container for Doctors Profile Information  -->
      <div class="drInfo">
        <span><i class="mdi mdi-email"></i> e-mail: e99xxx.gmail.com</span>
        <span><i class="mdi mdi-cellphone"></i> phone: +7 (776) 230-92-81</span>
      </div><!--drInfo-->
    <!--  Container for Doctors Googlemap Location  -->
      <div class="drLocation">
        <button><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Read more</button>
      </div>
    </div>
      <div class="drProfile">
    <!-- Container for Profile Picture, Fullname & Specialization -->
    <div class="drPicAndName">
      <div class="drPic" style="background-image:url('images/Yelaman.png')" alt="Doctor Mary"></div>
      <div class="drNameAndSpec">
        <h3>Yelaman Yelmuratov</h3>
        <p class="drSpec">
          <i class="mdi mdi-doctor"></i> Cardiology</p>
        <p class="drAddress"><i class="mdi mdi-home"></i> Аddress: Shakarim Kudaiberdiuly 38, 16.</p>
      </div>
    </div>
    <!--  Container for Doctors Profile Information  -->
      <div class="drInfo">
        <span><i class="mdi mdi-email"></i> e-mail: e99xxx.gmail.com</span>
        <span><i class="mdi mdi-cellphone"></i> phone: +7 (776) 230-92-81</span>
      </div><!--drInfo-->
    <!--  Container for Doctors Googlemap Location  -->
      <div class="drLocation">
        <button><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Read more</button>
      </div>
    </div>
      <div class="drProfile">
    <!-- Container for Profile Picture, Fullname & Specialization -->
    <div class="drPicAndName">
      <div class="drPic" style="background-image:url('images/Yelaman.png')" alt="Doctor Mary"></div>
      <div class="drNameAndSpec">
        <h3>Yelaman Yelmuratov</h3>
        <p class="drSpec">
          <i class="mdi mdi-doctor"></i> Cardiology</p>
        <p class="drAddress"><i class="mdi mdi-home"></i> Аddress: Shakarim Kudaiberdiuly 38, 16.</p>
      </div>
    </div>
    <!--  Container for Doctors Profile Information  -->
      <div class="drInfo">
        <span><i class="mdi mdi-email"></i> e-mail: e99xxx.gmail.com</span>
        <span><i class="mdi mdi-cellphone"></i> phone: +7 (776) 230-92-81</span>
      </div><!--drInfo-->
    <!--  Container for Doctors Googlemap Location  -->
      <div class="drLocation">
        <button><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Read more</button>
      </div>
    </div>
          <div class="drProfile">
    <!-- Container for Profile Picture, Fullname & Specialization -->
    <div class="drPicAndName">
      <div class="drPic" style="background-image:url('images/Yelaman.png')" alt="Doctor Mary"></div>
      <div class="drNameAndSpec">
        <h3>Yelaman Yelmuratov</h3>
        <p class="drSpec">
          <i class="mdi mdi-doctor"></i> Cardiology</p>
        <p class="drAddress"><i class="mdi mdi-home"></i> Аddress: Shakarim Kudaiberdiuly 38, 16.</p>
      </div>
    </div>
    <!--  Container for Doctors Profile Information  -->
      <div class="drInfo">
        <span><i class="mdi mdi-email"></i> e-mail: e99xxx.gmail.com</span>
        <span><i class="mdi mdi-cellphone"></i> phone: +7 (776) 230-92-81</span>
      </div><!--drInfo-->
    <!--  Container for Doctors Googlemap Location  -->
      <div class="drLocation">
        <button><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Read more</button>
      </div>
    </div>

</div>
   </div>
    </section>
<section>
     <!-- CONRACT FORM -->
      @include('components.contact_us')

      @include('components.footer')
</section>
    <section class = "scripts">
   <!-- Droprown notifications -->
    <script src="dropdown-15/js/jquery-3.3.1.min.js"></script>
    <script src="dropdown-15/js/popper.min.js"></script>
    <script src="dropdown-15/js/bootstrap.min.js"></script>
    <script src="dropdown-15/js/owl.carousel.min.js"></script>
    <script src="dropdown-15/js/main.js"></script>

  <!--Custom js-->
  <script src="scripts/counter.js"></script>
  <!--Bootstrap Js-->
  <script src="scripts/bootstrap.bundle.min.js"></script>
  <!-- animation -->
  <script src="scripts/aos.js"></script>
  <!-- swiper js -->
  <script src="scripts/swiper-bundle.min.js"></script>
  <!-- contact -->
  <script src="scripts/contact.js"></script>
  <!-- Team particles-->
  <script src="scripts/particles.min.js"></script>
  <!-- App Js -->
  <script src="scripts/app.js"></script>

  </section> <!--SCRIPTS-->
  </body>
</html>
