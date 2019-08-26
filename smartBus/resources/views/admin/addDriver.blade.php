@extends('layouts.dashboard')


@section('content')
    {!! Form::open(['method' => 'POST', 'action' => 'AdminController@storeDriver', 'files' => true ]) !!}

        <div class="card col-lg-8">
            <div class="card-header"><strong>Add Driver</strong><small> Form</small></div>
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="name" class=" form-control-label">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email" class=" form-control-label">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter email address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password" class=" form-control-label">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="confirmPassword" class=" form-control-label">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="file">Photo</label>
                    <input type="file" id="file" name="file" class="form-control-file">
                </div>
                <div class="row form-group">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="city" class="form-control-label">City</label>
                            <input type="text" id="city" name="city" placeholder="Enter city" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="phoneNumber" class=" form-control-label">Phone Number</label>
                            <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">Add Driver</button>
                </div>
            </div>
        </div>
    {!! Form::close() !!}

    @include('includes.errors')


@endsection