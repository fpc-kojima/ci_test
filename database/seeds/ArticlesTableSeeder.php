<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();
        DB::table('articles')->insert([
            [
                'title'      => 'テスト',
                'body'       => 'テスト',
                'created_at' => '2017-07-20 14:00:00',
                'updated_at' => '2017-07-20 14:00:00',
            ],
            [
                'title'      => 'テスト',
                'body'       => 'テスト',
                'created_at' => '2017-07-20 15:00:00',
                'updated_at' => '2017-07-20 15:00:00',
            ],
            [
                'title'      => 'テスト',
                'body'       => 'テスト',
                'created_at' => '2017-07-20 16:00:00',
                'updated_at' => '2017-07-20 16:00:00',
            ],
        ]);
    }
}
