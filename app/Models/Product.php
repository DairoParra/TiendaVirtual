<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const DRAFT = 1;
    const PUBLISHED = 2;

    protected $guarded = ['id', 'created_at', 'update_at'];

    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    public function brands(): Brand
    {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory(): SubCategory
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, "imageable");
    }
}
