<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'fak u';

    }

    public function drivers()
    {
        $drivers = User::all()->where('role_id',3);
        return view('admin.drivers', compact('drivers'));
    }

    public function addDriver()
    {
        return view('admin.addDriver');
    }

    public function storeDriver(AdminRequest $request)
    {
        $user = User::all()->first();
        $userName = $request->name;


        if( trim( $request->password ) == ''  ){
            $input = $request->except('password');

        }else {

            $input = $request->all();
            $input['password'] = bcrypt( $request->password );
        }

        User::create( $input );

        $request->session()->flash('user_created', 'New user '.$userName.' has been added');

        return redirect('/admin');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
