export default function TabsComponent () {
    const tabsbtn = document.querySelectorAll('.tab-btn')
    tabsbtn.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault()

            tabsbtn.forEach(_btn => {
                _btn.classList.remove('tab-btn--active')
            })

            btn.classList.add('tab-btn--active')

            const id = btn.dataset.tab

            if (id) {
                const elbyId = document.getElementById(id)

                if (elbyId) {
                    const tabs = document.querySelectorAll('.tab-content')

                    tabs.forEach(tab => {
                        tab.classList.remove('tab-content--active')
                    })

                    elbyId.classList.add('tab-content--active')
                }
            }
        })
    })
}