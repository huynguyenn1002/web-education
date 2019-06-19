<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name',
        'thematic_id',
        'question_id',
        'answer_correct',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function thematic()
    {
        return $this->belongsTo(Thematic::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
