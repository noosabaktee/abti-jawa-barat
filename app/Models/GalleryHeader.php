<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryHeader extends Model
{
    protected $table = 'galleries_header';

    protected $fillable = [
        'black_title',
        'red_title',
        'subtitle',
    ];
}
