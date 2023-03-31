var map = {
    init: function () {

        const location = { lat: 52.0567, lng: 1.1482 };

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: location,
        });

        const marker = new google.maps.Marker({
            position: location,
            map: map,
        });
    }
};

