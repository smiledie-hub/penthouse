import Swiper, {Navigation} from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    new Swiper('.about-specialists__slider', {
        spaceBetween: 10,
        slidesPerView: 1,
        slideToClickedSlide: true,
        grabCursor: true,
        navigation: {
            nextEl: '.about-specialists__next',
            prevEl: '.about-specialists__prev',
        },
        modules: [Navigation],
        breakpoints: {
            560: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            992: {
                spaceBetween: 18,
                slidesPerView: 3,
            }
        },
    });
})