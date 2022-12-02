import Swiper, {Navigation} from "swiper";

export default function MapComponent() {
    const mapEl = document.getElementById("map")
    const catalogMapEl = document.getElementById("map-catalog")

    if (mapEl) {
        const coords = mapEl.dataset.coords

        if (coords) {
            const myLatlng = new google.maps.LatLng(...coords.split(',').map(str => parseFloat(str)));
            const map = new google.maps.Map(mapEl, {
                center: myLatlng,
                zoom: 18,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            })

            const marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                animation: google.maps.Animation.BOUNCE,
                icon: "/assets/icons/marker.svg"
            })
        }
    }

    if (catalogMapEl && catalogMapData) {
        const myLatlng = new google.maps.LatLng(25.183942, 55.259319);
        const map = new google.maps.Map(catalogMapEl, {
            center: myLatlng,
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        })


        catalogMapData.forEach(data => {

            const icon1 = "/assets/icons/marker-static.svg"
            const icon2 = "/assets/icons/marker-static-hover.svg"

            let content = `<div class="map-object">
                <a class="map-object__link" target="_blank" href="${data.link}"></a>
                <div class="swiper map-object__swiper">
                    <div class="swiper-wrapper">`

            data.images.forEach(el => {
                content += `<div class="swiper-slide"><a class="map-object__link" target="_blank" href="${data.link}"><img class="map-object__image" src="${el}" alt=""></a></div>`
            })

            content += `</div><div class="map-object__navigation">
                        <button class="btn-icon btn-nav btn-nav--prev map-object__prev"><span class="icon-arrow-prev"></span></button>
                        <button class="btn-icon btn-nav btn-nav--next map-object__next"><span class="icon-arrow-next"></span></button>
                    </div>
                </div>
                <div class="map-object__content">
                    <p class="map-object__title">${data.title}</p>
                    <p class="map-object__text">${data.text}</p>
                </div>
            </div>`

            const lat = new google.maps.LatLng(...data.lat);
            const dialog = new google.maps.InfoWindow({
                content: content
            });

            const marker = new google.maps.Marker({
                position: lat,
                map: map,
                icon: icon1,
            })

            let isOpen = false
            google.maps.event.addListener(marker, 'mouseover', function () {
                marker.setIcon(icon2);
            });
            google.maps.event.addListener(marker, 'mouseout', function () {
                marker.setIcon(icon1);
            });

            google.maps.event.addListener(marker, 'click', () => {
                isOpen = !isOpen

                if (isOpen) {
                    dialog.open(map, marker);
                } else {
                    dialog.close(map, marker)
                }

                setTimeout(() => {
                    new Swiper('.map-object__swiper', {
                        speed: 1000,
                        slidesPerView: 1,
                        spaceBetween: 0,
                        navigation: {
                            nextEl: '.map-object__next',
                            prevEl: '.map-object__prev',
                        },
                        modules: [Navigation],
                    }, 100);
                })
            });
        })
    }
}