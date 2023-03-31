var map = {
  init: function () {
    const location = {
      lat: result_locations[0].lat,
      lng: result_locations[0].long,
    };

    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 8,
      center: location,
    });

    result_locations.forEach((item, index) => {
      const contentString =
        '<div id="content">' +
        '<div id="siteNotice">' +
        "</div>" +
        '<h1 id="firstHeading" class="firstHeading">' +
        item.name +
        "</h1>" +
        '<div id="bodyContent">' +
        "<p>" +
        item.details +
        "</p>" +
        "</div>" +
        "</div>";
      const infowindow = new google.maps.InfoWindow({
        content: contentString,
      });

      const marker = new google.maps.Marker({
        position: { lat: item.lat, lng: item.long },
        map: map,
        title: item.name,
      });
      marker.addListener("click", () => {
        infowindow.open({
          anchor: marker,
          map,
          shouldFocus: false,
        });
      });
    });
  },
};
