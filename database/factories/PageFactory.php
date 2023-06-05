<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $pageName = ['about', 'praivcy', 'terms', 'help', 'faqs' ];
        $slug = $this->faker->unique()->randomElement($pageName);
        return [
            'slug' => $slug,
            'title' => $slug,
            'sub_title' => fake()->name(),
            'des' => fake()->paragraph(),
            'image' => fake()->imageUrl(640, 480, 'technics'),

            // 'sec_title' => fake()->name(),
            // 'sec_dec' => fake()->paragraph(),
            // 'sec_image' => fake()->imageUrl(640, 480, 'technics'),

            // 'icon1' => fake()->imageUrl(64, 64, 'icon'),
            // 'icon1_title' => fake()->name(),
            // 'icon1_dec' => fake()->paragraph(),

            // 'icon2' => fake()->imageUrl(64, 64, 'icon'),
            // 'icon2_title' => fake()->name(),
            // 'icon2_dec' => fake()->paragraph(),

            // 'icon3' => fake()->imageUrl(64, 64, 'icon'),
            // 'icon3_title' => fake()->name(),
            // 'icon3_dec' => fake()->paragraph(),

            'statice1'=> fake()->randomNumber(2),
            'statice1_title' => fake()->name(),
            'statice2'=> fake()->randomNumber(2),
            'statice2_title' => fake()->name(),
            'statice3'=> fake()->randomNumber(2),
            'statice3_title' => fake()->name(),
            'statice4'=> fake()->randomNumber(2),
            'statice4_title' => fake()->name(),




        ];
    }
}
