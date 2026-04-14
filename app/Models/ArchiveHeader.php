<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchiveHeader extends Model
{
    protected $table = 'archives_header';

    protected $fillable = [
        'eyebrow',
        'title',
        'subtitle',
    ];
}
