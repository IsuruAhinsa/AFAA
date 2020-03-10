<section id="clients" class="wow fadeInUp">

    <div class="container">

        <div class="section-title">
            <h2 class="title">Our Partners</h2>
        </div>

        <div class="owl-carousel clients-carousel">
            @foreach($partners as $partner)
                <img src="{{ Voyager::image($partner->logo )}}" alt="{{ $partner->name }}">
            @endforeach

        </div>

    </div>
</section>

@push('script')
    <script>
        // Initiate the wowjs animation library
        new WOW().init();
        $(".clients-carousel").owlCarousel({
            autoplay: true,
            dots: true,
            loop: true,
            responsive: { 0: { items: 2 }, 768: { items: 4 }, 900: { items: 6 }
            }
        });
    </script>
@endpush
