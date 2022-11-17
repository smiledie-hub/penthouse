import Swiper from "swiper";
import {calcOffsetContainer} from "../helper";

window.addEventListener("DOMContentLoaded", () => {
    const offset = calcOffsetContainer();

    new Swiper('.about-company__slider', {
        spaceBetween: 40,
        initialSlide: 1,
        slidesPerView: 'auto',
        slideToClickedSlide: true,
        freeMode: {
            enabled: true,
            sticky: false,
            momentumBounce: false,
        },
        grabCursor: true,
        slidesOffsetBefore: offset,
        slidesOffsetAfter: offset,
    });
})