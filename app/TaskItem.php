<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskItem extends Model
{
    protected $fillable = [
        'task_id',
        'label',
        'completed'
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}