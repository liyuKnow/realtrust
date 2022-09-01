<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'location' => 'Addis Ababa, Meskel Flower, 100 meters from the square behind tomoca coffee',
            'provider' => 'Werku',
            'type' => 'Apartment',
            'featured_size' => 174,
            'discount' => 0,
            'tags' => 'apartment, meskel flower, house, for sale',
            'features' => 'Lift, Parking, TV Cabling, Garbage Shoot',
            'status' => 1,
            'featured_bedrooms' => 3,
            'price' => 65000,
            'video_url'=> '',
            'property_type' => 'sale',
            'location_coord' => ''
        ]);
    }
}
