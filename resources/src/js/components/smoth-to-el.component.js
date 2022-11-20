
export default function SmothToElComponent () {
    const jsSmooth = document.querySelectorAll('.js-smooth')
    jsSmooth.forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault()
            const container = document.querySelector(item.getAttribute('href'));
            container.scrollIntoView({
                behavior: 'smooth'
            })
        })
    })
}