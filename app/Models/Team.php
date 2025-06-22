<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'name_ar',
        'role',
        'role_ar',
        'image',
    ];
}
