@php $header = 'Book Now' @endphp
@extends('layouts.master')


@section('content')

    @include('includes.notifications')
    @include('includes.errors')


    {!! Form::open(['method' => 'POST', 'action' => 'BusTripController@store' ]) !!}

        <input type="hidden" name="destination" value="{{$destination}}">
        <input type="hidden" name="departure" value="{{$departure}}">
        <input type="hidden" name="ticket" value="{{$input['ticket']}}">
        <input type="hidden" name="price" value="{{$input['total']}}">
        <input type="hidden" name="user_id" value="{{$user->id}}">
        <input type="hidden" name="bus_id" value="{{$bus->id}}">



    <div class="row">
        <div class="box-body col-md-8">

            <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-white">
                    <div class="widget-user-image">
                        <img class="profile-user-img img-responsive img-circle" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" alt="User profile picture">
                    </div>
                    <!-- /.widget-user-image -->
                    <h3 class="widget-user-username pull-right">Balance</h3>
                    {{--                    <h5 class="widget-user-desc float-right">Lead Developer</h5>--}}
                    <h3 class="widget-user-username">Nadia Carmichael</h3>
                    <h5 class="widget-user-desc pull-right"><a class="pull-right">{{$input['departure']}}</a></h5>
                    <h5 class="widget-user-desc">Lead Developer</h5>
                </div>
                <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Departure</b> <a class="pull-right">{{$input['departure']}}</a>
                                </div>
                                <div class="col-md-6">
                                    <b>Destination</b> <a class="pull-right">{{$input['destination']}}</a>
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
                                    <b>Ticket</b> <a class="pull-right">{{$input['ticket']}}</a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b class="text-center">Total</b> <a class="pull-right">{{$input['total']}}</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>


    <div class="box-body col-md-8">

        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" alt="User profile picture">
                <h3 class="profile-username text-center">{{$user->name}}</h3>
                <h3 class="profile-username pull-right">Balance</h3>

                {{--                <p class="text-muted text-center">Software Engineer</p>--}}
                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Departure</b> <a class="pull-right">{{$input['departure']}}</a>
                            </div>
                            <div class="col-md-6">
                                <b>Destination</b> <a class="pull-right">{{$input['destination']}}</a>
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
                                <b>Ticket</b> <a class="pull-right">{{$input['ticket']}}</a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <b class="text-center">Total</b> <a class="pull-right">{{$input['total']}}</a>
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

