<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feature>
 */
class FeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'main_title' => $this->faker->name,
            'min_dss' => $this->faker->paragraph,
            'icon1_title' => $this->faker->word,
            'icon1_des' => $this->faker->text,
            'icon2_title' => $this->faker->word,
            'icon2_des' => $this->faker->text,
            'icon3_title' => $this->faker->word,
            'icon3_des' => $this->faker->text,
        ];
    }
}
