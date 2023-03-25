<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\QuizScore;
use App\Models\Question;
use App\Models\Team;
use App\Models\WeeklyChallenge;
use Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $quizzes = Quiz::all();
        $questions = Question::all();
        $participants = WeeklyChallenge::select('user_id')->distinct();
        $scheduled_quizzes = Quiz::where('team_id', Auth::user()->current_team_id)->get();
        $team = Team::find(Auth::user()->current_team_id);

        $scores = QuizScore::with('quiz')->where('user_id', Auth::user()->id)->get();
        $result = [['quiz', 'score', 'average']];

        foreach ($scores as $key=>$value) {
            $result[++$key] = [ucwords($value->quiz->title), (int)(($value->score / $value->max_quiz_score) * 100), (int)((QuizScore::avg('score') / QuizScore::avg('max_quiz_score')) * 100)];
        }
        // dd($result);
        $result = json_encode($result);
        return view('dashboard', compact('quizzes','questions', 'participants', 'scheduled_quizzes', 'team', 'result'));
    }
}
