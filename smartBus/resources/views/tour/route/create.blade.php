@php $header = 'Add Route' @endphp
@extends('layouts.master')


@section('content')

    @include('includes.notifications')


    {!! Form::open(['method' => 'POST', 'action' => 'BusRouteController@store' ]) !!}

    <div class="box-body col-md-8">
        <div class="form-group">
            <label for="name">Route Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Route Name">
            <p class="text-red">{{ $errors->has('name') ? $errors->first('name') : '' }}</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Start Counter</label>
                    <select class="form-control select2" name="start_counter" data-placeholder="Select a State" style="width: 100%;">
                        <option></option>
                        @foreach( $stations as $station )
                            <option value="{{$station->id}}">{{$station->name}}</option>
                        @endforeach
                    </select>
                </div>
                <p class="text-red">{{ $errors->has('start_counter') ? $errors->first('start_counter') : '' }}</p>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>End Counter</label>
                    <select class="form-control select2" name="end_counter" data-placeholder="Select a State" style="width: 100%;">
                        <option></option>
                        @foreach( $stations as $station )
                            <option value="{{$station->id}}">{{$station->name}}</option>
                        @endforeach
                    </select>
                </div>
                <p class="text-red">{{ $errors->has('end_counter') ? $errors->first('end_counter') : '' }}</p>
            </div>
        </div>
        <div class="form-group">
            <label>Bus Stop</label>
            <select class="form-control select2" multiple="multiple" name="busStop[]" data-placeholder="Select a State" style="width: 100%;">
                @foreach( $stations as $station )
                    <option value="{{$station->id}}">{{$station->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Schedule</label>
            <select class="form-control select2" multiple="multiple" name="schedule[]" data-placeholder="Select a Time" style="width: 100%;">
                @foreach( $schedule as $time )
                    <option value="{{$time->id}}">{{ date('h:s A', strtotime($time->schedule))}}</option>
                @endforeach
            </select>
        </div>
        <button type="submut" class="btn btn-block btn-primary">Create</button>

    </div>

    {!! Form::close() !!}


@endsection

