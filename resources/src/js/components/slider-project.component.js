import calcOffsetContainer from "../helpers/calcOffsetContainer";
import Swiper, {Navigation, Scrollbar} from "swiper";

export default function SliderProjectComponent() {
    function setOffsetSwiper(s) {
        let beforeOffset = calcOffsetContainer() - 50;
        let afterOffset = calcOffsetContainer() - 50;

        if (beforeOffset < 50) {
            beforeOffset = calcOffsetContainer()
        }

        if (afterOffset < 50) {
            afterOffset = calcOffsetContainer()
        }

        s.params.slidesOffsetBefore = beforeOffset;
        s.params.slidesOffsetAfter = afterOffset;
    }

    new Swiper('.slider-projects__el', {
        speed: 1000,
        slidesPerView: 1,
        spaceBetween: 30,
        grabCursor: true,
        slidesOffsetBefore: 0,
        slidesOffsetAfter: 0,
        navigation: {
            nextEl: '.slider-projects__next',
            prevEl: '.slider-projects__prev',
        },
        scrollbar: {
            el: '.slider-projects__progress',
            dragClass: "slider-projects__progress-bar",
            draggable: true,
        },
        breakpoints: {
            1023: {
                slidesPerView: 2,
                spaceBetween: 50,
                slidesOffsetBefore: calcOffsetContainer() - 50,
                slidesOffsetAfter: calcOffsetContainer() - 50,
            },
            560: {
                slidesPerView: 2,
            }
        },
        modules: [Navigation, Scrollbar],
        on: {
            resize(s) {
                if (window.innerWidth >= 1023) {
                    setOffsetSwiper(s)
                }
            },
            init(s) {
                if (window.innerWidth >= 1023) {
                    setOffsetSwiper(s)
                }
            }
        }
    });
}