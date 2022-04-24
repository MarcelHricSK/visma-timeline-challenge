<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'role',
        'visible',
        'links',
        'started_at',
    ];

    protected $casts = [
        'links' => 'array',
        'started_at' => 'datetime',
    ];
}
