
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
                    🔷ユーザー名：<br>
                    &emsp;『{{ $reLoginId }}』
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
            @if ($reLoginId === "ゲスト")
                ※個別のアカウントを作成しログインすると、
                <br>
                &emsp;学習状況が以下に表示されます
            @endif
            @if ($reLoginId === "ゲスト")
                <div style="background-color:grey;">
            @endif
                    <p style="line-height: 2px">&emsp;</p>
                    <p>【学習状況】</p>
                    <p style="line-height: 2px">&emsp;</p>
                    <p>🔷連続学習記録</p>
                    @if ($reLoginId === "ゲスト")
                        <p>&emsp;🔥&nbsp;？&nbsp;日</p>
                    @else
                        <p>&emsp;🔥&nbsp;{{ $reMax_consecutive_study_day }}&nbsp;日</p>
                    @endif
                    <p style="line-height: 2px">&emsp;</p>
                    @php
                        $achievements = $reAchievement_cource ?? [];
                        $courses = [
                            '世界の挨拶' => '🌏世界の挨拶',
                            'タガログ語' => '🇵🇭タガログ語',
                            'ミャンマー語' => '🇲🇲ミャンマー語',
                            'スペイン語' => '🇪🇸スペイン語',
                            'フランス語' => '🇫🇷フランス語',
                            '関西弁' => '🐙関西弁',
                        ];
                    @endphp

                    <p>🔷達成コース</p>
                    @foreach ($courses as $key => $label)
                        <p>
                            &emsp;{{ $label }}&emsp;&emsp;
                            <span class="{{ !empty($achievements[$key.'_3']) ? 'achieved' : '' }}">3️⃣</span>&emsp;
                            <span class="{{ !empty($achievements[$key.'_5']) ? 'achieved' : '' }}">5️⃣</span>&emsp;
                            <span class="{{ !empty($achievements[$key.'_全問']) ? 'achieved' : '' }}">全問</span>
                        </p>
                    @endforeach
                    <br>

            @if ($reLoginId === "ゲスト")
                </div>   
            @endif
    </div>

</body>
</html>

