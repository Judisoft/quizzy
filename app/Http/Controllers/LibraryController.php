<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Like;
use Auth;

class LibraryController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::with('subject')->where('user_id', Auth::user()->id)->with('subject')->get();
        $liked_quizzes = Like::where('user_id', Auth::user()->id)->with('quiz.subject')->get();

        return view('library', compact('quizzes', 'liked_quizzes'));
    }
}
