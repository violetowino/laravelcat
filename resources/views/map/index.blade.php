<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="map"></div>

    <form id="directionsForm">
        <input type="text" name="origin" placeholder="Origin" required>
        <input type="text" name="destination" placeholder="Destination" required>
        <button type="submit">Get Directions</button>
    </form>

    <script async
    src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap">
</script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    

    <script>
        $(document).ready(function () {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -1.286389, lng: 36.817223}, // Default center coordinates
                zoom: 12 // Default zoom level
            });

            var directionsService = new google.maps.DirectionsService();
            var directionsRenderer = new google.maps.DirectionsRenderer({map: map});

            $('#directionsForm').submit(function (e) {
                e.preventDefault();

                var origin = $('input[name="origin"]').val();
                var destination = $('input[name="destination"]').val();

                var request = {
                    origin: origin,
                    destination: destination,
                    travelMode: 'DRIVING'
                };

                directionsService.route(request, function(result, status) {
                    if (status === 'OK') {
                        directionsRenderer.setDirections(result);
                    }
                });
            });
        });

    </script>
</body>
</html>
