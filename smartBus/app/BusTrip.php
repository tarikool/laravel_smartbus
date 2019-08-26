<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusTrip extends Model
{
    protected $fillable = [
        'departure', 'destination', 'ticket_id',
        'price', 'payment_status', 'expiration',
        'user_id', 'route_id', 'bus_id', 'no_of_ticket'
    ];



}
