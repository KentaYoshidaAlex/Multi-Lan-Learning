
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
    <p>&emsp; 残念！ゲームオーバーです😭</p>
    <form action="{{ route('loginInput') }}" method="post">
        @csrf
        <div class="btn-wrap">
        <input type="submit" value="言語選択画面に戻る" class="btn btn-switch" />
        </div>

        <input type="hidden" name="loginId_userName" value= '{{ $reLoginId }}' >
        <input type="hidden" name="loginPass" value= '{{ $reLoginPass }}' >
        <input type="hidden" name="bttn" value= 'ログイン' >
    </form>

    <form action="{{ route('index') }}" method="get">
        <div class="btn-wrap">
        <input type="submit" value="ログアウト" class="btn btn-switch" />
        </div>

    </form>

    