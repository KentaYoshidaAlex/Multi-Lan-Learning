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
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Sacramento&display=swap" rel="stylesheet">
</head>

<body class="createUser">
        <header>
            <div class="header">
                <h1>&emsp;Hello World!!</h1>
            </div>
        </header>
        <br>

        <div class="main-wrapper">
            <div class="container">
                <x-input-error class="mb-4" :messages="$errors->all()"/>
                <form action="{{ route('check_content') }}" method="POST">
                    <div id="KleeOne400">
                        <h2 class="font-orange">&nbsp;下記の会員情報をご登録ください</h2>
                        &emsp;ID/ユーザー名
                        <br>
                        （※全角半角どちらでも入力可能です）
                        <br>
                        &emsp;<input type="text" name="loginId_userName" class="loginId_userName" maxlength="30" value="{{ request()->query('loginId_userName') }} "/>
                        <br>
                        <br>
                        &emsp;パスワード
                        <br>
                        （※半角英数4文字以上でご入力ください）
                        <br>
                        &emsp;<input type="text" name="loginPass" class="loginPass" maxlength="20" value="{{ request()->query('loginPass') }} "/>
                    </div>
                    <div class="btn-wrap">
                        <input type="submit" value="登録"  class="btn btn-switch" >
                    </div>
                    @csrf

                </form>
                <br>
                &emsp;<a href="{{ route('index') }}" id="KleeOne400"> 戻る</a>
            </div>
        </div>
    </body>
