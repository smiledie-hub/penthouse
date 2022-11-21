import throttle from "../helpers/throttle";
import getOffset from "../helpers/getOffset";

export default function ScrollServicesComponent() {
    const containerEl = document.querySelector('.services')
    const containerStickyEl = document.querySelector('.services__sticky')
    const containerWrapperEl = document.querySelector('.services__wrapper')
    const itemEls = document.querySelectorAll('.services-item')

    if (containerEl && containerStickyEl && containerWrapperEl) {
        const cTop = getOffset(containerEl).top

        throttle("scroll", "optimizedScroll")
        window.addEventListener('optimizedScroll', () => {
            const top = containerStickyEl.getBoundingClientRect().top

            if (top === 0) {
                const offsetX = cTop - ((window.pageYOffset || document.documentElement.scrollTop) - (document.documentElement.clientTop || 0))
                containerWrapperEl.style.transform = "translateX(" + offsetX + "px)";


                itemEls.forEach(item => {
                    const rect = item.getBoundingClientRect()

                    if(rect.top <= 0 && (rect.top + rect.height) >= 0) {
                        containerStickyEl.style.backgroundColor = item.dataset.color
                    }
                })
            }
        })
    }
}