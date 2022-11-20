import Swiper, {EffectCreative, Navigation} from "swiper";

export default function AreaComponent() {
    const sliderEls = document.querySelectorAll('.area-slider')

    sliderEls.forEach((el) => {
        new Swiper(el, {
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
                nextEl: el.parentElement.querySelector('.area-slider__next'),
                prevEl: el.parentElement.querySelector('.area-slider__prev'),
            },
            modules: [Navigation, EffectCreative]
        });
    })
}