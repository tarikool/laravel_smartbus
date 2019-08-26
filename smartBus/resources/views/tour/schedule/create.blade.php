@php $header = 'Add Route' @endphp
@extends('layouts.master')


@section('content')

    @include('includes.notifications')


    {!! Form::open(['method' => 'POST', 'action' => 'BusScheduleController@store' ]) !!}

    <div class="box-body col-md-8">
        <div class="form-group">
            <label for="schedule">Time</label>
            <div class="input-group">
                <input type="text" name="schedule" class="form-control timepicker" value="">
                <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                </div>
            </div>
            <p class="text-red">{{ ($errors->has('schedule')) ? $errors->first('schedule') : ''}}</p>
        </div>
        <button type="submut" class="btn btn-block btn-primary">Create</button>


    </div>
    {!! Form::close() !!}


@endsection

@section('scripts')

@endsection