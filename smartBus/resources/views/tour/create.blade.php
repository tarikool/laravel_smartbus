@php $header = 'Add Trip' @endphp
@extends('layouts.master')


@section('content')

    @include('includes.notifications')
    @include('includes.errors')


    {!! Form::open(['method' => 'POST', 'action' => 'TripController@store' ]) !!}

    <div class="card col-md-8">
        <div class="card-body card-block">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Departure</label>
                        @if(count($route['stations'])<1)
                            <option style="color: gray;">No Stations Available</option>
                        @endif
                        <select class="form-control select2 locations" name="departure" id="departure" data-placeholder="Select departure" style="width: 100%;">
                            @foreach( $route['stations'] as $station )
                                <option value="{{$station->id}}">{{isset($station->name) ? $station->name : ''}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Destination</label>
                        <select class="form-control select2 locations" id="destination" name="destination" data-placeholder="Select a Destination" style="width: 100%;">
                            @if(count($route['stations'])<1)
                                <option style="color: gray;">No Stations Available</option>
                            @endif
                            @foreach( $route['stations'] as $station )
                                <option value="{{$station->id}}">{{isset($station->name) ? $station->name : ''}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Available Bus </label>
                <select class="form-control select2 locations" name="bus_id" id="bus" data-placeholder="Select a Bus" style="width: 100%;">
                    @if(count($route['buses'])<1)
                        <option style="color: gray;">No Bus Available</option>
                    @endif
                    @foreach( $route['buses'] as $bus )
                        <option value="{{$bus->id}}">{{isset($bus->name) ? $bus->name : ''}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="closing_hour">Available Time</label>
                        <select class="form-control select2 locations" name="time_id" id="bus" data-placeholder="Choose a time" style="width: 100%;">
{{--                            @if(count($route['schedules'])<1)--}}
{{--                                <option style="color: gray;">Not Available</option>--}}
{{--                            @endif--}}
                            @foreach( $route['schedules'] as $time )
                                <option value="{{$time->id}}">{{isset($time->schedule) ? date('h:s A', strtotime($time->schedule)) : ''}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tickets">Tickets</label>
                        <input type="number" class="form-control" id="tickets" name="tickets">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn bg-navy">Add Station</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

@endsection




@section('scripts')
    <script>
        $(document).ready(function () {

            $('.locations').on('select2:opening', function () {

                var route_id = $('#route_id :selected').val();

                    $.ajax({
                        url:"{{ url('routes')}}",
                        method:"GET",
                        data:{ id: route_id },
                        type:'json',
                        success:function(data)
                        {
                            console.log(data);
                            for (var i = 0, l = data.length; i < l; i++) {
                                var obj = data[i];
                                $("#departure").append("<option value="+obj.id+">"+obj.name+"</option>");
                                $("#destination").append("<option value="+obj.id+">"+obj.name+"</option>");
                            }
                            data = null;
                        }
                    });


                    $.ajax({
                        url:"{{ url('buses')}}",
                        method:"GET",
                        data:{ id: route_id },
                        type:'json',
                        success:function(data)
                        {
                            console.log(data);
                            for (var i = 0, l = data.length; i < l; i++) {
                                var obj = data[i];
                                $("#bus").append("<option value="+obj.id+">"+obj.name+"</option>");
                            }

                            data = null;
                        }
                    });

                // });

            });
        });
    </script>

@endsection