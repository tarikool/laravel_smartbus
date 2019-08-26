@php $header = 'Create User' @endphp

@extends('layouts.master')


@section('content')
    @include('includes.notifications')

    {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'files' => true ]) !!}

    <div class="card col-md-8">
        <div class="card-header"></div>
        <div class="card-body card-block">
            <div class="form-group">
                <label for="name" class=" form-control-label">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter name" class="form-control">
                <p class="text-red">{{ ($errors->has('name')) ? $errors->first('name') : ''}}</p>
            </div>
            <div class="form-group">
                <label for="email" class=" form-control-label">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter email address" class="form-control">
                <p class="text-red">{{ ($errors->has('email')) ? $errors->first('email') : ''}}</p>
            </div>
            <div class="row ">
                <div class="col-md-6">
                    <label for="password" class=" form-control-label">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" class="form-control">
                    <p class="text-red">{{ ($errors->has('password')) ? $errors->first('password') : ''}}</p>
                </div>
                <div class="col-md-6">
                    <label for="password_confirmation" class="form-control-label">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" class="form-control">
                    <p class="text-red">{{ ($errors->has('password_confirmation')) ? $errors->first('password_confirmation') : ''}}</p>
                </div>
            </div>
{{--            <div class="form-group">--}}
{{--                {!! Form::label('is_active', 'Status') !!}--}}
{{--                {!! Form::select('is_active', array( 1 => 'Active', 0 =>'Not Active' ) , 0 , ['class' => 'form-control']) !!}--}}
{{--            </div>--}}
            <div class="form-group">
                {!! Form::label('role_id', 'Role') !!}
                {!! Form::select('role_id',['' => 'Choose Role' ]+ $roles ,null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="file">Photo</label>
                <input type="file" id="file" name="file" class="form-control-file">
            </div>
            <div class="row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="city" class="form-control-label">City</label>
                        <input type="text" id="city" name="city" placeholder="Enter city" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone_number" class=" form-control-label">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('about', 'About') !!}
                {!! Form::textarea('about',null, ['class' => 'form-control', 'rows'=> 4, 'cols' => 3 ]) !!}
            </div>
            <div class="form-group">
                <button type="submit" class="btn bg-navy">Add </button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}


@endsection