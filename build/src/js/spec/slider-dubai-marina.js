import Swiper from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    new Swiper('.dubai-marina-slider__el', {
        speed: 400,
        spaceBetween: 26,
        slidesPerView: 1,
        loop: true,
        grabCursor: true,
        breakpoints: {
            1023: {
                spaceBetween: 50,
            }
        },
    });
})