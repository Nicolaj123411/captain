<?php

namespace App;

use App\RoomContent;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function content()
    {
        return $this->hasMany(RoomContent::class, 'room_id', 'id')->where('lang', session('locale'));
    }

    public function contentAll()

    {
        return $this->hasMany(RoomContent::class, 'room_id', 'id');
    }
}
