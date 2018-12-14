<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class roomQuiz extends Model
{
    public function questions()
    {
        return $this->hasMany('App\roomQuizAnswers')->where('lang', session('locale'));
    }

    public function score(){
        return $this->hasOne('App\quiz_score', 'quiz_id', 'id')->where('user_id', Auth::user()->id);
    }
}
