<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href={{ asset('/css/style.css') }} />

  <title>登録結果ページ</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Murecho:wght@500&display=swap" rel="stylesheet">
</head>

<body>

  <div id="createUser" class="big-bg">
    <header>
      <div class="header">
          <h1>多言語学習アプリ♫ 登録結果画面</h1>
      </div>
    </header>
    <br>
      <div class="main-wrapper">
        <div class="container">          
            @if (!empty($createUser)) 
                <br>
                    <p>新規登録に成功しました！</p>
                    <p>{{ $createUser->userName }} さん</p>
                    <p class="text-coment">早速ログインしてクイズに挑戦しましょう！</p>
                    <a href="{{ route('index') }}">
                        <button class="btn-square btn">ログイン画面へ</button>
                    </a>
                @else
                    <p>新規登録に失敗しました。</p>
                    <a href="{{ route('index') }}">トップへ戻る</a>
                    <a href="{{ route('input') }}">新規登録画面に戻る</a>
                @endif
        </div>
      </div>

</body>

</html>

