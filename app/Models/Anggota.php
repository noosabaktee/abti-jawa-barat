<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';

    protected $fillable = [
        'city',
        'lead_name',
        'sec_name',
        'email',
        'link',
        'logo',
    ];
}
