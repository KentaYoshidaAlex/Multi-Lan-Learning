@php

// sessionに保存していたものを変数に代入
$currentQuizAmount = session('currentQuizAmount');
$amountOfQuenstions = session('amountOfQuenstions');
$selectedQuiz = session('selectedQuiz');
$question = $selectedQuiz->question;
$choice1 = $selectedQuiz->choice1;
$choice2 = $selectedQuiz->choice2;
$choice3 = $selectedQuiz->choice3;
$choice4 = $selectedQuiz->choice4;
$language = $selectedQuiz->language;
$no = $selectedQuiz->no;

$allQuizMusicData = session('allQuizMusicData');
$judgeNum = session('judgeNum');
$player = session('player');

// sessionに保存があれば、変数に代入
if (null !== (session('doneQuizList'))) {
    $doneQuizList = session('doneQuizList');
}

if (null !== (session('doneAnswer'))) { 
    $doneAnswer = session('doneAnswer');
    $donePronunciation = session('donePronunciation');
    $doneBackground = session('doneBackground');
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

@if(!empty($selectedQuiz->pathBackground)) 
        <div id="study" class="big-bg" style="background-image: url({{ $selectedQuiz->pathBackground }} "> 
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
                <br>↓今、正解した「{{ $doneAnswer }} >」の発音を確認したい方はコチラ↓<br>
                <br>
                @if($tgrbtn === "1") 
                    <audio src="{{ $donePronunciation }}" muted controls></audio>
                @else
                    <audio src="{{ $donePronunciation }}" controls></audio>
                @endif
            @endif
        @endif

        @if($judgeNum === 2) ?>残念、不正解です！ @endif 
        <br> 
        <!-- ******************************************************************************************* -->

        <!-- クイズパートメイン部分 -->
        <p>{{ $player->loginId_userName }}さん。現在のクリア数は{{ $player->clearCount }} 問です。</p>

<!-- ******************************************************************************************* -->
