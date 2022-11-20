import Swiper from "swiper";
import calcOffsetContainer from "../helpers/calcOffsetContainer";
import {isDesktop} from "../helpers/isDevice";

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
        function getOffset(el) {
            let _x = 0;
            let _y = 0;
            while (el && !isNaN(el.offsetLeft) && !isNaN(el.offsetTop)) {
                _x += el.offsetLeft - el.scrollLeft;
                _y += el.offsetTop - el.scrollTop;
                el = el.offsetParent;
            }
            return {top: _y, left: _x};
        }

        const containerEl = document.querySelector('.about-company-scroll')
        const containerStickyEl = document.querySelector('.about-company-scroll__sticky')

        containerEl.style.height = slider.width + (window.innerWidth - (calcOffsetContainer() * 2)) + "px"

        if (containerEl && containerStickyEl && slider) {
            const cTop = getOffset(containerEl).top
            const topStart = slider.getTranslate()

            window.addEventListener('scroll', () => {
                const top = containerStickyEl.getBoundingClientRect().top

                const offsetX = cTop - ((window.pageYOffset || document.documentElement.scrollTop) - (document.documentElement.clientTop || 0))
                slider.setTranslate(topStart + offsetX)
            })
        }
    }
})