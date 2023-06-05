<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'course_id' => \App\Models\Course::factory(),
            'user_id' => \App\Models\User::factory(),
            'content' => fake()->paragraph,
        ];
    }
}
