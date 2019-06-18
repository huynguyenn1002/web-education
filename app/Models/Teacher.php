<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    //
    use SoftDeletes;
    const THAC_SY = 1;
    const TIEN_SY = 2;
    const PGS = 3;
    const GS = 4;
    const ORTHER = 0;

    protected $fillable = [
        'name',
        'DOB',
        'phone',
        'email',
        'address',
        'academic',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'DOB',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
