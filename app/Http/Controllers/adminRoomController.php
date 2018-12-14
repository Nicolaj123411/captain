<?php

namespace App\Http\Controllers;

use App\Room;
use App\House;
use App\roomQuiz;
use App\RoomContent;
use App\roomQuizAnswers;
use Illuminate\Http\Request;

class adminRoomController extends Controller
{
    public function index($house_id){
        $house = House::find($house_id);
        $rooms = Room::where('house_id', $house_id)->get();

        return view('admin.rooms.index', compact('rooms', 'house'));
    }

    public function edit($room){
    $room = RoomContent::find($room);
    return view('admin.rooms.edit', compact('room'));
    }

    public function update(Request $request, $room)
    {
         $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $room_content = RoomContent::find($room);
        $room_content->title = $request->title;
        $room_content->body = $request->body;
        $room_content->fact = $request->fact;
        $room_content->lang = $request->lang;
        $room_content->save();

        return redirect()->back()->with('message', 'The room has been updated!');
    }

    public function show($room)
    {
        $room_id = $room;
        $rooms = RoomContent::where('room_id', $room)->get();
        return view('admin.rooms.translations', compact('rooms', 'room', 'room_id'));
    }

    public function delete($room){
        $room_data = RoomContent::find($room);
        $room_data->delete();
        return redirect()->back()->with('message', 'The translation has been deleted!');
    }
    public function new($house_id)
    {
        $house = House::find($house_id);
        return view('admin.rooms.new', compact('house'));
    }

    public function create(Request $request, $house_id)
    {
        $validatedData = $request->validate([
            'title' => 'required'
        ]);

        $room = new Room;

        $room->img = null;
        $room->icon = null;
        $room->house_id = $house_id;
        $room->title = $request->title;

        if($room->save())
        {
            return redirect()->back()->with('message', 'The room has been created!');
        }
    }
    public function newTranslation($room_id)
    {
        return view('admin.rooms.create_translation', compact('room_id'));
    }
    public function createTranslation(Request $request, $room_id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $room_content = new RoomContent;
        $room_content->title = $request->title;
        $room_content->body = $request->body;
        $room_content->fact = $request->fact;
        $room_content->lang = $request->lang;
        $room_content->room_id = $room_id;
        $room_content->save();

        return redirect()->back()->with('message', 'The translation has been Created!');
    }

    public function editAlias($room_id)
    {
        $room = Room::find($room_id);
        return view('admin.rooms.edit_alias', compact('room'));
    }

    public function updateAlias(Request $request, $room_id)
    {
        $validatedData = $request->validate([
            'title' => 'required'
        ]);
        $room = Room::find($room_id);
        $room->title = $request->title;
        $room->save();
        return redirect()->back()->with('message', 'The alias has been updated!');
    }

    public function destroyRoom($room_id)
    {
         Room::find($room_id)->delete();

        if(RoomContent::where('room_id', $room_id)->get()){
          RoomContent::where('room_id', $room_id)->delete();
        }

        if(count(RoomQuiz::where('room_id', $room_id)->get())>0){
            $quiz_id = RoomQuiz::where('room_id', $room_id)->first()->id;
            RoomQuiz::find($quiz_id)->delete();

            if(count(roomQuizAnswers::where('room_quiz_id', $quiz_id)->get())){
                roomQuizAnswers::where('room_quiz_id', $quiz_id)->delete();
            }
         }


    }
    public function editImageIndex($room_id)
    {
        $icon_directory = "svg/icons";
         $icons = str_replace("$icon_directory/","",glob($icon_directory . "/*.svg"));

        $image_directory = "svg/header_image";
         $images = str_replace("$image_directory/","",glob($image_directory . "/*.svg"));
        return view('admin.rooms.change_image', compact('room_id', 'images', 'icons'));
    }
    public function editImage($room_id, $image_type, $image)
    {
       $room = Room::find($room_id);
        if($image_type == 'icon'){
            $room->icon = $image;
            $room->save();
        }

        if($image_type == 'img'){
            $room->img = $image;
            $room->save();
        }
        return redirect()->back()->with('message', 'The image has been updated!');
    }

    public function createQuiz($room_id, $lang)
    {
       return view('admin.rooms.create_quiz', compact('room_id', 'lang'));
    }
    public function quizStore(Request $request, $room_id)
    {

        $validatedData = $request->validate([
            'quiz' => 'required',
            'lang' =>'required'
        ]);

        $quiz = new roomQuiz;

        $quiz->question = $request->quiz;
        $quiz->lang = $request->lang;
        $quiz->room_id = $room_id;
        $quiz->save();
        return redirect()->back()->with('message', 'Quiz has been created!');
    }
}
