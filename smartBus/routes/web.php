<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Role;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/insert', function () {

    $role = Role::find(1);
    $user = User::findOrFail(1);

    if( !$role && $user ){

        DB::table('roles')->insert([
            ['name' => 'Administrator' ],
            ['name' => 'User' ],
            ['name' => 'Driver' ]
        ]);

        $user->update([ 'role_id' => 1 ]);

    }

    DB::table('users')->insert([
        ['name' => 'Driver2', 'email' => 'driver5@email.com', 'password' => 'driver124', 'role_id' => 3],
        ['name' => 'Driver3', 'email' => 'driver6@email.com', 'password' => 'driver124', 'role_id' => 3],
        ['name' => 'Driver4', 'email' => 'driver8@email.com', 'password' => 'driver124', 'role_id' => 3]
    ]);

    return redirect('/admin/users');
});

Route::get('/backup', function (){
    return view('layouts.backup');
});


Route::group(['middleware' => 'admin'], function() {

    Route::resource('admin/users', 'AdminUsersController');
    Route::resource('admin/drivers', 'AdminDriversController');
    Route::resource('user', 'UserController');
    Route::resource('admin/bus', 'AdminBusController');
    Route::resource('bus/routes', 'BusRouteController');
    Route::resource('bus/stations', 'BusStationController');
    Route::resource('bus/schedule', 'BusScheduleController');
    Route::resource('bus/trip', 'BusTripController');
    Route::get( 'bus/route', ['as' => 'bus.check', 'uses' => 'AdminBusController@check'] );
//    Route::get( 'trip/station', ['as' => 'trip.station', 'uses' => 'BusTripController@station'] );
    Route::get( 'trip/check', ['as' => 'trip.check', 'uses' => 'BusTripController@check'] );
    Route::get( 'trip/map', ['as' => 'trip.map', 'uses' => 'BusTripController@map'] );
    Route::get( 'trip/book', ['as' => 'trip.book', 'uses' => 'BusTripController@book'] );

});




Route::get('/sync', function() {
    $route = \App\BusRoute::find(2);
    $route->stations()->sync([1,2]);
    return 'hope its works';

});
