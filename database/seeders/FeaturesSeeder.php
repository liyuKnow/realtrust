<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create([
            'name' => 'Lift'
        ]);

        Feature::create([
            'name' => 'Security Camera'
        ]);

        Feature::create([
            'name' => 'Parking'
        ]);

        Feature::create([
            'name' => 'Garbage Shoot'
        ]);
    }
}
