<?php

use Illuminate\Database\Seeder;

class SamplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('samples')->truncate();
        DB::table('samples')->insert([
            [
                'name'          => '北海道',
                'prefecture_id' => 1,                
                'created_at'    => '2017-01-01 00:00:00',
                'updated_at'    => '2017-01-01 00:00:00',
            ],
            [
                'name'          => '青森県',
                'prefecture_id' => 2,
                'created_at'    => '2017-01-01 00:00:00',
                'updated_at'    => '2017-01-01 00:00:00',
            ],
        ]);
    }
}
