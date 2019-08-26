@extends('layouts.dashboard')


@section('content')
    @include('includes.notifications')


    <h1>All Users</h1>
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
            @foreach( $users as $user )
                <tbody>
                <tr>
                    <td class="serial">{{$i++}}</td>
                    <td class="avatar">
                        <div class="round-img">
                            <a href="#"><img class="rounded-circle" src="images/avatar/{{$i-1}}.jpg" alt=""></a>
                        </div>
                    </td>
                    <td> {{ $user->name }} </td>
                    <td>  <span class="name">{{ $user->role ? $user->role->name : 'No Role' }}</span> </td>
                    <td> <span class="product">{{ $user->email }}</span> </td>
                    <td>
                        <select name="selectSm" id="selectSm" class="form-control-sm form-control">
                            <option value="0">Action</option>
                            <option value="1">View</option>
                            <option value="2">Edit</option>
                        </select>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>






@endsection