<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記

class QMyanmarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //テーブルのクリア
        DB::table('qMyanmar')->truncate();

        //初期データ用意(列名をキーとする連想配列)
        DB::table('qMyanmar')->insert([
            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「こんにちは」は？',
              'answer' => 'ミンガラーバー', 
              'choice1' => 'クムスタカ', 
              'choice2' => 'シンチャオ', 
              'choice3' => 'ズドラーボ', 
              'choice4' => 'ミンガラーバー', 
              'pathPronunciation' => '/sound/hello_myanmar.m4a', 
              'pathBackground' => '../image/picture_myanmar/danceByEveryone.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「ありがとう」は？',
              'answer' => 'ティーズーべー', 
              'choice1' => 'ティーズーべー', 
              'choice2' => 'ガモン', 
              'choice3' => 'コープンカップ', 
              'choice4' => 'サラマットゥ', 
              'pathPronunciation' => '/sound/thankyou_myanmar.m4a', 
              'pathBackground' => '../image/picture_myanmar/danceByEveryone.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「さよなら」は？',
              'answer' => 'タッター', 
              'choice1' => 'ティーズーべー', 
              'choice2' => 'ガモン', 
              'choice3' => 'コープンカップ', 
              'choice4' => 'タッター', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/shwedagonPagoda.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「お会いできて嬉しいです」は？',
              'answer' => 'トゥエヤダワンターバーデー', 
              'choice1' => 'ズドラーボ', 
              'choice2' => 'クムスタポカヨ', 
              'choice3' => 'トゥエヤダワンターバーデー', 
              'choice4' => 'クムスタポカヨ', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/goldenRock.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「元気ですか？」は？',
              'answer' => 'ネカウンラー', 
              'choice1' => 'クムスタカ', 
              'choice2' => 'クムスタポカヨ', 
              'choice3' => 'ネカウンテー', 
              'choice4' => 'ネカウンラー', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/shwedagonPagoda.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「よい1日は？」は？',
              'answer' => 'カウントォー ネィレイビイェバァスィ', 
              'choice1' => 'タナジャバキャミャア', 
              'choice2' => 'ネカウンテー?', 
              'choice3' => 'アヤダァ  シーデー', 
              'choice4' => 'カウントォー ネィレイビイェバァスィ', 
              'pathPronunciation' => '/sound/haveaniceday_myanmar.m4a', 
              'pathBackground' => '../image/picture_myanmar/goldenRock.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「ご飯は食べましたか？」は？',
              'answer' => 'タミィン サーピィ ビ ラ', 
              'choice1' => 'ネカウンラー', 
              'choice2' => 'タミィン サーピィ ビ ラ', 
              'choice3' => 'ネカウンテー', 
              'choice4' => 'カウントォー ネィレイビイェバァスィ', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/shwedagonPagoda.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「おやすみ」は？',
              'answer' => 'カントンニャーバー', 
              'choice1' => 'タッター', 
              'choice2' => 'マサブゥ', 
              'choice3' => 'ナゥマトウェ ジャメェ', 
              'choice4' => 'カントンニャーバー', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/goldenRock.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「また会いましょう」は？',
              'answer' => 'ナゥマトウェ ジャメェ', 
              'choice1' => 'カントンニャーバー', 
              'choice2' => 'ナゥマトウェ ジャメェ', 
              'choice3' => 'クムスタポカヨ', 
              'choice4' => 'カウントォー ネィレイビイェバァスィ', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/shwedagonPagoda.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「少し」は？',
              'answer' => 'ネネ', 
              'choice1' => 'ニン', 
              'choice2' => 'アミャージー', 
              'choice3' => 'ネネ', 
              'choice4' => 'バタァ', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/Kakku_Pagodas.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「美味しい」は？',
              'answer' => 'アヤダア シーデー', 
              'choice1' => 'マ サァブゥー', 
              'choice2' => 'サービィ', 
              'choice3' => 'タミィン', 
              'choice4' => 'アヤダア シーデー', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/AnandaTemple.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「食べた」は？',
              'answer' => 'サービィ ビ', 
              'choice1' => 'マ サァブゥー', 
              'choice2' => 'イヤダア シーデー', 
              'choice3' => 'ナァブゥー', 
              'choice4' => 'サービィ ビ', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/danceByEveryone.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「食べない」は？',
              'answer' => 'マ サァブゥー', 
              'choice1' => 'イヤダア シーデー', 
              'choice2' => 'サービィ ビ', 
              'choice3' => 'イヤダア シーデー', 
              'choice4' => 'マ サァブゥー', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/danceByEveryone.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「すみません」は？',
              'answer' => 'ホウレ', 
              'choice1' => 'クインルッパー', 
              'choice2' => 'ホウレ', 
              'choice3' => 'ダウンベン バデー', 
              'choice4' => 'タナジャバキャミャア', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/AnandaTemple.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「綺麗」は？',
              'answer' => 'ラァッデェー', 
              'choice1' => 'ラァッデェー', 
              'choice2' => 'チッチ', 
              'choice3' => 'ホウレ', 
              'choice4' => 'チッボエカウンデー', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/AnandaTemple.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「かわいい」は？',
              'answer' => 'チッボォカウンデー', 
              'choice1' => 'イヤダア シーデー', 
              'choice2' => 'ダウンベン バデー', 
              'choice3' => 'チッボォカウンデー', 
              'choice4' => 'クラッデェー', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/bagan.webp', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「いくらですか？」は？',
              'answer' => 'バ ラォ レー？', 
              'choice1' => 'ベ ラォ チッレー', 
              'choice2' => 'アミャージー？', 
              'choice3' => 'ネネ？', 
              'choice4' => 'バ ラォ レー？', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/bagan.webp', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「朝」は？',
              'answer' => 'マァネ', 
              'choice1' => 'マァネ', 
              'choice2' => 'ニャア', 
              'choice3' => 'ネキィン', 
              'choice4' => 'ミンガラーバ', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/bagan.webp', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「昼」は？',
              'answer' => 'ネキィン', 
              'choice1' => 'ネキィン', 
              'choice2' => 'ミンガラーバー', 
              'choice3' => 'ニャア', 
              'choice4' => 'マァネ', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/bagan.webp', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「夜」は？',
              'answer' => 'ニャア', 
              'choice1' => 'マァネ', 
              'choice2' => 'ニャア', 
              'choice3' => 'ネキィン', 
              'choice4' => 'ミンガラーバー', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/bagan.webp', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],

            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「申し訳ありません」は？',
              'answer' => 'タウンパンバーデー', 
              'choice1' => 'タウンパンバーデー', 
              'choice2' => 'ソーリーベーノー', 
              'choice3' => 'クインルッパー', 
              'choice4' => 'ホウレ', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/InleLake.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'ミャンマー語', 
              'question' => 'ミャンマー語で「ごめんなさい」は？',
              'answer' => 'ソーリーベーノー', 
              'choice1' => 'タウンパンバーデー', 
              'choice2' => 'ソーリーベーノー', 
              'choice3' => 'クインルッパー', 
              'choice4' => 'ホウレ', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/goldenRock.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            
           
            [ 'language' => 'ミャンマー語',            
              'question' => 'ミャンマー語で「冗談冗談」は？',
              'answer' => 'サダサダ', 
              'choice1' => 'イマチョブラ', 
              'choice2' => 'シンメェイ', 
              'choice3' => 'パロレ', 
              'choice4' => 'サダサダ', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/InleLake.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'ミャンマー語',            
              'question' => 'ミャンマー語で「痛いの痛いの飛んでいけ」は？',
              'answer' => 'オンプゥワー', 
              'choice1' => 'ロンジィー', 
              'choice2' => 'オンプゥワー', 
              'choice3' => 'パソｫｰ', 
              'choice4' => 'タメィー', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/goldenRock.jpg',
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ], 

            [ 'language' => 'ミャンマー語',            
              'question' => 'ミャンマー語で「（フランクな感じでの）美味しい」は？',
              'answer' => 'サァロォ カゥンディー', 
              'choice1' => 'アヤダア シーデー', 
              'choice2' => 'タミィン サービィ ビ ラ', 
              'choice3' => 'サァロォ カゥンディー', 
              'choice4' => 'チッボォカウンデー', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/goldenRock.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'ミャンマー語',            
              'question' => 'ミャンマー語で「ジャジャーン（魔法で何かを出すみたいな時）」は？',
              'answer' => 'ハチャラゥーン', 
              'choice1' => 'ヨォン バー', 
              'choice2' => 'タナジャバキャミャア', 
              'choice3' => 'チッボエカウンデー', 
              'choice4' => 'ハチャラゥーン', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/InleLake.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'ミャンマー語',            
              'question' => 'ミャンマー語で「大丈夫」は？',
              'answer' => 'ヤデ', 
              'choice1' => 'ヤッピー', 
              'choice2' => 'ヤデ', 
              'choice3' => 'デケエ', 
              'choice4' => 'ハチャラゥーン', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/AnandaTemple.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'ミャンマー語',            
              'question' => 'ミャンマー語で「本当（ほんま）」は？',
              'answer' => 'デケエ', 
              'choice1' => 'ヤッピー', 
              'choice2' => 'ヤデ', 
              'choice3' => 'デケエ', 
              'choice4' => 'ハチャラゥーン', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/InleLake.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'ミャンマー語',            
              'question' => 'ミャンマー語で「何言ったの？」は？',
              'answer' => 'バーミョーライタ レ?', 
              'choice1' => 'ベ ラォ チッレー？', 
              'choice2' => 'バーミョーライタ レ?', 
              'choice3' => 'ヨォン ラー?', 
              'choice4' => 'ヨォン バー?', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/Kakku_Pagodas.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
            [ 'language' => 'ミャンマー語',            
              'question' => 'ミャンマー語で「ちょっと待ってください」は？',
              'answer' => 'カナァサォパー', 
              'choice1' => 'ベ ラォ チッレー？', 
              'choice2' => 'ハチャラゥーン', 
              'choice3' => 'カナァサォパー', 
              'choice4' => 'バーミョーライタ レ', 
              'pathPronunciation' => '', 
              'pathBackground' => '../image/picture_myanmar/Kakku_Pagodas.jpg', 
              'subLanguage' => '', 
              'jpGreetingWord' => '', 
            ],
        ]);
    }
}


