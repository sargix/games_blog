<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->truncate();

        $games = [];

        for ($i = 0; $i < 20; $i++) {
            $games[] = [
                'title' => 'Resident Evil 8',
                'description' => 'Resident Evil Village is a survival horror game developed and published  by Capcom.',
                'genre' => 'Survival horror',
                'publisher' => 'Capcom',
                'platform' => 'PC, PS4, XONE',
                'publicate_date' => Carbon::now(),
            ];
        }

        DB::table('games')->insert($games);
    }
}
