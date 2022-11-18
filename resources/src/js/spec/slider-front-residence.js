import Swiper, {Navigation} from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    new Swiper('.front-residence-slider__el', {
        speed: 400,
        spaceBetween: 0,
        slidesPerView: 1,
        navigation: {
            nextEl: '.front-residence-slider__next',
            prevEl: '.front-residence-slider__prev',
        },
        modules: [Navigation],
    });
})