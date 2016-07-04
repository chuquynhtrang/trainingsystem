<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('user_courses')
            ->withTimestamps();
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class)
            ->withPivot('course_subjects')
            ->withTimestamps();
    }
}
