@extends('layouts.master')


@section('content')

    <div class="card col-md-8">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="destination">Destination</label>
                    <small style="color:gray;">{{count($stations)<1 ? ' (Not Available) ' : '' }}</small>
                    <select class="form-control select2 locations destination" name="destination" data-placeholder="Select Destination" style="width: 100%;">
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
                    <label for="departure">Departure</label>
                    <small style="color:gray;">{{count($stations)<1 ? ' (Not Available) ' : '' }}</small>
                    <select class="form-control select2 locations departure" name="departure" data-placeholder="Select Departure" style="width: 100%;">
                        <option></option>
                        @foreach( $stations as $station )
                            <option value="{{$station->id}}">{{isset($station->name) ? $station->name : ''}}</option>
                        @endforeach
                    </select>
                    <p class="text-red">{{ ($errors->has('departure')) ? 'please select a station' : ''}}</p>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    <script>
        $('.locations').on("change", function() {
            var station_id = new Array();
            station_id[0] = $('.departure :selected').val();
            station_id[1] = $('destination').val();

            $('.locations:selected').attr('name', 'name')
            console.log(name);
        })


    </script>
@endsection