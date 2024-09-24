@php

// 回答済みの問題があれば初期化
if((session('doneAnswer')) !== null) {
  session(['doneAnswer' => null]);
}
if((session('doneQuizList')) !== null) {
  session(['doneQuizList' => null]);
}

@endphp

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>確認ページ</title>

    @if(app('env')=='local')
    <link rel="stylesheet" href={{ asset('/css/style.css') }} >
    @endif
    @if(app('env')=='production')
    <link rel="stylesheet" href={{ secure_asset('/css/style.css') }} >
    @endif
</head>

<body>
    <div id="langageSelect" class="big-bg">
        <header>
            <div class="header">
                <h1>多言語学習アプリ♫ 言語選択ページ</h1>
            </div>
        </header>
        <br>
        <div class="main-wrapper">
            <div class="container">
                
                @if($collectionNumber == 1)
                    <p>ログインに成功しました！!</p>
                    <p>ようこそ {{ $loginId_userName }} さん</p>
                    <p style="line-height: 2px">-----------------------------------------</p>
                    <p>さっそく学習を開始しましょう♫</p>
                    <p>学習したい言語と学習方法を一覧から選択してください</p>
                    <p style="line-height: 0.1">
                        <br>
                    </p>
                    <p>☆事前学習：選んだ言語を一覧で事前学習できます☆</p>
                    <p>☆クイズ挑戦：1問ずつクイズ形式で学習できます☆</p>
                    <p>（3問連続不正解はゲームオーバー）</p>
                    
                    @isset($language_choice)
                        <p style="color: red;">※下記の一覧から選択してください</p>
                    @endisset

                    <form method='post' action="{{ route('quizMain') }}" class="quiz-form">
                        @csrf
                        <select class="cp_sl06" name="language" id="language" required>
                            <option value="選択してください">言語一覧</option>

                            <option value="qMyanmar">ミャンマー語</option>

                            <option value="qSpanish">スペイン語</option>

                            <option value="qTagalog">タガログ語</option>

                            <option value="qFrench">フランス語</option>

                            <option value="qKansaiben">関西弁</option>

                            <option value="qWorldGreetings">世界の挨拶</option>

                        </select>
                                
                        <select class="cp_sl06" name="amountOfQuenstions" id="amountOfQuenstions" required>
                            <option value="事前学習">事前学習</option>

                            <option value="全問">クイズ全問挑戦</option>

                            <option value="3">クイズ3問挑戦</option>

                            <option value="5">クイズ5問挑戦</option>

                        </select>                        
                        <br>
                        <br>
                        <input type='submit' name='bttn' value='学習開始' class="btn-square btn">
                        <input type='hidden' name='loginId_userName' value='{{ $loginId_userName }}'> 
                        <input type='hidden' name='collectionNumber' value='{{ $collectionNumber }}'> 

                    </form>
                    <br>
                    <form action="{{ route('index') }}" method="get">
                        <input type="submit" value="ログアウト" />
                    </form>
                @else
                    <p>ログインに失敗しました</p>
                    <br>
                    <form action="{{ route('index') }}" method="get">
                        <input type="submit" value="TOPページに戻る">
                    </form>

                @endif
            </div>
        </div>
    </div>

</body>
</html>

