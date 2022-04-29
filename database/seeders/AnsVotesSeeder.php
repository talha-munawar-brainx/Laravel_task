<?php

namespace Database\Seeders;

use App\Models\AnsVotes;
use App\Models\Answers;
use Illuminate\Database\Seeder;

class AnsVotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnsVotes::factory(5)->create();
    }
}
