<?php

namespace App\Http\Controllers;

use App\Room;
use App\House;
use App\roomQuiz;
use App\quiz_score;
use App\RoomContent;
use App\roomQuizAnswers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class roomController extends Controller
{
    public function index($house){
        $rooms = House::where('title', $house)->first()->rooms()->get();
        $quiz_list = roomQuiz::where('lang', session('locale'))->get();

        return view('rooms', compact('rooms', 'quiz_list'));
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
    public function quizStore($correct, $roomQuiz, $answer){
        $fact = roomQuizAnswers::find($answer)->fact;
        if($correct == 1){
            if(quiz_score::where('quiz_id',$roomQuiz)->where('user_id', Auth::user()->id)->first()){
                return redirect()->back()->with('success', $fact);
            }else{
                $score = new quiz_score;
                $score->user_id = Auth::user()->id;
                $score->quiz_id = $roomQuiz;
                $score->save();

                return redirect()->back()->with('success', $fact);
            }

        }else{
            return redirect()->back()->with('fail', $fact);
        }

    }
}
