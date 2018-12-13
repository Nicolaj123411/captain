<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    /**
     * Get the rooms for the house.
     */
    public function rooms()
    {
        return $this->hasMany('App\Room');
    }

    public function content()
    {
        return $this->hasMany('App\RoomContent')->where('lang', session('locale'));
    }

}
