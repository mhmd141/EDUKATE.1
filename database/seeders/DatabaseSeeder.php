<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Page::factory(5)->create();
        \App\Models\Course::factory(50)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\lesson::factory(20)->create();
        \App\Models\Comment::factory(20)->create();
        \App\Models\Attachment::factory(20)->create();
        \App\Models\Testimonial::factory(1)->create();
        \App\Models\Setting::factory(3)->create();
        \App\Models\Feature::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
