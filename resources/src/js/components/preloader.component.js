import isInViewport from "../helpers/isInViewport";
import {isDesktop} from "../helpers/isDevice";
import AOS from "aos";

export default function PreloaderComponent () {
    function checkVisibleAnimationTitlle() {
        const titleAnimItems = document.querySelectorAll('.animation-title')

        titleAnimItems.forEach(el => {
            if (isInViewport(el)) {
                el && el.classList.add('animation-title--animate')
            }
        })
    }

    const preloadEl = document.querySelector('.preloader')
    if (preloadEl) {
        setTimeout(() => {
            preloadEl.classList.add('preloader--hide')

            setTimeout(() => {
                document.body.classList.add('loaded')
            }, 500)


            if(isDesktop) {
                const frontBannerVideo = document.getElementById('front-banner-video')
                const frontBannerVideoRect = frontBannerVideo.getBoundingClientRect()

                if (frontBannerVideo) {
                    frontBannerVideo.currentTime = 0;
                    let isPause = false

                    window.addEventListener('scroll', () => {
                        const bottom = frontBannerVideo.getBoundingClientRect().bottom

                        if (isDesktop) {
                            const top = window.pageYOffset || document.documentElement.scrollTop
                            const m = top - frontBannerVideoRect.height

                            if (m <= 0) {
                                const l = 200 - Math.round(100 - ((100 * top) / frontBannerVideoRect.height))
                                frontBannerVideo.style.transform = `scale(${l}%)`
                            }
                        }

                        isPause = bottom <= 0;

                        if (isPause) {
                            frontBannerVideo.pause()
                        } else {
                            frontBannerVideo.play()
                        }
                    })
                }
            }

            setTimeout(() => {
                document.body.classList.remove('lock')
                AOS.init({
                    once: true,
                });

                checkVisibleAnimationTitlle()
            }, 1000)
        }, 1200)
    } else {
        document.body.classList.remove('lock')
        AOS.init({
            disable: true,
            once: true,
        });
    }

    window.addEventListener('scroll', checkVisibleAnimationTitlle)
}