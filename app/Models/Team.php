<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name_en',
        'name_ar',
        'role_en',
        'role_ar',
        'image',
    ];
}
