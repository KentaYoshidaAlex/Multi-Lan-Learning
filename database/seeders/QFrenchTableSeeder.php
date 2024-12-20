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
                'pathPronunciation' => '../sound/french_word_pronunciation/Bonjour.mp3', 
                'pathBackground' => '../image/picture_france/Eiffel_Tower.jpg', 
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
                'pathPronunciation' => '../sound/french_word_pronunciation/merci.mp3', 
                'pathBackground' => '../image/picture_france/Mont-Saint-Michel.jpg', 
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
                'pathPronunciation' => '../sound/french_word_pronunciation/De_rien.mp3', 
                'pathBackground' => '../image/picture_france/gaisenmon.jpg', 
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
                'pathPronunciation' => '../sound/french_word_pronunciation/Comment_allez_vous.mp3', 
                'pathBackground' => '../image/picture_france/Eiffel_Tower.jpg', 
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
                'pathPronunciation' => '../sound/french_word_pronunciation/Ca_va.mp3', 
                'pathBackground' => '../image/picture_france/Mont-Saint-Michel.jpg', 
                'subLanguage' => '', 
                'jpGreetingWord' => '', 
            ],

            [ 'language' => 'フランス語',            
            'question' => 'フランス語で「良い一日を」は？',
            'answer' => 'ボンジョルネ', 
            'choice1' => 'ブオナ ジョルナータ', 
            'choice2' => 'アイネン シューネンターク', 
            'choice3' => 'ボンジョルネ', 
            'choice4' => 'コマンタレヴー', 
            'pathPronunciation' => '../sound/french_word_pronunciation/Bonne_journee.mp3', 
            'pathBackground' => '../image/picture_france/Mont-Saint-Michel.jpg', 
            'subLanguage' => 'フランス語', 
            'jpGreetingWord' => '良い一日を', 
          ],

        ]);
    }
}
