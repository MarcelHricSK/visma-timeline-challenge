<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medium extends Model
{
    protected $table = 'media';

    protected $fillable = [
        'url',
        'type',
        'title',
        'description',
    ];
}
