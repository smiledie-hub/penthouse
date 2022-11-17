import Swiper, {Navigation} from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    new Swiper('.about-specialists__slider', {
        spaceBetween: 30,
        slidesPerView: 2,
        slideToClickedSlide: true,
        grabCursor: true,
        navigation: {
            nextEl: '.about-specialists__next',
            prevEl: '.about-specialists__prev',
        },
        modules: [Navigation],
        breakpoints: {
            992: {
                spaceBetween: 18,
                slidesPerView: 3,
            }
        },
    });
})