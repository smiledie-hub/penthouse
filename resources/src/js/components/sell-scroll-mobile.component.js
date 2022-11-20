import Swiper from "swiper";

export default function SellScrollMobileComponent() {
    new Swiper('.sell-scroll-mobile__swiper', {
        speed: 1000,
        slidesPerView: 1,
        spaceBetween: 0,
    });
}