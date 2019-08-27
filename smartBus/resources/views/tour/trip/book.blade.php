@php $header = 'Book Now' @endphp
@extends('layouts.master')


@section('content')

    @include('includes.notifications')
    @include('includes.errors')


    {!! Form::open(['method' => 'POST', 'action' => 'BusTripController@store' ]) !!}

{{--    <input type="hidden" name="data" value="{{json_encode($input, TRUE)}}">--}}
    <input type="hidden" name="bus_id" value="{{$bus->id}}">
    <input type="hidden" name="route_id" value="{{$bus->route->id}}">
    <input type="hidden" name="user_id" value="{{$user->id}}">
    <input type="hidden" name="destination" value="{{$input['destination']}}">
    <input type="hidden" name="departure" value="{{$input['departure']}}">
    <input type="hidden" name="no_of_ticket" value="{{$input['no_of_ticket']}}">
    <input type="hidden" name="price" value="{{$input['total']}}">


    <div class="box-body col-md-8">

        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" alt="User profile picture">
                <h3 class="profile-username text-center">{{$user->name}}</h3>
                <h3 class="profile-username pull-right">Balance </h3>
                <p class="text-muted text-center" style="margin-left: 92%;">{{$user->balance}} tk.</p>
                <ul class="list-group list-group-unbordered">

                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Departure</b> <a class="pull-right">{{$stations->find($input['departure'])->name}}</a>
                            </div>
                            <div class="col-md-6">
                                <b>Destination</b> <a class="pull-right">{{$stations->find($input['destination'])->name}}</a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Bus Name</b> <a class="pull-right">{{$bus->name}}</a>
                            </div>
                            <div class="col-md-6">
                                <b>Time</b> <a class="pull-right">{{isset($bus->bus_time) ? date('h:s A', strtotime($bus->bus_time->schedule)) : ''}}</a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Ticket</b> <a class="pull-right">{{$input['no_of_ticket']}}</a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b class="text-center">Total</b> <a class="pull-right">{{$input['total']}} tk.</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="form-group">
                    <button type="submut" class="btn bg-navy">Book</button>
                    <button type="submut" class="btn btn-primary">Pay Now</button>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>

    {!! Form::close() !!}


@endsection

