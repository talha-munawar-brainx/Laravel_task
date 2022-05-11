<?php

namespace Database\Seeders;

use App\Models\Questions;
use App\Models\QuesVotes;
use Illuminate\Database\Seeder;

class QuesVotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuesVotes::factory(5)->create();
    }
}
