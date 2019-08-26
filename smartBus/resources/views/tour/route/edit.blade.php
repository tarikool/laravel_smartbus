@php($header = 'Edit Route')

@extends('layouts.master')


@section('content')

    @include('includes.notifications')

    {!! Form::model( $route ,['method' => 'PATCH', 'action' => ['BusRouteController@update', $route->id ] ]) !!}

    <div class="box-body col-md-8">
        <div class="form-group">
            <label for="name">Route Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$route->name}}" placeholder="Enter Route Name">
            <p class="text-red">{{ $errors->has('name') ? $errors->first('name') : '' }}</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Start Counter</label>
                    <select class="form-control select2" name="start_counter" data-placeholder="Select a Station" style="width: 100%;">
                        <option value="{{ $route->startCounter ? $route->startCounter->id : '' }}">{{ $route->startCounter ? $route->startCounter->name : '' }}</option>
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
                    <select class="form-control select2" name="end_counter" data-placeholder="Select a Station" style="width: 100%;">
                        <option value="{{ $route->endCounter ? $route->endCounter->id : '' }}">{{ $route->endCounter ? $route->endCounter->name : '' }}</option>
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
            <select class="form-control select2" multiple="multiple" name="busStop[]" id="busStop" data-placeholder="Select a Station" style="width: 100%;">
                <option></option>
                @foreach( $stations as $station )
                    <option value="{{$station->id}}">{{$station->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Choose a Time</label>
            <select class="form-control select2" multiple="multiple" name="schedule[]" id="schedule" data-placeholder="Select a Station" style="width: 100%;">
                <option></option>
                @foreach( $schedule as $time)
                    <option value="{{$time->id}}">{{ date('h:s A', strtotime($time->schedule))}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submut" class="btn btn-block bg-navy">Update</button>
        </div>


    </div>
    {!! Form::close() !!}


@endsection

@php($busStop = $route->stations->pluck('id'))
@php($schedule = $route->time->pluck('id'))

@section('scripts')
    <script>
        $(document).ready(function () {

            var busStop = JSON.parse("{{ json_encode($busStop) }}");
            var schedule = JSON.parse("{{ json_encode($schedule) }}");

            $('#busStop').val(busStop).change();
            $('#schedule').val(schedule).change();

        });
    </script>
@endsection

