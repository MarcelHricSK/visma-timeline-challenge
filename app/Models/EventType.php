<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    protected $fillable = [
        'name',
        'expects',
    ];

    protected $casts = [
        'expects' => 'array',
    ];
}
