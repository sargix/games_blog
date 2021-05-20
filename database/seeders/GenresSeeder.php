<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->truncate();

        $genres = ['RPG', 'FPS', 'Sim', 'Przygodowe', 'TPP'];

        for ($i = 0; $i < 5; $i++) {
            $genre[] = [
                'name' => $genres[$i]
            ];
        }

        DB::table('genres')->insert($genre);
    }
}
