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

        Post::create([
            'title' => 'Porsche 911 GT3 RS',
            'content' => 'The Porsche 911 GT3 RS is a high-performance sports car known for its track-focused capabilities. With a powerful flat-six engine and precision engineering, it delivers an exhilarating driving experience.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/porsche-911.jpg',
        ]);
    
        Post::create([
            'title' => 'Koenigsegg Agera',
            'content' => 'The Koenigsegg Agera is a Swedish hypercar that pushes the boundaries of speed and technology. With a lightweight design and powerful engine, it is a true masterpiece of automotive engineering.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/Koenigsegg_Agera.jpg',
        ]);
    
        Post::create([
            'title' => 'Ferrari LaFerrari',
            'content' => 'The Ferrari LaFerrari is an iconic hybrid hypercar that combines performance, elegance, and innovation. With a V12 engine and advanced electric technology, it represents the pinnacle of Ferrari engineering.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/ferrari-laferrari.jpg',
        ]);
    
        // Add 20 more supercar records with English descriptions
        Post::create([
            'title' => 'Lamborghini Huracan',
            'content' => 'The Lamborghini Huracan is a stunning supercar with a powerful V10 engine, cutting-edge aerodynamics, and a luxurious interior, delivering an exhilarating driving experience.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/lamborghini-huracan.jpg',
        ]);
    
        Post::create([
            'title' => 'McLaren P1',
            'content' => 'The McLaren P1 is a hybrid hypercar that epitomizes performance and technology. With a top speed of 217 mph, it blends cutting-edge design with unparalleled speed.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/mclaren-p1.jpg',
        ]);

        Post::create([
            'title' => 'Bugatti Veyron',
            'content' => 'The Bugatti Veyron is an engineering marvel, known for its mind-boggling top speed and luxurious design. It is a true testament to automotive excellence.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/bugatti-veyron.jpg',
        ]);
    
        Post::create([
            'title' => 'Aston Martin Valkyrie',
            'content' => 'The Aston Martin Valkyrie is a hypercar that pushes the boundaries of performance and design. With aerodynamics inspired by Formula 1, it is a work of art on wheels.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/aston-martin-valkyrie.jpg',
        ]);
    
        Post::create([
            'title' => 'Pagani Huayra',
            'content' => 'The Pagani Huayra is a masterpiece of craftsmanship, featuring a twin-turbo V12 engine and a design that blends art and engineering seamlessly.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/pagani-huayra.jpg',
        ]);

        Post::create([
            'title' => 'Ford GT',
            'content' => 'The Ford GT is an American supercar with a racing pedigree. With its aerodynamic design and powerful EcoBoost V6, it is a symbol of innovation and speed.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/ford-gt.jpg',
        ]);

        Post::create([
            'title' => 'Lexus LFA',
            'content' => 'The Lexus LFA is a rare and exotic supercar, known for its V10 engine and unique styling. It is a limited-production masterpiece that represents the pinnacle of Lexus engineering.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/lexus-lfa.jpg',
        ]);

        Post::create([
            'title' => 'Audi R8',
            'content' => 'The Audi R8 is a high-performance sports car with a distinctive design and a powerful V10 engine. It is a perfect blend of style and speed, delivering an exhilarating driving experience.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/audi-r8.jpg',
        ]);

        Post::create([
            'title' => 'Nissan GT-R',
            'content' => 'The Nissan GT-R, also known as the Godzilla, is a legendary sports car with a reputation for speed and precision. It is a symbol of Japanese automotive engineering prowess.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/nissan-gt-r.jpg',
        ]);

        Post::create([
            'title' => 'Mercedes-AMG One',
            'content' => 'The Mercedes-AMG One is a hypercar inspired by Formula 1 technology. With a hybrid powertrain and aerodynamic design, it is a road-legal race car for enthusiasts.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/mercedes-amg-one.jpg',
        ]);

        Post::create([
            'title' => 'Koenigsegg Jesko',
            'content' => 'The Koenigsegg Jesko is a hypercar that redefines speed and performance. With innovative aerodynamics and a powerful engine, it is a true engineering marvel.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/koenigsegg-jesko.jpg',
        ]);

        Post::create([
            'title' => 'Porsche Taycan',
            'content' => 'The Porsche Taycan is an all-electric supercar that combines cutting-edge technology with the iconic Porsche design. It represents a new era of high-performance electric vehicles.',
            'user_id' => $admin_user,
            'cover_image' => 'uploads/porsche-taycan.jpg',
        ]);
     
    }

   
}