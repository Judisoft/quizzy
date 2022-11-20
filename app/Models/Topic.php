<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class Topic extends Model
{
    use HasFactory;

    protected $table = 'topics';
    protected $fillable = ['topic'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
