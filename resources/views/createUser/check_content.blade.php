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
  
  <title>確認ページ</title>
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

            <h2 class="font-orange">&nbsp;下記の内容で登録しますか？</h2>
          
              <form method="post" action="{{ route('store') }}" >
                @csrf
                <h3>【ID/ユーザー名】 {{ $loginId_userName }}</h3>
                <h3>【パスワード】 ※ 表示されません</h3>
                <div class="btn-wrap">
                <input type="submit" value="登録する"  class="btn btn-switch" />
                </div>

                <input type="hidden" name="loginId_userName" class="loginId_userName" maxlength="30" value="{{ $loginId_userName }}"/>
                <input type="hidden" name="loginPass" class="loginPass" maxlength="20" value="{{ $loginPass }}"/>
                <input type="hidden" name="clearCount" value=0>
                <input type="hidden" name="missCount" value=0>
                <input type="hidden" name="max_consecutive_study_day" value=0>

              </form>
              <br>
              <div>
                &emsp;<a href="{{ route('input', ['loginId_userName' => $loginId_userName, 'loginPass' => $loginPass]) }}">&laquo;&nbsp;書き直す</a> 
              </div>
          </div>
        </div>
</body>

</html>

