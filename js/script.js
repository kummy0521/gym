document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.mv_slide', {
        slidesPerView: 'auto',
        spaceBetween: 10,
        centeredSlides: true,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        speed: 1000,
    });
});