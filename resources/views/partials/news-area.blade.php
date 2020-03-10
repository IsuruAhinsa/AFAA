<div class="section">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="row">

                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="title">Recent News</h2>
                        </div>
                    </div>

                    @include('partials.news.recent')

                </div>

                <div class="row text-center">
                    <a href="{{ route('news') }}" class="primary-button">More News</a>
                </div>

                <br> <br>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">Recent Albums</h2>
                </div>
            </div>

            @foreach($albums as $album)

                <div class="col-md-3">
                    <div class="post post-sm">
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

        <div class="row text-center">
            <a href="{{ route('albums') }}" class="primary-button">More Albums</a>
        </div>

    </div>

</div>
