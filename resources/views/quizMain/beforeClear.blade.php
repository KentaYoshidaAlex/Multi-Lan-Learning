                <!-- 通常時問題表示 -->
                
                下記の問題の空欄に当てはまる単語を選択してください。
                <h3>Q : {{ $question }}</h3>
                <p>適切な回答を選択してください。</p>
                <div id="questions">
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
                                  
                                    @if($tgrbtn == '1')
                                        checked 
                                    @endif
                                  >


                                  <label for="cmn-toggle-1"></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                    <input type="submit" value="ログアウト" />
                </form>
                <br>
                </div>
            </div>
        </div>
</body>
</html>
