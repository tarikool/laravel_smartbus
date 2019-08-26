<?php

namespace App\Http\Controllers;

use App\Bus;
use App\BusRoute;
use App\BusStation;
use App\BusTrip;
use App\Http\Requests\TripRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BusTripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return 'work';

        return view('tour.trip.map');
    }


    public function check()
    {


        $stations = BusStation::all();
        return view('tour.trip.check',compact('stations'));

    }


    public function create(Request $request)
    {

        $this->validate( $request, ['id' => 'required']);

        $id = $request->id;

        $destination = BusStation::findOrFail($id);
        $route_id = DB::table('route_station')->where('station_id', $id)->pluck('route_id');
        $buses = Bus::whereIn('route_id', $route_id)->get();
        $station_id = DB::table('route_station')->whereIn('route_id', $route_id)->pluck('station_id');
        $stations = BusStation::find($station_id);

        return view('tour.trip.create', compact('stations', 'destination', 'buses'));
//        return view('tour.trip.map', compact('stations', 'destination', 'buses'));
    }



    public function book( TripRequest $request)
    {
        $user = Auth::user();
        $input = $request->all();
        $bus = Bus::find( $input['bus_id']);
        $input['total'] = ($bus->cost_per_seat)*$input['ticket'];

        $stations = BusStation::all();
        return view('tour.trip.book', compact('input', 'stations','user', 'bus'));
    }




    public function store( TripRequest $request)
    {

        $input = $request->all();
        $input['ticket_id'] = str_random(8);
        $input['payment_status']=0;
        BusTrip::create($input);
        $request->session()->flash('booked', 'Your Ticket has been Booked. Please, Pay Quickly');
        return redirect('bus/trip/create');
    }


    public function map(Request $request)
    {
//        return $request->all();
        $station = BusStation::find( $request->id );

        return $station;
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }



}
