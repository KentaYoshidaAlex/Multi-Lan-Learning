@php

use Illuminate\Support\Str;

// sessionに保存していたものを変数に代入
$amountOfQuenstions = session('amountOfQuenstions');
$allQuizMusicData = session('allQuizMusicData');
$player = session('player');
$quizData = session('quizData');
$language = session('language');

// dd($quizData);

$helloInOtherLan = '';
$helloPronunciation = '';
$thankyouInOtherLan = '';
$thankyouPronunciation = '';
$haveANiceDayInOtherLan = '';
$haveANiceDayPronunciation = '';

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
                            <p>&nbsp;ようこそ！</p>
                            <p>&nbsp;{{ $player->loginId_userName }}さん</p>
                        </div>
                        <div class="child2">
                            <br>
                            <form action="{{ route('loginInput') }}" method="post">
                                @csrf
                                &emsp;<input type="submit" value="言語選択画面に戻る" class="btn-switch" />&emsp;
                                <input type="hidden" name="loginId_userName" value= '{{ $reLoginId }}' >
                                <input type="hidden" name="loginPass" value= '{{ $reLoginPass }}' >
                                <input type="hidden" name="bttn" value= 'ログイン' >
                            </form>
                        </div>
                    </div>

                    <div class="parent">
                        <div class="child1">
                            <p>&nbsp;<事前学習></p>
                            @if ($language === 'qMyanmar')
                                <img src="../image/Flags/Myanmar.svg" alt="picture" width="100" height="50"><br>
                                    ミャンマー語 / 日本語
                            @elseif ($language === 'qTagalog')
                                <img src="../image/Flags/Philippines.svg" alt="picture" width="100" height="50"><br>
                                    タガログ語 / 日本語
                            @elseif ($language === 'qKansaiben')
                                &nbsp;関西弁 / 標準語
                            @elseif ($language === 'qWorldGreetings')
                                &nbsp;世界の挨拶
                            @elseif ($language === 'qSpanish')
                                <img src="../image/Flags/Spain.svg" alt="picture" width="100" height="50"><br>
                                    スペイン語 / 日本語
                            @elseif ($language === 'qFrench')
                                <img src="../image/Flags/France.svg" alt="picture" width="100" height="50"><br>
                                    フランス語 / 日本語
                            @endif
                        </div>
                        <div class="child2">
                            <br>
                            <form action="{{ route('index') }}" method="get">
                                &emsp;<input type="submit" value="ログアウト"  class="btn-switch" />&emsp;
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
                        <table class="table">

                        @if ($language === 'qWorldGreetings')
                            <tr>
                                <th>日本語</th><th>こんにちは</th><th>ありがとう</th><th>良い一日を</th>
                            </tr>
                            
                            @foreach ($quizData as $quizDatum)
                                @php
                                    $newNo++;
                                    
                                    if ($quizDatum->jpGreetingWord === 'こんにちは') {
                                        $helloInOtherLan = $quizDatum->answer;
                                        $helloPronunciation = $quizDatum->pathPronunciation;
                                    }
                                    if ($quizDatum->jpGreetingWord === 'ありがとう') {
                                        $thankyouInOtherLan = $quizDatum->answer;
                                        $thankyouPronunciation = $quizDatum->pathPronunciation;
                                    }
                                    if ($quizDatum->jpGreetingWord === '良い一日を') {
                                        $haveANiceDayInOtherLan = $quizDatum->answer;
                                        $haveANiceDayPronunciation = $quizDatum->pathPronunciation;
                                    }

                                @endphp
                                @if (($newNo % 3) === 0)
                                        <tr>
                                                @if ($quizDatum->subLanguage === '英語') 
                                                    <td><img src="../image/Flags/America.svg" alt="picture" class="EnCountries">
                                                            <img src="../image/Flags/England.svg" alt="picture" class="EnCountries">
                                                            <img src="../image/Flags/Australia.svg" alt="picture" class="EnCountries">
                                                @else
                                                    <td><img src="{!! $quizDatum->flag !!}" alt="picture" class="Countries">
                                                @endif
                                                    <br>
                                                    {!! $quizDatum->subLanguage !!}</td>
                                                    <td>{!! $helloInOtherLan !!}
                                                        <br>
                                                        @if (!empty($helloPronunciation))
                                                            <audio class="pronunWidth"  src="{!! $helloPronunciation !!}" controls></audio>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {!! $thankyouInOtherLan !!}
                                                        <br>
                                                        @if (!empty($helloPronunciation))
                                                            <audio class="pronunWidth"  src="{!! $thankyouPronunciation !!}" controls></audio>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {!! $haveANiceDayInOtherLan !!}
                                                        <br>
                                                        @if (!empty($helloPronunciation))
                                                            <audio class="pronunWidth"  src="{!! $haveANiceDayPronunciation !!}" controls></audio>
                                                        @endif
                                                    </td>

                                         </tr>
                                @endif
                            @endforeach

                        {{-- 世界の挨拶以外の表示 --}}
                        @else
                            @foreach ($quizData as $quizDatum)
                                
                                @php
                                $newNo++;
                                @endphp
                                {{ $newNo }}. {!! $quizDatum->answer !!} / 
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