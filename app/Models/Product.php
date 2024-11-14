<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = ['uuid', 'name', 'price', 'description'];

    public $incrementing = false; 
    protected $keyType = 'string';

    protected static function booted()
    {
        static::creating(function ($product) {
            if (!$product->uuid) {
                $product->uuid = (string) Str::uuid(); 
            }
        });
    }
}