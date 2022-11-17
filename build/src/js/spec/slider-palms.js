import Swiper, {EffectCreative, Navigation, Autoplay} from "swiper";

window.addEventListener("DOMContentLoaded", () => {
    // let isScreenCenter = false
    // let isScreenBottom = false
    const slider = document.querySelector('.slider-palms')
    const palms = new Swiper(slider, {
        autoplay: {
            delay: 4000,
        },
        effect: 'creative',
        speed: 1000,
        spaceBetween: 70,
        centeredSlides: true,
        roundLengths: true,
        loop: true,
        loopAdditionalSlides: 30,
        freeMode: true,
        width: 220,
        grabCursor: true,
        navigation: {
            nextEl: document.querySelector('.slider-palms__next'),
            prevEl:  document.querySelector('.slider-palms__prev'),
        },
        creativeEffect: {
            prev: {
                // will set `translateZ(-400px)` on previous slides
                translate: ['-120%', 0, -350],
            },
            next: {
                // will set `translateX(100%)` on next slides
                translate: ['120%', 0, -350],
            },
            perspective: true
        },
        breakpoints: {
            1023: {
                width: 700,
            },
            480: {
                width: 300,
            }
        },
        modules: [EffectCreative, Navigation, Autoplay],
        on: {
            sliderMove(s) {
                s.el.classList.add('slider-palms--grabing')
            },
            touchEnd(s) {
                s.el.classList.remove('slider-palms--grabing')
            }
        }
    });

    // document.addEventListener('scroll', function() {
    //     const posTop = slider.getBoundingClientRect().top;
    //
    //     if(posTop + slider.clientHeight <= window.innerHeight && posTop >= 0) {
    //         if(!isScreenCenter)
    //             palms.slideNext(1200)
    //         isScreenCenter = true
    //     }
    //
    //     if(posTop + slider.clientHeight <= 500 && posTop + slider.clientHeight >= 0) {
    //         if(!isScreenBottom)
    //             palms.slideNext(1200)
    //         isScreenBottom = true
    //     }
    // });
})