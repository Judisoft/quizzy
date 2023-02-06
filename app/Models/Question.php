<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Topic;
use App\Models\User;
use App\Models\Quiz;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['content',
                            'A',
                            'B',
                            'C',
                            'D',
                            'answer',
                            'user_id',
                            'subject_id',
                            'topic_id',
                            'duration',
                            'points'
                            ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quiz()
    {
        return $this->belongsToMany(Quiz::class, 'quiz_questions', 'quiz_id', 'question_id');
    }

}
