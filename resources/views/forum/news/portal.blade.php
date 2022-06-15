@extends('forum.news')
@section('content')
    <section class="section home home-2" id="home" style="background-image: url('./public/news-images/back.jpg');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="home-heading">
                        <h1 class="mt-5 text-white">Visit more, read more <span
                                class="typewrite text-primary d-none d-sm-inline-block" data-period="2000"
                                data-type='[ "YPOS" ]'>
                                <span class="wrap"></span> </span>
                        </h1></div>
                </div>
            </div>
            <!-- end col-->
        </div>
        <!-- end row-->
        <!--end container-->
    </section> <!-- HOME -->

    <!-- masonry
    ================================================== -->
    <section id="bricks">

        <div class="row masonry">

            <!-- brick-wrapper -->
            <div class="bricks-wrapper">

                <div class="grid-sizer"></div>

                <div class="brick entry featured-grid animate-this">
                    <div class="entry-content">
                        <div id="featured-post-slider" class="flexslider">
                            <ul class="slides">

                                <li>
                                    <div class="featured-post-slide">

                                        <div class="post-background"
                                             style="background-image:url("{{asset('news-images/featured-1.jpg')}}");"></div>

                                        <div class="overlay"></div>

                                        <div class="post-content">
                                            <ul class="entry-meta">
                                                <li>September 02, 2021</li>
                                                <li><a href="#">National Center for Injury Prevention and Control,
                                                        Division
                                                        of Violence Prevention</a></li>
                                            </ul>

                                            <h1 class="slide-title"><a href="{{route('single-standard')}}" title="">Fast Fact:
                                                    Preventing Bullying</a></h1>
                                        </div>

                                </li> <!-- /slide -->

                                <li>
                                    <div class="featured-post-slide">

                                        <div class="post-background"
                                             style="background-image:url("{{asset('news-images/featured-2.jpg')}}");"></div>

                                        <div class="overlay"></div>

                                        <div class="post-content">
                                            <ul class="entry-meta">
                                                <li>August 29, 2016</li>
                                                <li><a href="#">Sasuke Uchiha</a></li>
                                            </ul>

                                            <h1 class="slide-title"><a href="{{route('single-standard')}}" title="">Enhancing
                                                    Your
                                                    Designs with Negative Space</a></h1>
                                        </div>

                                </li> <!-- /slide -->

                                <li>
                                    <div class="featured-post-slide">

                                        <div class="post-background"
                                             style="background-image:url("{{asset('news-images/featured-3.jpg')}}");"></div>

                                        <div class="overlay"></div>

                                        <div class="post-content">
                                            <ul class="entry-meta">
                                                <li>August 27, 2016</li>
                                                <li><a href="#" class="author">Naruto Uzumaki</a></li>
                                            </ul>

                                            <h1 class="slide-title"><a href="#" title="">Music Album Cover Designs
                                                    for
                                                    Inspiration</a></h1>
                                        </div>


                                </li> <!-- end slide -->

                            </ul> <!-- end slides -->
                        </div> <!-- end featured-post-slider -->
                    </div> <!-- end entry content -->
                </div>

                <article class="brick entry format-standard animate-this">

                    <div class="entry-thumb">
                        <a href="{{route('anxiety')}}" class="thumb-link">
                            <img src="{{asset('news-images/featured-2.jpg')}}" alt="building">
                        </a>
                    </div>

                    <div class="entry-text">
                        <div class="entry-header">


                            <h1 class="entry-title"><a href="{{route('anxiety')}}">17 Ways to Control Anxiety, Anxiety
                                    Attacks</a>
                            </h1>

                        </div>
                        <div class="entry-excerpt">
                            Anxiety works its way into our minds, our bodies, taking control of who we think we are and
                            what
                            we think we can do. When anxiety takes over like this, it can be hard to keep moving
                            forward.
                            Thankfully, anxiety self-help gives you ways to control anxiety & anxiety attacks.
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="brick entry format-standard animate-this">

                    <div class="entry-thumb">
                        <a href="{{route('depression')}}" class="thumb-link">
                            <img src="{{asset('news-images/featured-3.jpg')}}" alt="ferris wheel">
                        </a>
                    </div>

                    <div class="entry-text">
                        <div class="entry-header">
                            <h1 class="entry-title"><a href="{{route('depression')}}">Depression</a></h1>

                        </div>
                        <div class="entry-excerpt">
                            <p>Major depressive disorder. Types of depression. Symptoms caused by major depression can
                                vary
                                from person to person. To clarify the type of depression you have, your doctor may add
                                one
                                or more specifiers. </p>
                        </div>
                    </div>

                </article> <!-- end article -->

                <!-- format audio here -->
                <article class="brick entry format-audio animate-this">

                    <div class="entry-thumb">
                        <a href="{{route('harassment')}}" class="thumb-link">
                            <img src="{{asset('news-images/featured-4.jpg')}}" alt="">
                        </a>

                    </div>

                    <div class="entry-text">
                        <div class="entry-header">
                            <h1 class="entry-title"><a href="{{route('harassment')}}">Social Media Harassment: 4 Types You
                                    Should
                                    Know</a></h1>

                        </div>
                        <div class="entry-excerpt">
                            The terminology ‘social media harassment’, sometimes characterized as online bullying,
                            refers to
                            the employment of the internet to stalk, intimidate, harm, or disgrace someone. Abuse,
                            harassing, trolls, flaming, and other forms of cyberbullying are all examples of
                            cyberbullying.
                        </div>
                    </div>

                </article> <!-- /article -->


                <!-- format audio here -->
                <article class="brick entry format-audio animate-this">

                    <div class="entry-thumb">
                        <a href="{{route('stress')}}" class="thumb-link">
                            <img src="{{asset('news-images/featured-5.png')}}" alt="">
                        </a>

                    </div>

                    <div class="entry-text">
                        <div class="entry-header">
                            <h1 class="entry-title"><a href="{{route('stress')}}">Stress</a></h1>

                        </div>
                        <div class="entry-excerpt">
                            Stress is a normal reaction the body has when changes occur, resulting in physical,
                            emotional
                            and intellectual responses. Stress management training can help you deal with changes in a
                            healthier way.
                        </div>
                    </div>

                </article> <!-- /article -->


                <article class="brick entry animate-this">

                    <div class="entry-thumb">
                        <a href="{{route('single-standard')}}" class="thumb-link">
                            <img src="{{asset('news-images/featured-6.png')}}" alt="">
                        </a>
                    </div>

                    <div class="entry-text">
                        <div class="entry-header">
                            <h1 class="entry-title"><a href="{{route('bullying')}}">How parents, teachers and kids can take
                                    action
                                    to prevent bullying</a></h1>

                        </div>
                        <div class="entry-excerpt">
                            Bullying is aggressive behavior that is intentional and involves an imbalance of power or
                            strength. It is a repeated behavior and can be physical, verbal or relational.
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="brick entry animate-this">

                    <div class="entry-thumb">
                        <a href="{{route('single-standard')}}" class="thumb-link">
                            <img src="{{asset('news-images/featured-7.jpg')}}" alt="">
                        </a>
                    </div>

                    <div class="entry-text">
                        <div class="entry-header">


                            <h1 class="entry-title"><a href="{{route('abuse')}}">Child Abuse and Neglect</a></h1>

                        </div>
                        <div class="entry-excerpt">
                            The warning signs of child abuse and neglect aren’t always obvious. But by learning to
                            recognize
                            the signs of a problem, you can make a huge difference in a child’s life.
                        </div>
                    </div>

                </article>
            </div>
        </div>


@endsection
