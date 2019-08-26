@php $header = 'Add A New Bus' @endphp
@extends('layouts.master')


@section('content')

    @include('includes.notifications')

    {!! Form::open(['method' => 'GET', 'action' => 'AdminBusController@create' ]) !!}

    <div class="box-body col-md-8">
        <div class="form-group">
            <label>Route</label>
            <select class="form-control select2" name="route_id" data-placeholder="Select a Route" style="width: 100%;">
                <option></option>
                @foreach( $routes as $route )
                    <option value="{{$route->id}}">{{$route->name}}</option>
                @endforeach
            </select>
            <p class="text-red">{{ ($errors->has('route_id')) ? 'Please select a Route' : ''}}</p>
        </div>
        <div class="form-group">
            <button type="submut" class="btn bg-navy">Create</button>
        </div>
    </div>
    {!! Form::close() !!}


@endsection

