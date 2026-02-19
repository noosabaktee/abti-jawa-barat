<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileHero extends Model
{
    protected $table = 'profile_hero';

    protected $fillable = [
        'title',
        'desc',
        'image',
        'type'
    ];
}
