import smoothScroll from "../helpers/fancyAScroll";

export default function SmothToElComponent() {
    const jsSmooth = document.querySelectorAll('.js-smooth')
    jsSmooth.forEach(item => {
        item.addEventListener('click', smoothScroll)
    })
}