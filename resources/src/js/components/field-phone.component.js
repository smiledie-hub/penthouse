import IMask from "imask";
import countries from "countries-phone-masks";
import SimpleBar from "simplebar";

export default function FieldPhoneComponent() {
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
}