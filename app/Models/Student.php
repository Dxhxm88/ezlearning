<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory;

    protected $guard = 'student';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'ic',
        'email',
        'address',
        'phone',
        'password',
        'classs_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Return one student many class
     *
     * @return void
     */
    public function classses()
    {
        return $this->belongsTo(Classs::class);
    }

    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
