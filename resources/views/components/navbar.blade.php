<section class = "navBar">
    <nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky" id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand text-uppercase" href="/"> <img class="logo-light" src="images/logo-light.png" alt="" height="70"> <img class="logo-dark" src="images/logo-dark.png" alt="" height="70"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="mdi mdi-menu"></span>
                <!-- toggle button -->
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto" id="navbar-navlist">
                    <li class="nav-item"> <a class="nav-link active" href="#home">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#features">Benefits</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#review">Review</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#team">Team</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#donate">Donate</a> </li>
                </ul>
                <!-- Button trigger modal -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    @guest
                        @if (Route::has('login'))
                            <button class="btn btn-primary  nav-btn me-md-2" ><a href="{{ route('login') }}" >Log in</a></button>
                        @endif
                            @if (Route::has('register'))
                    <button class="btn btn-outline-primary nav-btn" ><a href="{{ route('register') }}">Register</a></button>
                            @endif
                    @else
                        <div class="row">
                            <div class="col">
                                <div class="btn-group">
                                    <div class="profile">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <span id="name" class="my-auto link-white">{{ Auth::user()->name }}</span> <img class="my-0 mx-1 rounded-circle" width="25px" height="25px" src="images/home-parth-1.jpg"> </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">My account</a></li>
                                            <li><a class="dropdown-item" href="#">Settings</a></li>
                                            <li>
                                                <hr class="dropdown-divider"> </li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endguest
                </div>
                <!-- Nav btn -->
            </div>


        </div>
        <!-- End container -->
    </nav>
</section> <!-- NABVAR -->

