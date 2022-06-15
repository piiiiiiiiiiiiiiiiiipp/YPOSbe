@extends('forum.struct')
@section('content')

<main id="tt-pageContent">
    <div class="container">
        <div class="tt-single-topic-list">
            <div class="tt-item">
                 <div class="tt-single-topic">
                    <div class="tt-item-header">
                        <div class="tt-item-info info-top">
                            <div class="tt-avatar-icon">
                                <i class="tt-icon"><svg><use xlink:href="#icon-ava-d"></use></svg></i>
                            </div>
                            <div class="tt-avatar-title">
                               <a href="#">Admin</a>
                            </div>
                            <a href="#" class="tt-info-time">
                                <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>28 April, 2022
                            </a>
                        </div>
                        <h3 class="tt-item-title">
                            <a href="#">Bullying</a>
                        </h3>
                    </div>
<div class="tt-item-description">
                        <h6 class="tt-title">Below you can write your problems, your experience related to this topi and maybe tips how to deal with it</h6>
                    </div>
                    <div class="tt-item-info info-bottom">
                        <a href="#" class="tt-icon-btn">
                            <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                            <span class="tt-text">671</span>
                        </a>
                        <a href="#" class="tt-icon-btn">
                             <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                            <span class="tt-text">39</span>
                        </a>

                        <div class="col-separator"></div>
                    </div>
                </div>
            </div>
            <div class="tt-item">
                <div class="tt-info-box">
                    <div class="row-object-inline form-default">
                        <h6 class="tt-title">Sort replies by:</h6>
                        <ul class="tt-list-badge tt-size-lg">
                            <li><a href="#"><span class="tt-badge">Recent</span></a></li>
                            <li><a href="#"><span class="tt-color02 tt-badge">Most Liked</span></a></li>
                            <li><a href="#"><span class="tt-badge">Longest</span></a></li>
                            <li><a href="#"><span class="tt-badge">Shortest</span></a></li>
                        </ul>
                        <select class="tt-select form-control">
                            <option value="Recent">Recent</option>
                            <option value="Most Liked">Most Liked</option>
                            <option value="Longest">Longest</option>
                            <option value="Shortest">Shortest</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="tt-item">
                 <div class="tt-single-topic">
                    <div class="tt-item-header pt-noborder">
                        <div class="tt-item-info info-top">
                            <div class="tt-avatar-icon">
                                <i class="tt-icon"><svg><use xlink:href="#icon-ava-t"></use></svg></i>
                            </div>
                            <div class="tt-avatar-title">
                               <a href="#">lonely_koala</a>
                            </div>
                            <a href="#" class="tt-info-time">
                                <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>18 April, 2022
                            </a>
                        </div>
                    </div>
                    <div class="tt-item-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="tt-item-info info-bottom">
                        <a href="#" class="tt-icon-btn">
                            <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                            <span class="tt-text">671</span>
                        </a>
                        <a href="#" class="tt-icon-btn">
                             <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                            <span class="tt-text">39</span>
                        </a>
                        <div class="col-separator"></div>
                    </div>
                </div>
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Show the comments
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Comments
                        </div>
                        <div class="accordion-body">
                          Comments
                        </div>
                      </div>
                    </div>
                    <div class="accordion" id="accordionPanelsStayOpenExample"></div>
                  </div>
                </div>


            <div class="tt-item">
                 <div class="tt-single-topic">
                    <div class="tt-item-header pt-noborder">
                        <div class="tt-item-info info-top">
                            <div class="tt-avatar-icon">
                                <i class="tt-icon"><svg><use xlink:href="#icon-ava-k"></use></svg></i>
                            </div>
                            <div class="tt-avatar-title">
                               <a href="#">Walking Kid</a>
                            </div>
                            <a href="#" class="tt-info-time">
                                <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>14 April, 2022
                            </a>
                        </div>
                    </div>
                    <div class="tt-item-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="tt-item-info info-bottom">
                        <a href="#" class="tt-icon-btn">
                            <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                            <span class="tt-text">671</span>
                        </a>
                        <a href="#" class="tt-icon-btn">
                             <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                            <span class="tt-text">39</span>
                        </a>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Show the comments
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Comments
                        </div>
                        <div class="accordion-body">
                          Comments
                        </div>
                      </div>
                    </div>
                    <div class="accordion" id="accordionPanelsStayOpenExample"></div>
                  </div>
                </div>

            <div class="tt-item">
                 <div class="tt-single-topic">
                    <div class="tt-item-header pt-noborder">
                        <div class="tt-item-info info-top">
                            <div class="tt-avatar-icon">
                                <i class="tt-icon"><svg><use xlink:href="#icon-ava-k"></use></svg></i>
                            </div>
                            <div class="tt-avatar-title">
                               <a href="#">kolis27</a>
                            </div>
                            <a href="#" class="tt-info-time">
                                <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>16April, 2022
                            </a>
                        </div>
                    </div>
                    <div class="tt-item-description">
                        <p>
                           GUYYYYYYYYYYYS!!!!! <br>LOOK WHAT I FOUND!!!!!!!!!!
                        </p>
                        <div class="video-container">
              <div class="ratio ratio-16x9">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/z_HWtzUHm6s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
                        </div>
                    </div>
                    <div class="tt-item-info info-bottom">
                        <a href="#" class="tt-icon-btn">
                            <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                            <span class="tt-text">671</span>
                        </a>
                        <a href="#" class="tt-icon-btn">
                             <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                            <span class="tt-text">39</span>
                        </a>
                   </div>
                </div>
