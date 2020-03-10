<div class="outer-container">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="swiper-container hero-slider">

                    <div class="swiper-wrapper">

                        @foreach($slides as $slide)

                            <div class="swiper-slide">
                                <div class="hero-content flex justify-content-center align-items-center flex-column">
                                    <img src="{{ Voyager::image($slide->thumbnail('cropped', 'image')) }}" alt="{{ $slide->image }}">
                                </div>
                            </div>

                        @endforeach

                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white flex justify-content-center align-items-center">

                    </div>

                    <div class="swiper-button-prev swiper-button-white flex justify-content-center align-items-center">

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
