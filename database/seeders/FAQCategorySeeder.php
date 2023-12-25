<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQCategory;

class FAQCategorySeeder extends Seeder
{
    public function run()
    {
        // Define the categories
        $categories = [
            ['name' => 'General'],
            ['name' => 'Technical'],
            ['name' => 'Billing'],
            // Add more categories as needed
        ];

        // Insert the categories into the database
        FAQCategory::insert($categories);
    }
}
