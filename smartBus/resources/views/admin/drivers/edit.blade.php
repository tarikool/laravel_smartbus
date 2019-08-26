@extends('layouts.master')


@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit</strong> Driver
        </div>
        <div class="card-body">

            {!! Form::model($driver,['method' => 'PATCH', 'action' => ['AdminDriversController@update', $driver->id ], 'files' => true ]) !!}

            <div class="row">
                <div class="col-md-3">
                    <img src="{{ $driver->photo ? $driver->photo->file : 'http://placehold.it/400x400' }}" alt="" class="img-responsive img-rounded">
                </div>

                <div class="col-md-9">
                    <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name',null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email',null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('is_active', 'Status') !!}
                        {!! Form::select('is_active', array( 1 => 'Active', 0 =>'Not Active' ) , 0 , ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('role_id', 'Role') !!}
                        {!! Form::select('role_id',['' => 'Choose Role' ]+ $roles ,null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="file">Photo</label>
                        <input type="file" id="file" name="file" class="form-control-file">
                    </div>
                    <div class="form-group">
                        {!! Form::label('about', 'About') !!}
                        {!! Form::textarea('about',null, ['class' => 'form-control', 'rows'=> 4, 'cols' => 3 ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-outline-info ']) !!}
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    <div class="row">
        @include('includes.errors')
    </div>

@endsection
