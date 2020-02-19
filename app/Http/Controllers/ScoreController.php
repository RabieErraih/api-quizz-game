<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function store(Request $request)
    {
        return Score::create($request->all());
    }

    public function getAllScores(Request $request){
        return Score::all()->sortByDesc('score')->sortByDesc('created_at');
    }
}
