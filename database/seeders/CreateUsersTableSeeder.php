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
            [ 'loginId' => 'kenken', 
              'loginPass' => '1234', 
              'userName' => 'kenken',
              'clearCount' => 0,
              'missCount' => 0,
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
        ],
            [ 'loginId' => 'jojo', 
              'loginPass' => 'crdm', 
              'userName' => '東方仗助',
              'clearCount' => 0,
              'missCount' => 0,
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
        ],
            [ 'loginId' => 'sfujii', 
              'loginPass' => '8888', 
              'userName' => '藤井聡太',
              'clearCount' => 0,
              'missCount' => 0,
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
              ]
        ]);
    }
}
