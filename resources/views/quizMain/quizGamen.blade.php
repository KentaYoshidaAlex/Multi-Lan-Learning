               
            <!-- 効果音をONにして正解した場合、自動で正解音を鳴らす -->
            @if($tgrbtn == "1" && $missCount == 0) 
                <audio src="{{ $allQuizMusicData->correctS }}" autoplay></audio>
            @endif 
            <!-- クイズ本文 -->
            @if (($amountOfQuenstions != $currentQuizAmount) && (!($selectedQuiz == '')))
                <div id="KleeOne400">
                    <br>
                    <div class="responsive-small">
                        <p>&emsp;下記の問題の空欄に当てはまる単語を選択してください。</p>
                        <h3>&emsp;Q : {{ $question }}</h3>
                        <p>&emsp; 適切な回答を選択してください。</p>   
                        <div class="top-text">
                            <form method="post" action="{{ route('quizMain') }}">
                                @csrf
                                &emsp;<label for="choice1"><input type='radio' name='choice' id='choice1' value='{{ $choice1 }}' required>{{ $choice1 }}</label><br>
                                &emsp;<label for="choice2"><input type='radio' name='choice' id='choice2' value='{{ $choice2 }}'>{{ $choice2 }}</label><br>
                                &emsp;<label for="choice3"><input type='radio' name='choice' id='choice3' value='{{ $choice3 }}'>{{ $choice3 }}</label><br>
                                &emsp;<label for="choice4"><input type='radio' name='choice' id='choice4' value='{{ $choice4 }}'>{{ $choice4 }}</label><br>

                                    <input type='hidden' name='language' value='{{ $language }}'>
                                    <input type='hidden' name='no' value='{{ $no }}'>
                                <div class="btn-wrap">
                                <input type='submit' name='bttn' value='回答'  class="btn btn-switch" >
                                </div>
                                &ensp;音声出力（グレー：無 / 緑：有）
                                <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type='checkbox' name='tgrbtn' value='1' 

                                @if($tgrbtn == "1")  checked @endif >
                                <label for="cmn-toggle-1"></label>
                            </form>
                        </div>
                        <form action="{{ route('loginInput') }}" method="post">
                            @csrf
                            <div class="btn-wrap">
                            <input type="submit" value="言語選択画面に戻る"  class="btn btn-switch" />
                            </div>

                            <input type="hidden" name="loginId_userName" value= '{{ $reLoginId }}' >
                            <input type="hidden" name="loginPass" value= '{{ $reLoginPass }}' >
                            <input type="hidden" name="bttn" value= 'ログイン'>
                        </form>
                        <form action="{{ route('index') }}" method="get">
                            <div class="btn-wrap">
                            <input type="submit" value="ログアウト"  class="btn btn-switch" />
                            </div>
                        </form>
                    </div>
                </div>
            @else
                <div id="KleeOne400">
                    <!-- 全問正解時の効果音 -->
                    @if($tgrbtn == "1" && $missCount == 0) 
                        <audio src="{{ $allQuizMusicData->congratulationsS }}" autoplay></audio>
                    @endif
                    

                    <h3>&ensp;目標達成おめでとうございます!!</h3>
                    <h3>&ensp;全問正解しました!!</h3>
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
                            @csrf
                            <div class="btn-wrap">
                            <input type="submit" value="ログアウト" class="btn btn-switch" />
                            </div>
                        </form>
                        <br>
                        <p>↓下記にお祝いメッセージ🥂があります↓<p>
                        
                    </div>
                </div>
            
            </body>
            </p>
            <div class="extra-space" id="KleeOne400">
                <br>
                <p>「よく頑張りました！おめでとうございます🎵</p>
                <p>  あなたは天才です🌟』</p>
                <br>
            </div>
            <div id="complete" class="big-bg" >
                
            </div>  
        
    @endif 
</html>