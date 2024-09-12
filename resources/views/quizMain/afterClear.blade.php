<!-- 3問以上正解時の問題表示 -->
    
    <!-- 3問以上正解時の効果音 -->
    @if($tgrbtn == "1") 
        <audio src="{{ $allQuizMusicData->correctS }}" autoplay></audio>
    @endif 
    <p>目標達成です！おめでとうございます！</p><br>

    <!-- クイズ本文 -->
    {{-- @if(($amountOfQuenstions != $currentQuizAmount) && (!empty($question))) --}}
    @if (($amountOfQuenstions != $currentQuizAmount) && (!($selectedQuiz == '')))
        引き続きお楽しみの方はこちら↓ 
        
        <div class="responsive-small"><p>下記の問題の空欄に当てはまる単語を選択してください。</p></div>
        <h3>Q : {{ $question }}</h3>
        <p>適切な回答を選択してください。</p>   
        <div class="form">
            <div class="top-text">
                <form method="post" action="{{ route('quizMain') }}">
                    @csrf
                    <label for="choice1"><input type='radio' name='choice' id='choice1' value='{{ $choice1 }}' required>{{ $choice1 }}</label><br>
                        <label for="choice2"><input type='radio' name='choice' id='choice2' value='{{ $choice2 }}'>{{ $choice2 }}</label><br>
                        <label for="choice3"><input type='radio' name='choice' id='choice3' value='{{ $choice3 }}'>{{ $choice3 }}</label><br>
                        <label for="choice4"><input type='radio' name='choice' id='choice4' value='{{ $choice4 }}'>{{ $choice4 }}</label><br><br>

                        <input type='hidden' name='language' value='{{ $language }}'>
                        <input type='hidden' name='no' value='{{ $no }}'>
                    <input type='submit' name='bttn' value='回答' class="btn-square">
                    <br>
                    <p>音声出力（グレー：無 / 緑：有）</p>
                    <div class="switch">
                      <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type='checkbox' name='tgrbtn' value='1' 
                      
                      @if($tgrbtn == "1")  checked @endif >
                      <label for="cmn-toggle-1"></label>
                    </div>
                </form>
            </div>
            <br>    
            <form action="{{ route('loginInput') }}" method="post">
                @csrf
                <input type="submit" value="言語選択画面に戻る" />
                <input type="hidden" name="loginId_userName" value= '{{ $reLoginId }}' >
                <input type="hidden" name="loginPass" value= '{{ $reLoginPass }}' >
                <input type="hidden" name="bttn" value= 'ログイン' >
            </form>
            <br>
            <form action="{{ route('index') }}" method="get">
                <input type="submit" value="ログアウト" />
            </form>
        </div>  
    @else

        <!-- 全問正解の効果音 -->
        @if($tgrbtn == "1") 
            <audio src="{{ $allQuizMusicData->congratulationsS }}" autoplay></audio>
        @endif
        <p>全問正解しました！</p>
            <br>
            <form action="{{ route('loginInput') }}" method="post">
                @csrf
                <input type="submit" value="言語選択画面に戻る" />
                <input type="hidden" name="loginId" value= '{{ $reLoginId }}' >
                <input type="hidden" name="loginPass" value= '{{ $reLoginPass }}' >
                <input type="hidden" name="bttn" value= 'ログイン' >
            </form>
            <br>
            <form action="{{ route('index') }}" method="get">
                @csrf
                <input type="submit" value="ログアウト" />
            </form>
            <br>
            <p>↓下記にお祝いメッセージ🥂があります↓<p>
            </div>
            </div>   
            </div>   
            <br>
            <p>「よく頑張りました！おめでとうございます🎵</p>
            <p>  あなたは天才です🌟』</p>
            <br>
        <div id="complete" class="big-bg" >
        </div>  
    @endif 