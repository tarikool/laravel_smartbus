<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
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


    public function store( AdminRequest $request)
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

//        $user = User::findOrFail($id);
//        return view('admin.users.show', compact('user'));
    }


    public function edit($id)
    {

    }


    public function update( Request $request, $id)
    {

    }


    public function destroy($id)
    {
        //
    }
}
