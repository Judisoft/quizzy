<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class QuizScore extends Model
{
    use HasFactory;

    protected $table = 'quiz_score';
    protected $fillable = [
                            'quiz_id',
                            'user_id',
                            'score'
                        ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
