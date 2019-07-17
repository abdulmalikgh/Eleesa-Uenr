<?php

use Illuminate\Database\Seeder;
use App\Level;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'level' => 'Level 100'
        ]);

        Level::create([
            'level' => 'Level 200'
        ]);

        Level::create([
            'level' => 'Level 300'
        ]);

        Level::create([
            'level' => 'Level 400'
        ]);
    }
}
