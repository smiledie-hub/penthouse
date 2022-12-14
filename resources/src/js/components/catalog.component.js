export default function CatalogComponent() {
    const catalog = document.querySelector('.catalog')
    if (catalog) {

        const btnMapOpen = catalog.querySelector('.catalog-toggle__open')
        const btnMapClose = catalog.querySelector('.catalog-toggle__close')
        const btnMapPlain = document.querySelector('.catalog-page__plain-btn')

        btnMapPlain && btnMapPlain.addEventListener('click', (e) => {
            e.preventDefault()
            catalog.classList.toggle('catalog--open-map-full')
        })

        btnMapOpen && btnMapOpen.addEventListener('click', (e) => {
            e.preventDefault()

            if (catalog.classList.contains('catalog--open-map')) {
                catalog.classList.add('catalog--open-map-full')
            } else {
                catalog.classList.add('catalog--open-map')
            }
        })

        btnMapClose && btnMapClose.addEventListener('click', (e) => {
            e.preventDefault()

            if (catalog.classList.contains('catalog--open-map-full')) {
                catalog.classList.remove('catalog--open-map-full')
            } else {
                catalog.classList.remove('catalog--open-map')
            }
        })


        const btnOpenFilter = document.querySelector('.catalog-page__filter-btn')
        const btnOpenMinmax = document.querySelector('.catalog-page__minmax-btn')
        const btnCloseFilter = document.querySelector('.catalog-page__close')
        const filterPanel = document.querySelector('.catalog-page__panel')
        const minmaxPanel = document.querySelector('.catalog-page__minmax-panel')

        btnOpenFilter && btnOpenFilter.addEventListener('click', (e) => {
            e.preventDefault()
            filterPanel.classList.toggle('catalog-page__panel--active')
        })

        btnOpenMinmax && btnOpenMinmax.addEventListener('click', (e) => {
            e.preventDefault()
            minmaxPanel.classList.toggle('catalog-page__minmax-panel--active')
        })

        btnCloseFilter && btnCloseFilter.addEventListener('click', (e) => {
            e.preventDefault()
            filterPanel.classList.remove('catalog-page__panel--active')
        })
    }
}