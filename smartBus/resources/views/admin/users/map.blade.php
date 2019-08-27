<h1>this is some text</h1>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        #map {
            height: 100%;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>

    <title>Document</title>
</head>
<body>

<div id="map"></div>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=">
</script>

<script>
    function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};
        var myLatLng2 = {lat: -25.353, lng: 131.048};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
        var newMarker = new google.maps.Marker({
            position: myLatLng2,
            map: map,
            title: 'Hello World!'
        })
    }
</script>


</body>
</html>








