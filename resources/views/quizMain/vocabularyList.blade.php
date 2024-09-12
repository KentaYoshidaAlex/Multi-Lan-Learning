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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>事前学習ページ</title>

    @if(app('env')=='local')
    <link rel="stylesheet" href={{ asset('/css/style.css') }} >
    @endif
    @if(app('env')=='production')
    <link rel="stylesheet" href={{ secure_asset('/css/style.css') }} >
    @endif
    <style>
        .parent {
        display: flex;
        justify-content: space-between;
        }

    </style>
</head>

<body>
    <div id="study" class="big-bg" style="background-image: url(../image/vocabraryList.jpeg)" > 

        <header>
            <div class="header">
                <h1>多言語学習アプリ♫ 事前学習ページ</h1>
            </div>
        </header>
        @if ($quizData[0]->language === '世界の挨拶')
            <div class="main-wrapper-world-greet">
                <div class="container-world-greet">
        @else 
            <div class="main-wrapper">
                <div class="container">
        @endif
                <p>ようこそ！</p>
                <p>{{ $player->loginId_userName }}さん</p>

                <div class="parent">
                    <div class="child1">
                        <p><事前学習></p>
                        @if ($quizData[0]->language === '関西弁')
                            <p>関西弁 / 標準語</p>
                        @elseif ($quizData[0]->language === '世界の挨拶')
                            <p>世界の挨拶</p>
                        @else
                            <p>{{ $language }} / 日本語</p>
                        @endif
                    </div>
                    <div class="child2">
                        <form action="{{ route('loginInput') }}" method="post">
                            @csrf
                            <input type="submit" value="言語選択画面に戻る" />
                            <input type="hidden" name="loginId_userName" value= '{{ $reLoginId }}' >
                            <input type="hidden" name="loginPass" value= '{{ $reLoginPass }}' >
                            <input type="hidden" name="bttn" value= 'ログイン' >
                        </form>
                        <form action="{{ route('index') }}" method="get">
                            <input type="submit" value="ログアウト" />
                        </form>
                    </div>
                    <br>
                </div>
                <br>
                <div class="vocabulary"> 

                    {{-- 言語毎の行表示番号 初期化 --}}
                    @php 
                        $newNo = 0;
                    @endphp

                    {{-- 世界の挨拶を選択した場合の表示 --}}
                    @if ($quizData[0]->language === '世界の挨拶')
                        <table>
                            <tr>
                                <th>日本語</th><th>こんにちは</th><th>ありがとう</th><th>良い一日を</th>
                            </tr>
                        </table>
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
                                <table>
                                    <tr>
                                        <td>{{ $quizDatum->subLanguage }}</td><td>{{ $helloInOtherLan }}</td><td>{{ $thankyouInOtherLan }}</td><td>{{ $haveANiceDayInOtherLan }}</td>
                                    </tr>
                                </table>
                            @endif
                        @endforeach

                    {{-- 世界の挨拶以外の表示 --}}
                    @else
                        @foreach ($quizData as $quizDatum)
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
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>