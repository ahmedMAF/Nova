<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'delivery_time_en',
        'delivery_time_ar',
        'price_range',
        'information',
        'image',
        'feature_en',
        'feature_ar',
    ];
}
