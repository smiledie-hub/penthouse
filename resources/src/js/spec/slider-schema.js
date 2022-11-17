import Swiper, {Navigation, EffectFade} from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    new Swiper('.slider-schema', {
        effect: 'fade',
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
            nextEl: '.card-schema-next',
            prevEl: '.card-schema-prev',
        },
        modules: [Navigation, EffectFade],
    });
})