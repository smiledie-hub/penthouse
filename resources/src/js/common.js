import Scrollbar from "smooth-scrollbar";
import cardBanner from "./spec/slider-card-banner";
import AOS from 'aos';
import AppScroll from "./spec/scrollbar";

window.addEventListener("DOMContentLoaded", () => {
    const app = document.getElementById("app")
    const preloadEl = document.querySelector('.preloader')

    const isFront = !!document.querySelector('.front-page')

    if(isFront) {
        Scrollbar.use(AppScroll);
    }

    if(app) {
        if(preloadEl) {
            setTimeout(() => {
                preloadEl.classList.add('preloader--hide')

                setTimeout(() => {
                    start();
                }, 1000)
            }, 1200)
        } else {
            start();
        }
    }

    function start() {
        const appSrollbar = Scrollbar.init(app, {
                renderByPixels: true,
                continuousScrolling: true,
            }),
            aosItems = document.querySelectorAll('[data-aos]'),
            titleAnimItems = document.querySelectorAll('.animation-title')
        AOS.init();

        [].forEach.call(aosItems, (el) => {
            appSrollbar.addListener(() => {
                if (appSrollbar.isVisible(el)) {
                    el.classList.add('aos-animate');
                }
            });
        });

        [].forEach.call(titleAnimItems, (el) => {
            appSrollbar.addListener(() => {
                if (appSrollbar.isVisible(el)) {
                    el.classList.add('animation-title--animate');
                }
            });
        });

        titleAnimItems[0] && titleAnimItems[0].classList.add('animation-title--animate');

        const jsSmooth = document.querySelectorAll('.js-smooth')

        jsSmooth.forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault()
                const container = document.querySelector(item.getAttribute('href'));

                appSrollbar.scrollIntoView(container)
            })
        })

        cardBanner(appSrollbar)
    }
})