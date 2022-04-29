<?php

namespace Database\Seeders;

use App\Models\Answers;
use App\Models\Questions;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AnswersSeeder::class,
            QuestionsSeeder::class,
            UserSeeder::class,
            AnsVotesSeeder::class,
            QuesVotesSeeder::class,
        ]);




    }
}
