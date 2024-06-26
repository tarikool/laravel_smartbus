<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id',
        'photo_id', 'about', 'balance',
        'city', 'phone_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role()
    {
        return $this->belongsTo('App\Role');
    }


    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function trip()
    {
        return $this->hasMany('App\BusTrip');
    }



    public function isAdmin()
    {
        $roleName = Role::findOrFail( $this->role_id )->name;

        if ( $roleName == 'Administrator') {

            return true;
        }


        return false;

    }


    public function isUser()
    {
        if ( $this->role->name == 'User'){
            return true;
        }

        return false;
    }


    public function isDriver()
    {
        if ( $this->role->name == 'Driver' ) {
            return true;
        }
        return false;
    }












}
