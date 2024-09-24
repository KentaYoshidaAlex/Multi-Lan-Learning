<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記

class QSpanishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //テーブルのクリア
        DB::table('qSpanish')->truncate();

        //初期データ用意(列名をキーとする連想配列)
        DB::table('qSpanish')->insert([
            [ 'language' => 'スペイン語', 
              'question' => 'スペイン語で「(どの時間帯でも使える)こんにちは」は？',
              'answer' => 'オラ', 
              'choice1' => 'クムスタカ', 
              'choice2' => 'シンチャオ', 
              'choice3' => 'ズドラーボ', 
              'choice4' => 'オラ', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'スペイン語', 
              'question' => 'スペイン語で「おはよう」は？',
              'answer' => 'ブエノス ディアス', 
              'choice1' => 'クムスタカ', 
              'choice2' => 'ブエノス ディアス', 
              'choice3' => 'ブエノス ノーチェス', 
              'choice4' => 'ブエナス タルデス', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'スペイン語', 
              'question' => 'スペイン語で「こんにちは」は？',
              'answer' => 'ブエナス タルデス', 
              'choice1' => 'クムスタカ', 
              'choice2' => 'ブエノス ディアス', 
              'choice3' => 'ブエノス ノーチェス', 
              'choice4' => 'ブエナス タルデス', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'スペイン語', 
              'question' => 'スペイン語で「こんばんは」は？',
              'answer' => 'ブエノス ノーチェス', 
              'choice1' => 'ブエノス ディアス', 
              'choice2' => 'ブエノス ノーチェス', 
              'choice3' => 'ケテンガ ブエンディーア', 
              'choice4' => 'ブエナス タルデス', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'スペイン語', 
              'question' => 'スペイン語で「ありがとう」は？',
              'answer' => 'グラシアス', 
              'choice1' => 'サラマット', 
              'choice2' => 'グラシアス', 
              'choice3' => 'ダンケシェン', 
              'choice4' => 'グラッツェ', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'スペイン語', 
              'question' => 'スペイン語で「どういたしまして」は？',
              'answer' => 'デナーダ', 
              'choice1' => 'ワラン アヌマン', 
              'choice2' => 'インガット', 
              'choice3' => 'サマサマ', 
              'choice4' => 'デナーダ', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'スペイン語', 
              'question' => 'スペイン語で「元気ですか？」は？',
              'answer' => 'ケタール？', 
              'choice1' => 'クムスタカ？', 
              'choice2' => 'クムスタポカヨ？', 
              'choice3' => 'ケタール？', 
              'choice4' => 'コモタレヴ？', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            // [ 'language' => 'スペイン語', 
            //   'question' => 'スペイン語で「」は？',
            //   'answer' => '', 
            //   'choice1' => 'クムスタカ', 
            //   'choice2' => 'シンチャオ', 
            //   'choice3' => 'ズドラーボ', 
            //   'choice4' => 'オラ or ブエナス タルデス', 
            //   'pathPronunciation' => '', 
            //   'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            //   'subLanguage' => '', 
            //   'jpGreetingWord' => '', 
            // ],

        ]);
    
    }
}
