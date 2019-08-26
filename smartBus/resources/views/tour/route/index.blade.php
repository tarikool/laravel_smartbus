@extends('layouts.master')


@section('content')
    @include('includes.notifications')


    <h1>All Routes</h1>
    <button type="button" onclick="window.location='{{ route("routes.create") }}'" class="btn bg-purple pull-right">Add New</button>
    <div class="table-stats order-table ov-h">
        <table class="table ">
            <thead>
            <tr>
                <th class="serial">#</th>
                <th>Name</th>
                <th>Start Counter</th>
                <th>Last Counter</th>
                <th>Stoppages</th>
                <th>Available Time </th>
            </tr>
            </thead>

            @php($i=1)
            @foreach( $routes as $route )
                <tbody>
                <tr>
                    <td class="serial">{{$i++}}</td>
                    <td> {{ $route->name }} </td>
                    <td> {{ $route->startCounter ? $route->startCounter->name : ' ' }} </td>
                    <td> {{ $route->endCounter ? $route->endCounter->name : ' '}} </td>
                    <td>
                        @foreach( $route->stations as $station )
                            {{ $station->name }},
                        @endforeach
                    </td>
                    <td>
                        @foreach( $route->time as $time )
                            {{ date('h:m A', strtotime($time->schedule)) }},
                        @endforeach
                    </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route( 'routes.show', $route->id ) }}">View Route</a></li>
                                <li><a href="{{route('routes.edit', $route->id )}}">Edit Route</a></li>
                                <li class="divider"></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>






@endsection