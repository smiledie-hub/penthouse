export default function () {
    const menuEl = document.querySelector('.menu')

    if(menuEl) {
        let isOpen = false;
        const openMenuEls = document.querySelectorAll('.btn-menu')
        const closeMenuEls = document.querySelectorAll('.btn-menu-close')

        openMenuEls.forEach(el => {
            el.addEventListener('click', () => setStatusMenu(!isOpen))
        })

        closeMenuEls.forEach(el => {
            el.addEventListener('click', () => setStatusMenu(false))
        })

        function setStatusMenu(open = true, openEl) {
            isOpen = open;

            if (isOpen) {
                openMenuEls.forEach(el => {
                    el.classList.add('btn-menu--active')
                })

                menuEl.classList.add('menu--active')
                document.body.classList.add('lock')
            } else {
                openMenuEls.forEach(el => {
                    el.classList.remove('btn-menu--active')
                })

                menuEl.classList.remove('menu--active')
                document.body.classList.remove('lock')
            }
        }
    }
}