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


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function bus()
    {
        return $this->belongsTo('App\Bus');
    }

    public function des_station()
    {
        return $this->belongsTo('App\BusStation', 'destination');
    }


    public function dep_station()
    {
        return $this->belongsTo('App\BusStation', 'departure');
    }



}
