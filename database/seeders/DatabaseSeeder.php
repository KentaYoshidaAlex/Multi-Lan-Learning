<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        //クラス呼び込み、シーディングコマンド実行
        $this->call(CreateUsersTableSeeder::class);
        $this->call(QuizDataTableSeeder::class);
        $this->call(AllQuizMusicTableSeeder::class);

    }
}
