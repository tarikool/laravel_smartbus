@php( $header = 'List of Trip' )


@extends('layouts.master')



@section('content')
    @include('includes.notifications')

    <div class="col-md-8">
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th class="serial">Ticket Id</th>
                    <th>User</th>
                    <th>Naame</th>
                    <th>Bus</th>
                    <th>Payment</th>
                    <th>To</th>
                </tr>
                @foreach( $trips as $trip )
                    <tr>
                        <td>{{ $trip->ticket_id }}</td>
                        <td>
                            <img height="38" src="{{$trip->user->photo ? $trip->user->photo->file : 'http://placehold.it/400x400' }}" alt="">
                        </td>
                        <td>{{' '. $trip->user->name }}</td>
                        <td>{{ $trip->bus->name }} at <small><a>{{ date('h:s A', strtotime($trip->bus->bus_time->schedule))}}</a></small></td>
                        <td>{{ $trip->no_of_ticket }} <small>ticket</small>- <a>{{ $trip->price }}</a> tk. <span class="label label-warning">pending</span></td>
                        <td>{{ $trip->dep_station->name }} - {{ $trip->des_station->name }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>



@endsection


