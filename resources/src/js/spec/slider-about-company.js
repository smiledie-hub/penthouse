import Swiper from "swiper";
import calcOffsetContainer from "../helpers/calcOffsetContainer";
import {isDesktop} from "../helpers/isDevice";
import getOffset from "../helpers/getOffset";

window.addEventListener("DOMContentLoaded", () => {
    const offset = calcOffsetContainer();

    const slider = new Swiper('.about-company__slider', {
        spaceBetween: 20,
        initialSlide: 1,
        slidesPerView: 'auto',
        slideToClickedSlide: true,
        freeMode: false,
        grabCursor: true,
        slidesOffsetBefore: offset,
        slidesOffsetAfter: offset,
        centeredSlides: true,
        allowTouchMove: true,
        breakpoints: {
            1023: {
                initialSlide: 0,
                spaceBetween: 40,
                slideToClickedSlide: false,
                allowTouchMove: false,
                centeredSlides: false,
                grabCursor: false,
            },
            560: {
                centeredSlides: false,
            }
        },
    });

    if(isDesktop) {
        const containerEl = document.querySelector('.about-company-scroll')
        const containerStickyEl = document.querySelector('.about-company-scroll__sticky')

        if (containerEl && containerStickyEl && slider) {
            containerEl.style.height = slider.width + (window.innerWidth - (calcOffsetContainer() * 2)) + "px"

            const cTop = getOffset(containerEl).top
            const topStart = slider.getTranslate()

            window.addEventListener('scroll', () => {
                const offsetX = cTop - ((window.pageYOffset || document.documentElement.scrollTop) - (document.documentElement.clientTop || 0))
                slider.setTranslate(topStart + offsetX)
            })
        }
    }
})