<?php

namespace App\Http\Controllers;

use App\Models\PerformanceAnalysis;
use Illuminate\Http\Request;
use Auth;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Models\QuizScore;
use App\Models\User;

class AnalyticsController extends Controller
{
    public function analyseUsersContent()
    {
        $user_questions = Question::where('user_id', Auth::user()->id)->get();

        $user_quizzes = Quiz::where('user_id', Auth::user()->id)->get();

        return view('analytics', compact('user_questions', 'user_quizzes'));
    }

    public function getStats(Request $request)
    {
        $id = $request->quiz_id;

        $user_scores = QuizScore::where('quiz_id', $id)->with('user')->get();
        
        return response()->json($user_scores);
    }

    public function quizPerformanceAnalysis(Request $request)
    {
        $quiz_performance =  new PerformanceAnalysis();
        $quiz_performance->quiz_id = $request->quiz_id;
        $quiz_performance->user_id = $request->user_id;
        $quiz_performance->question_id = $request->question_id;
        $quiz_performance->answer_correct = $request->correct_answer;
        $quiz_performance->save();
        return response()->json('sucess', 'performance saved');
    }

    public function getUserPerformance($user_id, $quiz_id)
    {
        $user_performance = PerformanceAnalysis::where('user_id', $user_id)->with('question')->get();
        $user = User::find($user_id);
        // dd($user_performance);
        return view('user_performance', compact('user_performance', 'user'));
    }
}
