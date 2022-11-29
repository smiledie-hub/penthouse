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

        const _c = countries


        let ARE = countries.find(c => c?.name === "United Arab Emirates") || {},
            RUS = countries.find(c => c?.name === "Russia") || {},
            DEU = countries.find(c => c?.name === "Germany") || {},
            FRA = countries.find(c => c?.name === "France") || {},
            GBR = countries.find(c => c?.name === "United Kingdom") || {},
            USA = countries.find(c => c?.name === "United States") || {}


        for (let i = 0; i < _c.length; i++) {
            const county = _c[i]

            if(county && county?.code && (county.code === ARE.code || county.code === RUS.code || county.code === DEU.code || county.code === FRA.code || county.code === GBR.code || county.code === USA.code)) {
                delete _c[i];
            }
        }

        const _countries = [ARE, RUS, DEU, FRA, GBR, USA, ..._c]

        _countries.forEach((county) => {
            if(county && county?.code && county?.flag && county?.mask && county?.iso) {
                itemsContainer.append(getPhoneComponent(county.code, county.flag, county.mask, county.iso))

                if (county.code === defaultIso) {
                    setItem(county.code, county.flag, county.mask, county.iso, false)
                }
            }
        })

        new SimpleBar(itemsContainer);

        itemOpener && itemOpener.addEventListener('click', () => {
            item.classList.toggle('field-phone--active')
        })
    })
}