<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\QuizScore;
use Auth;

class isQuizAttemptValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dd($request->route('quiz')->id);
        $quiz_id = $request->route('quiz')->id;
        $userHasTakenQuiz = QuizScore::where('user_id', auth()->user()->id)->where('quiz_id', $quiz_id)->exists();
        if ($userHasTakenQuiz)
        {
            return back()->with('message', 'You are not permitted to take this quiz more than once');
        }
        return $next($request);
    }
}
