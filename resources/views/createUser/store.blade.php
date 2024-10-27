<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  @if(app('env')=='local')
    <link rel="stylesheet" href={{ asset('/css/style.css') }} >
  @endif
  @if(app('env')=='production')
  <link rel="stylesheet" href={{ secure_asset('/css/style.css') }} >
  @endif
  
  <title>登録結果ページ</title>
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
          <div id="KleeOne400">          
            @if (!empty($createUser)) 
                    <p>&nbsp;新規登録に成功しました！</p>
                    <p>&nbsp;{{ $createUser->loginId_userName }} さん</p>
                    <p class="text-coment">&nbsp;早速ログインしてクイズに挑戦しましょう！</p>
                    <br>
                    <form action="{{ route('index') }}" method="get">
                      <div class="btn-wrap">
                      <input type="submit" value="ログイン画面へ" class="btn btn-switch" />
                      </div>
                    </form>
            @else
                    <p>新規登録に失敗しました。</p>
                    <a href="{{ route('index') }}">トップへ戻る</a>
                    <a href="{{ route('input') }}">新規登録画面に戻る</a>
            @endif
          </div>
        </div>
      </div>
</body>

</html>

