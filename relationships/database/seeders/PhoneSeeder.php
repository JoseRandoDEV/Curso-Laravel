<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone;

class PhoneSeeder extends Seeder
{

    public function run(): void
    {
        Phone::create([
            'prefix' => 54,
            'phone_number' => 2235514421,
            'user_id' => 1
        ]);

        Phone::create([
            'prefix' => 33,
            'phone_number' => 2234224392,
            'user_id' => 1
        ]);
    }
}
