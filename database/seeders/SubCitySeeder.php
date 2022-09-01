<?php

namespace Database\Seeders;

use App\Models\SubCity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCity::create([
            'name' => 'Addis Ketema',
            'woreda' => 10
        ]);

        SubCity::create([
            'name' => 'Akaki Kaliti',
            'woreda' => 10
        ]);

        SubCity::create([
            'name' => 'Arada',
            'woreda' => 10
        ]);

        SubCity::create([
            'name' => 'Bole',
            'woreda' => 10
        ]);

        SubCity::create([
            'name' => 'Gulele',
            'woreda' => 10
        ]);

        SubCity::create([
            'name' => 'Kirkos',
            'woreda' => 10
        ]);

        SubCity::create([
            'name' => 'Kolfe-Keranio',
            'woreda' => 10
        ]);

        SubCity::create([
            'name' => 'Lideta',
            'woreda' => 10
        ]);

        SubCity::create([
            'name' => 'Nifas Silk-Lafto',
            'woreda' => 10
        ]);

        SubCity::create([
            'name' => 'Yeka',
            'woreda' => 10
        ]);

        SubCity::create([
            'name' => 'Lemi Kurra',
            'woreda' => 10
        ]);

    }
}
