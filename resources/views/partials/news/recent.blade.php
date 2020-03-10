@foreach($news as $var)

    <div class="col-md-4">
        <div class="post">
            <a class="post-img" href="{{ route('news.show', [$var->slug]) }}"><img src="{{ Voyager::image($var->image) }}" alt="{{ $var->image }}"></a>
            <div class="post-body">
                <div class="post-category">
                    <a href="#">{{ $var->subtitle }}</a>
                </div>
                <h3 class="post-title"><a href="{{ route('news.show', [$var->slug]) }}">{{ $var->title }}</a></h3>
                <ul class="post-meta">
                    <li>{{ $var->created_at->toDayDateTimeString() }}</li>
                </ul>
            </div>
        </div>
    </div>

@endforeach
