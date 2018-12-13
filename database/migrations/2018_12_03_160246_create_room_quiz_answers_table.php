<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomQuizAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_quiz_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('answers');
            $table->boolean('correct');
            $table->string('fact');
            $table->string('lang');
            $table->integer('room_quiz_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_quiz_answers');
    }
}
