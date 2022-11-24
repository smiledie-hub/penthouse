import {isDesktop, isMobile, isTable} from "../helpers/isDevice";
import Swiper from "swiper";
import calcOffsetContainer from "../helpers/calcOffsetContainer";
import throttle from "../helpers/throttle";
import getOffset from "../helpers/getOffset";

export default function AboutCompanyComponent() {
    if (isTable || isMobile) {
        const offset = calcOffsetContainer();

        new Swiper('.about-company__slider', {
            spaceBetween: 20,
            initialSlide: 1,
            slidesPerView: 'auto',
            slideToClickedSlide: true,
            freeMode: false,
            grabCursor: true,
            slidesOffsetBefore: 0,
            slidesOffsetAfter: 0,
            centeredSlides: true,
            allowTouchMove: true,
            breakpoints: {
                1023: {
                    slidesOffsetBefore: offset,
                    slidesOffsetAfter: offset,
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
    }

    if (isDesktop) {
        const containerEl = document.querySelector('.about-company-scroll')
        const containerStickyEl = document.querySelector('.about-company-scroll__sticky')

        if (containerEl && containerStickyEl) {
            const slider = document.querySelector('.about-company-scroll__wrapper')

            const itemsEl = containerEl.querySelectorAll('.about-company-item')

            const maxScroll = (itemsEl[0].clientWidth * itemsEl.length) - (calcOffsetContainer() / 2)
            containerEl.style.height = maxScroll + "px"

            const cTop = getOffset(containerEl).top

            throttle("scroll", "optimizedScroll");
            window.addEventListener('optimizedScroll', () => {
                const top = containerStickyEl.getBoundingClientRect().top

                if (top === 0) {
                    const offsetX = cTop - ((window.pageYOffset || document.documentElement.scrollTop) - (document.documentElement.clientTop || 0)) + 120
                    slider.style.transform = `translateX(${offsetX}px)`
                }
            })
        }
    }
}