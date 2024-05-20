<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href={{ asset('/css/style.css') }} />

  <title>確認ページ</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Murecho:wght@500&display=swap" rel="stylesheet">
</head>

<body>

  <div id="createUser" class="big-bg">
    <header>
      <div class="header">
          <h1>多言語学習アプリ♫ 入力内容確認ページ</h1>
      </div>
    </header>
    <br>
      <div class="main-wrapper">
        <div class="container">
          <h1>下記の内容で登録しますか？</h1>
          
            <form method="post" action="{{ route('store') }}" >
              @csrf
              <h3>【ID】 {{ $loginId }}</h3>
              <h3>【パスワード】 ※ 表示されません</h3>
              <h3>【ユーザー名】 {{ $userName }} </h3>
              <input type="submit" value="登録する" />

              <input type="hidden" name="loginId" class="loginId" maxlength="30" value="{{ $loginId }}"/>
              <input type="hidden" name="loginPass" class="loginPass" maxlength="20" value="{{ $loginPass }}"/>
              <input type="hidden" name="userName" class="userName" maxlength="20" value="{{ $userName }}"/>
              <input type="hidden" name="clearCount" value=0>
              <input type="hidden" name="missCount" value=0>
            </form>
            <br>
            <div>
              <a href="{{ route('input', ['loginId' => $loginId, 'loginPass' => $loginPass, 'userName' => $userName]) }}">&laquo;&nbsp;書き直す</a> 
            </div>
        </div>
      </div>

</body>

</html>

