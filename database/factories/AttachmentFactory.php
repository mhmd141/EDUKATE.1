<?php

namespace Database\Factories;

use App\Models\Attachment;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttachmentFactory extends Factory
{
    protected $model = Attachment::class;

    public function definition()
    {
        $types = ['pdf', 'doc', 'png', 'ppt'];

        return [
            'course_id' => \App\Models\Course::factory(),
            'file' => fake()->word . '.' . fake()->randomElement($types),
            'type' => fake()->randomElement($types),
        ];
    }
}
