<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Subject;
use App\Models\Quiz;

class QuestionsController extends Controller
{
    public function showQuestions()
    {
        $subjects = Subject::all();
        
        return view('questions', compact('subjects'));
    }

    public function subjectQuestions($subject_id, Request $request) 
    {
        $questions = Question::where('subject_id', $subject_id)->orderBy('subject_id')->simplePaginate(25);
        $user_quizzes = Quiz::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();
        $subject = Subject::find($subject_id);
        
        // $topics = Question::select('topic')->where('subject', $subject)->distinct()->paginate(25);
         
        return view('questions-by-subject', compact('questions', 'subject_id', 'user_quizzes', 'subject'));
    }

    public function getQuestion($subject, $id) 
    {
        $question = Question::find($id);
        $next_qid = Question::where('id', '>', $id)->where('subject', $subject)->min('id');
        $previous_qid = Question::where('id', '<', $id)->where('subject', $subject)->max('id');
        $next_question = Question::find($next_qid);
        $previous_question = Question::find($previous_qid);

        return view('question-item', compact('question', 'subject', 'id', 'next_qid', 'next_question', 'previous_question'));
        
    }

    public function sortQuestions($subject, Request $request)
    {
        $query = $request->input('topic');

        $questions = Question::where('subject', $subject)->Andwhere('topic', $query)->paginate(25);
        dd($questions);

        return view('questions-by-subject', compact('questions'));
    }

    /**
     * store quiz tile
     * @param $request Request
     * return: Response
     */
    
     public function storeQuizTitle(Request $request)
     {
        $validator = $request->validate([
            'title' => 'required|min:3|unique:quizzes',
            'duration' => 'nullable'
            ],
            [
                'title.required'=> 'Quiz title cannot be empty',
                'title.unique' => 'This name is already taken',
                'title.min' => 'Quiz title too short'
            ]);
       
        $quiz = new Quiz;
        $quiz->title = $request->title;
        $quiz->user_id = $request->user_id;

        $quiz->save();

        if ($quiz)
        {
            $quizzes = Quiz::where('user_id', auth()->user()->id)->orderBy('id', 'asc')->get();
            return response()->json([
                'success' => 'Quiz successfully created',
                'quizzes' => $quizzes,
            ]);
        } else {
            return response()->json([
                'error' => $validator->errors()->all() //'Oups something went wrong'
            ]);
        }

        
     }
}
