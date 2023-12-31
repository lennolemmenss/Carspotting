<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    public function run()
    {

        $admin_user = 1;

        // Voeg drie hardgecodeerde posts toe aan de database
        Post::create([
            'title' => 'Eerste Post',
            'content' => 'Dit is de inhoud van de eerste post.',
            'user_id' => $admin_user,
        ]);

        Post::create([
            'title' => 'Tweede Post',
            'content' => 'Dit is de inhoud van de tweede post.',
            'user_id' => $admin_user,
        ]);

        Post::create([
            'title' => 'Derde Post',
            'content' => 'Dit is de inhoud van de derde post.',
            'user_id' => $admin_user,
        ]);
    }
}