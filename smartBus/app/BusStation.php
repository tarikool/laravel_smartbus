<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusStation extends Model
{
    protected $fillable = ['bus_id', 'name', 'lat', 'long', 'opening_hour', 'closing_hour', 'address', 'phone_number'];


    public function routes()
    {
        return $this->belongsToMany('App\BusRoute','route_station', 'station_id', 'route_id');
    }
}
