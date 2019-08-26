@php $header = 'List of Bus' @endphp

@extends('layouts.master')


@section('content')
    @include('includes.notifications')


    <h1>All Bus</h1>
    <button type="button" onclick="window.location='{{ route("bus.check") }}'" class="btn bg-purple pull-right">Add New</button>
    <div class="table-stats order-table ov-h">
        <table class="table ">
            <thead>
            <tr>
                <th class="serial">#</th>
                <th>Name</th>
                <th>Driver</th>
                <th>Route</th>
                <th>Cost Per Unit</th>
                <th>Total Seat</th>
                <th>Booked</th>
                <th>License Number</th>
                <th>Arrival Time</th>
            </tr>
            </thead>

            @php($i=1)
            @foreach( $buses as $bus )
                <tbody>
                <tr>
                    <td class="serial">{{$i++}}</td>
                    <td> {{ $bus->name }} </td>
                    <td> {{ $bus->driver ? $bus->driver->name : '' }} </td>
                    <td> {{ $bus->route->name }} </td>
                    <td> {{ $bus->cost_per_seat }} </td>
                    <td> {{ $bus->total_seat }} </td>
                    <td> {{ $bus->booked_seat }} </td>
                    <td> {{ $bus->license_number }} </td>
                    <td> {{ $bus->bus_time ? date('h:s A', strtotime($bus->bus_time->schedule)) : ''}} </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">Action</button>
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route( 'bus.show', $bus->id ) }}">view Bus</a></li>
                                <li><a href="{{route('bus.edit', $bus->id )}}">Edit Bus</a></li>
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