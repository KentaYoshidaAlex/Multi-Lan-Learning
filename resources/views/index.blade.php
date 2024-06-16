@php

// 回答済みの問題があれば初期化
if((session('doneAnswer')) !== null) {
  session(['doneAnswer' => null]);
}
if((session('doneQuizList')) !== null) {
  session(['doneQuizList' => null]);
}

@endphp


<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  @if(app('env')=='local')
    <link rel="stylesheet" href={{ asset('/css/style.css') }} >
    <media=”screen” >
  @endif
  @if(app('env')=='production')
  <link rel="stylesheet" href={{ secure_asset('/css/style.css') }} >
  @endif

  <title>ログインTOP</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Murecho:wght@500&display=swap" rel="stylesheet">
</head>

<body>
  <div id="loginTop" class="big-bg">
    <header>
      <div class="header">
        <h1>多言語学習アプリ♫ ログインTOP☆</h1>
      </div>
    </header>
    <br>
    <div class="main-wrapper">
      <div class="container">
        <form action="{{ route('loginInput') }}" method="post" class="form">
          @csrf
          <h1>IDとパスワードをご入力ください</h1>
          <p>ID</p>
          <input type="text" class="loginId" name="loginId" maxlength="100">
          <p>パスワード</p>
          <input type="text" class="loginPass" name="loginPass" maxlength="20">
          <br>
          <br>
          <input type="submit" name="bttn" value="ログイン" class="btn-square btn">

        </form>
        <br>
        <a href="{{ route('input') }}" class="newAccount">新規登録はこちら</a>
      </div>
    </div>
  </div>
</body>