import Swiper, {Navigation, Pagination} from "swiper";

export default function () {

    const slider = new Swiper('.card-banner__swiper', {
        speed: 800,
        spaceBetween: 0,
        slidesPerView: 1,
        navigation: {
            nextEl: document.querySelector('.card-banner__next'),
            prevEl:  document.querySelector('.card-banner__prev'),
        },
        pagination: {
            el: '.card-banner__pagination',
            type: 'bullets',
        },
        modules: [Navigation, Pagination],
    });

    const followCursor = () => { // объявляем функцию followCursor
        const cursor = document.querySelector('.card-page__cursor')
        const container = document.querySelector('.card-banner')

        if (cursor && container) {
            container.addEventListener('click', e => {
                cursor.classList.add('card-page__cursor--click')

                setTimeout(() => {
                    cursor.classList.remove('card-page__cursor--click')
                }, 300)
            })

            container.addEventListener('mouseover', () => {
                cursor.classList.add('card-page__cursor--visible')
            })

            container.addEventListener('mouseout', () => {
                cursor.classList.remove('card-page__cursor--visible')
            })

            container.addEventListener('mousemove', e => {
                const target = e.target
                if (!target) return

                if (target.closest('a')) {
                    cursor.classList.add('card-page__cursor--link')
                } else { // иначе
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
            })
        }
    }

    if (window.innerWidth >= 1023) {
        followCursor()
    }
}