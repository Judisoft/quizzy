<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmark;
use App\Models\Quiz;

class BookmarkController extends Controller
{

    public function index()
    {
        $user_bookmarks = Bookmark::where('user_id', auth()->user()->id)->with('quiz')->get();
        // dd($user_bookmarks);

        return view('bookmarks', compact('user_bookmarks'));
    }

    public function addBookmark(Request $request)
    {
        $bookmark = new Bookmark;
        $bookmark->user_id = $request->user_id;
        $bookmark->quiz_id = $request->quiz_id;

        $bookmark->save();

        return response()->json(['success' => 'Quiz bookmarked']);
    }

    public function getBookmarkedQuizQuestions(Quiz $quiz)
    {
        $questions = Quiz::find($quiz->id)->questions;
        // dd($questions);

        return view('quiz-questions-detail', compact('questions', 'quiz'));
    }
}
