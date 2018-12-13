<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomContent extends Model
{
    public function Room()
    {
        return $this->belongsTo(Room::class);
    }

    public function quiz()
    {
        return $this->hasOne(RoomQuiz::class, 'room_id', 'room_id');
    }
}
