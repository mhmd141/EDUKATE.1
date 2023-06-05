<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    protected $model = Lesson::class;

    public function definition()
    {
        return [
            'title' => fake()->sentence,
            'content' => fake()->paragraph,
            'course_id' => \App\Models\Course::factory(),
        ];
    }
}
