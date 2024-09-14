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
            'answer' => 'サラマット', 
            'choice1' => 'インガット', 
            'choice2' => 'テレマカシ', 
            'choice3' => 'サラマット', 
            'choice4' => 'マガンダング ハーポン', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/myanmar/danceByEveryone.jpg', 
            'subLanguage' => 'タガログ語', 
            'jpGreetingWord' => 'こんにちは', 
          ],
        

        ]);
            
        
    }
}
