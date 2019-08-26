<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['file'];

    protected $img_path = '/images/users/';

    public function getFileAttribute( $photo )
    {
        return $this->img_path . $photo;
    }


    public function user()
    {
        $this->hasOne('App\User');
    }


}


