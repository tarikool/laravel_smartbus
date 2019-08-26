<?php

namespace App\Http\Controllers;

use App\Bus;
use App\BusRoute;
use App\BusSchedule;
use App\BusStation;
use App\Http\Requests\BusRequest;
use App\User;
use Illuminate\Http\Request;

class AdminBusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $bus = Bus::find(1);
//        return $bus->bus_time;

        $buses = Bus::all();
        return view('tour.bus.index', compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'route_id' => 'required',
        ]);
        $route = BusRoute::findOrFail( $request->route_id);
        $drivers = User::where('role_id', 3)->get();

        return view('tour.bus.create', compact( 'drivers', 'route'));
    }


    public function edit($id)
    {
        $bus = Bus::findOrFail($id);
        $route = BusRoute::findOrFail( $bus->route_id);
        $drivers = User::where('role_id', 3)->get();
//        return $bus->bus_time->schedule;

        return view('tour.bus.edit', compact('bus', 'drivers', 'route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BusRequest $request)
    {
        $input = $request->all();
        Bus::create($input);
        $request->session()->flash('data_inserted', 'Data Inserted Successfully');
        return redirect('/admin/bus');
    }

    public function show($id)
    {
        //
    }

    public function check(Request $request)
    {
        $routes = BusRoute::all();

        return view('tour.bus.check',compact('routes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BusRequest $request, $id)
    {
        $bus = Bus::find($id);
        $input = $request->all();
        $bus->update($input);
        $request->session()->flash('info_updated', 'Updated Successfully');
        return redirect('admin/bus');
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
