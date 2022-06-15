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
                            <a href="#">Short guideline about using our website</a>
                        </h3>
                        <div class="tt-item-tag">
                            <ul class="tt-list-badge">
                                <li><a href="#"><span class="tt-color03 tt-badge">FAQ</span></a></li>
                                <li><a href="#"><span class="tt-badge">guideline</span></a></li>
                                <li><a href="#"><span class="tt-badge">rules</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tt-item-description">
                        <h6 class="tt-title">Welcome to our website!</h6>
                        <p>
                            It's a platform where you can write, share you problem, what you are going through, and maybe it best case find a friend or even soulmate.
                        </p>
                        <p>
                            So, there are 3 pages: Categories, Create new question and forum.
                        </p>
                        <h6 class="tt-title">What can you do for us and others?</h6>
                        <p>
                            The most important rule is to be loyal with others. People think that they have big problems compare to others. It’s hard for people in general to feel empathy for someone else’s pain or trials. We each have our own little egocentric outlook on life, where we are the center of the universe. Therefore, no one else’s problems could ever compare to ours.
                        </p>
                        <hr>
                        just because your problems aren’t as “big” as someone else’s, doesn’t mean yours don’t matter. just because your problems feel “bigger” than someone else’s problems doesn’t mean you can tell them their problems don’t matter.
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

@endsection

