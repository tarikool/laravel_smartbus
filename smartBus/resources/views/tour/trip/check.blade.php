@php $header = 'Add Trip' @endphp
@extends('layouts.master')


@section('content')

    @include('includes.notifications')

    {!! Form::open(['method' => 'GET', 'action' => 'BusTripController@create' ]) !!}

    <div class="card col-md-8">
        <div class="card-body card-block">
            <div class="form-group">
                <label>Destination</label>
                <select class="form-control select2 locations" id="destination" name="id" data-placeholder="Select A Destination" style="width: 100%;">
                    <option></option>
                    @foreach( $stations as $station )
                        <option value="{{$station->id}}">{{isset($station->name) ? $station->name : ''}}</option>
                    @endforeach
                </select>
                <p class="text-red">{{ ($errors->has('id')) ? 'please select a destination' : ''}}</p>
            </div>
            <div class="form-group">
                <button type="submit" class="btn bg-navy">Check</button>
            </div>
        </div>
    </div>

    {!! Form::close() !!}

@endsection

