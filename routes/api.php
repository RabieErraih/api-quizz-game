<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/questions', 'QuestionController@index');
Route::get('/questions/{id}', 'QuestionController@show');
Route::get('/questions/door/{doorCode}', 'QuestionController@showByDoorCode');
Route::post('/questions', 'QuestionController@store');
Route::put('/questions/{id}', 'QuestionController@update');
Route::delete('/questions/{id}', 'QuestionController@delete');

Route::get('/choices', 'ChoiceController@index');
Route::get('/choices/{id}', 'ChoiceController@show');
Route::post('/choices', 'ChoiceController@store');
Route::put('/choices/{id}', 'ChoiceController@update');
Route::delete('/choices/{id}', 'ChoiceController@delete');

Route::get('/useranswersquestions', 'UserAnswerQuestionController@index');
Route::get('/useranswersquestions/{id}', 'UserAnswerQuestionController@show');
Route::post('/useranswersquestions', 'UserAnswerQuestionController@store');
Route::put('/useranswersquestions/{id}', 'UserAnswerQuestionController@update');
Route::delete('/useranswersquestions/{id}', 'UserAnswerQuestionController@delete');

Route::get('/user', 'UserController@index');
Route::get('/user/{id}', 'UserController@show');
Route::post('/user', 'UserController@store');
Route::put('/user/{id}', 'UserController@update');
Route::delete('/user/{id}', 'UserController@delete');

Route::get('/score', 'ScoreController@getAllScores');
Route::post('/score', 'ScoreController@store');
