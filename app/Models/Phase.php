<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    use HasFactory;

    /*
    * The attributes that are mass assignable.
    */

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'estimated_end_date',
        'priority',
        'status',
        'user_id',
        'project_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function isCompleted()
    {
        return $this->status === 'Completed';
    }

    public function markAsCompleted()
    {
        $this->status = 'Completed';
        $this->is_completed = true;
        $this->save();
    }
}
