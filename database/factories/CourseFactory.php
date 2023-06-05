<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'title' => fake()->sentence,
            'image' => fake()->imageUrl,
            'price' => fake()->randomFloat(2, 10, 100),
            'category_id' => function () {
                return \App\Models\Category::factory()->create()->id;
            },
            'details' => fake()->paragraph,
            'instructor_id' => function () {
                return \App\Models\Instructor::factory()->create()->id;
            },
            'skill_level' => fake()->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'language' => fake()->randomElement(['English', 'Spanish', 'French']),
        ];
    }
}
