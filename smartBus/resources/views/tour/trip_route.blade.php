@php $header = 'Choose Route' @endphp
@extends('layouts.master')


@section('content')

    @include('includes.notifications')
    @include('includes.errors')


    {!! Form::open(['method' => 'GET', 'action' => 'TripController@getRoute' ]) !!}

    <div class="card col-md-8">
        <div class="card-body card-block">
            <div class="form-group">
                <label>Route</label>
                <select class="form-control select2" name="route_id" id="route_id" data-placeholder="Select Route" style="width: 100%;">
                    <option></option>
                    @foreach( $routes as $route )
                        <option value="{{$route->id}}">{{isset($route->startCounter->name) ? $route->startCounter->name : ''}}-{{isset($route->endCounter->name) ? $route->endCounter->name : ''}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn bg-navy">Select</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

@endsection

