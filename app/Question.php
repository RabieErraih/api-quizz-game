<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Pion\Support\Eloquent\Position\Traits\PositionTrait;

class Question extends Model
{
    use PositionTrait;
    protected $fillable = ['content', 'is_active', 'position'];

    public function choices(){
        return $this->hasMany('App\Choice');
    }
    public function answers(){
        return $this->hasMany('App\UserAnswerQuestion');
    }
}
