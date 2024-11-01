<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'customer',
                'email' => 'customer@gmail.com',
                'role' => 'customer',
                'password' => bcrypt('1234')
            ],

            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('1234')
            ],

            [
                'name' => 'driver',
                'email' => 'driver@gmail.com',
                'role' => 'driver',
                'password' => bcrypt('1234')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
