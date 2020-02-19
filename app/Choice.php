<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = ['content', 'is_right_choice', 'question_id'];

    public function question(){
        return $this->belongsTo('App\Question');
    }

    public function answer(){
        return $this->belongsTo('App\Question');
    }

}
