<?php

namespace Database\Factories;

use App\Models\Instructor;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstructorFactory extends Factory
{
    protected $model = Instructor::class;

    public function definition()
    {
        return [
            'name' => fake()->name,
            'image' => fake()->imageUrl,
            'job' => fake()->jobTitle,
        ];
    }
}
