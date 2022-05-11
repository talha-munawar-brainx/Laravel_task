<?php

namespace Database\Factories;

use App\Models\Questions;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnswersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->paragraph(),
            'question_id' => Questions::factory(),
            'answered_by' => User::factory(),
        ];
    }
}
