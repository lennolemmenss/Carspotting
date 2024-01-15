<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQCategory;

class FAQCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Vehicle Identification'],
            ['name' => 'Spotting Locations'],
            ['name' => 'Photography Tips'],
            ['name' => 'Event Participation'],
            ['name' => 'Membership'],
            ['name' => 'Car Spotting Etiquette'],
            ['name' => 'Spotting Challenges'],
            ['name' => 'Featured Cars'],
            ['name' => 'Social Media Sharing'],
            ['name' => 'Technical Issues'],
        ];
        
        FAQCategory::insert($categories);
    }
}
