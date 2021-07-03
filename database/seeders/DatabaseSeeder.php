<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' =>bcrypt('admin123'),

        ]);
        DB::table('password_resets')->insert([
            'email' => 'admin@example.com',
            'token' => '', //change 60 to any length you want
        ]);
    }
}
