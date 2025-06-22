<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'name_ar',
        'description',
        'description_ar',
        'delivery_time',
        'price_range',
        'information',
        'image',
        'feature',
    ];
}