<div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Show the comments
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Comments
                        </div>
                        <div class="accordion-body">
                          Comments
                        </div>
                      </div>
                    </div>
                    <div class="accordion" id="accordionPanelsStayOpenExample"></div>
                  </div>
                </div>

            <div class="tt-item">
                 <div class="tt-single-topic">
                    <div class="tt-item-header pt-noborder">
                        <div class="tt-item-info info-top">
                            <div class="tt-avatar-icon">
                                <i class="tt-icon"><svg><use xlink:href="#icon-ava-v"></use></svg></i>
                            </div>
                            <div class="tt-avatar-title">
                               <a href="#">Lorem</a>
                            </div>
                            <a href="#" class="tt-info-time">
                                <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>6 Jan,2019
                            </a>
                        </div>
                    </div>
                    <div class="tt-item-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <div class="topic-inner-list">
                            <div class="topic-inner">
                                <div class="topic-inner-title">
                                    <div class="topic-inner-avatar">
                                        <i class="tt-icon"><svg><use xlink:href="#icon-ava-s"></use></svg></i>
                                    </div>
                                    <div class="topic-inner-title"><a href="#">Lorem2</a></div>
                                </div>
                                <div class="topic-inner-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tt-item-info info-bottom">
                        <a href="#" class="tt-icon-btn">
                            <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                            <span class="tt-text">671</span>
                        </a>
                        <a href="#" class="tt-icon-btn">
                             <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                            <span class="tt-text">39</span>
                        </a>

                    </div>
                </div>
            <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Show the comments
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Comments
                        </div>
                        <div class="accordion-body">
                          Comments
                        </div>
                      </div>
                    </div>
                    <div class="accordion" id="accordionPanelsStayOpenExample"></div>
                  </div>
                </div>
            <div class="tt-item tt-wrapper-success">
                 <div class="tt-single-topic">
                    <div class="tt-item-header pt-noborder">
                        <div class="tt-item-info info-top">
                            <div class="tt-avatar-icon">
                                <i class="tt-icon"><svg><use xlink:href="#icon-ava-t"></use></svg></i>
                            </div>
                            <div class="tt-avatar-title">
                               <a href="#">Lorem3</a>
                               <span class="tt-color13 tt-badge">best answer</span>
                            </div>
                            <a href="#" class="tt-info-time">
                                <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>14 Jan,2022
                            </a>
                        </div>
                    </div>
                    <div class="tt-item-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="tt-item-info info-bottom">
                        <a href="#" class="tt-icon-btn">
                            <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                            <span class="tt-text">671</span>
                        </a>
                        <a href="#" class="tt-icon-btn">
                             <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                            <span class="tt-text">39</span>
                        </a>

                    </div>
                </div>
            <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Show the comments
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Comments
                        </div>
                        <div class="accordion-body">
                          Comments
                        </div>
                      </div>
                    </div>
                    <div class="accordion" id="accordionPanelsStayOpenExample"></div>
                  </div>
                </div>
            <div class="tt-item tt-wrapper-danger">
                 <div class="tt-single-topic">
                    <div class="tt-item-header pt-noborder">
                        <div class="tt-item-info info-top">
                            <div class="tt-avatar-icon">
                                <i class="tt-icon"><svg><use xlink:href="#icon-ava-u"></use></svg></i>
                            </div>
                            <div class="tt-avatar-title">
                               <a href="#">usain31</a>
                            </div>
                            <a href="#" class="tt-info-time">
                                <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>6 Jan,2019
                            </a>
                        </div>
                    </div>
                    <div class="tt-item-description">
                       This post has been flagged by a moderator, received too many downvotes.
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <div class="tt-item-info info-bottom">
                                <a href="#" class="tt-icon-btn">
                                     <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                                    <span class="tt-text">39</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tt-item">
                 <div class="tt-single-topic">
                    <div class="tt-item-header pt-noborder">
                        <div class="tt-item-info info-top">
                            <div class="tt-avatar-icon">
                                <i class="tt-icon"><svg><use xlink:href="#icon-ava-f"></use></svg></i>
                            </div>
                            <div class="tt-avatar-title">
                               <a href="#">Lorem4</a>
                            </div>
                            <a href="#" class="tt-info-time">
                                <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>6 Jan,2019
                            </a>
                        </div>
                    </div>
                    <div class="tt-item-description">
                       <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                       </p>
                       <div class="row tt-offset-37">
                           <div class="col-lg-10">
                               <div class="tt-gallery-layout">
                                    <div class="tt-item">
                                        <a href="images/single-topic-img03.jpg" class="tt-gallery-obj"><img src="images/single-topic-img03.jpg" alt=""></a>
                                    </div>
                                    <div class="tt-item">
                                        <a href="images/single-topic-img04.jpg" class="tt-gallery-obj"><img src="images/single-topic-img04.jpg" alt=""></a>
                                    </div>
                                    <div class="tt-item">
                                        <a href="images/single-topic-img05.jpg" class="tt-gallery-obj"><img src="images/single-topic-img05.jpg" alt=""></a>
                                    </div>
                                    <div class="tt-item">
                                        <a href="images/single-topic-img06.jpg" class="tt-gallery-obj"><img src="images/single-topic-img06.jpg" alt=""></a>
                                    </div>
                                    <div class="tt-item">
                                        <a href="images/single-topic-img07.jpg" class="tt-gallery-obj"><img src="images/single-topic-img07.jpg" alt=""></a>
                                    </div>
                                    <div class="tt-item">
                                        <a href="images/single-topic-img08.jpg" class="tt-gallery-obj"><img src="images/single-topic-img08.jpg" alt=""></a>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div>
                    <div class="tt-item-info info-bottom">
                        <a href="#" class="tt-icon-btn">
                            <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                            <span class="tt-text">671</span>
                        </a>
                        <a href="#" class="tt-icon-btn">
                             <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                            <span class="tt-text">39</span>
                        </a>
                    </div>
                </div>
            <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Show the comments
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Comments
                        </div>
                        <div class="accordion-body">
                          Comments
                        </div>
                      </div>
                    </div>
                    <div class="accordion" id="accordionPanelsStayOpenExample"></div>
                  </div>
                </div>
        </div>



  </div>
  </main>
@endsection
