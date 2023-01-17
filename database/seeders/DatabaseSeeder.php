<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'user',
        ]);

        DB::table('users')->insert([
            'name' => 'admin001',
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'status' => 1,
            'phone' => '00000',
            'email' => 'admin@admin.com',
            'role_id' => 1,
            'password' => Hash::make('Pass.123'),
        ]);
    }
}
