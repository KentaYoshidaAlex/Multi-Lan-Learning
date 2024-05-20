
    <!-- クリアカウント数を0に変更 -->
    @php
    
    $player->clearCount = 0;
    $player->missCount = 0;

    @endphp

    <!-- ゲームオーバーの効果音 -->
    @if($tgrbtn == "1") 
        <audio src="{{ $allQuizMusicData->gameOverS }}" autoplay></audio>
    @endif
    <br>
    <p>ゲームオーバーです</p>
    <br>
    <form action="{{ route('loginInput') }}" method="post">
        @csrf
        <input type="submit" value="言語選択画面に戻る" />
        <input type="hidden" name="loginId" value= '{{ $reLoginId }}' >
        <input type="hidden" name="loginPass" value= '{{ $reLoginPass }}' >
        <input type="hidden" name="bttn" value= 'ログイン' >
    </form>
    <br>
    <br>
    <form action="{{ route('index') }}" method="get">
        <input type="submit" value="ログアウト" />
    </form>

    