<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    public function run()
    {
        // Create a sample user
        DB::table('users')->insert([
            'name' => 'Sample User',
            'email' => 'sample@example.com',
            'password' => bcrypt('password'), 
            'birthday' => '1990-01-01',
            'about_me' => 'This is a sample user.',
            'avatar' => null, 
            'is_admin' => false,
        ]);
    

    }
}