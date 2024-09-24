<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記


class QFrenchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //テーブルのクリア
        DB::table('qFrench')->truncate();

        //初期データ用意(列名をキーとする連想配列)
        DB::table('qFrench')->insert([
            [ 'language' => 'フランス語', 
                'question' => 'フランス語で「こんにちは」は？',
                'answer' => 'ボンジュール', 
                'choice1' => 'クムスタカ', 
                'choice2' => 'シンチャオ', 
                'choice3' => 'ズドラーボ', 
                'choice4' => 'ボンジュール', 
                'pathPronunciation' => '', 
                'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
                'subLanguage' => '', 
                'jpGreetingWord' => '', 
            ],
            [ 'language' => 'フランス語', 
                'question' => 'フランス語で「ありがとう」は？',
                'answer' => 'メルシー', 
                'choice1' => 'ボンジョルネ', 
                'choice2' => 'ボンソワレ', 
                'choice3' => 'メルシー', 
                'choice4' => 'ボンジュール', 
                'pathPronunciation' => '', 
                'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
                'subLanguage' => '', 
                'jpGreetingWord' => '', 
            ],
            [ 'language' => 'フランス語', 
                'question' => 'フランス語で「どういたしまして」は？',
                'answer' => 'ドゥリャン', 
                'choice1' => 'ワランアヌマン', 
                'choice2' => 'ビヤン', 
                'choice3' => 'ケタール', 
                'choice4' => 'ドゥリャン',
                'pathPronunciation' => '', 
                'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
                'subLanguage' => '', 
                'jpGreetingWord' => '', 
            ],
            [ 'language' => 'フランス語', 
                'question' => 'フランス語で「元気ですか？」は？',
                'answer' => 'コマンタレ ヴ？', 
                'choice1' => 'ケタール？', 
                'choice2' => 'コモエスタ？', 
                'choice3' => 'クムスタ？', 
                'choice4' => 'コマンタレ ヴ？',
                'pathPronunciation' => '', 
                'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
                'subLanguage' => '', 
                'jpGreetingWord' => '', 
            ],
            [ 'language' => 'フランス語', 
                'question' => 'フランス語で「元気？(カジュアルな言い方)」は？',
                'answer' => 'サヴァ？', 
                'choice1' => 'クムスタカ？', 
                'choice2' => 'サヴァ？', 
                'choice3' => 'ケタール？', 
                'choice4' => 'クムスタ？', 
                'pathPronunciation' => '', 
                'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
                'subLanguage' => '', 
                'jpGreetingWord' => '', 
            ],

        ]);
    }
}
