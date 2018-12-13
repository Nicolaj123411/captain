<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roomQuiz extends Model
{
    public function questions()
    {
        return $this->hasMany('App\roomQuizAnswers')->where('lang', session('locale'));
    }
}
