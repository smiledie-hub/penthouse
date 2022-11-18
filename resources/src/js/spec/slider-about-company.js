import Swiper from "swiper";
import {calcOffsetContainer} from "../helper";

window.addEventListener("DOMContentLoaded", () => {
    const offset = calcOffsetContainer();

    new Swiper('.about-company__slider', {
        spaceBetween: 20,
        initialSlide: 1,
        slidesPerView: 'auto',
        slideToClickedSlide: true,
        freeMode: false,
        grabCursor: true,
        slidesOffsetBefore: offset,
        slidesOffsetAfter: offset,
        centeredSlides: true,
        breakpoints: {
            1023: {
                spaceBetween: 40,
                freeMode: {
                    enabled: true,
                    sticky: false,
                    momentumBounce: false,
                },
            },
            560: {
                centeredSlides: false,
            }
        },
    });
})