<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'city_id',
        'sub_city_id',
        'woreda',
        'description'
    ];

    public function city()
    {
        return $this->hasMany(City::class);
    }

    public function subCity()
    {
        return $this->hasMany(SubCity::class);
    }
}
