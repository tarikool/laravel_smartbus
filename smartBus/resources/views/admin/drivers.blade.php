@extends('layouts.dashboard')


@section('content')

    <p style="text-align: center;">
        <button type="button" onclick="window.location='{{ route("admin.addDriver") }}'" class="btn btn-outline-primary btn-lg new-driver">Add a New Driver</button>
    </p>

    @if( count($drivers)>0 )

    <h1>List Of Drivers</h1>
    <div class="table-stats order-table ov-h">
        <table class="table ">
            <thead>
            <tr>
                <th class="serial">#</th>
                <th class="avatar">Avatar</th>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
            </thead>

            @php($i=1)
            @foreach( $drivers as $driver )
                <tbody>
                <tr>
                    <td class="serial">{{$i++}}</td>
                    <td class="avatar">
                        <div class="round-img">
                            <a href="#"><img class="rounded-circle" src="images/avatar/{{$i-1}}.jpg" alt=""></a>
                        </div>
                    </td>
                    <td> {{ $driver->name }} </td>
                    <td>  <span class="name">{{ $driver->role ? $driver->role->name : 'No Role' }}</span> </td>
                    <td> <span class="product">{{ $driver->email }}</span> </td>
                    <td>
                        <span class="badge badge-complete">Complete</span>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>

    @else
        <h2 class="text-center">No Driver found</h2>
    @endif





@endsection