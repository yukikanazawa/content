<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ['id' => 1, 'overview_id' => 1, 'name' => 'yuuuu.kanazawa', 'body' => '面白かった']  
        ]);
    }
}
