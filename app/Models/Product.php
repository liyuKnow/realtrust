<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'provider_id',
        'product_type',
        'featured_size',
        'discount',
        'tags',
        'features',
        'status',
        'featured_bedrooms',
        'price',
        'img_1',
        'img_2',
        'img_3',
        'video_url',
        'property_type',
        'location_coord'
    ];

    public function location () {
        return $this->hasOne(Location::class);
    }
    
}
