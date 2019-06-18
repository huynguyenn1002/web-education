<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    const EASY = 1;
    const NORMAL = 2;
    const HARD = 3;

    const A = 1;
    const B = 2;
    const C = 3;
    const D = 4;

    protected $fillable = [
        'thematic_id',
        'level',
        'question',
        'answer_A',
        'answer_B',
        'answer_C',
        'answer_D',
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
}
