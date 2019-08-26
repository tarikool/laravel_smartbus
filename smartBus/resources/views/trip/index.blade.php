@extends('layouts.dashboard')


@section('content')

    {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'files' => true ]) !!}


    <div class="card col-lg-8">
        <div class="card-header"><strong>Create User</strong></div>
        <div class="card-body card-block">
            <div class="form-group">
                <label for="destination" class=" form-control-label">Destination</label>
                <input type="text" id="destination" name="destination" placeholder="Enter Destination" class="form-control">
            </div>
            <div class="form-group">
                <label for="deparature" class=" form-control-label">deparature</label>
                <input type="text" id="deparature" name="deparature" placeholder="Enter deparature" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">Add Driver</button>
            </div>
        </div>
    </div>


    {!! Form::close() !!}


@endsection