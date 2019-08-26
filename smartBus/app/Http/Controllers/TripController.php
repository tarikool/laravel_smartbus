<?php

namespace App\Http\Controllers;

use App\BusRoute;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        $routes = BusRoute::all();
        return view('tour.trip_route', compact('routes'));
//        $routes = BusRoute::findOrFail(2);
//        return $routes->stations->pluck('name', 'id');
    }


    public function store(Request $request)
    {
        //
    }


    public function getRoute( Request $request)
    {
        $route['route_id'] = $request->route_id;
        $route = BusRoute::findOrFail( $route['route_id']);
        $route['stations'] = $route->stations;
        $route['buses'] = $route->bus;
        $route['schedules'] = $route->time;
//        return $route['schedules'];
//        return $route['buses'];

        return view('tour.create', compact('route'));
    }

    public function route(Request $request)
    {

        $id = $request->id;
        $route = BusRoute::findOrFail($id);
        $busStops = $route->stations;
        return $busStops;

    }

    public function bus(Request $request)
    {

        $id = $request->id;
        $route = BusRoute::findOrFail($id);
        $buses = $route->bus;
        return $buses;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
