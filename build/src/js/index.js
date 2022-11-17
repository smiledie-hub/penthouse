// FIXES
import "./fixes"
import "./spec"
import frontResidence from "./spec/front-residence"
import cardBanner from "./spec/slider-card-banner";
import marquee from 'vanilla-marquee'
import countries from 'countries-phone-masks'
import IMask from 'imask';
import yall from "yall-js";
import AOS from "aos";
import SimpleBar from "simplebar";
import {isInViewport} from "./helper";

window.addEventListener("DOMContentLoaded", () => {
    frontResidence()
    cardBanner()

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

            const frontBannerVideo = document.getElementById('front-banner-video')
            const frontBannerVideoRect = frontBannerVideo.getBoundingClientRect()

            if (frontBannerVideo) {
                frontBannerVideo.currentTime = 0;
                let isPause = false

                window.addEventListener('scroll', (e) => {
                    const top = window.pageYOffset || document.documentElement.scrollTop
                    const bottom = frontBannerVideo.getBoundingClientRect().bottom
                    const m = top - frontBannerVideoRect.height

                    if (m <= 0) {
                        const l = 200 - Math.round(100 - ((100 * top) / frontBannerVideoRect.height))
                        frontBannerVideo.style.transform = `scale(${l}%)`
                    }

                    isPause = bottom <= 0;

                    if (isPause) {
                        frontBannerVideo.pause()
                    } else {
                        frontBannerVideo.play()
                    }
                })
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


    yall({
        observeChanges: true
    });

    const frontMaquee = document.querySelector('.front-infinity__text')
    if (frontMaquee) {
        new marquee(frontMaquee, {
            duplicated: true,
            startVisible: true,
            direction: 'left',
            speed: 200
        });
    }

    const phoneFields = document.querySelectorAll('.field-phone')

    phoneFields.forEach(item => {
        const itemsContainer = item.querySelector('.field-phone__items')
        const itemOpener = item.querySelector('.field-phone__open')
        const itemFlag = item.querySelector('.field-phone__flag')
        const itemIso = item.querySelector('.field-phone__number')
        const itemInput = item.querySelector('.field-phone__input')
        const defaultIso = item.getAttribute('data-default')
        const phoneMask = IMask(itemInput, {
            mask: '+{7}(000)000-00-00',
            definitions: {
                '#': /[0-9]/
            }
        });

        function getPhoneComponent(code, flag, mask, iso) {
            const div = document.createElement('div')
            div.classList.add('field-phone__item')
            div.setAttribute('data-iso', iso)
            div.innerHTML = `<img class="field-phone__flag" src="${flag}" alt="${code}"><p class="field-phone__number">${code}</p>`

            div.addEventListener('click', () => {
                setItem(code, flag, mask, iso, true)
            })
            return div
        }

        function setItem(code, flag, mask, iso, focusIn) {
            itemFlag.setAttribute('src', flag)
            itemIso.innerHTML = code

            item.classList.remove('field-phone--active')

            if (typeof mask === 'object') {
                mask = mask[0]
            }

            phoneMask.updateOptions({
                mask: mask,
            });

            const items = document.querySelectorAll('.field-phone__item')
            const itemCurrent = document.querySelector(`.field-phone__item[data-iso=${iso}]`)
            items.forEach(_item => {
                _item.classList.remove('field-phone__item--active')
            })

            itemCurrent && itemCurrent.classList.add('field-phone__item--active')

            if (focusIn) {
                itemInput.focus()
            }
        }

        countries.forEach(({code, flag, mask, iso}) => {
            itemsContainer.append(getPhoneComponent(code, flag, mask, iso))

            if (code === defaultIso) {
                setItem(code, flag, mask, iso, false)
            }
        })

        new SimpleBar(itemsContainer);

        itemOpener && itemOpener.addEventListener('click', () => {
            item.classList.toggle('field-phone--active')
        })
    })
})