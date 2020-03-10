@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 50px">

        <div class="row">

            <div class="col">

                <div id="lightgallery">

                    @php $images = json_decode($images->image); @endphp

                    @foreach($images as $image)

                        <a href="{{ Voyager::image($image) }}">
                            <img src="{{ Voyager::image($image) }}" />
                        </a>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

@endsection

@push('script')

    <script type="text/javascript">
        $(document).ready(function() {

            $("#lightgallery").lightGallery({
                mode: 'lg-lollipop-rev',
                cssEasing : 'cubic-bezier(0.25, 0, 0.25, 1)'
            });

            $("#lightgallery").justifiedGallery({
                rowHeight : 150,
                lastRow : 'nojustify',
                margins : 5
            });
        });
    </script>

@endpush
