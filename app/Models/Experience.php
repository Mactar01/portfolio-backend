<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'company', 'position', 'location', 'logo', 'description',
        'tasks', 'start_date', 'end_date', 'is_current', 'type', 'order'
    ];

    protected $casts = [
        'tasks' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean',
    ];
}
