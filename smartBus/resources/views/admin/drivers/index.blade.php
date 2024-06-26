@extends('layouts.master')


@section('content')
    @include('includes.notifications')


    <h1>All Drivers</h1>
    <div class="table-stats order-table ov-h">
        <table class="table ">
            <thead>
            <tr>
                <th class="serial">#</th>
                <th class="avatar">Avatar</th>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
                <th></th>
            </tr>
            </thead>

            @php($i=1)
            @foreach( $drivers as $driver )
                <tbody>
                <tr>
                    <td class="serial">{{$i++}}</td>
                    <td class="avatar">
                        <div class="round-img">
                            <img height="50" src="{{$driver->photo ? $driver->photo->file : 'http://placehold.it/400x400' }}" alt="">
                        </div>
                    </td>
                    <td> {{ $driver->name }} </td>
                    <td>  <span class="name">{{ $driver->role ? $driver->role->name : 'No Role' }}</span> </td>
                    <td> <span class="product">{{ $driver->email }}</span> </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route( 'drivers.edit', $driver->id ) }}">Edit</a></li>
{{--                                <li><a href="{{route('drivers.destroy', $driver->id )}}">Delete</a></li>--}}
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