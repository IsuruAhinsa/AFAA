@php

    $count = 0;

@endphp

<div class="section" style="margin-top: 50px">

    <div class="container">

        <div class="col">
            <div class="section-title">
                <h2 class="title">Highlights</h2>
            </div>
        </div>

        <div id="hot-post" class="row hot-post">

                @foreach($highlights as $highlight)

                    @if($count == 0)

                        <div class="col-md-8 hot-post-left">
                            <div class="post post-thumb">
                                <a class="post-img" href="{{ route('news.show', [$highlight->slug]) }}"><img src="{{ Voyager::image($highlight->image) }}" alt="{{ $highlight->image }}"></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="#">{{ $highlight->subtitle }}</a>
                                    </div>
                                    <h3 class="post-title title-lg"><a href="{{ route('news.show', [$highlight->slug]) }}">{{ $highlight->title }}</a></h3>
                                    <ul class="post-meta">
                                        <li>{{ $highlight->created_at->toDayDateTimeString() }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    @else

                        <div class="col-md-4 hot-post-right">

                            <div class="post post-thumb">
                                <a class="post-img" href="{{ route('news.show', [$highlight->slug]) }}"><img src="{{ Voyager::image($highlight->image) }}" alt="{{ $highlight->image }}"></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="#">{{ $highlight->subtitle }}</a>
                                    </div>
                                    <h3 class="post-title"><a href="{{ route('news.show', [$highlight->slug]) }}">{{ $highlight->title }}</a></h3>
                                    <ul class="post-meta">
                                        <li>{{ $highlight->created_at->toDayDateTimeString() }}</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    @endif

                    @php $count++ @endphp

                @endforeach

        </div>

    </div>

</div>
