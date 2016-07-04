<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class)
            ->withPivot('course_subjects')
            ->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('user_subjects')
            ->withTimestamps();
    }
}
