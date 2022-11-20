import marquee from "vanilla-marquee";

export default function FrontPageComponent () {
    const frontMaquee = document.querySelector('.front-infinity__text')
    if (frontMaquee) {
        new marquee(frontMaquee, {
            duplicated: true,
            startVisible: true,
            direction: 'left',
            speed: window.innerWidth / 10
        });
    }
}