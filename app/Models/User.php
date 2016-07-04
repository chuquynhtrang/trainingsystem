<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class)
            ->withPivot('user_courses')
            ->withTimestamps();
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class)
            ->withPivot('user_subjects')
            ->withTimestamps();
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class)
            ->withPivot('user_tasks')
            ->withTimestamps();
    }
}
