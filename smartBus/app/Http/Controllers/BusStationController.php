<?php

namespace App\Http\Controllers;

use App\BusStation;
use App\Http\Requests\StationRequest;
use Illuminate\Http\Request;

class BusStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = BusStation::all();
        return view('tour.station.index', compact('stations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tour.station.create');
    }

    public function store( StationRequest $request)
    {
        $input = $request->all();
        $input['opening_hour'] = date('H:i:s',strtotime($request->opening_hour));
        $input['closing_hour'] = date('H:i:s',strtotime($request->closing_hour));
        BusStation::create($input);
        $request->session()->flash('data_inserted', 'Added Successfully');

        return redirect('bus/stations');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $station = BusStation::findOrFail($id);
        return view('tour.station.edit', compact('station'));
    }

    public function update( StationRequest $request, $id)
    {
        $input = $request->all();
        $input['opening_hour'] = date('H:i:s',strtotime($request->opening_hour));
        $input['closing_hour'] = date('H:i:s',strtotime($request->closing_hour));
        $station = BusStation::FindOrFail($id);
        $station->update($input);
        $request->session()->flash('info_updated', 'Updated Successfully');

        return redirect('bus/stations');

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
