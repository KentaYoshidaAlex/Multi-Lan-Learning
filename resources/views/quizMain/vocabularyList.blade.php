@php

use Illuminate\Support\Str;

// sessionに保存していたものを変数に代入
$amountOfQuenstions = session('amountOfQuenstions');
$allQuizMusicData = session('allQuizMusicData');
$player = session('player');
$quizData = session('quizData');
$language = session('language');

$helloInOtherLan = '';
$thankyouInOtherLan = '';
$haveANiceDayInOtherLan = '';

@endphp

<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>事前学習ページ</title>

    @if(app('env')=='local')
    <link rel="stylesheet" href={{ asset('/css/style.css') }} >
    @endif
    @if(app('env')=='production')
    <link rel="stylesheet" href={{ secure_asset('/css/style.css') }} >
    @endif
    <style>
        

    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Murecho:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Sacramento&display=swap" rel="stylesheet">
  
</head>
<body class="vocabularyList">
    <header>
        <div class="header">
            <h1>&emsp;Hello World!!</h1>
        </div>
    </header>

    @if ($language === 'qWorldGreetings')
        <div class="main-wrapper-world-greet">
            <div class="container-world-greet">
    @else 
        <div class="main-wrapper-others">
            <div class="container-others">
    @endif
                <div id="KleeOne400">
                    <div class="parent">
                        <div class="child1">
                            <p>&emsp;ようこそ！</p>
                            <p>&emsp;{{ $player->loginId_userName }}さん</p>
                        </div>
                        <div class="child2">
                            <br>
                            <form action="{{ route('loginInput') }}" method="post">
                                @csrf
                                <input type="submit" value="言語選択画面に戻る" class="btn-switch" />&emsp;&emsp;
                                <input type="hidden" name="loginId_userName" value= '{{ $reLoginId }}' >
                                <input type="hidden" name="loginPass" value= '{{ $reLoginPass }}' >
                                <input type="hidden" name="bttn" value= 'ログイン' >
                            </form>
                        </div>
                    </div>

                    <div class="parent">
                        <div class="child1">
                            <p>&emsp;<事前学習></p>
                            @if ($language === 'qMyanmar')
                                <p>&emsp;ミャンマー語 / 日本語</p>
                            @elseif ($language === 'qTagalog')
                                <p>&emsp;タガログ語 / 日本語</p>
                            @elseif ($language === 'qKansaiben')
                                <p>&emsp;関西弁 / 標準語</p>
                            @elseif ($language === 'qWorldGreetings')
                                <p>&emsp;世界の挨拶</p>
                            @elseif ($language === 'qSpanish')
                                <p>&emsp;スペイン語 / 日本語</p>
                            @elseif ($language === 'qFrench')
                                <p>&emsp;フランス語 / 日本語</p>
                            @endif
                        </div>
                        <div class="child2">
                            <br>
                            <form action="{{ route('index') }}" method="get">
                                <input type="submit" value="ログアウト"  class="btn-switch" />&emsp;&emsp;
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="vocabulary"> 

                        {{-- 言語毎の行表示番号 初期化 --}}
                        @php 
                            $newNo = 0;
                        @endphp

                        {{-- 世界の挨拶を選択した場合の表示 --}}
                        <table>
                        @if ($language === 'qWorldGreetings')
                            <tr>
                                <th>日本語</th><th>こんにちは</th><th>ありがとう</th><th>良い一日を</th>
                            </tr>
                            
                            @foreach ($quizData as $quizDatum)
                                @php
                                    $newNo++;
                                    if ($quizDatum->jpGreetingWord === 'こんにちは') {
                                        $helloInOtherLan = $quizDatum->answer;
                                    }
                                    if ($quizDatum->jpGreetingWord === 'ありがとう') {
                                        $thankyouInOtherLan = $quizDatum->answer;
                                    }
                                    if ($quizDatum->jpGreetingWord === '良い一日を') {
                                        $haveANiceDayInOtherLan = $quizDatum->answer;
                                    }

                                @endphp
                                @if (($newNo % 3) === 0)
                                        <tr>
                                            <td>{{ $quizDatum->subLanguage }}</td><td>{{ $helloInOtherLan }}</td><td>{{ $thankyouInOtherLan }}</td><td>{{ $haveANiceDayInOtherLan }}</td>
                                        </tr>
                                @endif
                            @endforeach

                        {{-- 世界の挨拶以外の表示 --}}
                        @else
                            @foreach ($quizData as $quizDatum)
                                &emsp;
                                @php
                                $newNo++;
                                @endphp
                                {{ $newNo }}. {{ $quizDatum->answer }} / 
                                @php 
                                    $string = Str::swap([
                                        $quizDatum->language => '',
                                        'で「' => '',
                                        '」は？' => '',
                                        ], $quizDatum->question);
                                    echo $string;
                                @endphp
                                
                                @if(!empty($quizDatum->pathPronunciation))  
                                    <br><audio src="{{ $quizDatum->pathPronunciation }}" controls></audio><br>
                                @else
                                    <br>
                                @endif
                            @endforeach
                        @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>