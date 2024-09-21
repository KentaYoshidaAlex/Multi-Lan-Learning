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
}

// 他の変数代入
$allQuizMusicData = session('allQuizMusicData');
$judgeNum = session('judgeNum');
$player = session('player');

// var_dump($allQuizMusicData);

// $tgrbtn初期化
$tgrbtn = null;

// sessionに保存があれば、変数に代入
if ((session('doneQuizList')) !== null) {
    $doneQuizList = session('doneQuizList');
}

if ((session('doneAnswer')) !== null) { 
    $doneAnswer = session('doneAnswer');
    $donePronunciation = session('donePronunciation');
    $doneBackground = session('doneBackground');
    $tgrbtn = session('tgrbtn');
}

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

</head>

<body>
@php @endphp
@if(!empty($selectedQuiz->pathBackground)) 
        {{-- <div id="study" class="big-bg" style="background-image: url({{ $selectedQuiz->pathBackground }} ">  --}}
        {{-- <div id="study" class="big-bg" style="background-image: url({{ $selectedQuiz->pathBackground }})">  --}}
        <div id="study" class="big-bg" style="background-image: url(../image/myanmar/dotonbori.jpg)"> 
@else
        <div id="study" class="big-bg" style="background-image: url({{ $doneBackground }})"> 
@endif

<header>
    <div class="header">
        <h1>多言語学習アプリ♫ 学習ページ</h1>
    </div>
</header>
<div class="main-wrapper">
    <div class="container">

        <!-- 初回ｱｸｾｽ時、正解時、不正解時を判定するif文（ページ上部に表示する文言） -->
        @if($judgeNum === 0) ようこそ！ @endif
        @if($judgeNum === 1) 
            正解です！

            @if(!empty($donePronunciation))  
                <br>今、正解した「{{ $doneAnswer }} 」の発音を確認したい方はコチラ↓<br>
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
        @endif

        @if($judgeNum === 2) 残念、不正解です！ @endif 
        
<!-- ******************************************************************************************* -->

        <!-- クイズパートメイン部分 -->
        {{ $player->loginId_userName }} さん　　（残り❤️@php echo (3 - $missCount) @endphp）
        <br>
        現在のクリア数は{{ $player->clearCount }} 問です。
        <br>

<!-- ******************************************************************************************* -->
    {{-- 3問以上クリア時の画面表示 --}}
    @if($clearCount >= 3 &&  $missCount == 0)
        @if($selectedQuiz !== '')
            @include('quizMain/afterClear',[
                'question' => $question,
                'choice1' => $choice1,
                'choice2' => $choice2,
                'choice3' => $choice3,
                'choice4' => $choice4,
                'language' => $language,
                'no' => $no,
                'tgrbtn' => $tgrbtn,
                'reLoginId' => $reLoginId,
                'reLoginPass' => $reLoginPass
            ])
        @else
            @include('quizMain/afterClear',[
                'tgrbtn' => $tgrbtn,
                'reLoginId' => $reLoginId,
                'reLoginPass' => $reLoginPass
            ])
        @endif

    {{-- 3問連続不正解時の画面表示 --}}
    @elseif($missCount >= 3 )
        @include('quizMain/gameOver',[
            'tgrbtn' => $tgrbtn,
            'reLoginId' => $reLoginId,
            'loginPass' => $reLoginPass
        ])
    {{-- 通常時の画面表示 --}}
    @else
        @include('quizMain/beforeClear',[
            'question' => $question,
            'choice1' => $choice1,
            'choice2' => $choice2,
            'choice3' => $choice3,
            'choice4' => $choice4,
            'language' => $language,
            'no' => $no,
            'tgrbtn' => $tgrbtn,
            'reLoginId' => $reLoginId,
            'loginPass' => $reLoginPass
        ])
    @endif