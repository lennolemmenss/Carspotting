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
            'password' => bcrypt('password'), // You can change this password
            'birthday' => '1990-01-01', // Adjust as needed
            'about_me' => 'This is a sample user.',
            'avatar' => null, // You can modify this based on your needs
            'is_admin' => false,
        ]);
    

        // You can create more users as needed
    }
}