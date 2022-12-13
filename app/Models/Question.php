<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Topic;
use App\Models\User;

class Question extends Model
{
    use HasFactory;

    // protected $fillable

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
