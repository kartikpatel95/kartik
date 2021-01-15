function initMap() {
    const mapnode = jQuery(".googlemap");

    if (typeof mapnode === "undefined" || mapnode == null || typeof mapnode.length === "undefined" || mapnode.length == null || mapnode.length < 1)
        return;

    const googlemapId = mapnode.data("mapid");
    const url = "/googlemap/getMapInformation/" + googlemapId;

    $.get(url, function(response, status){
        if (status === 'success') {
            const data = JSON.parse(response);
            const latlong = new google.maps.LatLng(parseFloat(data.data.latitude), parseFloat(data.data.longitude));

            const map = new google.maps.Map(mapnode[0], {
                zoom: 16,
                center: latlong,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false
            });

            const infowindow = new google.maps.InfoWindow({
                content: data.data.toolTip,
            });

            const marker = new google.maps.Marker({
                position: latlong,
                map: map,
            });

            marker.addListener("click", () => {
                infowindow.open(map, marker);
            });
        } else {
            $('.google-map').addClass('container-fluid')
            $('.googlemap').addClass('d-none')
            $('.google-map-error').removeClass('d-none')
        }
    });
}
