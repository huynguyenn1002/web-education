<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use SoftDeletes;
    const THAC_SY = 1;
    const TIEN_SY = 2;
    const PGS = 3;
    const GS = 4;
    const STUDENT = 5;
    const ORTHER = 0;

    const TRUE = 1;
    const FALSE = 0;

    protected $fillable = [
        'name',
        'DOB',
        'phone',
        'email',
        'address',
        'academic',
        'password',
        'isTeacher',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'DOB',
    ];



    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'teacher_id', 'id');
    }
}
