import Swiper, {EffectCreative} from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    new Swiper('.related-properties__slider', {
        effect: 'creative',
        speed: 400,
        spaceBetween: 0,
        centeredSlides: true,
        roundLengths: true,
        loop: true,
        loopAdditionalSlides: 30,
        freeMode: true,
        width: 320,
        grabCursor: true,
        creativeEffect: {
            prev: {
                translate: ['calc(-100% - 50px)', 0, 0],
            },
            next: {
                translate: ['calc(100% + 50px)', 0, 0],
            },
            perspective: true
        },
        modules: [EffectCreative],
        breakpoints: {
            1023: {
                width: 964,
            }
        },
    });
})