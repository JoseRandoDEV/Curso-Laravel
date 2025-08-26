<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'id' => '1',
            'name' => 'admin',
        ]);
        Role::create([
            'id' => '2',
            'name' => 'staff',
        ]);
        Role::create([
            'id' => '3',
            'name' => 'user',
        ]);
        Role::create([
            'id' => '4',
            'name' => 'guest',
        ]);

        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1,
            'added_by' => 'juanjo',
        ]);

        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 2,
            'added_by' => 'luis',
        ]);

        DB::table('role_user')->insert([
            'user_id' => 2,
            'role_id' => 1,
            'added_by' => 'jose maria',
        ]);

        DB::table('role_user')->insert([
            'user_id' => 2,
            'role_id' => 3,
            'added_by' => 'jose',
        ]);

        DB::table('role_user')->insert([
            'user_id' => 3,
            'role_id' => 4,
            'added_by' => 'maria',
        ]);
    }
}
