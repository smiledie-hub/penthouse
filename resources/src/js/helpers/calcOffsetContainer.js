export default function calcOffsetContainer() {
    let modificator = -40

    const containerWidth = document.querySelector('.container').clientWidth + modificator
    let containerOffset = (window.innerWidth - containerWidth) / 2 || 0


    if (window.innerWidth < 1023 && window.innerWidth >= 560) {
        if (containerOffset < 40) {
            containerOffset = 40
        }
    } else if (window.innerWidth < 560) {
        if (containerOffset < 20) {
            containerOffset = 20
        }
    } else {
        if (containerOffset < 30) {
            containerOffset = 30
        }
    }

    return containerOffset
}
