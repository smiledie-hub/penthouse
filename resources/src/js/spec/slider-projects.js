import Swiper, {Navigation} from "swiper";
import calcOffsetContainer from "../helpers/calcOffsetContainer";

window.addEventListener("DOMContentLoaded", () => {
    const progress = document.querySelector('.slider-projects__progress')
    const sliderEl = document.querySelector('.slider-projects__el')

    if (progress) {
        const progressBar = progress.querySelector('.slider-projects__progress-bar')

        function setOffsetSwiper(s) {
            let beforeOffset = calcOffsetContainer() - 50;
            let afterOffset = calcOffsetContainer() + 50;

            if (beforeOffset < 50) {
                beforeOffset = calcOffsetContainer()
            }

            if (afterOffset < 50) {
                afterOffset = calcOffsetContainer()
            }

            s.params.slidesOffsetBefore = beforeOffset;
            s.params.slidesOffsetAfter = afterOffset;
        }

        const sliderProjects = new Swiper(sliderEl, {
            speed: 1000,
            width: (sliderEl.clientWidth + 100) / 2,
            spaceBetween: 30,
            grabCursor: true,
            slidesOffsetBefore: 0,
            slidesOffsetAfter: 0,
            navigation: {
                nextEl: '.slider-projects__next',
                prevEl: '.slider-projects__prev',
            },
            breakpoints: {
                1023: {
                    spaceBetween: 50,
                    slidesOffsetBefore: calcOffsetContainer() - 50,
                    slidesOffsetAfter: calcOffsetContainer() + 50,
                }
            },
            modules: [Navigation],
            on: {
                resize(s) {
                    if (window.innerWidth <= 480) {
                        s.params.slidesPerView = 1
                        s.params.width = null
                    } else {
                        if (window.innerWidth >= 1023) {
                            s.params.width = (sliderEl.clientWidth + 100) / 2
                            setOffsetSwiper(s)
                        } else {
                            s.params.width = (sliderEl.clientWidth - 30) / 2
                        }
                    }

                    const percent = (progress.clientWidth / s.slides.length) * s.activeIndex
                    progressBar.style.width = progress.clientWidth / s.slides.length + "px"
                    progressBar.style.left = percent + "px"
                },
                init(s) {
                    progressBar.style.width = progress.clientWidth / s.slides.length + "px"

                    if (window.innerWidth <= 480) {
                        s.params.slidesPerView = 1
                        s.params.width = null
                    } else if (window.innerWidth >= 1023) {
                        setOffsetSwiper(s)
                    } else {
                        s.params.width = (sliderEl.clientWidth - 30) / 2
                    }
                },
                slideChange(s) {
                    const percent = (progress.clientWidth / s.slides.length) * s.activeIndex
                    progressBar.style.left = percent + "px"
                },
            }
        });
    }
})