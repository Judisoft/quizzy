<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Auth;

class AnalyticsController extends Controller
{
    public function analyseUsersContent()
    {
        $user_questions = Question::where('user_id', Auth::user()->id);
        
        return view('analytics', compact('user_questions'));
    }
}
