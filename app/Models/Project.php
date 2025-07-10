<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name_en',
        'name_ar',
        'client_en',
        'client_ar',
        'description_en',
        'description_ar',
        'category_id',
        'date',
        'link',
        'image',
        'photos',
        'videos',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
