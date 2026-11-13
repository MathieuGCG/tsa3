<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'status',
        'task_date',
    ];

    public function scopeToday(Builder $query): Builder
    {
        return $query->whereDate('task_date', Carbon::today())
                     ->orderBy('created_at', 'desc');
    }

    public function scopeOrderedByDate(Builder $query): Builder
    {
        return $query->orderBy('task_date', 'asc')
                     ->orderBy('created_at', 'desc');
    }
}