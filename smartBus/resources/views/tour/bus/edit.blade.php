@php $header = 'Add A New Bus' @endphp
@extends('layouts.master')


@section('content')

    @include('includes.notifications')


    {!! Form::model( $bus ,['method' => 'PATCH', 'action' => ['AdminBusController@update', $bus->id ] ]) !!}


    <div class="box-body col-md-6">
        <input type="hidden" name="route_id" value="{{$route->id}}">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Route</label>
                    <select class="form-control select2" name="route-id" disabled="disabled" style="width: 100%;">
                        <option selected="selected" value="{{$bus->route->id}}">{{$bus->route->name}}</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Bus Name</label>
                    <input type="text" class="form-control" id="name" name="name"  value="{{$bus->name}}" placeholder="Enter Name">
                    <p class="text-red">{{ ($errors->has('name')) ? $errors->first('name') : ''}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="license_number">License Number</label>
                    <input type="text" class="form-control" id="license_number" name="license_number"  value="{{$bus->license_number}}" placeholder="Enter License Number">
                    <p class="text-red">{{ ($errors->has('license_number')) ? $errors->first('license_number') : ''}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Driver</label>
                    <small style="color:gray;">{{count($drivers)<1 ? ' (Not Available) ' : '' }}</small>
                    <select class="form-control select2" name="driver_id" data-placeholder="Choose A Driver" style="width: 100%;">
                        <option value="{{$bus->driver->id}}">{{$bus->driver->name}}</option>
                        @foreach( $drivers as $driver )
                            <option value="{{$driver->id}}">{{$driver->name}}</option>
                        @endforeach
                    </select>
                    <p class="text-red">{{ ($errors->has('driver_id')) ? 'Please select a Driver' : ''}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="total_seat">Total Seat <small>(max 70)</small></label>
                    <input type="number" class="form-control" id="total_seat" name="total_seat" value="{{$bus->total_seat}}" max="70">
                    <p class="text-red">{{ ($errors->has('total_seat')) ? $errors->first('total_seat') : ''}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cost_per_unit">Cost Per Unit</label>
                    <input type="number" class="form-control" id="cost_per_unit" name="cost_per_unit" value="{{$bus->cost_per_unit}}">
                    <p class="text-red">{{ ($errors->has('cost_per_unit')) ? $errors->first('cost_per_unit') : ''}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Pick A Time</label>
                    <small style="color:gray;">{{count($route->time)<1 ? ' (Not Available) ' : '' }}</small>
                    <select class="form-control select2" name="schedule_id" data-placeholder="Select a Time" style="width: 100%;">
                        <option value="{{$bus->bus_time->id}}">{{$bus->bus_time ? date('h:s A', strtotime($bus->bus_time->schedule)) : ''}}</option>
                        @foreach( $route->time as $time )
                            <option value="{{$time->id}}">{{date('h:s A', strtotime($time->schedule))}}</option>
                        @endforeach
                    </select>
                    <p class="text-red">{{ ($errors->has('schedule_id')) ? 'Please select a Time' : ''}}</p>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submut" class="btn bg-navy">Update Bus</button>
{{--            <button type="button" onclick="window.location='{{ route("bus.check") }}'" class="btn bg-purple pull-right">Update Route</button>--}}
        </div>

    </div>
    {!! Form::close() !!}


@endsection

