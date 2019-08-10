<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = \App\Question::orderBy('level')->orderBy('id')->get();


        return view('index')->with(compact('questions'));
    }

    public function show($id)
    {
        $question = \App\Question::find($id);

        return view('show')->with(compact('question'));
    }

    public function admin()
    {
        $questions = \App\Question::orderBy('level')->orderBy('id')->get();


        return view('admin')->with(compact('questions'));
    }
}
