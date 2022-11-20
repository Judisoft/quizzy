<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Subject;
use App\Models\Level;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Models\Topic;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayQuizzes()
    {
        $subjects = Subject::all();
        return view('quizzes', compact('subjects'));
    }

    public function quizGenerator($id, $subject_title, $level)
    {
        $subjects = Subject::all();
        $levels = Level::all();
        $questions = Question::where('level_id', auth()->user()->level)
                                ->where('subject_id', $id)
                                ->inRandomOrder()
                                ->limit(20)
                                ->get();
        $topics = Topic::where('subject_id', $id)->get();
        return view('quiz-detail', compact('subject_title', 'subjects', 'levels', 'questions', 'topics'));
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUserQuiz($quiz_id)
    {
        $quiz = Quiz::find($quiz_id);
        return view('user_quiz', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = $request->validate([
        //     
        // ]);

        $quiz = new QuizQuestion;
        $quiz->question_id = $request->question_id;
        $quiz->quiz_id = $request->quiz_id;

        $quiz->save();

        if($quiz)
        {
            return response()->json([
                'success' => 'question'.' '.$request->question_id .' '. 'saved successfully'
            ]);
        } else {
            return response()->json([
                'error' => 'Oups something went wrong'
            ]);
        }
       
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

    public function sortQuizQuestions(Request $request)
    {
        return response()->json($request);
    }

    /**
     * add questions to quiz item
     */

    public function addQuizQuestions($subject_id,$quiz_id)
    {
        $questions = Question::where('subject_id', $subject_id)->orderBy('subject_id')->simplePaginate(25);
        $user_quiz = Quiz::find($quiz_id);
        $subject = Subject::find($subject_id);
        return view('add-quiz-questions', compact('questions', 'user_quiz', 'subject'));
    }
}
