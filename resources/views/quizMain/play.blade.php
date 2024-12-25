@php

// sessionに保存していたものを変数に代入
$currentQuizAmount = session('currentQuizAmount');
$amountOfQuenstions = session('amountOfQuenstions');
$selectedQuiz = session('selectedQuiz');

// 問題文が残っていれば、変数代入
if(!($selectedQuiz == '')) {
    $question = $selectedQuiz->question;
    $choice1 = $selectedQuiz->choice1;
    $choice2 = $selectedQuiz->choice2;
    $choice3 = $selectedQuiz->choice3;
    $choice4 = $selectedQuiz->choice4;
    $language = $selectedQuiz->language;
    $no = $selectedQuiz->no;
} else {
    $language = session('language');
}

// 他の変数代入
$allQuizMusicData = session('allQuizMusicData');
$judgeNum = session('judgeNum');
$player = session('player');

// $tgrbtn初期化
$tgrbtn = null;

// sessionに保存があれば、変数に代入
if ((session('doneQuizList')) !== null) {
    $doneQuizList = session('doneQuizList');
}

if ((session('doneAnswer')) !== null || $missCount == 1) { 
    $doneAnswer = session('doneAnswer');
    $donePronunciation = session('donePronunciation');
    $doneBackground = session('doneBackground');
    $tgrbtn = session('tgrbtn');
}
// dd($doneQuizList);

@endphp

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>問題回答ページ</title>

    @if(app('env')=='local')
    <link rel="stylesheet" href={{ asset('/css/style.css') }} >
    @endif
    @if(app('env')=='production')
    <link rel="stylesheet" href={{ secure_asset('/css/style.css') }} >
    @endif

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Murecho:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Sacramento&display=swap" rel="stylesheet">

</head>

<header>
    <div class="header">
        <h1>&emsp;Hello World!!</h1>
    </div>
</header>

@if(!empty($selectedQuiz->pathBackground)) 
    <body style="background-image: url({{ $selectedQuiz->pathBackground }})" class="quiz-gamen">
@else
    <body style="background-image: url({{ $doneBackground }})" class="quiz-gamen">
@endif
    
    <div class="main-wrapper">

        {{-- 目標クイズ数正解時、白枠背景を伸ばす --}}
        @if (!(($amountOfQuenstions != $currentQuizAmount) && (!($selectedQuiz == ''))))
            <div class="container-complete">
        {{-- 通常時クイズの白枠背景 --}}
        @else
            <div class="container">
        @endif
                <div id="KleeOne400">
                    <!-- 初回ｱｸｾｽ時、正解時、不正解時を判定するif文（ページ上部に表示する文言） -->
                    @if($judgeNum === 0) ようこそ！ @endif
                    @if($judgeNum === 1) 
                        正解です！

                    @endif

                    @if($judgeNum === 2) 残念、不正解です！<br> @endif 
                
        <!-- ******************************************************************************************* -->

                    <!-- クイズパートメイン部分 -->
                    {{ $player->loginId_userName }} さん&emsp;&emsp;（残り❤️@php echo (3 - $missCount) @endphp）
                    <br>
                    現在のクリア数は{{ $player->clearCount }} 問です。
                    <br>

                    @if(!empty($donePronunciation))  
                    <br>
                    今、正解した「{!! $doneAnswer !!} 」の発音を確認したい方はコチラ↓
                    <br>
                        @if($tgrbtn == "1") 
                            @if(app('env')=='local')
                                <audio src="{{ asset($donePronunciation) }}" controls>サポートされていません</audio>
                            @endif
                            @if(app('env')=='production')
                                <audio src="{{ secure_asset($donePronunciation) }}" controls>サポートされていません</audio>
                            @endif
                        @else
                            @if(app('env')=='local')
                                <audio src="{{ asset($donePronunciation) }}" muted controls>サポートされていません</audio>
                            @endif
                            @if(app('env')=='production')
                                <audio src="{{ secure_asset($donePronunciation) }}" muted controls>サポートされていません</audio>
                            @endif
                        @endif
                    <br>
                    @endif
                </div>

        <!-- ******************************************************************************************* -->
                    {{-- 3問連続不正解時の画面表示 --}}
                    @if($missCount >= 3 )
                        @include('quizMain/gameOver',[
                            'tgrbtn' => $tgrbtn,
                            'reLoginId' => $reLoginId,
                            'loginPass' => $reLoginPass
                        ])

                    {{-- 通常時の画面表示（問題文が残っている場合） --}}
                    @elseif($selectedQuiz !== '')
                        @include('quizMain/quizGamen',[
                            'question' => $question,
                            'choice1' => $choice1,
                            'choice2' => $choice2,
                            'choice3' => $choice3,
                            'choice4' => $choice4,
                            'language' => $language,
                            'no' => $no,
                            'tgrbtn' => $tgrbtn,
                            'reLoginId' => $reLoginId,
                            'reLoginPass' => $reLoginPass,
                            'missCount' => $missCount,
                            'amountOfQuenstions' => $amountOfQuenstions
                        ])
                    {{-- 通常時の画面表示（問題文が残っていない場合） --}}
                    @else
                        @include('quizMain/quizGamen',[
                            'tgrbtn' => $tgrbtn,
                            'reLoginId' => $reLoginId,
                            'reLoginPass' => $reLoginPass,
                            'language' => $language
                        ])
                    @endif
