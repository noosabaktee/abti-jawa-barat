<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventHeader extends Model
{
    protected $table = 'events_header';

    protected $fillable = [
        'black_title',
        'red_title',
        'subtitle',
    ];
}
