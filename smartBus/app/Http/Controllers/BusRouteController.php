<?php

namespace App\Http\Controllers;

use App\BusRoute;
use App\BusSchedule;
use App\BusStation;
use App\Http\Requests\RouteRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class BusRouteController extends Controller
{

    public function index()
    {
        $route = BusRoute::find(3);
//        return $route->stations;
//        return $route->time;

        $routes = BusRoute::all();
        return view('tour.route.index', compact('routes'));
    }



    public function create()
    {
        $stations = BusStation::all('id','name');
        $schedule = BusSchedule::all();
        return view('tour.route.create', compact('stations', 'schedule'));
    }




    public function store(RouteRequest $request)
    {
//
//        $this->validate( $request, [
//            'name' => 'required|min:3',
//        ]);

        $input = $request->busStop;
        $input['start_counter'] = $request->start_counter;
        $input['end_counter'] = $request->end_counter;
        $busStop = collect($input)->flatten();

        $schedule = $request->schedule;

        $route = BusRoute::create( $request->all() );
        $route->stations()->attach( $busStop );
        $route->time()->attach( $schedule );
        $request->session()->flash('data_inserted', 'Data Inserted Successfully');

        return redirect('bus/routes');
    }


    public function show($id)
    {
        //
    }




    public function edit($id)
    {
        $stations = BusStation::all();
        $schedule = BusSchedule::all();
        $route = BusRoute::findOrFail($id);

        return view('tour.route.edit', compact('route', 'stations', 'schedule'));

    }




    public function update(RouteRequest $request, $id)
    {

        $input = $request->busStop;
        $input['start_counter'] = $request->start_counter;
        $input['end_counter'] = $request->end_counter;
        $busStop = collect($input)->flatten();
        $schedule= $request->schedule;
        
        $route = BusRoute::findOrFail($id);
        $route->update($request->all());
        $route->stations()->sync( $busStop );
        $route->time()->sync( $schedule);

        $request->session()->flash('info_updated', 'Updated Successfully');
        return redirect('bus/routes');

    }


    public function destroy($id)
    {
        //
    }
}
