
<script type="text/javascript" src="/assets/js/main.bundle.js?123121233"></script>
<script>
    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: -34.397, lng: 150.644 },
            zoom: 8,
        });
    }
</script>
<script src="https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4e4OZAonP8dYIvxC7a_e5_nnN4H3j-iw&callback=initMap"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous"></script>
<script>
    SmoothScroll({
        animationTime    : 1000,
        stepSize         : 65,
        accelerationDelta : 30,
        accelerationMax   : 2,
        keyboardSupport   : true,
        arrowScroll       : 50,
        pulseAlgorithm   : true,
        pulseScale       : 4,
        pulseNormalize   : 1,
        touchpadSupport   : true,
    })
</script>
</body>
</html>