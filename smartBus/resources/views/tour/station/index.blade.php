@php $header = 'Add Station' @endphp

@extends('layouts.master')


@section('content')
    @include('includes.notifications')


    <h1>All Stations</h1>
    <div class="table-stats order-table ov-h">
        <table class="table ">
            <thead>
            <tr>
                <th class="serial">#</th>
                <th>Name</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Opening Hour</th>
                <th>Closing Hour</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th></th>
            </tr>
            </thead>

            @php($i=1)
            @foreach( $stations as $station )
                <tbody>
                <tr>
                    <td class="serial">{{$i++}}</td>
                    <td> {{ $station->name }} </td>
                    <td> {{ $station->lat }} </td>
                    <td> {{ $station->long }} </td>
                    <td> {{ $station->opening_hour ? date('h:s A', strtotime($station->opening_hour)) : ' ' }} </td>
                    <td> {{ $station->closing_hour ? date('h:s A', strtotime($station->closing_hour)) : ' '}} </td>
                    <td> <span class="product">{{ $station->address }}</span> </td>
                    <td>  <span class="name">{{ $station->phone_number ? $station->phone_number : 'No Phone Number' }}</span> </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route( 'stations.show', $station->id ) }}">view Station</a></li>
                                <li><a href="{{route('stations.edit', $station->id )}}">Edit Station</a></li>
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