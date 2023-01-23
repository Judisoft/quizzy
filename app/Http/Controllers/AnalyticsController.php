<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizQuestion;

class AnalyticsController extends Controller
{
    public function analyseUsersContent()
    {
        $user_questions = Question::where('user_id', Auth::user()->id)->get();

        $user_quizzes = Quiz::where('user_id', Auth::user()->id)->simplePaginate(10);
        

        return view('analytics', compact('user_questions', 'user_quizzes'));
    }
}
