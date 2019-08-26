@php $header = 'Add Trip' @endphp
@extends('layouts.master')


@section('content')

    @include('includes.notifications')
    @include('includes.errors')


    {!! Form::open(['method' => 'POST', 'action' => 'BusTripController@book' ]) !!}

    <input type="hidden" name="destination" value="{{$destination->id}}">

    <div class="card col-md-8">
        <div class="card-body card-block">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="departure">Departure</label>
                        <small style="color:gray;">{{count($stations)<1 ? ' (Not Available) ' : '' }}</small>
                        <select class="form-control select2 locations" name="departure" id="departure" data-placeholder="Select Departure" style="width: 100%;">
                            <option></option>
                            @foreach( $stations as $station )
                                <option value="{{$station->id}}">{{isset($station->name) ? $station->name : ''}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Destination</label>
                        <select class="form-control select2" name="destination" disabled="disabled" style="width: 100%;">
                            <option selected="selected" value="{{$destination->id}}">{{$destination->name}}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bus_id">Available Bus</label>
                        <select class="form-control select2 locations" name="bus_id" id="bus" data-placeholder="Choose a Bus" style="width: 100%;">
                            <option></option>
                            @foreach( $buses as $bus )
                                <option value="{{$bus->id}}">{{$bus->name}} - at {{isset($bus->bus_time) ? date('h:s A', strtotime($bus->bus_time->schedule)) : ''}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ticket">Ticket</label>
                        <input type="number" class="form-control" id="ticket" name="ticket">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn bg-navy">Next</button>
                <button type="button" onclick="window.location='{{ route("trip.check") }}'" class="btn bg-purple">Change Destination</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

@endsection



