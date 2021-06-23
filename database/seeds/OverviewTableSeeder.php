<?php

use Illuminate\Database\Seeder;

class OverviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('overviews')->insert([
            ['id' => 1, 'initial_id' => 3, 'title' => '新宿スワン', 'short_body' => '金も仕事もない主人公がある人に気に入られ、新宿・歌舞伎町のスカウトマンとなる。
            夜の女たちを幸せにすることを信条に、生きていくことを誓うのだが...。
            （NETFLIX公式サイトから引用）', 'long_body' => '次回以降'],
            ['id' => 2, 'initial_id' => 3, 'title' => '新宿スワンⅡ','short_body' => '金も仕事もない主人公がある人に気に入られ、新宿・歌舞伎町のスカウトマンとなる。
            夜の女たちを幸せにすることを信条に、生きていくことを誓うのだが...。
            （NETFLIX公式サイトから引用）', 'long_body' => '次回以降'],
            ['id' => 3, 'initial_id' => 2, 'title' => '君の膵臓食べたい','short_body' => '金も仕事もない主人公がある人に気に入られ、新宿・歌舞伎町のスカウトマンとなる。
            夜の女たちを幸せにすることを信条に、生きていくことを誓うのだが...。
            （NETFLIX公式サイトから引用）', 'long_body' => '次回以降']       
        ]);
    }
}
