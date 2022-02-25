<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    use HasFactory;

    const DRAFT = 1;
    const PUBLISHED = 2;

    protected $guarded = ['id', 'created_at', 'update_at'];

    public function sizes(): HasMany
    {
        return $this->hasMany(Size::class);
    }

    public function brands(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, "imageable");
    }
}
