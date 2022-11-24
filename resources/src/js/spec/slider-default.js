import Swiper, {Navigation} from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    new Swiper('.slider-default__el', {
        speed: 400,
        slidesPerView: 1,
        spaceBetween: 0,
        initialSlide: 1,
        watchOverflow: true,
        // centeredSlides: true,
        roundLengths: true,
        grabCursor: true,
        navigation: {
            nextEl: '.slider-default__next',
            prevEl: '.slider-default__prev',
        },
        modules: [Navigation],
        breakpoints: {
            560: {
                slidesPerView: 3
            }
        },
    });
})