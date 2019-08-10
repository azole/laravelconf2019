<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'ques.index', 'uses' => 'QuestionController@index']);
Route::get('/admin', ['as' => 'ques.admin', 'uses' => 'QuestionController@admin']);

Route::get('/{id}', ['as' => 'ques.show', 'uses' => 'QuestionController@show']);