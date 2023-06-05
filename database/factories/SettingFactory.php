<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'location' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique->safeEmail,
            'facebook' => $this->faker->name,
            'instagram' => $this->faker->name,
            'twitter' => $this->faker->name,
            'youtube' => $this->faker->name,

        ];
    }
}
