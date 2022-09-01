<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Henok',
            'last_name' => 'Endeshaw',
            'username' => 'henok@realtrust',
            'email' => 'henokend@gmail.com',
            'password' => Hash::make('123456'),
            'user_role' => 'admin',
            'phone_no' => '0911121314'
        ]);
        User::create([
            'first_name' => 'zeki',
            'last_name' => 'Endeshaw',
            'username' => 'zeki@realtrust',
            'email' => 'zekiend@gmail.com',
            'password' => Hash::make('123456'),
            'user_role' => 'sales',
            'phone_no' => '0911121314'
        ]);
        User::create([
            'first_name' => 'kidus',
            'last_name' => 'Endeshaw',
            'username' => 'kidus@realtrust',
            'email' => 'kidusend@gmail.com',
            'password' => Hash::make('123456'),
            'user_role' => 'client',
            'phone_no' => '0911121314'
        ]);
    }
}
