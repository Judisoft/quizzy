<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Subject;
use App\Models\Quiz;
use Auth;

class QuizQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::orderBy('title', 'asc')->get();
        return view('create-quiz', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required',
            'A' => 'required',
            'B' => 'required',
            'C' => 'nullable',
            'D' => 'nullable',
            'answer' => 'required',
            'points' => 'required',
            'duration' => 'required'
        ],
        [
            'content.required' => 'Please enter the question',
            'A.required' => 'Enter option A',
            'B.required' => 'Enter option B',
            'points.required' => 'Enter the number of points a user gets for providing the correct answer to this question',
            'duration.required' => 'Enter the duration of this question in minutes'
        ]);

        $quiz_id = Quiz::where('user_id', Auth::user()->id)->latest();

        $question = new Question;
        $question->content = $request->input('content');
        $question->A = $request->input('A');
        $question->B = $request->input('B');
        $question->C = $request->input('C');
        $question->D = $request->input('D');
        $question->answer = $request->input('answer');
        $question->points = $request->input('points');
        $question->duration = $request->input('duration');
        $question->user_id = Auth::user()->id;
        $question->subject_id = $request->input('subject_id');
        $question->topic_id = $request->input('topic_id');

        $question->save();
 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
