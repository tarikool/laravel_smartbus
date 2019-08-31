<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Photo;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'hola';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $user = User::findOrFail($id);
        return view('profile.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('profile.edit', compact('user'));
    }

    public function update( UserRequest $request, $id)
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

//        return redirect('/admin/users');
//
        return redirect()->route('user.show', $id);
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
