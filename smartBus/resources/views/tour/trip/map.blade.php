@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div id="map" style="width: 800px; height:500px;"></div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        function initMap() {
            var myLatLng = {lat: -25.363, lng: for (var i = 0, l = data.length; i < l; i++) {
                var obj = data[i];
                var obj = data[i];
                console.log(obj);
                // console.log(obj);

            } 131.044};
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
@endsection














