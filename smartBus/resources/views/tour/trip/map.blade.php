@extends('layouts.master')


@section('content')

    <div class="card col-md-8">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="destination">Destination</label>
                    <small style="color:gray;">{{count($stations)<1 ? ' (Not Available) ' : '' }}</small>
                    <select class="form-control select2 locations" name="destination" data-placeholder="Select Destination" style="width: 100%;">
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
                    <select class="form-control select2 locations" name="departure" data-placeholder="Select Departure" style="width: 100%;">
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

    </script>
@endsection