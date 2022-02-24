<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    public function products(): Product
    {
        return $this->hasMany(Product::class);
    }

    public function category(): Category
    {
        return $this->belongsTo(Category::class);
    }
}
