@php
    use App\Http\Controllers\Controller;
    $albums = Controller::albums();
    $videos = Controller::videos();
    $categories = Controller::categories();
@endphp

<header id="header">

    <div id="nav">

        <div id="nav-top" style="background-color: #020404">

            <div class="container">

               {{ menu('social', 'partials.menu.social') }}

                <div class="nav-logo">
                    <a href="{{ URL::to('/') }}" class="logo">
                        <img src="{{ asset('img/logo.png') }}"  class="img-responsive" alt="" style="width: auto; height: 80%; margin-top: 10px;">
                    </a>
                </div>

                <!-- aside toggle -->
                <div class="nav-btns">
                    <button class="aside-btn"><i class="fa fa-bars" style="color: white"></i></button>
                </div>
                <!-- /aside toggle -->
            </div>

        </div>

        <div id="nav-bottom">

            <div class="container">

                <ul class="nav-menu">

                    <li><a href="{{ URL::to('/') }}">Home</a></li>

                    <li class="has-dropdown megamenu">
                        <a href="#">Gallery</a>
                        <div class="dropdown tab-dropdown">
                            <div class="row">
                                <div class="col-md-2">
                                    <ul class="tab-nav">
                                        <li class="active"><a data-toggle="tab" href="#tab1">Photo</a></li>
                                        <li><a data-toggle="tab" href="#tab2">Video</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-10">
                                    <div class="dropdown-body tab-content">
                                        <!-- tab1 -->
                                        <div id="tab1" class="tab-pane fade in active">

                                            <div class="row">

                                                @foreach($albums as $album)
                                                    <div class="col-md-4">
                                                    <div class="post post-sm">
                                                        <a class="post-img" href="{{ route('albums.show', [$album->id]) }}">
                                                            <img src="{{ Voyager::image($album->cover) }}" alt="">
                                                        </a>
                                                        <div class="post-body">
                                                            <div class="post-category">
                                                                <a href="{{ route('albums.show', [$album->id]) }}">{{ $album->title }}</a>
                                                            </div>
                                                            <ul class="post-meta">
                                                                <li>{{ $album->created_at->toDayDateTimeString() }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach

                                                <div class="col-md-4 text-center">
                                                    <a href="{{ route('albums') }}" class="primary-button" style="margin-top: 30%;">More Albums</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- /tab1 -->

                                        <!-- tab2 -->
                                        <div id="tab2" class="tab-pane fade in">
                                            <div class="row">

                                                @foreach($videos as $video)
                                                    <div class="col-md-4">
                                                        <div class="post post-sm">
                                                            <iframe height="190" src="{{ $video->url }}" allowfullscreen frameborder="0"></iframe>
                                                            <div class="post-body">
                                                                <div class="post-category">
                                                                    <a href="#">{{ $video->title }}</a>
                                                                </div>
                                                                <ul class="post-meta">
                                                                    <li>{{ $video->created_at->toDayDateTimeString() }}</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                <!-- post -->
                                                <div class="col-md-4 text-center">
                                                    <a href="{{ route('videos') }}" class="primary-button" style="margin-top: 35%;">More Videos</a>
                                                </div>
                                                <!-- /post -->
                                            </div>
                                        </div>
                                        <!-- /tab2 -->

                                        <!-- /tab3 tab4 .. -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    {{--<li class="has-dropdown megamenu">
                        <a href="#">Awards</a>
                        <div class="dropdown">
                            <div class="dropdown-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4 class="dropdown-heading">Categories</h4>
                                        <ul class="dropdown-list">
                                            <li><a href="#">FASHION DESIGNING</a></li>
                                            <li><a href="#">COSTUME DESIGNING</a></li>
                                            <li><a href="#">TEXTILE DESIGNING</a></li>
                                            <li><a href="#">APPAREL INDUSTRY</a></li>
                                            <li><a href="#">MODELING</a></li>
                                            <li><a href="#">JEWELLERY DESIGNING</a></li>
                                            <li><a href="#">FOOT WEAR</a></li>
                                            <li><a href="#">FASHION PHOTOGRAPHY</a></li>
                                            <li><a href="#">FASHION CHOREOGRAPHY</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h4 class="dropdown-heading">FASHION DESIGNING</h4>
                                        <ul class="dropdown-list">
                                            <li><a href="#">Lifestyle</a></li>
                                            <li><a href="#">Fashion</a></li>
                                            <li><a href="#">Health</a></li>
                                            <li><a href="#">Health</a></li>
                                        </ul>
                                        <h4 class="dropdown-heading">COSTUME DESIGNING</h4>
                                        <ul class="dropdown-list">
                                            <li><a href="#">Lifestyle</a></li>
                                            <li><a href="#">Travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h4 class="dropdown-heading">TEXTILE DESIGNING</h4>
                                        <ul class="dropdown-list">
                                            <li><a href="#">Fashion</a></li>
                                            <li><a href="#">Technology</a></li>
                                            <li><a href="#">Technology</a></li>
                                            <li><a href="#">Technology</a></li>
                                        </ul>
                                        <h4 class="dropdown-heading">APPAREL INDUSTRY</h4>
                                        <ul class="dropdown-list">
                                            <li><a href="#">Lifestyle</a></li>
                                            <li><a href="#">Health</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h4 class="dropdown-heading">MODELING</h4>
                                        <ul class="dropdown-list">
                                            <li><a href="#">Technology</a></li>
                                            <li><a href="#">Fashion</a></li>
                                            <li><a href="#">Health</a></li>
                                            <li><a href="#">Travel</a></li>
                                        </ul>
                                        <h4 class="dropdown-heading">JEWELLERY DESIGNING</h4>
                                        <ul class="dropdown-list">
                                            <li><a href="#">Lifestyle</a></li>
                                            <li><a href="#">Health</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>--}}

                    <li class="has-dropdown">
                        <a href="#">Categories</a>
                        <div class="dropdown">
                            <div class="dropdown-body">
                                <ul class="dropdown-list">
                                    @foreach($categories as $category)
                                        <li><a href="{{ route($category->route, [$category->id]) }}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="has-dropdown">
                        <a href="#">Resources</a>
                        <div class="dropdown">
                            <div class="dropdown-body">
                                <ul class="dropdown-list">
                                    <li><a href="{{ route('afaa') }}">What is AFAA?</a></li>
                                    <li><a href="{{ route('judges') }}">Jury</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li><a href="{{ route('news') }}">News</a></li>

                    <li><a href="{{ route('contact') }}">Contact</a></li>

                    <li><a href="{{ route('about') }}">About Us</a></li>

                    <a href="{{ route('register.index') }}" class="primary-button" style="border-radius: 2rem">Register Now</a>

                </ul>

            </div>

        </div>

        <!-- Aside Nav -->
        @include('partials.sidenav')

    </div>

</header>
