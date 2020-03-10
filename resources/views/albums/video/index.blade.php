@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 50px">

        <div class="row">

            <div class="col-md-12 col-sm-12 text-center">

            @foreach($videos as $video)

                <iframe src="{{ $video->url }}"
                        frameborder="0"
                        allowfullscreen
                ></iframe>

            @endforeach

            </div>

        </div>

    </div>

@endsection

@push('script')

    <script type="text/javascript">
        $(document).ready(function() {

            /*$("#video-gallery").lightGallery({
                autoplay: false,
                zoom: false,
                fullScreen: false,
                share: false
            });*/

            /*$("#video-gallery").justifiedGallery({
                rowHeight : 150,
                lastRow : 'nojustify',
                margins : 5
            });*/
        });
    </script>

@endpush
