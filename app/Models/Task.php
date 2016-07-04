<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('user_tasks')
            ->withTimestamps();
    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class);
    }
}
