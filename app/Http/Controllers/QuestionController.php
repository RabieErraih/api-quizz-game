<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\JsonResponse;

class QuestionController extends BaseController
{
    public function index()
    {
        return Question::with('choices')->get();
    }

    public function show($id)
    {
        /**
         * @var $question Question
         */
        $question = Question::with('choices')->find($id);
        return $question?$question:new JsonResponse([],404);
    }

    public function showByDoorCode($doorCode)
    {
        /**
         * @var $question Question
         */
        $question = Question::with('choices')->where('door_name', '=', $doorCode)->first();
        return $question?$question:new JsonResponse([],404);
    }

    public function store(Request $request)
    {
        return Question::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Question = Question::findOrFail($id);
        $Question->update($request->all());

        return $Question;
    }

    public function delete(Request $request, $id)
    {
        $Question = Question::findOrFail($id);
        $Question->delete();

        return 204;
    }
}
