<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = [
        'name', 'license_number', 'total_seat', 'booked_seat',
        'cost_per_seat', 'driver_id', 'route_id', 'station_id',
        'schedule_id', 'paid', 'trip_id'
    ];


    public function route()
    {
        return $this->belongsTo('App\BusRoute','route_id');
    }

    public function bus_time()
    {
        return $this->belongsTo('App\BusSchedule', 'schedule_id');
    }

    public function driver()
    {
        return $this->belongsTo('App\User', 'driver_id');
    }





}
