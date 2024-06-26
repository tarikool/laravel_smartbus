@php $header = 'View Profile' @endphp

@extends('layouts.master')

@section('content')

    <div class="col-md-6">
        <div class="span3 well">
            <a href="#aboutModal" data-toggle="modal" data-target="#myModal">
                <img class="img-responsive" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" name="aboutme" width="120" height="140">
            </a>
            <h3>{{ $user->name }}</h3>
            Phone: <span class="text-aqua">{{ $user->phone_number ? $user->phone_number : '' }}</span>
        </div>
        <div class="form-group">
            <button type="button" onclick="window.location='{{ route("users.edit", $user->id ) }}'" class="btn bg-navy">Edit Profile</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">More About {{ $user->name }}</h4>
                </div>
                <div class="modal-body">
                    <img class="img-responsive" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" name="aboutme" width="120" height="140">
                    <h3 class="media-heading">{{$user->name}} <small>{{ $user->role ? $user->role->name : '' }}</small></h3>
                    <span><strong>Date:</strong></span>
                    <span class="label label-warning">{{$user->created_at ? $user->created_at->diffForHumans() : ''}}</span>
                    <hr>
                    <p class="text-left"><strong>Contact Info: </strong>
                    <br>
                        Email: <span class="text-aqua">{{ $user->email }}</span> <br>
                        Phone: <span class="text-aqua">{{ $user->phone_number ? $user->phone_number : '' }}</span> <br>
                        City: <span class="text-aqua">{{ $user->city ? $user->city : '' }}</span>
                    <hr>
                    <p class="text-left"><strong>About: </strong><br>{{$user->about ? $user->about : ''}}</p>
                    <br>
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection