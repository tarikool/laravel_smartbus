<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    protected $fillable = ['name', 'start_counter', 'end_counter'];


    public function stations()
    {
        return $this->belongsToMany('App\BusStation','route_station','route_id', 'station_id');
    }


    public function time()
    {
        return $this->belongsToMany('App\BusSchedule','route_schedule','route_id', 'schedule_id');
    }


    public function startCounter()
    {
        return $this->belongsTo('App\BusStation','start_counter');
    }

    public function endCounter()
    {
        return $this->belongsTo('App\BusStation','end_counter');
    }


    public function bus()
    {
        return $this->hasMany('App\Bus', 'route_id');
    }




}
