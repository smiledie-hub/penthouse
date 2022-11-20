import SimpleBar from "simplebar";

export default function choiceComponent() {
    const choices = document.querySelectorAll('.choice')

    document.addEventListener('click', (e) => {
        choices.forEach(choice => {
            const withinBoundaries = e.composedPath().includes(choice);

            if (!withinBoundaries) {
                choice.classList.remove('choice--active')

                const itemsEl = choice.querySelector('.choice__items')

                if(itemsEl) {
                    itemsEl.style.height = "0px"
                }
            }
        })
    })

    choices.forEach(choice => {
        const headerEl = choice.querySelector('.choice__header')
        const selectEl = choice.querySelector('.choice__select')
        const valueEl = choice.querySelector('.choice__value')
        const itemsEl = choice.querySelector('.choice__items')

        if (selectEl && headerEl && valueEl && itemsEl) {
            const optionEls = selectEl.querySelectorAll('option')
            itemsEl.innerHTML = "";
            optionEls.forEach(createOption)

            const items = itemsEl.querySelectorAll('.choice__item')

            if (items.length > 0) {
                items[0].classList.add('choice__item--selected')
                valueEl.innerText = items[0].textContent
            }


            const itemsElHeight = itemsEl.scrollHeight;
            headerEl.addEventListener('click', (e) => {
                e.preventDefault()

                if (choice.classList.contains('choice--active')) {
                    choice.classList.remove('choice--active')
                    itemsEl.style.height = "0px"
                } else {
                    choice.classList.add('choice--active')
                    itemsEl.style.height = itemsElHeight + "px"
                }
            })

            new SimpleBar(itemsEl);
        }

        function createOption(option) {
            const div = document.createElement('div')
            div.classList.add('choice__item')
            div.innerText = option.innerText

            if(option.disabled) {
                div.setAttribute('disabled', "true")
            }

            div.addEventListener('click', (e) => {
                e.preventDefault()

                selectEl.value = option.value
                valueEl.innerText = option.innerText

                const items = itemsEl.querySelectorAll('.choice__item')
                items.forEach(item => {
                    item.classList.remove('choice__item--selected')
                })

                div.classList.add('choice__item--selected')
            })

            itemsEl.appendChild(div)

        }
    })
}