<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'name_ar',
        'client',
        'client_ar',
        'description',
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
