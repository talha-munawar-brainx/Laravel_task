<?php

namespace Database\Seeders;

use App\Models\Questions;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Questions::factory(5)->create();
    }
}
