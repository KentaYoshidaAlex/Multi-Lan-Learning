<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記

class QWorldGreetingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //テーブルのクリア
        DB::table('qWorldGreetings')->truncate();

        //初期データ用意(列名をキーとする連想配列)
        DB::table('qWorldGreetings')->insert([

            [ 'language' => '世界の挨拶',            
            'question' => '英語で「こんにちは」は？',
            'answer' => 'Hello', 
            'choice1' => 'See you', 
            'choice2' => 'Good luck', 
            'choice3' => 'Thank you', 
            'choice4' => 'Hello', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_myanmar/danceByEveryone.jpg', 
            'subLanguage' => '英語', 
            'jpGreetingWord' => 'こんにちは', 
          ],
          [ 'language' => '世界の挨拶',            
            'question' => '英語で「ありがとう」は？',
            'answer' => 'Thank you', 
            'choice1' => 'See you', 
            'choice2' => 'Good luck', 
            'choice3' => 'Thank you', 
            'choice4' => 'Hello', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_myanmar/danceByEveryone.jpg', 
            'subLanguage' => '英語', 
            'jpGreetingWord' => 'ありがとう', 
          ],
          [ 'language' => '世界の挨拶',            
            'question' => '英語で「良い一日を」は？',
            'answer' => 'Have a nice day', 
            'choice1' => 'See you', 
            'choice2' => 'Aloha', 
            'choice3' => 'Thank you', 
            'choice4' => 'Have a nice day', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_myanmar/danceByEveryone.jpg', 
            'subLanguage' => '英語', 
            'jpGreetingWord' => '良い一日を', 
          ],
             [ 'language' => '世界の挨拶',            
               'question' => 'ミャンマー語で「こんにちは」は？',
               'answer' => 'ミンガラーバー', 
               'choice1' => 'スモガ ハリアンダ ムニュナンカン', 
               'choice2' => 'スラマッシアン', 
               'choice3' => 'チーズーべ', 
               'choice4' => 'ミンガラーバー', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_myanmar/danceByEveryone.jpg', 
               'subLanguage' => 'ミャンマー語', 
               'jpGreetingWord' => 'こんにちは', 
             ],
             [ 'language' => '世界の挨拶',            
               'question' => 'ミャンマー語で「ありがとう」は？',
               'answer' => 'ティーズーべ', 
               'choice1' => 'スモガ ハリアンダ ムニュナンカン', 
               'choice2' => 'スラマッシアン', 
               'choice3' => 'ティーズーべ', 
               'choice4' => 'ミンガラーバー', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_myanmar/danceByEveryone.jpg', 
               'subLanguage' => 'ミャンマー語', 
               'jpGreetingWord' => 'ありがとう', 
             ],
             [ 'language' => '世界の挨拶',            
               'question' => 'ミャンマー語で「良い一日を」は？',
               'answer' => 'カントン ネィ レイ ピ パスィ', 
               'choice1' => 'スモガ ハリアンダ ムニュナンカン', 
               'choice2' => 'インガット カ パラギ', 
               'choice3' => 'カントン ネィ レイ ピ パスィ', 
               'choice4' => 'テレマカシ', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_myanmar/danceByEveryone.jpg', 
               'subLanguage' => 'ミャンマー語', 
               'jpGreetingWord' => '良い一日を', 
             ],

             [ 'language' => '世界の挨拶',            
               'question' => '中国語で「こんにちは」は？',
               'answer' => 'ニーハオ', 
               'choice1' => 'アンニョンハセヨ', 
               'choice2' => 'シェイシェイ', 
               'choice3' => 'ニーハオ', 
               'choice4' => 'シェイシェイ', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_china/greatWallOfChina.jpg', 
               'subLanguage' => '中国語', 
               'jpGreetingWord' => 'こんにちは', 
             ],
             [ 'language' => '世界の挨拶',            
               'question' => '中国語で「ありがとう」は？',
               'answer' => 'シェイシェイ', 
               'choice1' => 'ニーハオ', 
               'choice2' => 'カムソハムニダ', 
               'choice3' => 'シェイシェイ', 
               'choice4' => 'テレマカシ', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_china/kyusaikou.webp', 
               'subLanguage' => '中国語', 
               'jpGreetingWord' => 'ありがとう', 
             ],

             [ 'language' => '世界の挨拶',            
               'question' => '中国語で「良い一日を」は？',
               'answer' => 'ヂュウ ニィ ヨゥ ユゥ クワィ ダ イ ティン', 
               'choice1' => 'スモガ ハリアンダ ムニュナンカン', 
               'choice2' => 'ドゥーデェ', 
               'choice3' => 'ヂュウ ニィ ヨゥ ユゥ クワィ ダ イ ティン', 
               'choice4' => 'ネイホゥ', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_china/pandas.jpg', 
               'subLanguage' => '中国語', 
               'jpGreetingWord' => '良い一日を',
            ],
             [ 'language' => '世界の挨拶',            
               'question' => '韓国語で「こんにちは」は？',
               'answer' => 'アンニョンハセヨ', 
               'choice1' => 'アンニョンハセヨ', 
               'choice2' => 'チョウン ハル ポネセヨ', 
               'choice3' => 'ニーハオ', 
               'choice4' => 'カムソハムニダ', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_korea/Cheonggye-cheon.webp', 
               'subLanguage' => '韓国語', 
               'jpGreetingWord' => 'こんにちは', 
             ],
             [ 'language' => '世界の挨拶',            
               'question' => '韓国語で「ありがとう」は？',
               'answer' => 'カムソハムニダ', 
               'choice1' => 'ニーハオ', 
               'choice2' => 'チョウン ハル ポネセヨ', 
               'choice3' => 'アンニョンハセヨ', 
               'choice4' => 'カムソハムニダ', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_korea/Gyeongbokgung_Palace.webp', 
               'subLanguage' => '韓国語', 
               'jpGreetingWord' => 'ありがとう', 
             ],
             [ 'language' => '世界の挨拶',            
               'question' => '韓国語で「良い一日を」は？',
               'answer' => 'チョウン ハル ポネセヨ', 
               'choice1' => 'ネイホゥ', 
               'choice2' => 'インガット カ パラギ', 
               'choice3' => 'ドゥーデェ', 
               'choice4' => 'チョウン ハル ポネセヨ', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_korea/various_kimchi.webp', 
               'subLanguage' => '韓国語', 
               'jpGreetingWord' => '良い一日を', 
             ],

             [ 'language' => '世界の挨拶',            
               'question' => 'タガログ語で「こんにちは」は？',
               'answer' => 'マガンダング ハーポン', 
               'choice1' => 'マガンダング ハーポン', 
               'choice2' => 'サラマットゥ', 
               'choice3' => 'スラマッパタン', 
               'choice4' => 'サワディー + カップ(男)/ カー(女)', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_philippines/beach.jpg', 
               'subLanguage' => 'タガログ語', 
               'jpGreetingWord' => 'こんにちは', 
             ],
             [ 'language' => '世界の挨拶',            
               'question' => 'タガログ語で「ありがとう」は？',
               'answer' => 'サラマットゥ', 
               'choice1' => 'サラマットゥ', 
               'choice2' => 'コープン + カップ(男)/ カー(女)', 
               'choice3' => 'ドゥーデェ', 
               'choice4' => 'テレマカシ', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_philippines/chocolate_hills.jpeg', 
               'subLanguage' => 'タガログ語', 
               'jpGreetingWord' => 'ありがとう', 
             ],
             [ 'language' => '世界の挨拶',            
               'question' => 'タガログ語で「良い一日を」は？',
               'answer' => 'インガットゥ カ パ ラギ', 
               'choice1' => 'スモガ ハリアンダ ムニュナンカン', 
               'choice2' => 'ケテンガ ブエンディーア', 
               'choice3' => 'チョークディーナ + カップ(男)/ カー(女)', 
               'choice4' => 'インガットゥ カ パ ラギ', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_philippines/Bohol_Island.jpg', 
               'subLanguage' => 'タガログ語', 
               'jpGreetingWord' => '良い一日を', 
             ],

             [ 'language' => '世界の挨拶',            
               'question' => 'タイ語で「こんにちは」は？',
               'answer' => 'サワディー + カップ(男)/ カー(女)', 
               'choice1' => 'マガンダング ハーポン', 
               'choice2' => 'コープン + カップ(男)/ カー(女)', 
               'choice3' => 'スラマッパタン', 
               'choice4' => 'サワディー + カップ(男)/ カー(女)', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_thailand/chiang_mai.jpg', 
               'subLanguage' => 'タイ語', 
               'jpGreetingWord' => 'こんにちは', 
             ],
             [ 'language' => '世界の挨拶',            
               'question' => 'タイ語で「ありがとう」は？',
               'answer' => 'コープン + カップ(男)/ カー(女)', 
               'choice1' => 'サラマットゥ', 
               'choice2' => 'コープン + カップ(男)/ カー(女)', 
               'choice3' => 'サワディー + カップ(男)/ カー(女)', 
               'choice4' => 'テレマカシ', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_thailand/floating_market.jpg', 
               'subLanguage' => 'タイ語', 
               'jpGreetingWord' => 'ありがとう', 
             ],
             [ 'language' => '世界の挨拶',            
               'question' => 'タイ語で「良い一日を」は？',
               'answer' => 'チョークディーナ + カップ(男)/ カー(女)', 
               'choice1' => 'スモガ ハリアンダ ムニュナンカン', 
               'choice2' => 'コープン + カップ(男)/ カー(女)', 
               'choice3' => 'チョークディーナ + カップ(男)/ カー(女)', 
               'choice4' => 'サワディー + カップ(男)/ カー(女)', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_thailand/Khao_San_Road.jpg', 
               'subLanguage' => 'タイ語', 
               'jpGreetingWord' => '良い一日を', 
             ],


             [ 'language' => '世界の挨拶',            
               'question' => 'インドネシア語で「こんにちは」は？',
               'answer' => 'スラマッシアン', 
               'choice1' => 'マガンダング ハーポン', 
               'choice2' => 'スラマッシアン', 
               'choice3' => 'スラマッパタン', 
               'choice4' => 'サワディー + カップ(男)/ カー(女)', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_indonesia/bali_island.jpg', 
               'subLanguage' => 'インドネシア語', 
               'jpGreetingWord' => 'こんにちは', 
             ],
             [ 'language' => '世界の挨拶',            
               'question' => 'インドネシア語で「ありがとう」は？',
               'answer' => 'テレマカシ', 
               'choice1' => 'サラマットゥ', 
               'choice2' => 'コープン + カップ(男)/ カー(女)', 
               'choice3' => 'タンキュー', 
               'choice4' => 'テレマカシ', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_indonesia/java_island.jpg', 
               'subLanguage' => 'インドネシア語', 
               'jpGreetingWord' => 'ありがとう', 
             ],


             [ 'language' => '世界の挨拶',            
               'question' => 'インドネシア語で「良い一日を」は？',
               'answer' => 'スモガ ハリアンダ ムニュナンカン', 
               'choice1' => 'スモガ ハリアンダ ムニュナンカン', 
               'choice2' => 'インガットゥ カ パ ラギ', 
               'choice3' => 'チョークディーナ + カップ(男)/ カー(女)', 
               'choice4' => 'ケテンガ ブエンディーア', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_indonesia/Taman_Ayun.jpg', 
               'subLanguage' => 'インドネシア語', 
               'jpGreetingWord' => '良い一日を', 
             ],

             [ 'language' => '世界の挨拶',            
               'question' => 'イタリア語で「こんにちは」は？',
               'answer' => 'チャオ', 
               'choice1' => 'シンチャオ', 
               'choice2' => 'チャオ', 
               'choice3' => 'オラ', 
               'choice4' => 'ボンジュール', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_italy/Amalfi.jpg', 
               'subLanguage' => 'イタリア語', 
               'jpGreetingWord' => 'こんにちは', 
             ],
             [ 'language' => '世界の挨拶',            
               'question' => 'イタリア語で「ありがとう」は？',
               'answer' => 'グラッツェ', 
               'choice1' => 'グラシアス', 
               'choice2' => 'ダンケシェン', 
               'choice3' => 'チャオ', 
               'choice4' => 'グラッツェ', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_italy/Colosseum.jpg', 
               'subLanguage' => 'イタリア語', 
               'jpGreetingWord' => 'ありがとう', 
             ],


             [ 'language' => '世界の挨拶',            
               'question' => 'イタリア語で「良い一日を」は？',
               'answer' => 'ブオナ ジョルナータ', 
               'choice1' => 'ブオナ ジョルナータ', 
               'choice2' => 'アイネン シューネンターク', 
               'choice3' => 'ボンジョルネ', 
               'choice4' => 'ケテンガ ブエンディーア', 
               'pathPronunciation' => '', 
               'pathBackground' => '../image/picture_italy/venice.jpg', 
               'subLanguage' => 'イタリア語', 
               'jpGreetingWord' => '良い一日を', 
             ],
             [ 'language' => '世界の挨拶',            
             'question' => 'スペイン語で「こんにちは」は？',
             'answer' => 'オラ or ブエナス タルデス', 
             'choice1' => 'ボンジュール', 
             'choice2' => 'チャオ', 
             'choice3' => 'グーテンターク', 
             'choice4' => 'オラ or ブエナス タルデス', 
             'pathPronunciation' => '', 
             'pathBackground' => '../image/picture_spain/furamenko.jpg', 
             'subLanguage' => 'スペイン語', 
             'jpGreetingWord' => 'こんにちは', 
           ],
           [ 'language' => '世界の挨拶',            
             'question' => 'スペイン語で「ありがとう」は？',
             'answer' => 'グラシアス', 
             'choice1' => 'グラシアス', 
             'choice2' => 'ダンケシェン', 
             'choice3' => 'チャオ', 
             'choice4' => 'グラッツェ', 
             'pathPronunciation' => '', 
             'pathBackground' => '../image/picture_spain/Sagrada_Familia.jpg', 
             'subLanguage' => 'スペイン語', 
             'jpGreetingWord' => 'ありがとう', 
           ],


           [ 'language' => '世界の挨拶',            
             'question' => 'スペイン語で「良い一日を」は？',
             'answer' => 'ケテンガ ブエンディーア', 
             'choice1' => 'ブオナ ジョルナータ', 
             'choice2' => 'アイネン シューネンターク', 
             'choice3' => 'ボンジョルネ', 
             'choice4' => 'ケテンガ ブエンディーア', 
             'pathPronunciation' => '', 
             'pathBackground' => '../image/picture_spain/tougyu.webp', 
             'subLanguage' => 'スペイン語', 
             'jpGreetingWord' => '良い一日を', 
           ],
           [ 'language' => '世界の挨拶',            
           'question' => 'フランス語で「こんにちは」は？',
           'answer' => 'ボンジュール', 
           'choice1' => 'ボンジョルネ', 
           'choice2' => 'チャオ', 
           'choice3' => 'グーテンターク', 
           'choice4' => 'ボンジュール', 
           'pathPronunciation' => '', 
           'pathBackground' => '../image/picture_france/Eiffel_Tower.jpg', 
           'subLanguage' => 'フランス語', 
           'jpGreetingWord' => 'こんにちは', 
         ],
         [ 'language' => '世界の挨拶',            
           'question' => 'フランス語で「ありがとう」は？',
           'answer' => 'メルシー', 
           'choice1' => 'グラシアス', 
           'choice2' => 'メルシー', 
           'choice3' => 'チャオ', 
           'choice4' => 'グラッツェ', 
           'pathPronunciation' => '', 
           'pathBackground' => '../image/picture_france/gaisenmon.jpg', 
           'subLanguage' => 'フランス語', 
           'jpGreetingWord' => 'ありがとう', 
         ],


         [ 'language' => '世界の挨拶',            
           'question' => 'フランス語で「良い一日を」は？',
           'answer' => 'ボンジョルネ', 
           'choice1' => 'ブオナ ジョルナータ', 
           'choice2' => 'アイネン シューネンターク', 
           'choice3' => 'ボンジョルネ', 
           'choice4' => 'コマンタレヴー', 
           'pathPronunciation' => '', 
           'pathBackground' => '../image/picture_france/Mont-Saint-Michel.jpg', 
           'subLanguage' => 'フランス語', 
           'jpGreetingWord' => '良い一日を', 
         ],

         [ 'language' => '世界の挨拶',            
           'question' => 'ドイツ語で「こんにちは」は？',
           'answer' => 'グーテンターク', 
           'choice1' => 'ボンジョルネ', 
           'choice2' => 'チャオ', 
           'choice3' => 'グーテンターク', 
           'choice4' => 'ボンジュール', 
           'pathPronunciation' => '', 
           'pathBackground' => '../image/picture_germany/Dresden.jpg', 
           'subLanguage' => 'ドイツ語', 
           'jpGreetingWord' => 'こんにちは', 
         ],
         [ 'language' => '世界の挨拶',            
           'question' => 'ドイツ語で「ありがとう」は？',
           'answer' => 'ダンケシェン', 
           'choice1' => 'グラシアス', 
           'choice2' => 'メルシー', 
           'choice3' => 'ダンケシェン', 
           'choice4' => 'グラッツェ', 
           'pathPronunciation' => '', 
           'pathBackground' => '../image/picture_germany/Heidelberg_castle.jpg', 
           'subLanguage' => 'ドイツ語', 
           'jpGreetingWord' => 'ありがとう', 
         ],


         [ 'language' => '世界の挨拶',            
           'question' => 'ドイツ語で「良い一日を」は？',
           'answer' => 'アイネン シューネンターク', 
           'choice1' => 'ブオナ ジョルナータ', 
           'choice2' => 'アイネン シューネンターク', 
           'choice3' => 'ボンジョルネ', 
           'choice4' => 'コマンタレヴー', 
           'pathPronunciation' => '', 
           'pathBackground' => '../image/picture_germany/Rothenburg.jpeg', 
           'subLanguage' => 'ドイツ語', 
           'jpGreetingWord' => '良い一日を', 
         ],
        

        ]);
            
        
    }
}
