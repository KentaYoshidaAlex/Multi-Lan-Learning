@php

use Illuminate\Support\Str;

// sessionに保存していたものを変数に代入
$amountOfQuenstions = session('amountOfQuenstions');
$allQuizMusicData = session('allQuizMusicData');
$player = session('player');
$quizData = session('quizData');
$language = session('language');
// var_dump($quizData);
// dd($quizData);
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
        <div class="main-wrapper">
            <div class="container">
                <p>ようこそ！</p>
                <p>{{ $player->userName }}さん</p>

                <div class="parent">
                    <div class="child1">
                        <p><事前学習></p>
                        <p>{{ $language }} / 日本語</p>
                    </div>
                    <div class="child2">
                        <form action="{{ route('loginInput') }}" method="post">
                            @csrf
                            <input type="submit" value="言語選択画面に戻る" />
                            <input type="hidden" name="loginId" value= '{{ $reLoginId }}' >
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
                @foreach ($quizData as $quizDatum)

                <p>{{ $quizDatum->no }}. {{ $quizDatum->answer }} / 
                @php 
                    $string = Str::swap([
                        $quizDatum->language => '',
                        'で「' => '',
                        '」は？' => '',
                        ], $quizDatum->question);
                    echo $string;
                @endphp
                @endforeach
                </p>
            </div>
        </div>
    </div>
</body>