export function calcOffsetContainer() {
    let modificator = -40

    const containerWidth = document.querySelector('.container').clientWidth + modificator
    let containerOffset = (window.innerWidth - containerWidth) / 2 || 0


    if (window.innerWidth < 1023 && window.innerWidth >= 480) {
        if (containerOffset < 40) {
            containerOffset = 40
        }
    } else if (window.innerWidth < 480) {
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
export function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}