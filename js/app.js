function initMap() {
    let opciones = {
        zoom: 13,
        center: {lat:18.50012, lng:-69.98857}
    }

    let map = new google.maps.Map(document.getElementById('map'), opciones);
}