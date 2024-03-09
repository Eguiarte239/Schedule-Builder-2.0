<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
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
        'phase_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function phase()
    {
        return $this->belongsTo(Phase::class);
    }

    public function userAssigned()
    {
        return $this->belongsTo(User::class, 'user_assigned_id');
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
