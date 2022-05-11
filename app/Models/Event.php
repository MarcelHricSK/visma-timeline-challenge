<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'event_type_id',
        'description',
        'cover_image',
        'content',
        'visible',
        'location',
        'data',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'data' => 'array',
    ];

    public function type()
    {
        return $this->belongsTo(EventType::class, 'event_type_id');
    }
}
