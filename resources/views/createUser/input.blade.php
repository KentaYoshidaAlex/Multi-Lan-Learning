<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    @if(app('env')=='local')
    <link rel="stylesheet" href={{ asset('/css/style.css') }} >
    @endif
    @if(app('env')=='production')
    <link rel="stylesheet" href={{ secure_asset('/css/style.css') }} >
    @endif

    <title>新規登録</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Murecho:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div id="createUser" class="big-bg">
        <header>
            <div class="header">
                <h1>多言語学習アプリ♫ 新規登録ページ</h1>
            </div>
        </header>
        <br>
        <div class="main-wrapper">
            <div class="container">
                <x-input-error class="mb-4" :messages="$errors->all()"/>
                <form action="{{ route('check_content') }}" method="POST">
                    <h1>下記の会員情報をご登録ください</h1>
                    <p>ID</p>
                    <input type="text" name="loginId" class="loginId" maxlength="30" value="{{ request()->query('loginId') }} "/>
                    
                    <p>パスワード（※半角英数4文字以上でご入力ください）</p>
                    <input type="text" name="loginPass" class="loginPass" maxlength="20" value="{{ request()->query('loginPass') }} "/>

                    <p>ユーザー名</p>
                    <input type="text" name="userName" class="userName" maxlength="20" value="{{ request()->query('userName') }} "/>

                    <br>
                    <input type="submit" value="登録">
                    @csrf

                </form>
                <br>
                <a href="{{ route('index') }}"> 戻る</a>
            </div>
        </div>
    </div>
</body>
