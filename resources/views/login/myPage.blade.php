
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>マイページ</title>

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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body class="langageSelect">
    <header>
        <h1>&emsp;Hello World!!</h1>
    </header>

    <br>

    <div class="main-wrapper" id="KleeOne400">
        <div class="container">
            <div class="main">
                <div class="container-left">
                    <p>マイページ</p>
                    <p>ユーザー名： {{ $reLoginId }} さん</p>
                </div>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <div class="container-right">
                    <form method='post' action="{{ route('quizMain') }}" >
                        <input type='submit' name='bttn' value="マイページ" class="buttons btn-hover-myPage blueColor" >
                    </form>
                </div>
            </div>
                <p style="line-height: 2px">-----------------------------------------</p>
                <p>さっそく学習を開始しましょう♫</p>
                <p>学習したい言語と学習方法を一覧から選択してください</p>

            <details class="details">
                <summary class="details-summary-loginResult icon-webfont">遊び方▽</summary>
                    
                    <p style="line-height: 0.1">
                    </p>
                    <p>☆事前学習：選んだ言語を一覧で事前学習できます☆</p>
                    <p>☆クイズ挑戦：1問ずつクイズ形式で学習できます☆</p>
                    <p>☆3問連続不正解の場合はゲームオーバーとなります☆</p>
                    <p>※効果音設定はiPhoneの場合、鳴らない可能性有</p>
                    <p>（Android, PCの場合は基本設定可能）</p>
            </details>

            <details class="details-smartPhone">
                <summary class="details-summary-loginResult icon-webfont">遊び方▽</summary>
                    
                    <p style="line-height: 0.1">
                    </p>
                    <p>☆事前学習：選んだ言語を一覧で事前学習できます☆</p>
                    <p>☆クイズ挑戦：1問ずつクイズ形式で学習できます☆</p>
                    <p>☆3問連続不正解の場合はゲームオーバー☆</p>
                    <p>※効果音設定はiPhoneの場合、鳴らない可能性有</p>
                    <p>（Android, PCの場合は基本設定可能）</p>
            </details>

        
        <div class="main">
            <div class="container-left">
                    <form method='post' action="{{ route('quizMain') }}" class="quiz-form">
                        @csrf
                        <p>&emsp;＜言語一覧＞</p>

                        &emsp;<label><input type="radio" class="cp_sl06" name="language" id="language" value="qWorldGreetings" checked>世界の挨拶</input></label>
                        <br>
                        &emsp;<label><input type="radio" class="cp_sl06" name="language" id="language" value="qTagalog">タガログ語</input></label>
                        <br>
                        &emsp;<label><input type="radio" class="cp_sl06" name="language" id="language" value="qMyanmar">ミャンマー語</input></label>
                        <br>
                        &emsp;<label><input type="radio" class="cp_sl06" name="language" id="language" value="qSpanish">スペイン語</input></label>
                        <br>
                        &emsp;<label><input type="radio" class="cp_sl06" name="language" id="language" value="qFrench">フランス語</input></label>                        
                        <br>
                        &emsp;<label><input type="radio" class="cp_sl06" name="language" id="language" value="qKansaiben">関西弁</input></label>
                        <br>

            </div>
            <div class="container-right">

                        <input type='submit' name='bttn' value="事前学習" class="buttons btn-hover blueColor" >
                        <br>
                        <br>
                        <div class="right-sentence">
                            ＜クイズ挑戦＞
                            <br>
                            〜問題数を選択してください〜
                        </div>
                        <div class="cp_ipselect04">
                            <select  name="amountOfQuenstions" id="amountOfQuenstions" required>
                                <option value="全問">クイズ全問挑戦</option>
                                <option value="3">クイズ3問挑戦</option>
                                <option value="5">クイズ5問挑戦</option>
                            </select>
                        </div>
                        <input type='submit' name='bttn' value='学習開始' class="buttons btn-hover greenColor">
                        <input type='hidden' name='loginId_userName' value='{{ $reLoginId }}'> 
                    </form>
                    
            </div>
        </div>
        <form action="{{ route('index') }}" method="get">
            <div class="btn-wrap">
                &emsp;<input type="submit" value="ログアウト" class="btn btn-switch" />
            </div>
        </form>
        </div>
                
    </div>

</body>
</html>

