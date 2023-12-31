<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;

use Database\Seeders\AdminSeeder;
use Database\Seeders\FAQCategorySeeder;
use Database\Seeders\FAQItemSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call your custom seeders here
        $this->call([
            AdminSeeder::class,
            FAQCategorySeeder::class,
            FAQItemSeeder::class,
            PostSeeder::class,

            // Add more seeders as needed
        ]);

        // You can also use model factories if needed
        // \App\Models\User::factory(10)->create();
    }
}
