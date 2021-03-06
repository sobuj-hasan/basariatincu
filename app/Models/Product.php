<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'slug',
        'image',
        'sell_price',
        'price',
        'stock',
        'short_description',
        'long_description',
        'user_id',
        'status',
    ];

    protected $with = ['category', 'brand', 'multipleimage'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function multipleimage()
    {
        return $this->belongsTo(MultipleImage::class);
    }



}
