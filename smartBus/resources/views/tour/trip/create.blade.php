@php $header = 'Add Trip' @endphp
@extends('layouts.master')


@section('content')

    @include('includes.notifications')

    <div class="row">
        <div class="col-md-8">
            <div id="map" style="width: 100%; height: 200px;"></div>
        </div>
        <div class="col-md-4"></div>
    </div>

    {!! Form::open(['method' => 'POST', 'action' => 'BusTripController@book' ]) !!}

    <input type="hidden" name="destination" id="destination" value="{{$destination->id}}">

    <div class="card col-md-8">
        <div class="card-body card-block">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="departure">Departure</label>
                        <small style="color:gray;">{{count($stations)<1 ? ' (Not Available) ' : '' }}</small>
                        <select class="form-control select2 locations" name="departure" id="departure"
                                data-placeholder="Select Departure" style="width: 100%;">
                            <option></option>
                            @foreach( $stations as $station )
                                <option value="{{$station->id}}">{{isset($station->name) ? $station->name : ''}}</option>
                            @endforeach
                        </select>
                        <p class="text-red">{{ ($errors->has('departure')) ? 'please select a station' : ''}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Destination</label>
                        <select class="form-control select2" name="destination" disabled="disabled"
                                style="width: 100%;">
                            <option selected="selected" value="{{$destination->id}}">{{$destination->name}}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bus_id">Available Bus</label>
                        <select class="form-control select2 locations" name="bus_id" id="bus"
                                data-placeholder="Choose a Bus" style="width: 100%;">
                            <option></option>
                            @foreach( $buses as $bus )
                                <option value="{{$bus->id}}">{{$bus->name}} -
                                    at {{isset($bus->bus_time) ? date('h:s A', strtotime($bus->bus_time->schedule)) : ''}}</option>
                            @endforeach
                        </select>
                        <p class="text-red">{{ ($errors->has('bus_id')) ? 'please select a bus' : ''}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ticket">Ticket</label>
                        <input type="number" class="form-control" id="ticket" name="ticket">
                    </div>
                    <p class="text-red">{{ ($errors->has('ticket')) ? $errors->first('ticket') : ''}}</p>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn bg-navy">Next</button>
                <button type="button" onclick="window.location='{{ route("trip.check") }}'" class="btn bg-purple">Change
                    Destination
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        {{--        <div id="map" style="width: 800px;height: 500px;">--}}
        {{--        </div>--}}

    </div>
    {!! Form::close() !!}




    {{--    <div class="row">--}}
    {{--        <div class="col-md-6">--}}
    {{--            <div id="map"></div>--}}
    {{--            <div id="map" style="width: 800px; height:500px;"></div>--}}
    {{--            <script async defer--}}
    {{--                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkUOdZ5y7hMm0yrcCQoCvLwzdM6M8s5qk&callback=initMap">--}}
    {{--            </script>--}}
    {{--        </div>--}}
    {{--    </div>--}}


@endsection

@section('scripts')

    <script>

        var dep_lat, dep_lng, des_lat, des_lng,
            dep_station_name, dep_opening_hour, dep_station_address, dep_station_phone, dep_closing_hour,
            des_station_name, des_station_address, des_opening_hour, des_station_phone, des_closing_hour;
        $('#departure').on('select2:select', function () {
            var station_id = new Array();
            station_id[0] = $('#departure :selected').val();
            station_id[1] = $('#destination').val();


            $.ajax({
                url: "{{ route('trip.map')}}",
                method: "GET",
                data: {id: station_id},
                type: 'json',
                success: function (data) {
                    if (data) {
                        dep_lat = data[0].lat;
                        dep_lng = data[0].long;
                        dep_station_name = data[0].name;
                        dep_station_address = data[0].address;
                        dep_station_phone = data[0].phone_number;
                        dep_opening_hour = data[0].opening_hour;
                        dep_closing_hour = data[0].closing_hour;


                        des_lat = data[1].lat;
                        des_lng = data[1].long;
                        des_station_name = data[1].name;
                        des_station_address = data[1].address;
                        des_station_phone = data[1].phone_number;
                        des_opening_hour = data[1].opening_hour;
                        des_closing_hour = data[1].closing_hour;
                        initMap();
                    }
                    console.log("Data in tour/trip->create.php : ", data);
                }
            });
        });

        $(function () {
            $(window).on('load', function () {
                initMap();
            })
        });

        function initMap() {
            var depLatLng = {lat: dep_lat, lng: dep_lng};
            var desLatLng = {lat: des_lat, lng: des_lng};

            var destinationContent = '<div class="card">\n' +
                '  <div class="card-body">\n' +
                '    <h4 class="text-center">Your Destination</h4>\n <hr class="w-25"/>' +
                '    <h5 class="card-title">' + des_station_name + '</h5>\n' +
                '    <h6 class="card-subtitle mb-2 text-muted">' + des_station_address + '</h6>\n' +
                '    <p class="card-text">' + des_station_phone + '</p>\n' +
                '    <a href="' + des_station_phone + '" class="card-link btn btn-danger"><i class="fas fa-phone"></i> Call Now</a>\n' +
                /*
                                '    <a href="#" class="card-link">Another link</a>\n' +
                */
                '  </div>\n' +
                '</div>';
            var departureContent = '<div class="card">\n' +
                '  <div class="card-body">\n' +
                '    <h4 class="text-center">Your Departure</h4>\n <hr class="w-25"/>' +
                '    <h5 class="card-title">' + dep_station_name + '</h5>\n' +
                '    <h6 class="card-subtitle mb-2 text-muted">' + dep_station_address + '</h6>\n' +
                '    <p class="card-text">' + dep_station_phone + '</p>\n' +
                '    <a href="' + des_station_phone + '" class="card-link btn btn-danger"><i class="fas fa-phone"></i> Call Now</a>\n' +
                /*
                                '    <a href="#" class="card-link">Another link</a>\n' +
                */
                '  </div>\n' +
                '</div>';

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: {lat: 23.8151, lng: 90.4255}
            });
            var depInfowindow = new google.maps.InfoWindow({
                content: departureContent
            });
            var desInfowindow = new google.maps.InfoWindow({
                content: destinationContent
            });
            if (dep_lat && dep_lng) {
                var depMarker = new google.maps.Marker({
                    position: depLatLng,
                    animation: google.maps.Animation.DROP,
                    map: map,
                    title: 'Departure Bus Station!'
                });
                depMarker.addListener('click', function () {
                    depInfowindow.open(map, depMarker);
                });
                var desMarker = new google.maps.Marker({
                    position: desLatLng,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    title: 'Destintaion Bus Station'
                })
                desMarker.addListener('click', function () {
                    desInfowindow.open(map, desMarker);
                })

                var service = new google.maps.DistanceMatrixService();
                service.getDistanceMatrix(
                    {
                        origins: [new google.maps.LatLng(dep_lat,dep_lng)],
                        destinations: [new google.maps.LatLng(des_lat,des_lng)],
                        travelMode: 'DRIVING',
                        avoidHighways: false,
                        avoidTolls: false,
                    }, callback);

                function callback(response, status) {
// console.log(response.rows[0]);
                    var google_distance=response.rows[0].elements[0].distance.text;
                    var google_duration=response.rows[0].elements[0].duration.text;
                    console.log(google_distance)
                    console.log(google_duration)
                }
            }
        }
    </script>

@endsection