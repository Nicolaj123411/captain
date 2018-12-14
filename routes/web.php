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


Route::middleware('auth')->group(function () {
    Route::get('/', 'GuestController@selectLanguage')->name('language_selector');
    Route::get('/set_language/{lang}', 'GuestController@setLanguage')->name('setLanguage');
    Route::post('/code', 'GuestController@code')->name('code');
    Route::get('/code', function () {
        return view('code');
    });
    Route::get('/video', function () {
        return view('video');
    });
    Route::get('/rooms/{house}', 'roomController@index')->name('rooms.index');
    Route::get('/room/{room_id}', 'roomController@show')->name('room.show');
    Route::get('/houses', function () {
        return view('select_room');
    })->name('houses');
    Route::get('/room/quiz/{correct}/{roomQuiz}/{ansver}', 'roomController@quizStore')->name('quiz.save');
});
Auth::routes();

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/tester', function () {
    return view('register');
});








    Route::middleware('admin')->group(function () {
        Route::get('/admin', function () {
            return view('admin.index');
        })->name('index');
        Route::get('/admin/house/{house_id}', 'adminRoomController@index')->name('house');
        Route::get('/admin/room/edit/{room}', 'adminRoomController@edit')->name('room.edit');
        Route::post('/admin/room/edit/{room}', 'adminRoomController@update')->name('room.update');
        Route::get('/admin/room/delete/{room}', 'adminRoomController@delete')->name('room.delete');
        Route::get('/admin/room/translations/{room}', 'adminRoomController@show')->name('room.translations');
        Route::get('/admin/room/create/{house_id}', 'adminRoomController@new')->name('room.new');
        Route::get('/admin/room/edit/alias/{room_id}', 'adminRoomController@editAlias')->name('room.alias.edit');
        Route::post('/admin/room/update/alias/{room_id}', 'adminRoomController@updateAlias')->name('room.alias.update');
        Route::get('/admin/room/create/translation/{room_id}', 'adminRoomController@newTranslation')->name('room.new.translation');
        Route::post('/admin/room/create/translation/{room_id}', 'adminRoomController@createTranslation')->name('room.create.translation');
        Route::post('/admin/room/create/{house_id}', 'adminRoomController@create')->name('room.create');
        Route::get('/admin/room/destroy/room/{room_id}', 'adminRoomController@destroyRoom')->name('room.destroy');
        Route::get('/admin/room/image/store/{room_id}/{image_type}/{image}', 'adminRoomController@editImage')->name('edit.image.update');
        Route::get('/admin/room/image/edit/{room_id}', 'adminRoomController@editImageIndex')->name('edit.image.index');
        Route::get('/admin/room/quiz/{room_id}/{lang}', 'adminRoomController@createQuiz')->name('create.quiz');
        Route::post('/admin/room/quiz/{room_id}', 'adminRoomController@quizStore')->name('quiz.store');
    });





