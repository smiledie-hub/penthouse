import Swiper, {EffectCreative, Navigation} from "swiper";

export default function AreaComponent() {
    new Swiper('.area-slider', {
        effect: 'creative',
        creativeEffect: {
            prev: {
                opacity: 0,
                translate: [-50, 0, 0],
            },
            next: {
                opacity: 0,
                translate: [50, 0, 0],
            },
        },
        slidesPerView: 1,
        spaceBetween: 0,
        allowTouchMove: false,
        navigation: {
            nextEl: '.area-slider__next',
            prevEl: '.area-slider__prev',
        },
        modules: [Navigation, EffectCreative]
    });
}