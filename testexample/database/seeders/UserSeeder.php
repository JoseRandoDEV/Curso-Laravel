<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jose',
            'email' => 'joseandresrando@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Milo',
            'email' => 'milorando12@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Gael',
            'email' => 'gaelrando12@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Laura',
            'email' => 'lauramarisoljauregui@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
