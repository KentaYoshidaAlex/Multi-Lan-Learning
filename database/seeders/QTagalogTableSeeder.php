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
            'answer' => 'マガンダング アーラウ', 
            'choice1' => 'インガット', 
            'choice2' => 'テレマカシ', 
            'choice3' => 'サラマット', 
            'choice4' => 'マガンダング アーラウ', 
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Magandang_araw.mp3', 
            'pathBackground' => '../image/picture_philippines/beach.jpg', 
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
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Salamat.mp3', 
            'pathBackground' => '../image/picture_philippines/Bohol_Island.jpg', 
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
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Walang_anuman.mp3', 
            'pathBackground' => '../image/picture_philippines/Bohol_Island.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「良い一日を」は？',
            'answer' => 'インガット', 
            'choice1' => 'スモガ ハリ アンダ'.'<br>'.'&emsp;'.'&nbsp;'.'ムニュナンカン', 
            'choice2' => 'インガット', 
            'choice3' => 'サラマット', 
            'choice4' => 'テリマカシ', 
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/ingat.mp3', 
            'pathBackground' => '../image/picture_philippines/cebu_happy_beach.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「おはよう」は？',
            'answer' => 'マガンダング ウマガ', 
            'choice1' => 'マガンダング タングハリ', 
            'choice2' => 'マガンダング ウマガ', 
            'choice3' => 'マガンダング ガビ', 
            'choice4' => 'マガンダング ハーポン', 
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Magandang_umaga.mp3', 
            'pathBackground' => '../image/picture_philippines/beach.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        [ 
            'language' => 'タガログ語',            
            'question' => 'タガログ語で「こんばんは」は？',
            'answer' => 'マガンダング ガビ', 
            'choice1' => 'マガンダング タングハリ', 
            'choice2' => 'マガンダング ウマガ', 
            'choice3' => 'マガンダング ガビ', 
            'choice4' => 'マガンダング ハーポン', 
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Magandang_gabi.mp3', 
            'pathBackground' => '../image/picture_philippines/beach.jpg', 
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
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Mabuhay.mp3', 
            'pathBackground' => '../image/picture_philippines/beach.jpg', 
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
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Kumusta_po_kayo.mp3', 
            'pathBackground' => '../image/picture_philippines/Bohol_Island.jpg', 
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
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Mabuti_naman.mp3', 
            'pathBackground' => '../image/picture_philippines/cebu_happy_beach.jpg', 
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
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Hindi_mabuti.mp3', 
            'pathBackground' => '../image/picture_philippines/beach.jpg', 
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
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Masaya_ako.mp3', 
            'pathBackground' => '../image/picture_philippines/Bohol_Island.jpg', 
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
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Okey_lang.mp3', 
            'pathBackground' => '../image/picture_philippines/chocolate_hills.jpeg', 
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
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Sandali_lang.mp3', 
            'pathBackground' => '../image/picture_philippines/chocolate_hills.jpeg', 
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
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Masarap.mp3', 
            'pathBackground' => '../image/picture_philippines/beach.jpg', 
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
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Hanggang_sa_muli.mp3', 
            'pathBackground' => '../image/picture_philippines/cebu_happy_beach.jpg', 
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
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Paalam.mp3', 
            'pathBackground' => '../image/picture_philippines/chocolate_hills.jpeg', 
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
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/galing.mp3', 
            'pathBackground' => '../image/picture_philippines/Bohol_Island.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '', 
        ],
        // [ 
        //     'language' => 'タガログ語',            
        //     'question' => 'タガログ語で「」は？',
        //     'answer' => '', 
        //     'choice1' => 'イカウナマン', 
        //     'choice2' => 'パアラム', 
        //     'choice3' => 'ハンガン サムリ', 
        //     'choice4' => 'ゲリング or ガリング', 
        //     'pathPronunciation' => '', 
        //     'pathBackground' => '../image/picture_philippines/chocolate_hills.jpeg', 
        //     'subLanguage' => 'タガログ語', 
        //     'jpGreetingWord' => '', 
        // ],
        // [ 
        //     'language' => 'タガログ語',            
        //     'question' => 'タガログ語で「」は？',
        //     'answer' => '', 
        //     'choice1' => 'イカウナマン', 
        //     'choice2' => 'パアラム', 
        //     'choice3' => 'ハンガン サムリ', 
        //     'choice4' => 'ゲリング or ガリング', 
        //     'pathPronunciation' => '', 
        //     'pathBackground' => '../image/picture_philippines/beach.jpg', 
        //     'subLanguage' => 'タガログ語', 
        //     'jpGreetingWord' => '', 
        // ],
        // [ 
        //     'language' => 'タガログ語',            
        //     'question' => 'タガログ語で「」は？',
        //     'answer' => '', 
        //     'choice1' => 'イカウナマン', 
        //     'choice2' => 'パアラム', 
        //     'choice3' => 'ハンガン サムリ', 
        //     'choice4' => 'ゲリング or ガリング', 
        //     'pathPronunciation' => '', 
        //     'pathBackground' => '../image/picture_philippines/Bohol_Island.jpg', 
        //     'subLanguage' => 'タガログ語', 
        //     'jpGreetingWord' => '', 
        // ],
        // [ 
        //     'language' => 'タガログ語',            
        //     'question' => 'タガログ語で「」は？',
        //     'answer' => '', 
        //     'choice1' => 'イカウナマン', 
        //     'choice2' => 'パアラム', 
        //     'choice3' => 'ハンガン サムリ', 
        //     'choice4' => 'ゲリング or ガリング', 
        //     'pathPronunciation' => '', 
        //     'pathBackground' => '../image/picture_philippines/danceByEveryone.jpg', 
        //     'subLanguage' => 'タガログ語', 
        //     'jpGreetingWord' => '', 
        // ],
        

        

        ]);
            
        
    }
}
