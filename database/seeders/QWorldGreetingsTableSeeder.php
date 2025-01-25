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

          [ 
            'language' => '世界の挨拶',            
            'question' => '英語で「こんにちは」は？',
            'answer' => 'Hello', 
            'choice1' => 'See you', 
            'choice2' => 'Good luck', 
            'choice3' => 'Thank you', 
            'choice4' => 'Hello', 
            'pathPronunciation' => '../sound/english_word_pronunciation/hello.mp3', 
            'pathBackground' => '../image/picture_english/Ayers_Rock.jpeg', 
            'subLanguage' => '英語', 
            'jpGreetingWord' => 'こんにちは', 
            'flag' => '',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => '英語で「ありがとう」は？',
            'answer' => 'Thank you', 
            'choice1' => 'See you', 
            'choice2' => 'Good luck', 
            'choice3' => 'Thank you', 
            'choice4' => 'Hello', 
            'pathPronunciation' => '../sound/english_word_pronunciation/thank_you.mp3', 
            'pathBackground' => '../image/picture_english/statueOfLiberty.jpg', 
            'subLanguage' => '英語', 
            'jpGreetingWord' => 'ありがとう', 
            'flag' => '',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => '英語で「良い一日を」は？',
            'answer' => 'Have a nice day', 
            'choice1' => 'See you', 
            'choice2' => 'Aloha', 
            'choice3' => 'Thank you', 
            'choice4' => 'Have a nice day', 
            'pathPronunciation' => '../sound/english_word_pronunciation/have_a_nice_day.mp3', 
            'pathBackground' => '../image/picture_english/harry_potter.jpeg', 
            'subLanguage' => '英語', 
            'jpGreetingWord' => '良い一日を', 
            'flag' => '',
          ],


          [ 
            'language' => '世界の挨拶',            
            'question' => 'タガログ語で「こんにちは」は？',
            'answer' => 'マガンダング アーラウ', 
            'choice1' => 'マガンダング アーラウ', 
            'choice2' => 'サラマットゥ', 
            'choice3' => 'スラマッパタン', 
            'choice4' => 'サワディー'.'<br>'.'&emsp;'.'&nbsp;'.'+ カップ(男)/ カー(女)', 
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Magandang_araw.mp3', 
            'pathBackground' => '../image/picture_philippines/beach.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => 'こんにちは', 
            'flag' => '../image/Flags/Philippines.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'タガログ語で「ありがとう」は？',
            'answer' => 'サラマットゥ', 
            'choice1' => 'サラマットゥ', 
            'choice2' => 'コープン'.'<br>'.'&emsp;'.'&nbsp;'.'+ カップ(男)/ カー(女)', 
            'choice3' => 'ドゥーデェ', 
            'choice4' => 'テレマカシ', 
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/Salamat.mp3', 
            'pathBackground' => '../image/picture_philippines/chocolate_hills.jpeg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => 'ありがとう',
            'flag' => '../image/Flags/Philippines.svg', 
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'タガログ語で「良い一日を」は？',
            'answer' => 'インガット', 
            'choice1' => 'スモガ ハリアンダ'.'<br>'.'&emsp;'.'&nbsp;'.'ムニュナンカン', 
            'choice2' => 'ケテンガ ブエンディーア', 
            'choice3' => 'チョークディーナ'.'<br>'.'&emsp;'.'&nbsp;'.'+ カップ(男)/ カー(女)', 
            'choice4' => 'インガット', 
            'pathPronunciation' => '../sound/tagalog_word_pronunciation/ingat.mp3', 
            'pathBackground' => '../image/picture_philippines/Bohol_Island.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => '良い一日を', 
            'flag' => '../image/Flags/Philippines.svg',
          ],


          [ 
            'language' => '世界の挨拶',            
            'question' => 'ミャンマー語で「こんにちは」は？',
            'answer' => 'ミンガラーバー', 
            'choice1' => 'スモガ ハリアンダ'.'<br>'.'&emsp;'.'&nbsp;'.'ムニュナンカン', 
            'choice2' => 'スラマッシアン', 
            'choice3' => 'チーズーべ', 
            'choice4' => 'ミンガラーバー', 
            'pathPronunciation' => '../sound/myanmar_word_pronunciation/hello.m4a', 
            'pathBackground' => '../image/picture_myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'ミャンマー語', 
            'jpGreetingWord' => 'こんにちは', 
            'flag' => '../image/Flags/Myanmar.svg',
          ],
          [
            'language' => '世界の挨拶',            
            'question' => 'ミャンマー語で「ありがとう」は？',
            'answer' => 'ティーズーべ', 
            'choice1' => 'スモガ ハリアンダ'.'<br>'.'&emsp;'.'&nbsp;'.'ムニュナンカン', 
            'choice2' => 'スラマッシアン', 
            'choice3' => 'ティーズーべ', 
            'choice4' => 'ミンガラーバー', 
            'pathPronunciation' => '../sound/myanmar_word_pronunciation/thank_you.m4a', 
            'pathBackground' => '../image/picture_myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'ミャンマー語', 
            'jpGreetingWord' => 'ありがとう', 
            'flag' => '../image/Flags/Myanmar.svg',

          ],
          [
            'language' => '世界の挨拶',            
            'question' => 'ミャンマー語で「良い一日を」は？',
            'answer' => 'カントン ネィ レイ ピ パスィ', 
            'choice1' => 'スモガ ハリアンダ'.'<br>'.'&emsp;'.'&nbsp;'.'ムニュナンカン', 
            'choice2' => 'インガット カ パラギ', 
            'choice3' => 'カントン ネィ レイ ピ パスィ', 
            'choice4' => 'テレマカシ', 
            'pathPronunciation' => '../sound/myanmar_word_pronunciation/have_a_nice_day.m4a', 
            'pathBackground' => '../image/picture_myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'ミャンマー語', 
            'jpGreetingWord' => '良い一日を', 
            'flag' => '../image/Flags/Myanmar.svg',
          ],


          [
            'language' => '世界の挨拶',            
            'question' => 'セルビア語で「こんにちは」は？',
            'answer' => 'ズドラーヴォ', 
            'choice1' => 'フヴァーラ', 
            'choice2' => 'ヤースー', 
            'choice3' => 'ズドラーヴォ', 
            'choice4' => 'ジヴェリー', 
            'pathPronunciation' => '../sound/serbian_word_pronunciation/hello_in_serbia.mp3', 
            'pathBackground' => '../image/vocabraryList22.jpeg', 
            'subLanguage' => 'セルビア語', 
            'jpGreetingWord' => 'こんにちは', 
            'flag' => '../image/Flags/Serbia.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'セルビア語で「ありがとう」は？',
            'answer' => 'フヴァーラ', 
            'choice1' => 'ドバルダン', 
            'choice2' => 'カーコスィ', 
            'choice3' => 'ズドラーヴォ', 
            'choice4' => 'フヴァーラ', 
            'pathPronunciation' => '../sound/serbian_word_pronunciation/thank_you_in_serbia.mp3', 
            'pathBackground' => '../image/vocabraryList22.jpeg', 
            'subLanguage' => 'セルビア語', 
            'jpGreetingWord' => 'ありがとう', 
            'flag' => '../image/Flags/Serbia.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'セルビア語で「良い一日を」は？',
            'answer' => 'ジャリンム ティ'.'<br>'.'&emsp;'.'&nbsp;'.'プリヤタンダン', 
            'choice1' => 'ケテンガス ウン'.'<br>'.'&emsp;'.'&nbsp;'.'ブエンディーア', 
            'choice2' => 'アイネンシューネンターク', 
            'choice3' => 'ジョルナ ブオナータ', 
            'choice4' => 'ジャリンム ティ'.'<br>'.'&emsp;'.'&nbsp;'.'プリヤタンダン', 
            'pathPronunciation' => '../sound/serbian_word_pronunciation/have_a_nice_day_in_serbia.mp3', 
            'pathBackground' => '../image/vocabraryList22.jpeg', 
            'subLanguage' => 'セルビア語', 
            'jpGreetingWord' => '良い一日を', 
            'flag' => '../image/Flags/Serbia.svg',
          ],


          [ 
            'language' => '世界の挨拶',            
            'question' => '中国語で「こんにちは」は？',
            'answer' => 'ニーハオ', 
            'choice1' => 'アンニョンハセヨ', 
            'choice2' => 'ニーハイ', 
            'choice3' => 'ニーハオ', 
            'choice4' => 'シェイシェイ', 
            'pathPronunciation' => '../sound/chinese_word_pronunciation/hello_in_chinese.mp3', 
            'pathBackground' => '../image/picture_china/greatWallOfChina.jpg', 
            'subLanguage' => '中国語', 
            'jpGreetingWord' => 'こんにちは', 
            'flag' => '../image/Flags/China.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => '中国語で「ありがとう」は？',
            'answer' => 'シェイシェイ', 
            'choice1' => 'ニーハオ', 
            'choice2' => 'カムソハムニダ', 
            'choice3' => 'シェイシェイ', 
            'choice4' => 'テレマカシ', 
            'pathPronunciation' => '../sound/chinese_word_pronunciation/thank_you_in_chinese.mp3', 
            'pathBackground' => '../image/picture_china/kyusaikou.jpeg', 
            'subLanguage' => '中国語', 
            'jpGreetingWord' => 'ありがとう', 
            'flag' => '../image/Flags/China.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => '中国語で「良い一日を」は？',
            'answer' => 'ヂュウ ニィ ヨゥ ユゥ'.'<br>'.'&emsp;'.'&nbsp;'.'クワィ ダ イ ティン', 
            'choice1' => 'スモガ ハリアンダ'.'<br>'.'&emsp;'.'&nbsp;'.'ムニュナンカン', 
            'choice2' => 'ドゥーデェ', 
            'choice3' => 'ヂュウ ニィ ヨゥ ユゥ'.'<br>'.'&emsp;'.'&nbsp;'.'クワィ ダ イ ティン', 
            'choice4' => 'ネイホゥ', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_china/pandas.jpg', 
            'subLanguage' => '中国語', 
            'jpGreetingWord' => '良い一日を',
            'flag' => '../image/Flags/China.svg',
          ],


          [ 
            'language' => '世界の挨拶',            
            'question' => '韓国語で「こんにちは」は？',
            'answer' => 'アンニョンハセヨ', 
            'choice1' => 'アンニョンハセヨ', 
            'choice2' => 'チョウン ハル ポネセヨ', 
            'choice3' => 'ニーハオ', 
            'choice4' => 'カムソハムニダ', 
            'pathPronunciation' => '../sound/korean_word_pronunciation/hello_in_korean.mp3', 
            'pathBackground' => '../image/picture_korea/Cheonggye-cheon.webp', 
            'subLanguage' => '韓国語', 
            'jpGreetingWord' => 'こんにちは', 
            'flag' => '../image/Flags/Korea.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => '韓国語で「ありがとう」は？',
            'answer' => 'カムソハムニダ', 
            'choice1' => 'ニーハオ', 
            'choice2' => 'チョウン ハル ポネセヨ', 
            'choice3' => 'アンニョンハセヨ', 
            'choice4' => 'カムソハムニダ', 
            'pathPronunciation' => '../sound/korean_word_pronunciation/thank_you_in_korean.mp3', 
            'pathBackground' => '../image/picture_korea/Gyeongbokgung_Palace.webp', 
            'subLanguage' => '韓国語', 
            'jpGreetingWord' => 'ありがとう', 
            'flag' => '../image/Flags/Korea.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => '韓国語で「良い一日を」は？',
            'answer' => 'チョウン ハル ポネセヨ', 
            'choice1' => 'ネイホゥ', 
            'choice2' => 'インガット カ パラギ', 
            'choice3' => 'ドゥーデェ', 
            'choice4' => 'チョウン ハル ポネセヨ', 
            'pathPronunciation' => '../sound/korean_word_pronunciation/have_a_nice_day_in_korean.mp3', 
            'pathBackground' => '../image/picture_korea/various_kimchi.webp', 
            'subLanguage' => '韓国語', 
            'jpGreetingWord' => '良い一日を', 
            'flag' => '../image/Flags/Korea.svg',
          ],


          [ 
            'language' => '世界の挨拶',            
            'question' => 'タイ語で「こんにちは」は？',
            'answer' => 'サワディー'.'<br>'.'&emsp;'.'&nbsp;'.'+ クラップ(男)/ カー(女)', 
            'choice1' => 'マガンダング ハーポン', 
            'choice2' => 'コープン'.'<br>'.'&emsp;'.'&nbsp;'.'+ クラップ(男)/ カー(女)', 
            'choice3' => 'スラマッパタン', 
            'choice4' => 'サワディー'.'<br>'.'&emsp;'.'&nbsp;'.'+ クラップ(男)/ カー(女)', 
            'pathPronunciation' => '../sound/thailand_word_pronunciation/hello_in_thai_men.mp3', 
            'pathBackground' => '../image/picture_thailand/chiang_mai.jpg', 
            'subLanguage' => 'タイ語', 
            'jpGreetingWord' => 'こんにちは', 
            'flag' => '../image/Flags/Thailand.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'タイ語で「ありがとう」は？',
            'answer' => 'コープン'.'<br>'.'&emsp;'.'&nbsp;'.'+ クラップ(男)/ カー(女)', 
            'choice1' => 'サラマットゥ', 
            'choice2' => 'コープン'.'<br>'.'&emsp;'.'&nbsp;'.'+ クラップ(男)/ カー(女)', 
            'choice3' => 'サワディー'.'<br>'.'&emsp;'.'&nbsp;'.'+ クラップ(男)/ カー(女)', 
            'choice4' => 'テレマカシ', 
            'pathPronunciation' => '../sound/thailand_word_pronunciation/thank_you_in_thai_men.mp3', 
            'pathBackground' => '../image/picture_thailand/Khao_San_Road.jpg', 
            'subLanguage' => 'タイ語', 
            'jpGreetingWord' => 'ありがとう', 
            'flag' => '../image/Flags/Thailand.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'タイ語で「良い一日を」は？',
            'answer' => 'チョークディーナ'.'<br>'.'&emsp;'.'&nbsp;'.'+ クラップ(男)/ カー(女)', 
            'choice1' => 'スモガ ハリアンダ'.'<br>'.'&emsp;'.'&nbsp;'.'ムニュナンカン', 
            'choice2' => 'コープン'.'<br>'.'&emsp;'.'&nbsp;'.'+ クラップ(男)/ カー(女)', 
            'choice3' => 'チョークディーナ'.'<br>'.'&emsp;'.'&nbsp;'.'+ クラップ(男)/ カー(女)', 
            'choice4' => 'サワディー'.'<br>'.'&emsp;'.'&nbsp;'.'+ クラップ(男)/ カー(女)', 
            'pathPronunciation' => '../sound/thailand_word_pronunciation/have_a_nice_day_in_thai.mp3', 
            'pathBackground' => '../image/picture_thailand/Khao_San_Road.jpg', 
            'subLanguage' => 'タイ語', 
            'jpGreetingWord' => '良い一日を', 
            'flag' => '../image/Flags/Thailand.svg',
          ],


          [ 
            'language' => '世界の挨拶',            
            'question' => 'インドネシア語で「こんにちは」は？',
            'answer' => 'スラマッシアン', 
            'choice1' => 'マガンダング ハーポン', 
            'choice2' => 'スラマッシアン', 
            'choice3' => 'スラマッパタン', 
            'choice4' => 'サワディー'.'<br>'.'&emsp;'.'&nbsp;'.'+ カップ(男)/ カー(女)', 
            'pathPronunciation' => '../sound/indonesia_word_pronunciation/Selamat_siang.mp3', 
            'pathBackground' => '../image/picture_indonesia/bali_island.jpg', 
            'subLanguage' => 'インドネシア語', 
            'jpGreetingWord' => 'こんにちは', 
            'flag' => '../image/Flags/Indonesia.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'インドネシア語で「ありがとう」は？',
            'answer' => 'テレマカシ', 
            'choice1' => 'サラマットゥ', 
            'choice2' => 'コープン'.'<br>'.'&emsp;'.'&nbsp;'.'+ カップ(男)/ カー(女)', 
            'choice3' => 'タンキュー', 
            'choice4' => 'テレマカシ', 
            'pathPronunciation' => '../sound/indonesia_word_pronunciation/Terima_kasih.mp3', 
            'pathBackground' => '../image/picture_indonesia/java_island.jpg', 
            'subLanguage' => 'インドネシア語', 
            'jpGreetingWord' => 'ありがとう', 
            'flag' => '../image/Flags/Indonesia.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'インドネシア語で「良い一日を」は？',
            'answer' => 'スモガ ハリアンダ'.'<br>'.'&emsp;'.'&nbsp;'.'ムニュナンカン', 
            'choice1' => 'スモガ ハリアンダ'.'<br>'.'&emsp;'.'&nbsp;'.'ムニュナンカン', 
            'choice2' => 'インガットゥ カ パ ラギ', 
            'choice3' => 'チョークディーナ'.'<br>'.'&emsp;'.'&nbsp;'.'+ カップ(男)/ カー(女)', 
            'choice4' => 'ケテンガ ブエンディーア', 
            'pathPronunciation' => '../sound/indonesia_word_pronunciation/Semoga_hari_Anda_menyenangkan.mp3', 
            'pathBackground' => '../image/picture_indonesia/Taman_Ayun.jpg', 
            'subLanguage' => 'インドネシア語', 
            'jpGreetingWord' => '良い一日を', 
            'flag' => '../image/Flags/Indonesia.svg',
          ],


          [ 
            'language' => '世界の挨拶',            
            'question' => 'イタリア語で「こんにちは」は？',
            'answer' => 'チャオ', 
            'choice1' => 'シンチャオ', 
            'choice2' => 'チャオ', 
            'choice3' => 'オラ', 
            'choice4' => 'ボンジュール', 
            'pathPronunciation' => '../sound/italian_word_pronunciation/Ciao.mp3', 
            'pathBackground' => '../image/picture_italy/Amalfi.jpg', 
            'subLanguage' => 'イタリア語', 
            'jpGreetingWord' => 'こんにちは', 
            'flag' => '../image/Flags/Italy.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'イタリア語で「ありがとう」は？',
            'answer' => 'グラッツェ', 
            'choice1' => 'グラシアス', 
            'choice2' => 'ダンケシェン', 
            'choice3' => 'チャオ', 
            'choice4' => 'グラッツェ', 
            'pathPronunciation' => '../sound/italian_word_pronunciation/Grazie.mp3', 
            'pathBackground' => '../image/picture_italy/Colosseum.jpg', 
            'subLanguage' => 'イタリア語', 
            'jpGreetingWord' => 'ありがとう', 
            'flag' => '../image/Flags/Italy.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'イタリア語で「良い一日を」は？',
            'answer' => 'ブオナ ジョルナータ', 
            'choice1' => 'ブオナ ジョルナータ', 
            'choice2' => 'アイネン シューネンターク', 
            'choice3' => 'ボンジョルネ', 
            'choice4' => 'ケテンガ ブエンディーア', 
            'pathPronunciation' => '../sound/italian_word_pronunciation/Buona_giornata.mp3', 
            'pathBackground' => '../image/picture_italy/venice.jpg', 
            'subLanguage' => 'イタリア語', 
            'jpGreetingWord' => '良い一日を', 
            'flag' => '../image/Flags/Italy.svg',
          ],


          [ 
            'language' => '世界の挨拶',            
            'question' => 'スペイン語で「こんにちは」は？',
            'answer' => 'オラ or ブエナス タルデス', 
            'choice1' => 'ボンジュール', 
            'choice2' => 'チャオ', 
            'choice3' => 'グーテンターク', 
            'choice4' => 'オラ or ブエナス タルデス', 
            'pathPronunciation' => '../sound/spain_word_pronunciation/Hola.mp3', 
            'pathBackground' => '../image/picture_spain/furamenko.jpg', 
            'subLanguage' => 'スペイン語', 
            'jpGreetingWord' => 'こんにちは', 
            'flag' => '../image/Flags/Spain.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'スペイン語で「ありがとう」は？',
            'answer' => 'グラシアス', 
            'choice1' => 'グラシアス', 
            'choice2' => 'ダンケシェン', 
            'choice3' => 'チャオ', 
            'choice4' => 'グラッツェ', 
            'pathPronunciation' => '../sound/spain_word_pronunciation/gracias.mp3', 
            'pathBackground' => '../image/picture_spain/Sagrada_Familia.jpg', 
            'subLanguage' => 'スペイン語', 
            'jpGreetingWord' => 'ありがとう', 
            'flag' => '../image/Flags/Spain.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'スペイン語で「良い一日を」は？',
            'answer' => 'ケテンガス ウン ブエンディーア', 
            'choice1' => 'ブオナ ジョルナータ', 
            'choice2' => 'アイネン シューネンターク', 
            'choice3' => 'ボンジョルネ', 
            'choice4' => 'ケテンガス ウン ブエンディーア', 
            'pathPronunciation' => '../sound/spain_word_pronunciation/Que_tengas_un_buen_dia.mp3', 
            'pathBackground' => '../image/picture_spain/tougyu.jpeg', 
            'subLanguage' => 'スペイン語', 
            'jpGreetingWord' => '良い一日を', 
            'flag' => '../image/Flags/Spain.svg',
          ],


          [ 
            'language' => '世界の挨拶',            
            'question' => 'フランス語で「こんにちは」は？',
            'answer' => 'ボンジュール', 
            'choice1' => 'ボンジョルネ', 
            'choice2' => 'チャオ', 
            'choice3' => 'グーテンターク', 
            'choice4' => 'ボンジュール', 
            'pathPronunciation' => '../sound/french_word_pronunciation/Bonjour.mp3', 
            'pathBackground' => '../image/picture_france/Eiffel_Tower.jpg', 
            'subLanguage' => 'フランス語', 
            'jpGreetingWord' => 'こんにちは', 
            'flag' => '../image/Flags/France.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'フランス語で「ありがとう」は？',
            'answer' => 'メルシー', 
            'choice1' => 'グラシアス', 
            'choice2' => 'メルシー', 
            'choice3' => 'チャオ', 
            'choice4' => 'グラッツェ', 
            'pathPronunciation' => '../sound/french_word_pronunciation/merci.mp3', 
            'pathBackground' => '../image/picture_france/gaisenmon.jpg', 
            'subLanguage' => 'フランス語', 
            'jpGreetingWord' => 'ありがとう', 
            'flag' => '../image/Flags/France.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
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
            'flag' => '../image/Flags/France.svg',
          ],


          [ 
            'language' => '世界の挨拶',            
            'question' => 'ドイツ語で「こんにちは」は？',
            'answer' => 'グーテンターク', 
            'choice1' => 'ボンジョルネ', 
            'choice2' => 'チャオ', 
            'choice3' => 'グーテンターク', 
            'choice4' => 'ボンジュール', 
            'pathPronunciation' => '../sound/german_word_pronunciation/Guten_Tag.mp3', 
            'pathBackground' => '../image/picture_germany/Dresden.jpg', 
            'subLanguage' => 'ドイツ語', 
            'jpGreetingWord' => 'こんにちは', 
            'flag' => '../image/Flags/German.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'ドイツ語で「ありがとう」は？',
            'answer' => 'ダンケシェン', 
            'choice1' => 'グラシアス', 
            'choice2' => 'メルシー', 
            'choice3' => 'ダンケシェン', 
            'choice4' => 'グラッツェ', 
            'pathPronunciation' => '../sound/german_word_pronunciation/Danke_schon.mp3', 
            'pathBackground' => '../image/picture_germany/Dresden.jpg', 
            'subLanguage' => 'ドイツ語', 
            'jpGreetingWord' => 'ありがとう', 
            'flag' => '../image/Flags/German.svg',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'ドイツ語で「良い一日を」は？',
            'answer' => 'アイネン シューネンターク', 
            'choice1' => 'ブオナ ジョルナータ', 
            'choice2' => 'アイネン シューネンターク', 
            'choice3' => 'ボンジョルネ', 
            'choice4' => 'コマンタレヴー', 
            'pathPronunciation' => '../sound/german_word_pronunciation/Einen_schonen_Tag.mp3', 
            'pathBackground' => '../image/picture_germany/Dresden.jpg', 
            'subLanguage' => 'ドイツ語', 
            'jpGreetingWord' => '良い一日を', 
            'flag' => '../image/Flags/German.svg',
          ],


          [ 
            'language' => '世界の挨拶',            
            'question' => 'スワヒリ語で「こんにちは」は？',
            'answer' => 'ハバリ or マンボ', 
            'choice1' => 'ズドラーヴォ', 
            'choice2' => 'チャオ', 
            'choice3' => 'オラ', 
            'choice4' => 'ハバリ or マンボ', 
            'pathPronunciation' => '../sound/african_word_pronunciation/Habari.mp3', 
            'pathBackground' => '../image/vocabraryList22.jpeg', 
            'subLanguage' => 'スワヒリ語', 
            'jpGreetingWord' => 'こんにちは', 
            'flag' => '../image/Flags/Flag_of_the_African_Union.png',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'スワヒリ語で「ありがとう」は？',
            'answer' => 'アサンテ', 
            'choice1' => 'シアサッテ', 
            'choice2' => 'ハバリ', 
            'choice3' => 'オトトイ', 
            'choice4' => 'アサンテ', 
            'pathPronunciation' => '../sound/african_word_pronunciation/asante.mp3', 
            'pathBackground' => '../image/vocabraryList22.jpeg', 
            'subLanguage' => 'スワヒリ語', 
            'jpGreetingWord' => 'ありがとう', 
            'flag' => '../image/Flags/Flag_of_the_African_Union.png',
          ],
          [ 
            'language' => '世界の挨拶',            
            'question' => 'スワヒリ語で「良い一日を」は？',
            'answer' => 'シクンジェマ', 
            'choice1' => 'アサンテ', 
            'choice2' => 'ハクナマタタ', 
            'choice3' => 'マンボ', 
            'choice4' => 'シクンジェマ', 
            'pathPronunciation' => '../sound/african_word_pronunciation/have_a_nice_day_in_swahili.m4a', 
            'pathBackground' => '../image/vocabraryList22.jpeg', 
            'subLanguage' => 'スワヒリ語', 
            'jpGreetingWord' => '良い一日を', 
            'flag' => '../image/Flags/Flag_of_the_African_Union.png',
          ],

          

      ]);   
    }
}
