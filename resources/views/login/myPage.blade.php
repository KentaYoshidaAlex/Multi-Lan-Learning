
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
                    <p>【マイページ】</p>
                    <p>ユーザー名： {{ $reLoginId }}</p>
                </div>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <div class="container-right">
                    <form action="{{ route('loginInput') }}" method="post">
                        @csrf
                        <div class="btn-wrap">
                            <input type="submit" value="言語選択画面に戻る" class="btn btn-switch" />
                        </div>
                
                        <input type="hidden" name="loginId_userName" value= '{{ $reLoginId }}' >
                        <input type="hidden" name="loginPass" value= '{{ $reLoginPass }}' >
                        <input type="hidden" name="bttn" value= 'ログイン' >
                    </form>
                </div>
            </div>
            <p>【学習状況】</p>
            <p style="line-height: 2px">&emsp;</p>
            <p>🔷連続学習記録</p>
            <p>&emsp;🔥&nbsp;{{ $reMax_consecutive_study_day }}&nbsp;日</p>
            <p style="line-height: 2px">&emsp;</p>
            <p>🔷達成コース</p>
            <p>&emsp;🌏世界の挨拶&emsp;&emsp;3️⃣&emsp;5️⃣&emsp;全問</p>
            <p>&emsp;🇵🇭タガログ語&emsp;&emsp;3️⃣&emsp;5️⃣&emsp;全問</p>
            <p>&emsp;🇲🇲ミャンマー語&emsp;3️⃣&emsp;5️⃣&emsp;全問</p>
            <p>&emsp;🇪🇸スペイン語&emsp;&emsp;3️⃣&emsp;5️⃣&emsp;全問</p>
            <p>&emsp;🇫🇷フランス語&emsp;&emsp;3️⃣&emsp;5️⃣&emsp;全問</p>
            <p>&emsp;🐙関西弁&emsp;&emsp;&emsp;&emsp;3️⃣&emsp;5️⃣&emsp;全問</p>

        </div>   
    </div>

</body>
</html>

