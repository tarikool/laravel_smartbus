@php $header = 'Edit Profile' @endphp


@extends('layouts.master')



@section('content')
    {!! Form::model($user,['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id ], 'files' => true ]) !!}
    <div class="card col-md-8">
        <div class="card-header"></div>
        <div class="card-body card-block">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ $user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" alt="" class="img-responsive img-rounded">
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name',null, ['class' => 'form-control']) !!}
                        <p class="text-red">{{ ($errors->has('name')) ? $errors->first('name') : ''}}</p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email',null, ['class' => 'form-control']) !!}
                        <p class="text-red">{{ ($errors->has('email')) ? $errors->first('email') : ''}}</p>
                    </div>
                    <div class="form-group">
                        <label for="file">Photo</label>
                        <input type="file" id="file" name="file" class="form-control-file">
                    </div>
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('city', 'City') !!}
                                {!! Form::text('text',null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('phone_number', 'Phone Number') !!}
                                {!! Form::text('text',null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('about', 'About') !!}
                        {!! Form::textarea('about',null, ['class' => 'form-control', 'rows'=> 4, 'cols' => 3 ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn bg-navy']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

@endsection
