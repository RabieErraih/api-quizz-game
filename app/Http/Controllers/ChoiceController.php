<?php

namespace App\Http\Controllers;

use App\Choice;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    public function index()
    {
        return Choice::all();
    }

    public function show($id)
    {
        return Choice::find($id);
    }

    public function store(Request $request)
    {
        return Choice::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Choice = Choice::findOrFail($id);
        $Choice->update($request->all());

        return $Choice;
    }

    public function delete(Request $request, $id)
    {
        $Choice = Choice::findOrFail($id);
        $Choice->delete();

        return 204;
    }
}
