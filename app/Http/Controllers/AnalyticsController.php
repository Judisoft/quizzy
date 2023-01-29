<?php

namespace App\Http\Controllers;

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

        $score_id = QuizScore::select('id')->where('quiz_id', $id)->get();
        $user_scores = array();
        $i = 0;
        foreach($score_id as $sc_id)
        {
            $i++;

            $data = QuizScore::find($sc_id->id)->user;

            array_push($user_scores,$data);
        }

        return response()->json($user_scores);
    }
}
