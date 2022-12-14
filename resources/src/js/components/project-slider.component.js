import Swiper, {Navigation} from "swiper";

export default function ProjectSliderComponent() {
    const slider = new Swiper('.project-slider__swiper', {
        speed: 1000,
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
            nextEl: '.project-slider-next',
            prevEl: '.project-slider-prev',
        },
        modules: [Navigation],
        on: {
            activeIndexChange(s) {
                itemsSlider.slideTo(s.activeIndex)
            }
        }
    })

    const itemsSlider = new Swiper('.project-slider__items', {
        speed: 1000,
        slidesPerView: 3,
        spaceBetween: 0,
        slideToClickedSlide: false,
        slidesPerGroup: 1,
        on: {
            init: (s) => {
                s.slides.forEach((slide, i) => {
                    slide.addEventListener('click', (e) => {
                        e.preventDefault()
                        slider.slideTo(i)
                        s.slideTo(i)
                    })
                })
            }
        },
        breakpoints: {
            1200: {
                slidesPerView: 4,
            },
            1500: {
                slidesPerView: 6,
            },
            1930: {
                slidesPerView: 8,
            }
        }
    })
}