@php $header = 'All Schedules' @endphp

@extends('layouts.master')


@section('content')
    @include('includes.notifications')

    <div class="box-body col-md-8">
        <h1>Time Table</h1>
        <button type="button" onclick="window.location='{{ route("schedule.create") }}'" class="btn bg-purple pull-right">Add New</button>
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                <tr>
                    <th class="serial">#</th>
                    <th>Schedule</th>
                </tr>
                </thead>

                @php($i=1)
                @foreach( $times as $time )
                    <tbody>
                    <tr>
                        <td class="serial">{{$i++}}</td>
                        <td> {{ $time->schedule ? date('h:s A', strtotime($time->schedule)) : ' ' }} </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    {{--                                <li><a href="{{ route( 'stations.show', $station->id ) }}">view Station</a></li>--}}
                                    <li class="divider"></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>









@endsection