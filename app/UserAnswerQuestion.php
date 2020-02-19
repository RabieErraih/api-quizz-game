<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswerQuestion extends Model
{
    protected $table = 'question_user_answer';
    protected $fillable = ['question_id', 'user_id', 'choice_id'];
    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $question = Question::find($model->question_id);
            if($question){
                foreach($question->choices()->getModels() as $choice){
                    if($choice->id == $model->choice_id){
                        $choice->is_right_choice?$model->is_right = true:$model->is_right = false;
                    }
                }
            } else {
                die('question not existant');
            }
        });
    }

    public function question(){
        return $this->belongsTo('App\Question');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function choice(){
        return $this->belongsTo('App\Choice');
    }
}
