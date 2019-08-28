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
        $user = Auth::user();

//        $trips = BusTrip::find(1);
//        return $trips->station->photo;

        if ( $user->isAdmin() ){
            $trips = BusTrip::all();
        }else{
            $trips = $user->trip;
        }
//        return $user;
        return view('tour.trip.index', compact('trips'));
    }


    public function frontend()
    {
        $stations = BusStation::all();

        return view('tour.trip.map', compact('stations'));

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

        $distance = preg_replace('/[^0-9\.]/', "", $request->distance);

        $user = Auth::user();
        $input = $request->all();
        $bus = Bus::find( $input['bus_id']);
        $input['total'] = ($bus->cost_per_unit)*$input['no_of_ticket']*$distance;
        $stations = BusStation::all();
        return view('tour.trip.book', compact('input', 'stations','user', 'bus'));
    }




    public function store( Request $request)
    {

        $input = $request->all();
        $input['ticket_id'] = str_random(8);
        $input['payment_status']=0;
        BusTrip::create($input);
        $request->session()->flash('booked', 'Your Ticket has been Booked. Please, Pay Quickly');
        return redirect('bus/trip');
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
