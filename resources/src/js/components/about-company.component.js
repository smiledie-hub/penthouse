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
    }

    if (isDesktop) {
        const containerEl = document.querySelector('.about-company-scroll')
        const containerStickyEl = document.querySelector('.about-company-scroll__sticky')

        if (containerEl && containerStickyEl) {
            const slider = document.querySelector('.about-company-scroll__wrapper')

            // let modificator = 0
            //
            // if (window.innerWidth <= 1600) {
            //     modificator = window.innerWidth / 2
            // }
            //
            // if (window.innerWidth <= 1300) {
            //     modificator = window.innerWidth
            // }
            //
            // if (window.innerWidth <= 1100) {
            //     modificator = window.innerWidth + (window.innerWidth / 2)
            // }
            // //
            // containerEl.style.height = slider.getBoundingClientRect().width + (window.innerWidth - (calcOffsetContainer() * 2)) + modificator + "px"
            const itemsEl = containerEl.querySelectorAll('.about-company-item')

            const maxScroll = (itemsEl[0].clientWidth * itemsEl.length) - (calcOffsetContainer() / 2)
            containerEl.style.height = maxScroll + "px"

            // containerEl.style.height = slider.clientWidth + (calcOffsetContainer() * 2) + "px"
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