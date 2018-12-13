<?php

namespace App\Http\Controllers;

use App\Room;
use App\House;
use App\roomQuiz;
use App\RoomContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class roomController extends Controller
{
    public function index($house){
        $rooms = House::where('title', $house)->first()->rooms()->get();


        return view('rooms', compact('rooms'));
    }

    public function show($room_id){
        if(roomQuiz::where('room_id', $room_id)->where('lang', session('locale'))->first()){
            $quiz = roomQuiz::where('room_id', $room_id)->where('lang', session('locale'))->first();
            $questions = $quiz->questions;
        }else{
            $quiz = false;
            $questions = false;
        }

        $quiz_list = roomQuiz::where('lang', session('locale'))->get();
        $house = DB::table('rooms')
                ->join('houses', 'rooms.house_id', '=', 'houses.id')
                ->where('rooms.id', $room_id)
                ->first();
          $room = Room::where('id', $room_id)->first();

        return view('room', compact('room', 'quiz', 'questions', 'house', 'room_content', 'quiz_list'));

    }
}
