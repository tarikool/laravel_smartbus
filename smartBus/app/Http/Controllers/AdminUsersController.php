<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{

    public function index()
    {

        $users = User::all();
        return view('admin.users.index', compact('users'));

    }


    public function create()
    {
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.create', compact('roles'));
    }


    public function store( UsersRequest $request)
    {
        $userName = $request->name;

        if( trim( $request->password ) == ''  ){
            $input = $request->except('password');

        }else {

            $input = $request->all();
            $input['password'] = bcrypt( $request->password );
        }

        if ( $data = $request->file( 'file' ) ) {

            $name = strtok( $userName,' ').'_'.$data->getClientOriginalName();
            $data->move( 'images/users', $name);

            $photo = Photo::create([ 'file' => $name ]);
            $input['photo_id'] = $photo->id;

        }

        $result = User::create($input);
        $request->session()->flash('user_created', 'New user '.$userName.' has been added');
        return redirect('/admin/users');
    }


    public function show($id)
    {

//        $user = date('M. Y', strtotime(auth()->user()->created_at));
//
//        return $user;

        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }


    public function update( Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);

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
