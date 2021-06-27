<?php

use Illuminate\Database\Seeder;

class InitialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('initials')->insert([
            ['id' => 1, 'initial' => 'あ'],
            ['id' => 2, 'initial' => 'か'],
            ['id' => 3, 'initial' => 'さ'],
            ['id' => 4, 'initial' => 'た'],
            ['id' => 5, 'initial' => 'な'],
            ['id' => 6, 'initial' => 'は'],
            ['id' => 7, 'initial' => 'ま'],
            ['id' => 8, 'initial' => 'や'],
            ['id' => 9, 'initial' => 'ら'],
            ['id' => 10, 'initial' => 'わ']        
        ]);
    }
}
