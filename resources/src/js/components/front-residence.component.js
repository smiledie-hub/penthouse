export default function FrontResidenceComponent() {
    const containerEl = document.querySelector('.front-residence')
    const containerStickyEl = document.querySelector('.front-residence__sticky')
    let lastScrollTop = 0;

    if (containerEl && containerStickyEl) {
        const itemsCount = containerEl.dataset.slides
        const itemsEl = containerEl.querySelectorAll('[data-index]')

        if (itemsCount) {

            const hOneEl = containerEl.clientHeight
            const height = (hOneEl * itemsCount) * 1.6
            const breakpoints = -((height - (hOneEl)) / itemsCount)

            let index = 1

            containerEl.style.height = height + "px"


            window.addEventListener('scroll', (e) => {
                const top = containerStickyEl.getBoundingClientRect().top,
                    st = window.pageYOffset || document.documentElement.scrollTop

                if (top === 0) {
                    const cTop = containerEl.getBoundingClientRect().top
                    const breakpoint = breakpoints * index

                    if (st > lastScrollTop) {
                        if (cTop < breakpoint) {
                            setIndex(+1)
                        }
                    } else {
                        if (cTop > breakpoint) {
                            setIndex(-1)
                        }
                    }
                }

                lastScrollTop = st <= 0 ? 0 : st;
            })

            function setIndex(num = 1) {
                const i = index + num
                if (i >= 1 && i <= itemsCount) {
                    index = i
                    setItems()
                }
            }

            function setItems() {
                itemsEl.forEach(item => {
                    item.classList.remove('previos')

                    if (item.classList.contains('active')) {
                        item.classList.add('previos')
                    }

                    item.classList.remove('next')
                    item.classList.remove('prev')
                    item.classList.remove('active')
                })

                itemsEl.forEach(item => {
                    if ((item.dataset.index && parseInt(item.dataset.index) === index)) {
                        item.classList.add('active')
                        item.previousElementSibling && item.previousElementSibling.classList.add('prev')
                        item.nextElementSibling && item.nextElementSibling.classList.add('next')
                    }
                })
            }

            setItems()
        }
    }
}