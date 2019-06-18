<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thematic extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'course_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
