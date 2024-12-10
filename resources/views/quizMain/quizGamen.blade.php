               
            <!-- 効果音をONにして正解した場合、自動で正解音を鳴らす -->
            @if($tgrbtn == "1" && $missCount == 0) 
                <audio src="{{ $allQuizMusicData->correctS }}" autoplay playsinline></audio>
            @endif 
            <!-- クイズ本文 -->
            @if (($amountOfQuenstions != $currentQuizAmount) && (!($selectedQuiz == '')))
                <div id="KleeOne400">
                    <br>
                        <div class="question-width">
                            <p>下記の問題の適切な回答を選択してください。</p>
                        </div>
                            <div class="quiz-sentence">
                                Q : {{ $question }}
                            </div>
                            <br>
                        <div class="top-text">
                            <form method="post" action="{{ route('quizMain') }}">
                                @csrf
                                <div class="parent">
                                    <div class="child1-play-gamen">
                                        &emsp;<label for="choice1"><input type='radio' name='choice' id='choice1' value='{{ $choice1 }}' required>{!! $choice1 !!}</label><br>
                                        &emsp;<label for="choice2"><input type='radio' name='choice' id='choice2' value='{{ $choice2 }}'>{!! $choice2 !!}</label><br>
                                        &emsp;<label for="choice3"><input type='radio' name='choice' id='choice3' value='{{ $choice3 }}'>{!! $choice3 !!}</label><br>
                                        &emsp;<label for="choice4"><input type='radio' name='choice' id='choice4' value='{{ $choice4 }}'>{!! $choice4 !!}</label><br>

                                            <input type='hidden' name='language' value='{{ $language }}'>
                                            <input type='hidden' name='no' value='{{ $no }}'>
                                    </div>
                                    <div class="child2-play-gamen">
                                        <div class="btn-wrap-answer">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        
                                        <input type='submit' name='bttn' value='回答'  id="btn-width-answer" class="btn btn-switch" >
                                    </div>
                                </div>
                        </div>
                                <br>
                                <br>

                                <div class="parent">
                                    <div class="sound-control-position">
                                        &nbsp;＜効果音設定＞
                                        <br>
                                        （グレー：無 / 緑：有）
                                        <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type='checkbox' name='tgrbtn' value='1' 

                                        @if($tgrbtn == "1")  checked @endif >
                                        <label for="cmn-toggle-1"></label>
                                    </div>
                                    <div class="child2">
                            </form>
                        </div>
                                    
                        <form action="{{ route('loginInput') }}" method="post">
                            @csrf
                            <div class="btn-wrap">
                            <input type="submit" value="言語選択画面に戻る" class="btn btn-switch" />
                            </div>
                                    </div>
                                </div>
                            <input type="hidden" name="loginId_userName" value= '{{ $reLoginId }}' >
                            <input type="hidden" name="loginPass" value= '{{ $reLoginPass }}' >
                            <input type="hidden" name="bttn" value= 'ログイン'>
                        </form>
                        <div class="foo">
                            <div class="rigit-side">
                                <form action="{{ route('index') }}" method="get">
                                    <div class="btn-wrap-for-quizGamen">
                                    <input type="submit" value="ログアウト" class="btn btn-switch" />
                                    </div>
                                </form>
                            </div>
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
                </div>

                <div class="poyon">
                    <img src="../image/character_illustrations/message_congratulations.png">
                    <br>
                    <img src="../image/character_illustrations/world_peace_smile.png">
                </div>
                <div class="parent">
                    
                    <div class="child1">
                        <form action="{{ route('loginInput') }}" method="post">
                            @csrf
                            <div class="btn-wrap">
                            <input type="submit" value="言語選択画面に戻る" class="btn btn-switch" />
                            </div>
                            <input type="hidden" name="loginId_userName" value= '{{ $reLoginId }}' >
                            <input type="hidden" name="loginPass" value= '{{ $reLoginPass }}' >
                            <input type="hidden" name="bttn" value= 'ログイン' >
                        </form>
                    </div>
                    <div class="child2">
                        <form action="{{ route('index') }}" method="get">
                            @csrf
                            <div class="btn-wrap">
                            <input type="submit" value="ログアウト" class="btn btn-switch" />
                            </div>
                        </form>
                    </div>
            </div>      
        </div>  
    </body>

    @endif 
    
</html>