<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記

class QKansaibenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //テーブルのクリア
        DB::table('qKansaiben')->truncate();

        //初期データ用意(列名をキーとする連想配列)
        DB::table('qKansaiben')->insert([


            [ 'language' => '関西弁',            
            'question' => '関西弁で「ありがとう」は？',
            'answer' => 'おおきに', 
            'choice1' => 'おおきに', 
            'choice2' => 'まいど', 
            'choice3' => 'かんにん', 
            'choice4' => 'あかん', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_osaka/dotonbori.jpg', 
            'subLanguage' => '', 
            'jpGreetingWord' => '', 
        ],
        [ 'language' => '関西弁',            
        'question' => '関西弁で「本当」は？',
        'answer' => 'ほんま', 
        'choice1' => 'おおきに', 
        'choice2' => 'まいど', 
        'choice3' => 'ほな', 
        'choice4' => 'ほんま', 
        'pathPronunciation' => '', 
        'pathBackground' => '../image/picture_osaka/tsutenkaku.jpg', 
        'subLanguage' => '', 
        'jpGreetingWord' => '', 
        ],
        [ 'language' => '関西弁',            
            'question' => '関西弁で「じゃあ」は？',
            'answer' => 'ほな', 
            'choice1' => 'おおきに', 
            'choice2' => 'まいど', 
            'choice3' => 'かんにん', 
            'choice4' => 'ほな', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_kyoto/nijozaka.jpg', 
            'subLanguage' => '', 
            'jpGreetingWord' => '', 
        ],
        [ 'language' => '関西弁',            
            'question' => '関西弁で「捨てる」は？',
            'answer' => 'ほかす', 
            'choice1' => 'いらう', 
            'choice2' => 'いちびる', 
            'choice3' => 'なげる', 
            'choice4' => 'ほかす', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_kyoto/kiyomizudera.jpg', 
            'subLanguage' => '', 
            'jpGreetingWord' => '', 
        ],
        [ 'language' => '関西弁',            
            'question' => '関西弁で「ダメ」は？',
            'answer' => 'あかん', 
            'choice1' => 'あいそ', 
            'choice2' => 'いてまう', 
            'choice3' => 'かんにん', 
            'choice4' => 'あかん', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_osaka/namba_yasaka_shrine.jpg', 
            'subLanguage' => '', 
            'jpGreetingWord' => '', 
        ],
        [ 'language' => '関西弁',            
            'question' => '関西弁で「痛い目にあわせる」は？',
            'answer' => 'いてまう', 
            'choice1' => 'あんじょう', 
            'choice2' => 'いてまう', 
            'choice3' => 'いちびり', 
            'choice4' => 'あかん', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_hyogo/kobe_bay_area.jpg', 
            'subLanguage' => '', 
            'jpGreetingWord' => '', 
        ],
        [ 'language' => '関西弁',            
            'question' => '関西弁で「触る」は？',
            'answer' => 'いらう', 
            'choice1' => 'ほかす', 
            'choice2' => 'いてまう', 
            'choice3' => 'いわす', 
            'choice4' => 'いらう', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_hyogo/chinese_town.jpg', 
            'subLanguage' => '', 
            'jpGreetingWord' => '', 
        ],

        [ 'language' => '関西弁',            
            'question' => '関西弁で「許して」は？',
            'answer' => 'かんにん', 
            'choice1' => 'あて', 
            'choice2' => 'いてまう', 
            'choice3' => 'かんにん', 
            'choice4' => 'かなんわ', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_kyoto/nijozaka.jpg', 
            'subLanguage' => '', 
            'jpGreetingWord' => '', 
        ],
        [ 'language' => '関西弁',            
            'question' => '関西弁で「短気」は？',
            'answer' => 'いらち', 
            'choice1' => 'あんじょう', 
            'choice2' => 'ほかす', 
            'choice3' => 'いちびり', 
            'choice4' => 'いらち', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_osaka/tsutenkaku.jpg', 
            'subLanguage' => '', 
            'jpGreetingWord' => '', 
        ],
        [ 'language' => '関西弁',            
            'question' => '関西弁で「たくさん」は？',
            'answer' => 'ようけ or ぎょうさん', 
            'choice1' => 'ぬくい', 
            'choice2' => 'ようけ or ぎょうさん', 
            'choice3' => 'けったい', 
            'choice4' => 'ごっつ', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_osaka/dotonbori.jpg', 
            'subLanguage' => '', 
            'jpGreetingWord' => '', 
        ],

        [ 'language' => '関西弁',            
            'question' => '関西弁で「くすぐったい」は？',
            'answer' => 'こしょばい or こそばい', 
            'choice1' => 'あいそ', 
            'choice2' => 'けったい', 
            'choice3' => 'こすい', 
            'choice4' => 'こしょばい or こそばい', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_kyoto/nijozaka.jpg', 
            'subLanguage' => '', 
            'jpGreetingWord' => '', 
        ],
        [ 'language' => '関西弁',            
            'question' => '関西弁で「ふざける」は？',
            'answer' => 'ちょける', 
            'choice1' => 'あんじょう', 
            'choice2' => 'ずっこい', 
            'choice3' => 'いちびり', 
            'choice4' => 'ちょける', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_kyoto/kiyomizudera.jpg', 
            'subLanguage' => '', 
            'jpGreetingWord' => '', 
        ],
        [ 'language' => '関西弁',            
            'question' => '関西弁で「意地悪」は？',
            'answer' => 'いけず', 
            'choice1' => 'いけず', 
            'choice2' => 'いちびり', 
            'choice3' => 'いきってる', 
            'choice4' => 'いらう', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_kyoto/nijozaka.jpg', 
            'subLanguage' => '', 
            'jpGreetingWord' => '', 
        ],

        [ 'language' => '関西弁',            
            'question' => '関西弁で「上手く」は？',
            'answer' => 'あんじょう', 
            'choice1' => 'まいど', 
            'choice2' => 'ちょける', 
            'choice3' => 'したって', 
            'choice4' => 'あんじょう', 
            'pathPronunciation' => '', 
            'pathBackground' => '../image/picture_hyogo/kobe_bay_area.jpg', 
            'subLanguage' => '', 
            'jpGreetingWord' => '', 
        ],

        [ 'language' => '関西弁',            
        'question' => '関西弁で「温かい」は？',
        'answer' => 'ぬくい', 
        'choice1' => 'ねくい', 
        'choice2' => 'ぬくい', 
        'choice3' => 'うくい', 
        'choice4' => 'るくい', 
        'pathPronunciation' => '', 
        'pathBackground' => '../image/picture_hyogo/chinese_town.jpg', 
        'subLanguage' => '', 
        'jpGreetingWord' => '', 
        ],
        
    ]);



        
    }
}
