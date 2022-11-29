import throttle from "../helpers/throttle";
import getOffset from "../helpers/getOffset";

export default function SellScrollComponent() {


    const containerEl = document.querySelector('.sell-scroll')
    const containerStickyEl = document.querySelector('.sell-scroll__sticky')
    const containerWrapperEl = document.querySelector('.sell-scroll__main')

    if (containerEl && containerStickyEl && containerWrapperEl) {
        const itemsEl = containerEl.querySelectorAll('.sell-scroll-item'),
            items = []
        const cTop = getOffset(containerEl).top
        const sellCurrent = containerEl.querySelector('.sell-scroll__current')
        const anim1 = containerEl.querySelector('.sell-scroll-item__image-2')
        const anim2 = containerEl.querySelector('.sell-scroll-item__image')

        throttle("scroll", "optimizedScroll");

        function setTranslate(x) {
            containerWrapperEl.style.transform = "translateX(" + x + "px)";
        }

        itemsEl.forEach(item => {
            const rect = item.getBoundingClientRect()
            items.push({
                el: item,
                rect: rect
            })
        })

        if (itemsEl.length > 0) {
            const maxScroll = containerWrapperEl.clientWidth
            let modificator = 100

            if (window.innerWidth <= 1600 && window.innerWidth > 1400) {
                modificator = window.innerWidth / items.length + 40
            } else if (window.innerWidth <= 1400) {
                modificator = window.innerWidth / items.length + 80
            }

            // const ms = maxScroll - (items[items.length - 1].el.clientWidth / 2) + modificator
            const ms = maxScroll + modificator

            containerEl.style.height = ms + "px"

            window.addEventListener('optimizedScroll', () => {
                const top = containerStickyEl.getBoundingClientRect().top

                if (top === 0) {
                    const offsetX = cTop - ((window.pageYOffset || document.documentElement.scrollTop) - (document.documentElement.clientTop || 0))

                    const item2 = items[2];
                    const item4 = items[4];

                    if (item2) {
                        if (-offsetX > (item2.rect.left - (item2.rect.width / 2))) {
                            anim1.classList.add('active')
                        } else {
                            anim1.classList.remove('active')
                        }
                    }

                    if (item4) {
                        if (-offsetX > (item4.rect.left - (item4.rect.width / 2))) {
                            anim2.classList.add('active')
                        } else {
                            anim2.classList.remove('active')
                        }
                    }

                    items.forEach(({el, rect}, i) => {
                        const left = rect.left,
                            right = rect.right

                        if (-offsetX >= left && -offsetX <= right) {
                            const counter = el.dataset.counter,
                                title = el.dataset.title,
                                next = el.dataset.next

                            if (counter && counter === 'white') {
                                containerEl.classList.add('sell-scroll--counter-white')
                                containerEl.classList.remove('sell-scroll--counter-none')
                            } else if (counter && counter === 'black') {
                                containerEl.classList.remove('sell-scroll--counter-none')
                                containerEl.classList.remove('sell-scroll--counter-white')
                            } else if (counter && counter === 'none') {
                                containerEl.classList.add('sell-scroll--counter-none')
                            }

                            if (title && title === 'white') {
                                containerEl.classList.add('sell-scroll--title-white')
                            } else {
                                containerEl.classList.remove('sell-scroll--title-white')
                            }

                            if (next && next === 'white') {
                                containerEl.classList.add('sell-scroll--next-white')
                            } else {
                                containerEl.classList.remove('sell-scroll--next-white')
                            }

                            if (i === 0) {
                                i = 1
                            }

                            sellCurrent.textContent = "0" + i
                        }
                    })

                    if(!((offsetX * -1) >= maxScroll - window.innerWidth)) {
                        setTranslate(offsetX)
                    }
                }
            })
        }
    }
}