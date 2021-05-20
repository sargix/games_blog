<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->truncate();

        $publishers = ['CD Projekt', 'Ubisoft', 'Techland', 'Naughty Dog', 'Santa Monica'];

        for ($i = 0; $i < 5; $i++) {
            $publisher[] = [
                'name' => $publishers[$i]
            ];
        }

        DB::table('publishers')->insert($publisher);
    }
}
