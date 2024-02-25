<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
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
        'team_id',
        'project_leader_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function projectLeader()
    {
        return $this->belongsTo(User::class, 'project_leader_id');
    }

    public function phases()
    {
        return $this->hasMany(Phase::class);
    }

    public function tasks()
    {
        return $this->hasManyThrough(Task::class, Phase::class);
    }
}
