import Swiper from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    new Swiper('.blog__slider', {
        spaceBetween: 0,
        initialSlide: 0,
        slidesPerView: 'auto',
        freeMode: {
            enabled: true,
        },
    });
})