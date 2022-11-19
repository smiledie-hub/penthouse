// FIXES
import "./fixes"
import "./spec"

import menuComponent from "./components/menu.component";
import btnSelectsComponent from "./components/btn-selects.component";
import cookiesComponent from "./components/cookies.component";
import selScrollComponent from "./components/sell-scroll.component";

import frontResidence from "./spec/front-residence"
import cardBanner from "./spec/slider-card-banner";

import marquee from 'vanilla-marquee'
import countries from 'countries-phone-masks'
import IMask from 'imask';
import yall from "yall-js";
import AOS from "aos";
import SimpleBar from "simplebar";
import MicroModal from 'micromodal';
import isInViewport from "./helpers/isInViewport";
import {isDesktop} from "./helpers/isDevice";

window.addEventListener("DOMContentLoaded", () => {
    menuComponent()
    cookiesComponent()
    btnSelectsComponent()

    if(isDesktop) {
        selScrollComponent()
    }

    MicroModal.init({
        openTrigger: 'data-micromodal-open',
        closeTrigger: 'data-micromodal-close',
        openClass: 'is-open',
        disableScroll: true,
        disableFocus: false,
        awaitOpenAnimation: true,
        awaitCloseAnimation: true,
        debugMode: true
    });

    frontResidence()
    cardBanner()

    const jsSmooth = document.querySelectorAll('.js-smooth')
    jsSmooth.forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault()
            const container = document.querySelector(item.getAttribute('href'));
            container.scrollIntoView({
                behavior: 'smooth'
            })
        })
    })


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

                const windowWidth = window.innerWidth

                window.addEventListener('scroll', (e) => {
                    const bottom = frontBannerVideo.getBoundingClientRect().bottom

                    if(windowWidth>= 1023) {
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
            speed: window.innerWidth / 10
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


    const tabsbtn = document.querySelectorAll('.tab-btn')

    tabsbtn.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault()

            tabsbtn.forEach(_btn => {
                _btn.classList.remove('tab-btn--active')
            })

            btn.classList.add('tab-btn--active')

            const id = btn.dataset.tab

            if(id) {
                const elbyId = document.getElementById(id)

                if(elbyId) {
                    const tabs = document.querySelectorAll('.tab-content')

                    tabs.forEach(tab => {
                        tab.classList.remove('tab-content--active')
                    })

                    elbyId.classList.add('tab-content--active')
                }
            }
        })
    })
})