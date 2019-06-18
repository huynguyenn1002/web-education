<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    //
    use SoftDeletes;

    const APPROVE = 1;
    const PENDING = 2;
    const DENIED = 0;

    protected $fillable = [
        'name',
        'description',
        'teacher_id',
        'category_id',
        'status',
        'avatar',
        'background',
        'cost',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'id', 'teacher_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function thematics()
    {
        return $this->hasMany(Thematic::class);
    }
}
