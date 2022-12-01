import Swiper, {Navigation, Pagination} from "swiper";
import {isDesktop} from "../helpers/isDevice";
import videojs from "video.js";

export default function CardBannerComponent() {
    new Swiper('.card-banner__swiper', {
        speed: 800,
        spaceBetween: 0,
        slidesPerView: 1,
        navigation: {
            nextEl: document.querySelector('.card-banner__next'),
            prevEl: document.querySelector('.card-banner__prev'),
        },
        pagination: {
            el: '.card-banner__pagination',
            type: 'bullets',
        },
        modules: [Navigation, Pagination],
    });

    const videoEl = document.querySelector('.card-video')

    const followCursor = () => {
        const cursor = document.querySelector('.card-page__cursor')
        const container = document.querySelector('.card-banner')

        if (cursor && container) {
            container.addEventListener('click', e => {
                if (!videoEl.classList.contains('card-video--open')) {
                    cursor.classList.add('card-page__cursor--click')

                    setTimeout(() => {
                        cursor.classList.remove('card-page__cursor--click')
                    }, 300)
                }
            })

            container.addEventListener('mouseover', () => {
                if (!videoEl.classList.contains('card-video--open')) {
                    cursor.classList.add('card-page__cursor--visible')
                }
            })

            container.addEventListener('mouseout', () => {
                if (!videoEl.classList.contains('card-video--open')) {
                    cursor.classList.remove('card-page__cursor--visible')
                }
            })

            container.addEventListener('mousemove', e => {
                if (!videoEl.classList.contains('card-video--open')) {
                    const target = e.target
                    if (!target) return

                    if (target.closest('a')) {
                        cursor.classList.add('card-page__cursor--link')
                    } else {
                        cursor.classList.remove('card-page__cursor--link')
                    }

                    if (target.closest('.card-banner__next')) {
                        cursor.classList.add('card-page__cursor--next')
                        cursor.classList.remove('card-page__cursor--prev')
                    } else if (target.closest('.card-banner__prev')) {
                        cursor.classList.add('card-page__cursor--prev')
                        cursor.classList.remove('card-page__cursor--next')
                    } else {
                        cursor.classList.remove('card-page__cursor--prev')
                        cursor.classList.remove('card-page__cursor--next')
                    }
                    cursor.style.left = e.pageX + 'px'
                    cursor.style.top = e.pageY + 'px'
                }
            })
        }
    }

    if(document.getElementById('card-video'))
        videojs('card-video', {});

    if (isDesktop) {
        followCursor()
    }


    const openVideo = document.querySelector('.card-video-open')
    const closeVideo = document.querySelector('.card-video__close')

    openVideo && openVideo.addEventListener('click', (e) => {
        e.preventDefault()
        videoEl && videoEl.classList.add('card-video--open')
    })

    closeVideo && closeVideo.addEventListener('click', (e) => {
        e.preventDefault()
        videoEl && videoEl.classList.remove('card-video--open')
    })
}