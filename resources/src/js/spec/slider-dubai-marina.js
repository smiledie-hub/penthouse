import Swiper from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    new Swiper('.dubai-marina-slider__el', {
        speed: 400,
        spaceBetween: 20,
        grabCursor: true,
        centeredSlides: true,
        roundLengths: true,
        loop: true,
        loopAdditionalSlides: 30,
        slidesPerView: 1,
        breakpoints: {
            1023: {
                spaceBetween: 50,
                width: null,
                slidesPerView: 1,
            },
            560: {
                width: null,
                slidesPerView: 2,
                spaceBetween: 26,
            }
        },
    });
})