<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class AdminDriversController extends Controller
{

    public function index()
    {
        $drivers = User::where('role_id',3)->get();
        return view('admin.drivers.index', compact('drivers'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $driver = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.drivers.edit', compact('driver','roles'));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail( $id );
        $photo_ID = $user->photo_id;
        $userName = $user->name;

        if( trim( $request->password) == ''  ){
            $input = $request->except('password');

        }else {

            $input = $request->all();
            $input['password'] = bcrypt( $request->password );
        }

        $data = $request->file( 'file' );

        if ( $data ) {

            $newPhoto = strtok( $userName,' ').'_'.$data->getClientOriginalName();
            $photo =  Photo::find( $photo_ID );

            if( $photo ) {

                $oldPhoto = $photo->file;

                if ( file_exists(public_path(). $oldPhoto))
                    unlink(public_path().$oldPhoto );
                $photo->update( [ 'file' =>$newPhoto ] );
                $input['photo_id'] = $photo_ID;
            } else {
                $photo = Photo::create([ 'file' => $newPhoto ]);
                $input['photo_id'] = $photo->id;
            }

            $data->move( 'images/users', $newPhoto);
        }

        $user->update( $input );
        $request->session()->flash('user_updated', $userName.'\'s Profile has been Updated');

        return redirect('/admin/users');

    }

    public function destroy($id)
    {
        //
    }
}
