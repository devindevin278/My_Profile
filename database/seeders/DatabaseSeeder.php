<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Blog::create([
            'title' => 'Why I Started Working Out',
            'slug' => 'why-i-started-working-out',
            'category' => 'lifestyle',
            'body' => '<p>Working out has become an integral part of my life, and I have come to realize the incredible benefits that come with it. In this blog, I will share my personal journey of why I started working out and how it has transformed my life.</p><p>Growing up, I was never interested in sports or physical activities. I spent most of my time indoors, reading books, and watching TV. As a result, I became overweight and lacked the energy and stamina to keep up with my peers. I was self-conscious about my body and struggled with low self-esteem.</p><p>It wasn\'t until my mid-twenties that I realized I needed to make a change. I was tired of feeling lethargic and unhappy with my body, so I decided to start working out. At first, it was a struggle. I lacked the motivation and discipline to stick to a routine, and I felt uncomfortable in the gym.</p><p>However, over time, I began to see the benefits of working out. I started to feel more energetic and confident in my body. I also noticed improvements in my mental health, as exercise released endorphins that boosted my mood and reduced my stress levels.</p><p>Working out has also helped me develop a sense of discipline and self-control. It takes dedication and commitment to maintain a consistent workout routine, and this has translated to other areas of my life. I am more focused and productive at work, and I am better able to manage my time and prioritize my goals.</p><p>One of the most significant benefits of working out, for me, has been the sense of community it provides. I joined a gym and started attending group fitness classes, which allowed me to meet new people and make friends. It\'s inspiring to be around others who share a common goal of living a healthy and active lifestyle.</p><p>In conclusion, starting to work out has been one of the best decisions I have made in my life. It has transformed me physically and mentally, providing me with the energy, confidence, and discipline to live a fulfilling life. If you\'re considering starting a workout routine, I encourage you to take the first step. It may be challenging at first, but the benefits are well worth it.</p>',
            'image' => 'workout.jfif'
        ]);
        Blog::create([
            'title' => 'test title2',
            'slug' => 'test-slug2',
            'category' => 'food',
            'body' => 'test body2',
            'image' => 'test image2'
        ]);
        Blog::create([
            'title' => 'test title3',
            'slug' => 'test-slug3',
            'category' => 'hobby',
            'body' => 'test body3',
            'image' => 'test image3'
        ]);
    }
}
