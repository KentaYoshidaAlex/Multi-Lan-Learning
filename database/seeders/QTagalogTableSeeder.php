<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記

class QTagalogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //テーブルのクリア
        DB::table('qTagalog')->truncate();

        //初期データ用意(列名をキーとする連想配列)
        DB::table('qTagalog')->insert([

        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「こんにちは」は？',
            'answer' => 'マガンダング ハーポン', 
            'choice1' => 'インガット', 
            'choice2' => 'テレマカシ', 
            'choice3' => 'サラマット', 
            'choice4' => 'マガンダング ハーポン', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => 'こんにちは', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「ありがとう」は？',
            'answer' => 'サラマット', 
            'choice1' => 'インガット', 
            'choice2' => 'テレマカシ', 
            'choice3' => 'サラマット', 
            'choice4' => 'マガンダング ハーポン', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「良い1日は」は？',
            'answer' => 'インガット カ パ ラギ', 
            'choice1' => 'スモガ ハリ アンダ ムニュナンカン', 
            'choice2' => 'インガット カ パ ラギ', 
            'choice3' => 'サラマット', 
            'choice4' => 'テリマカシ', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「ようこそ」は？',
            'answer' => 'マブハイ！', 
            'choice1' => 'インガット！', 
            'choice2' => 'コウソヨ！', 
            'choice3' => 'ワランアヌマン！', 
            'choice4' => 'マブハイ！', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「元気ですか？」は？',
            'answer' => 'クムスタ ポ カヨ？', 
            'choice1' => 'クムスタ ポ カヨ？', 
            'choice2' => 'コモ エスタス？', 
            'choice3' => 'ケタール？', 
            'choice4' => 'ネカウンラー？', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「元気です」は？（元気ですか？に対する返答）',
            'answer' => 'マブティー ナマン', 
            'choice1' => 'ヒンディー マブティー', 
            'choice2' => 'サンダリ ランハ', 
            'choice3' => 'マブティー ナマン', 
            'choice4' => 'マガンダング ハーポン', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「元気じゃないです」は？（元気ですか？に対する返答）',
            'answer' => 'ヒンディー マブティー', 
            'choice1' => 'ヒンディー マブティー', 
            'choice2' => 'サンダリ ランハ', 
            'choice3' => 'マブティー ナマン', 
            'choice4' => 'マガンダング ハーポン', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「めっちゃ元気です」は？（元気ですか？に対する返答）',
            'answer' => 'マサヤ アコ', 
            'choice1' => 'ヒンディー マブティー', 
            'choice2' => 'マサヤ アコ', 
            'choice3' => 'マブティー ナマン', 
            'choice4' => 'マガンダング ハーポン', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「ぼちぼちです(so so)」は？（元気ですか？に対する返答）',
            'answer' => 'オッケーラン or アヨスラン', 
            'choice1' => 'ヒンディー マブティー', 
            'choice2' => 'マサヤ アコ', 
            'choice3' => 'マブティー ナマン', 
            'choice4' => 'オッケーラン or アヨスラン', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「どういたしまして」は？',
            'answer' => 'ワラン アヌマン', 
            'choice1' => 'インガット', 
            'choice2' => 'ワラン アヌマン', 
            'choice3' => 'サラマット', 
            'choice4' => 'マガンダング ハーポン', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「ちょっと待って」は？',
            'answer' => 'サンダリ ラン', 
            'choice1' => 'マサラップ', 
            'choice2' => 'ワラン アヌマン', 
            'choice3' => 'サンダリ ラン', 
            'choice4' => 'パアラム', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「おいしい」は？',
            'answer' => 'マサラップ', 
            'choice1' => 'インガット', 
            'choice2' => 'パアラム', 
            'choice3' => 'マブハイ', 
            'choice4' => 'マサラップ', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「また会いましょう」は？',
            'answer' => 'ハンガン サムリ', 
            'choice1' => 'マブハイ', 
            'choice2' => 'パアラム', 
            'choice3' => 'ハンガン サムリ', 
            'choice4' => 'マサラップ', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「さよなら」は？',
            'answer' => 'パアラム', 
            'choice1' => 'マブハイ', 
            'choice2' => 'パアラム', 
            'choice3' => 'ハンガン サムリ', 
            'choice4' => 'マサラップ', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「すごい」は？',
            'answer' => 'ゲリング or ガリング', 
            'choice1' => 'イカウナマン', 
            'choice2' => 'パアラム', 
            'choice3' => 'ハンガン サムリ', 
            'choice4' => 'ゲリング or ガリング', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        

        

        ]);
            
        
    }
}
