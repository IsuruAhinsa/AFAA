@extends('layouts.app')

@section('content')

    <div id="post-header" class="page-header">

        <div
            class="page-header-bg"
            style="
                background-image: url('{{ Voyager::image($item->image) }}');
                background-repeat: no-repeat;
                background-size: cover;
                "
            data-stellar-background-ratio="0.5"
        ></div>

        <div class="container">

            <div class="row">

                <div class="col-md-10">

                    <div class="post-category">
                        <a href="#">{{ $item->subtitle }}</a>
                    </div>

                    <h1>{{ $item->title }}</h1>

                    <ul class="post-meta">
                        <li>{{ $item->created_at->toDayDateTimeString() }}</li>
                        <li><i class="fa fa-comments"></i> 3</li>
                        <li><i class="fa fa-eye"></i> 807</li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

    <div class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-8">

                    <div class="section-row">

                        <div class="post-share">
                            <a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
                            <a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
                            <a href="#" class="social-instagram"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                            <a href="#" ><i class="fa fa-envelope"></i><span>Email</span></a>

                        </div>

                    </div>

                    <div class="section-row">
                        {!! $item->body !!}
                    </div>

                    <div>
                        <div class="section-title">
                            <h3 class="title">Recent News</h3>
                        </div>
                        <div class="row">
                           @include('partials.news.recent')
                        </div>
                    </div>
                    <!-- /related post -->

                    <!-- post comments -->
                   @include('partials.comment')
                    <!-- /post comments -->

                    <!-- post reply -->
                    <div class="section-row">
                        <div class="section-title">
                            <h3 class="title">Leave a reply</h3>
                        </div>
                    </div>
                    <!-- /post reply -->
                </div>

                <div class="col-md-4">
                    <!-- post widget -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">Popular News</h2>
                        </div>

                        @include('partials.news.popular')

                    </div>
                    <!-- /post widget -->

                </div>

            </div>

        </div>

    </div>

@endsection
