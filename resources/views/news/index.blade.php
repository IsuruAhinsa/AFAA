@extends('layouts.app')

@section('content')

    <div class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <div class="section-title">
                        <h1 class="title">AFAA News</h1>
                    </div>
                </div>

                <div class="col-md-12">

                    @foreach($news as $var)

                        <div class="post post-row">
                            <a class="post-img" href="{{ route('news.show', [$var->slug]) }}">
                                <img src="{{ Voyager::image($var->image) }}" alt="{{ $var->image }}"></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="#">{{ $var->subtitle }}</a>
                                </div>
                                <h3 class="post-title">
                                    <a href="{{ route('news.show', [$var->slug]) }}">
                                        {{ $var->title }}
                                    </a>
                                </h3>
                                <ul class="post-meta">
                                    <li>{{ $var->created_at->toDayDateTimeString() }}</li>
                                </ul>
                                <p>
                                    @if(strlen(strip_tags($var->body)) > 250)
                                        {{ str_limit(strip_tags($var->body), 250) }} <br> <br>
                                        <a href="{{ route('news.show', [$var->slug]) }}" class="primary-button">Read More</a>
                                    @else
                                        {{ str_limit(strip_tags($var->body)) }}
                                    @endif
                                </p>
                            </div>
                        </div>

                    @endforeach

                </div>

                <div class="text-center">

                    {{ $news->links() }}

                </div>

            </div>

        </div>

    </div>

@endsection
