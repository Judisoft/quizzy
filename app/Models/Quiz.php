<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\User;

class Quiz extends Model
{
    use HasFactory;

    protected $table = 'quizzes';
    protected $fillable = [
        'title',
        'user_id',
        'question_id',
        'subject_id'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
