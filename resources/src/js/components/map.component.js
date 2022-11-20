export default function MapComponent() {
    const mapEl = document.getElementById("map")
    const catalogMapEl = document.getElementById("map-catalog")

    if(mapEl) {
        const coords = mapEl.dataset.coords

        if(coords) {
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
                icon: "/public/icons/marker.svg"
            })
        }
    }

    if(catalogMapEl) {
        const myLatlng = new google.maps.LatLng(25.183942, 55.259319);
        const map = new google.maps.Map(catalogMapEl, {
            center: myLatlng,
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        })

        const marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: "/public/icons/marker-static.svg"
        })
    }
}