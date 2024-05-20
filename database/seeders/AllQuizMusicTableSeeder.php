<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記

class AllQuizMusicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //テーブルのクリア
        DB::table('allQuizMusics')->truncate();

        //初期データ用意(列名をキーとする連想配列)
        DB::table('allQuizMusics')->insert([
            [ 'correctS' => '/sound/common/correct1.mp3', 
              'gameOverS' => '/sound/common/gameOver.mp3',
              'congratulationsS' => '/sound/common/people-performance-cheer1.mp3', 
              'congratulationsS2' => '/sound/common/congra2.mp3'
            ]
        ]);
    }
}