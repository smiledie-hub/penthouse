import Swiper, {Navigation} from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    new Swiper('.listing__slider', {
        speed: 400,
        spaceBetween: 0,
        slidesPerView: 1,
        navigation: {
            nextEl: '.listing__next',
            prevEl: '.listing__prev',
        },
        modules: [Navigation],
    });
})