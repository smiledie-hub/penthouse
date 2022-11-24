export default function smoothScroll(event) {
    if (event.target.hash !== '') {
        event.preventDefault()
        const hash = event.target.getAttribute('href')
        const link = document.querySelector(hash)

        if(link) {
            link.scrollIntoView({
                block: 'start',
                behavior: 'smooth',
                inline: 'start'
            });
        }
    }
}