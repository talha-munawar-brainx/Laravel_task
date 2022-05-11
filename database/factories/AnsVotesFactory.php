<?php

namespace Database\Factories;

use App\Models\Answers;
use App\Models\Questions;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnsVotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vote' => $this->faker->boolean,
            'answer_id' => Answers::factory(),
            'user_id' => User::factory(),
        ];
    }
}
