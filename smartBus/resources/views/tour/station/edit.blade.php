@php $header = 'Update Station' @endphp
@extends('layouts.master')


@section('content')

    @include('includes.notifications')

    {!! Form::model($station, ['method' => 'PATCH', 'action' => ['BusStationController@update', $station->id ]]) !!}

    <div class="card col-md-8">
        <div class="card-body card-block">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Station Name" class="form-control" value="{{$station->name}}">
                <p class="text-red">{{ ($errors->has('name')) ? $errors->first('name') : ''}}</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lat">Latitude</label>
                        <input type="text" id="lat" name="lat" placeholder="Enter Latitude" value="{{$station->lat}}" class="form-control">
                        <p class="text-red">{{ ($errors->has('lat')) ? $errors->first('lat') : ''}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="long">Longitude</label>
                        <input type="text" id="long" name="long" placeholder="Enter Longitude" class="form-control" value="{{$station->long}}">
                        <p class="text-red">{{ ($errors->has('long')) ? $errors->first('long') : ''}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="opening_hour">Opening Hour</label>
                        <div class="input-group">
                            <input type="text" name="opening_hour" class="form-control timepicker"  value="{{$station->opening_hour ? $station->opening_hour : ''}}">
                            <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="closing_hour">Closing Hour</label>
                        <div class="input-group">
                            <input type="text" name="closing_hour" class="form-control timepicker" value="{{$station->closing_hour ? $station->closing_hour : ''}}" >
                            <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Station Address" class="form-control" value="{{$station->address ? $station->address : ''}}">
                        <p class="text-red">{{ ($errors->has('address')) ? $errors->first('address') : ''}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" class="form-control" value="{{$station->phone_number}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn bg-navy">Update Station</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

@endsection


