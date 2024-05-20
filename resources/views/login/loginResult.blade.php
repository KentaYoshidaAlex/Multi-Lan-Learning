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

    <link rel="stylesheet" href={{ asset('/css/style.css') }} />
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

                    <p>ようこそ {{ $userName }} さん</p>

                    <br>
                    <p>さっそく学習を開始しましょう♫</p>
                    <p>学習したい言語を選択してください</p>
                    <br>
                    @isset($language_choice)
                        <p>下記の一覧から選択してください</p>
                    @endisset

                    <form method='post' action="{{ route('quizMain') }}" class="quiz-form">
                        @csrf
                        <select class="cp_sl06" name="language" id="language" required>
                            <option value="選択してください">言語一覧</option>

                            <option value="ミャンマー語">ミャンマー語</option>

                            <option value="スペイン語">スペイン語</option>

                            <option value="タガログ語">タガログ語</option>

                            <option value="フランス語">フランス語</option>
                        </select>
                                
                        <select class="cp_sl06" name="amountOfQuenstions" id="amountOfQuenstions" required>
                            <option value="全問">全問挑戦</option>

                            <option value="3">3問挑戦</option>

                            <option value="5">5問挑戦</option>

                        </select>                        
                        <br>
                        <br>
                        <input type='submit' name='bttn' value='学習開始' class="btn-square btn">
                        <input type='hidden' name='userName' value='{{ $userName }}'> 
                        <input type='hidden' name='collectionNumber' value='{{ $collectionNumber }}'> 
                        <input type='hidden' name='loginId' value='{{ $loginId }}'> 

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

