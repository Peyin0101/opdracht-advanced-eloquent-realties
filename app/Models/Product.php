<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute as Attribute;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    protected function rating(): Attribute
    {
        return Attribute::make(get: fn() => $this->reviews()->avg('rating') ?? 0);
    }

    public function reviewsCount()
    {
        return $this->reviews()->count();
    }
}
