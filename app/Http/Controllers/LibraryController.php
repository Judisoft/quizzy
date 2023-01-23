<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use Auth;

class LibraryController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::where('user_id', Auth::user()->id)->get();
        return view('library', compact('quizzes'));
    }
}
