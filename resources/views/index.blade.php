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
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Sacramento&display=swap" rel="stylesheet">
</head>

<body class="loginTop">
    <header>
      <div class="header">
        <h1>&emsp;Hello World!!</h1>
      </div>
    </header> 
    <br>
    <div class="main-wrapper">
      <div class="container">
        <form action="{{ route('loginInput') }}" method="post" class="form">
          @csrf
          <h2 class="rainbow" id="KleeOne600"><span class="center">&emsp;&nbsp;〜 Let's enjoy language learning 〜</span></h2>
          <br>
          <div class="honbun">
            &nbsp;☆登録済みの方は、登録内容を入力しログインしてください<br>
            &nbsp;☆未登録の方は、「新規登録はこちら」から内容をご入力ください<br>
            &nbsp;☆登録せずに遊びたい方は、「ゲストログイン」からお入り下さい<br>
            <br>
          </div>
          <div id="KleeOne400">
            <p>&emsp;ID/ユーザー名</p>
            &emsp; <input type="text" class="loginId_userName" name="loginId_userName" maxlength="100">
            <p>&emsp;パスワード</p>
            &emsp; <input type="text" class="loginPass" name="loginPass" maxlength="20">
            <br>
          </div>
          <div class="btn-wrap">
          <input type="submit" name="bttn" value="ログイン"  class="btn btn-switch" >
          </div>
        </form>
        <br>
        &emsp;<a href="{{ route('input') }}" class="newAccount"  id="KleeOne400">新規登録はこちら</a>
        <br>
        <form action="{{ route('loginInput') }}" method="post" class="form">
          @csrf
          <div class="btn-wrap">
            <input type="submit" name="bttn" value="ゲストログイン"  class="btn btn-switch">
          </div>
            <input type="hidden" name="loginId_userName" name="loginId_userName" value="ゲスト">
            <input type="hidden" class="loginPass" name="loginPass" value="9999">
        </form>
      </div>
    </div>
</body>