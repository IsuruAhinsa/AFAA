
(function($) {
    'use strict';

    // Hero Slider
    let swiper = new Swiper('.hero-slider', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        pagination: {
            el: '.swiper-pagination'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        }
    });

})(jQuery);
