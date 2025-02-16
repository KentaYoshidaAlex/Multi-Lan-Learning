<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記
use DateTime; //(現在の日時を取得したいなら必要)

class CreateUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //テーブルのクリア
        DB::table('createUsers')->truncate();

        //初期データ用意(列名をキーとする連想配列)
        DB::table('createUsers')->insert([
            [ 'loginId_userName' => 'kenken', 
              'loginPass' => '1234', 
              'clearCount' => 0,
              'missCount' => 0,
              'max_consecutive_study_day' => 0,
              'achievement_cource' => '',
              'number_of_compeleted_quiz' => '',
              'perfect_clear_flag' => '',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
        ],
            [ 'loginId_userName' => '東方仗助', 
              'loginPass' => 'crdm', 
              'clearCount' => 0,
              'missCount' => 0,
              'max_consecutive_study_day' => 0,
              'achievement_cource' => '',
              'number_of_compeleted_quiz' => '',
              'perfect_clear_flag' => '',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
        ],
            [ 'loginId_userName' => '藤井聡太', 
              'loginPass' => '8888', 
              'clearCount' => 0,
              'missCount' => 0,
              'max_consecutive_study_day' => 0,
              'achievement_cource' => '',
              'number_of_compeleted_quiz' => '',
              'perfect_clear_flag' => '',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
        ],
            [ 'loginId_userName' => 'Khine', 
              'loginPass' => 'EiEi87', 
              'clearCount' => 0,
              'missCount' => 0,
              'max_consecutive_study_day' => 0,
              'achievement_cource' => '',
              'number_of_compeleted_quiz' => '',
              'perfect_clear_flag' => '',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
        ],

            [ 'loginId_userName' => 'ゲスト', 
              'loginPass' => '9999', 
              'clearCount' => 0,
              'missCount' => 0,
              'max_consecutive_study_day' => 0,
              'achievement_cource' => '',
              'number_of_compeleted_quiz' => '',
              'perfect_clear_flag' => '',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
              ]
        ]);
    }
}
