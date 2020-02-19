<?php

namespace App\Http\Controllers;

use App\UserAnswerQuestion;
use Illuminate\Http\Request;

class UserAnswerQuestionController extends Controller
{
    public function index()
    {
        return UserAnswerQuestion::all();
    }

    public function show($id)
    {
        return UserAnswerQuestion::find($id);
    }

    public function store(Request $request)
    {
        return UserAnswerQuestion::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $UserAnswerQuestion = UserAnswerQuestion::findOrFail($id);
        $UserAnswerQuestion->update($request->all());

        return $UserAnswerQuestion;
    }

    public function delete(Request $request, $id)
    {
        $UserAnswerQuestion = UserAnswerQuestion::findOrFail($id);
        $UserAnswerQuestion->delete();

        return 204;
    }
}
