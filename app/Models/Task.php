<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'priority',
        'severity',
        'status',
        'done'
    ];

    public function tasks()
    {
        return $this->belongsToMany('App\Models\Category')->withTimestamps();
    }
}
