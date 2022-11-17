window.addEventListener("DOMContentLoaded", () => {
    if(window.innerWidth >= 1023) {
        const containerEl = document.querySelector('.sell-scroll')
        const containerStickyEl = document.querySelector('.sell-scroll__sticky')
        const containerWrapperEl = document.querySelector('.sell-scroll__main')

        if (containerEl && containerStickyEl && containerWrapperEl) {
            const itemsEl = containerEl.querySelectorAll('.sell-scroll-item'),
                items = []

            const sellCurrent = containerEl.querySelector('.sell-scroll__current')
            const anim1 = containerEl.querySelector('.sell-scroll-item__image-2')
            const anim2 = containerEl.querySelector('.sell-scroll-item__image')

            itemsEl.forEach(item => {
                const rect = item.getBoundingClientRect()
                items.push({
                    el: item,
                    rect: rect
                })
            })

            if (itemsEl.length > 0) {
                let lastScrollTop = 0;
                const hOneEl = itemsEl[0].clientHeight,
                    height = (hOneEl * itemsEl.length) * 2,
                    maxScroll = containerWrapperEl.clientWidth,
                    itemsElLast = itemsEl[itemsEl.length - 1]

                containerEl.style.height = height + "px"

                window.addEventListener('scroll', (e) => {
                    const top = containerStickyEl.getBoundingClientRect().top,
                        st = window.pageYOffset || document.documentElement.scrollTop

                    if (top === 0) {
                        const cTop = containerEl.getBoundingClientRect().top
                        let percentH = (Math.round((100 * cTop) / (height - hOneEl)))
                        const offsetX = ((maxScroll - itemsElLast.clientWidth) / 100) * percentH
                        containerWrapperEl.style.transform = `translateX(${offsetX}px)`

                        const item2 = items[2];
                        const item4 = items[4];


                        if(item2) {
                            if(-offsetX > (item2.rect.left - (item2.rect.width / 2))) {
                                anim1.classList.add('active')
                            } else {
                                anim1.classList.remove('active')
                            }
                        }

                        if(item4) {
                            if(-offsetX > (item4.rect.left - (item4.rect.width / 2))) {
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

                                if(counter && counter === 'white') {
                                    containerEl.classList.add('sell-scroll--counter-white')
                                    containerEl.classList.remove('sell-scroll--counter-none')
                                } else if(counter && counter === 'black') {
                                    containerEl.classList.remove('sell-scroll--counter-none')
                                    containerEl.classList.remove('sell-scroll--counter-white')
                                } else if(counter && counter === 'none') {
                                    containerEl.classList.add('sell-scroll--counter-none')
                                }

                                if(title && title === 'white') {
                                    containerEl.classList.add('sell-scroll--title-white')
                                } else {
                                    containerEl.classList.remove('sell-scroll--title-white')
                                }

                                if(next && next === 'white') {
                                    containerEl.classList.add('sell-scroll--next-white')
                                } else {
                                    containerEl.classList.remove('sell-scroll--next-white')
                                }

                                if(i === 0) {
                                    i = 1
                                }

                                sellCurrent.textContent = "0" + i
                            }
                        })
                    }

                    lastScrollTop = st <= 0 ? 0 : st;
                }, false)

                function scrollDown(st) {

                }

                function scrollUp(st) {
                    console.log("Сколлл вверх")
                }
            }
        }
    }
})