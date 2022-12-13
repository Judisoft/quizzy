<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\WeeklyChallenge;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $quizzes = Quiz::all();
        $questions = Question::all();
        $participants = WeeklyChallenge::select('user_id')->distinct();
        return view('dashboard', compact('quizzes','questions', 'participants'));
    }
}
