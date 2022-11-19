export default function throttle(originalNameEvent, nameEvent) {
    let running = false;

    function func() {
        if (running) {
            return;
        }
        running = true;

        requestAnimationFrame(function () {
            window.dispatchEvent(new CustomEvent(nameEvent))

            running = false;
        });
    }

    window.addEventListener(originalNameEvent, func)
}