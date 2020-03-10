@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 50px">

        <div class="row">

            @foreach($albums as $album)

                <div class="col-md-4">

                    <div class="post">
                        <a class="post-img" href="{{ route('albums.show', [$album->id]) }}">
                            <img src="{{ Voyager::image($album->cover) }}" alt="{{ $album->cover }}">
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

        </div>

    </div>

@endsection
