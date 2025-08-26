<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'Jose Andres Rando',
            'email' => 'joseandresrando@gmail.com',
            'password' => Hash::make(12345678)
        ]);

        User::create([
            'id' => 2,
            'name' => 'Milo Rando',
            'email' => 'milorando12@gmail.com',
            'password' => Hash::make(12345678)
        ]);

        User::create([
            'id' => 3,
            'name' => 'Gael Rando',
            'email' => 'gaelrando12@gmail.com',
            'password' => Hash::make(12345678)
        ]);
    }
}
