<?php

namespace App\Http\Controllers;

use App\Models\QuizDatum;
use App\Models\QuizMyanmarDatum;
use App\Models\QuizTagalogDatum;
use App\Models\QuizKansaibenDatum;
use App\Models\QuizWorldGreetingsDatum;
use App\Models\QuizSpanishDatum;
use App\Models\QuizFrenchDatum;
use App\Models\CreateUser;
use App\Models\AllQuizMusic;
use Illuminate\Support\Facades\DB;
use App\Models\Log;

use Illuminate\Http\Request;


class QuizMainController extends Controller
{     
    public function quizMain(Request $request) {

        // '学習開始' ＆'回答' 共通のrequest内データを変数に代入
        $language = $request->language;
        $bttn = $request->bttn;
        $collectionNumber = $request->collectionNumber;

        //既出問題文を入れる配列を初期化
        if (empty($doneQuizList)) {
            $doneQuizList = array();
        }

        // 学習開始時
        if ($request->bttn === '学習開始' || $request->bttn === '事前学習') {

            // リクエストパラメータを元に、ユーザーデータを再取得
            $userObj = CreateUser::where('loginId_userName', $request->loginId_userName)->get();        
            foreach ($userObj as $player) { }

            // 学習画面→言語選択画面に戻る際に利用するため、代入
            $reLoginId = $player->loginId_userName;
            $reLoginPass = $player->loginPass;

            // request内データを変数に代入
            $amountOfQuenstions = $request->amountOfQuenstions;
            $loginId_userName = $request->loginId_userName;

            $allQuizMusicData = '';
            // 全問題共通の効果音ファイルを再生するためのパスを取得
            foreach (AllQuizMusic::all() as $allQuizMusicData) { }

            // 選択した言語毎に問題を取得し、quizDataに代入
            //ミャンマー語選択
            if ($language == 'qMyanmar') {	
                $quizData = QuizMyanmarDatum::all();
            } 	
            
            //タガログ語選択
            if ($language == 'qTagalog') {	
                $quizData = QuizTagalogDatum::all();
            } 
            //関西弁選択
            if ($language == 'qKansaiben') {	
                $quizData = QuizKansaibenDatum::all();
            }             
            //世界の挨拶選択
            if ($language == 'qWorldGreetings') {	
                $quizData = QuizWorldGreetingsDatum::all();
            } 
            //スペイン語選択
            if ($language == 'qSpanish') {	
                $quizData = QuizSpanishDatum::all();
            } 
            //フランス語選択
            if ($language == 'qFrench') {	
                $quizData = QuizFrenchDatum::all();
            } 

            // 共通で利用する変数をsessionに保存z
            session(['amountOfQuenstions' => $amountOfQuenstions]);
            session(['allQuizMusicData' => $allQuizMusicData]);
            session(['player' => $player]);     
            session(['quizData' => $quizData]); 
            session(['language' => $language]); 

            // 事前学習選択時の分岐
            if ($request->bttn === '事前学習') {
                return view('quizMain/vocabularyList', compact('reLoginId','reLoginPass'));
            }

            // 問題をランダムで出す為の番号取得
            $quizNo = mt_rand(1, count($quizData));

            // ランダムで問題文を取得
            //ミャンマー語選択
            if ($language === 'qMyanmar') {
                $selectedObj = QuizMyanmarDatum::
                where('no',$quizNo)
                ->get();
            }
            //タガログ語選択
            if ($language === 'qTagalog') {
                $selectedObj = QuizTagalogDatum::
                where('no',$quizNo)
                ->get();
            }
            //関西弁選択
            if ($language === 'qKansaiben') {
                $selectedObj = QuizKansaibenDatum::
                where('no',$quizNo)
                ->get();
            }
            //世界の挨拶選択
            if ($language === 'qWorldGreetings') {
                $selectedObj = QuizWorldGreetingsDatum::
                where('no',$quizNo)
                ->get();
            }
            //スペイン語選択
            if ($language === 'qSpanish') {
                $selectedObj = QuizSpanishDatum::
                where('no',$quizNo)
                ->get();
            }
            //フランス語選択
            if ($language === 'qFrench') {
                $selectedObj = QuizFrenchDatum::
                where('no',$quizNo)
                ->get();
            }


            // 問題開始時(0),正解時(1),不正解時(2)を判定する変数用意
            $judgeNum = 0;
            
            // コレクション型からオブジェクト型を取得
            foreach ($selectedObj as $selectedQuiz) { }

            //　現在の問題数を表す変数初期化
            $currentQuizAmount = 0;

            // 問題文分岐の為、初期のカウント数代入
            $clearCount = 0;
            $missCount = 0;
            
            // クイズで利用する変数をsession保存
            session(['currentQuizAmount' => $currentQuizAmount]);
            session(['selectedQuiz' => $selectedQuiz]);
            session(['judgeNum' => $judgeNum]);
            
            return view('quizMain/play', compact('clearCount', 'missCount','reLoginId','reLoginPass'));
        }


        // 1問目回答以降
        if ($request->bttn === '回答') {

            // request内データを変数に代入
            $choice = $request->choice;
            $no = $request->no;
            $tgrbtn = $request->tgrbtn;

            // 出題した問題を取り出し
            $selectedQuiz = session('selectedQuiz');

            //回答の成否判定　
            //正解時、1を代入
            if ($choice === $selectedQuiz->answer) {
                $anserJudge = 1;

            // 不正解時、2を代入
            } else {
                $anserJudge = 2;
            }

            // sessionからplayerを取り出し
            $player = session('player');

            // 学習画面→言語選択画面に戻る際に利用するため、代入
            $reLoginId = $player->loginId_userName;
            $reLoginPass = $player->loginPass;

            // 回答のlogを保存するためにLogインスタンス生成
            $log = New Log;

            // 正解不正解以外のlog情報を保存
            $log->loginId_userName = $player->loginId_userName;
            $log->language = $selectedQuiz->language;
            $log->quizNo = $selectedQuiz->no;
            $log->question = $selectedQuiz->question;

            // 正解時の処理
            if ($anserJudge == '1') {

                //クリアカウントをプラス1
                $player->clearCount = $player->clearCount + 1;

                // ミスカウントをリセット
                $player->missCount = 0;

                // $clearCount, $missCountを変数代入
                $clearCount = $player->clearCount;
                $missCount = $player->missCount;

                // 回答済みの問題を$doneQuizに代入
                $doneQuiz = $selectedQuiz;

                // sessionからcurrentQuizAmountを取り出し
                $currentQuizAmount = session('currentQuizAmount');

                // 「全問」選択以外の場合、現在の問題数をプラス1する
                if(!(session('amountOfQuenstions') == '全問')) {
                    $currentQuizAmount++; 
                } 
                
                // 問題開始時(0),正解時(1),不正解時(2)を判定する変数用意
                $judgeNum = 1;
                           
                // 回答済みの問題をリストに代入
                // 既出問題がある場合

                if(!(empty(session('doneQuizList')))) {
                    $doneQuizList = session('doneQuizList');

                // 既出問題がない場合
                } else {
                    $doneQuizList = array();
                }

                // 正解時log情報を保存
                $log->logRight = 1;
                $log->logWrong = 0;
                $log->clearCount = $player->clearCount;
                $log->missCount = $player->missCount;

                $log->save();

                // 一度出した問題は保存し、次出さないようにする
                $doneAnswer = $doneQuiz->answer;
                $donePronunciation = $doneQuiz->pathPronunciation;
                $doneBackground = $doneQuiz->pathBackground;
                array_push($doneQuizList, $doneQuiz->no);
                
                // 出題していない問題を取得
                //ミャンマー語選択
                if ($language == 'ミャンマー語') {	
                    $restOfQuiz = QuizMyanmarDatum::
                    whereNotIn('no',$doneQuizList)
                    ->get();
                }
                //タガログ語選択
                if ($language == 'タガログ語') {	
                    $restOfQuiz = QuizTagalogDatum::
                    whereNotIn('no',$doneQuizList)
                    ->get();
                }
                //関西弁選択
                if ($language == '関西弁') {	
                    $restOfQuiz = QuizKansaibenDatum::
                    whereNotIn('no',$doneQuizList)
                    ->get();
                }
                //世界の挨拶選択
                if ($language == '世界の挨拶') {	
                    $restOfQuiz = QuizWorldGreetingsDatum::
                    whereNotIn('no',$doneQuizList)
                    ->get();
                }
                //スペイン語選択
                if ($language == 'スペイン語') {	
                    $restOfQuiz = QuizSpanishDatum::
                    whereNotIn('no',$doneQuizList)
                    ->get();
                }
                //フランス語選択
                if ($language == 'フランス語') {	
                    $restOfQuiz = QuizFrenchDatum::
                    whereNotIn('no',$doneQuizList)
                    ->get();
                }

                // 残りの問題がある場合
                if(count($restOfQuiz)) {

                    // 出題していない問題のnoを、配列に保存
                    $restOfNo = [];
                    foreach ($restOfQuiz as $quiz) { 
                        array_push($restOfNo, $quiz->no);
                    }

                    // 残りの問題のnoをランダムで取得
                    $nextQuizNo = array_rand($restOfNo);

                    // 次の問題をランダムで取得
                    //ミャンマー語選択
                    if ($language === 'ミャンマー語') {
                        $nextObj = QuizMyanmarDatum::
                        where('no',$restOfNo[$nextQuizNo])   
                        ->firstOrFail();
                    }
                    //タガログ語選択
                    if ($language === 'タガログ語') {
                        $nextObj = QuizTagalogDatum::
                        where('no',$restOfNo[$nextQuizNo])   
                        ->firstOrFail();
                    }
                    //関西弁選択
                    if ($language === '関西弁') {
                        $nextObj = QuizKansaibenDatum::
                        where('no',$restOfNo[$nextQuizNo])   
                        ->firstOrFail();
                    }
                    //世界の挨拶選択
                    if ($language === '世界の挨拶') {
                        $nextObj = QuizWorldGreetingsDatum::
                        where('no',$restOfNo[$nextQuizNo])   
                        ->firstOrFail();
                    }
                    //スペイン語選択
                    if ($language == 'スペイン語') {	
                        $nextObj = QuizSpanishDatum::
                        where('no',$restOfNo[$nextQuizNo])   
                        ->firstOrFail();
                    }
                    //フランス語選択
                    if ($language == 'フランス語') {	
                        $nextObj = QuizFrenchDatum::
                        where('no',$restOfNo[$nextQuizNo])   
                        ->firstOrFail();
                    }

                    session(['selectedQuiz' => $nextObj]);

                // 残りの問題がない場合
                } else {
                    session(['selectedQuiz' => ""]);
                }

                // sessionに値を保存
                session(['currentQuizAmount' => $currentQuizAmount]);
                session(['judgeNum' => $judgeNum]);
                session(['doneAnswer' => $doneAnswer]);
                session(['donePronunciation' => $donePronunciation]);
                session(['doneBackground' => $doneBackground]);
                session(['player' => $player]);
                session(['tgrbtn' => $tgrbtn]);
                session(['doneQuizList' => $doneQuizList]);


                // 再度、問題画面に戻す
                return view('quizMain/play', compact('clearCount', 'missCount','reLoginId','reLoginPass'));
            }


            // 不正解時の処理
            if ($anserJudge == '2') {

                // 問題開始時(0),正解時(1),不正解時(2)を判定する変数用意
                $judgeNum = 2;

                // ミスカウントをプラス１
                $player->missCount = $player->missCount + 1;

                // $clearCount, $missCountを変数代入
                $clearCount = $player->clearCount;
                $missCount = $player->missCount;

                // 不正解時log情報を保存
                $log->logRight = 0;
                $log->logWrong = 1;
                $log->clearCount = $player->clearCount;
                $log->missCount = $player->missCount;

                $log->save();

                // sessionに値を保存
                session(['judgeNum' => $judgeNum]);
                session(['player' => $player]);
                session(['judgeNum' => $judgeNum]);
                session(['tgrbtn' => $tgrbtn]);

                // 再度、問題画面に戻す
                return view('quizMain/play', compact('clearCount', 'missCount','reLoginId','reLoginPass'));
            }
        }
    }

    // ログアウト押下時の処理
    public function quizLogOut(Request $request) 
    {
        // doneQuizListを初期化
        if(session('doneQuizList') !== null) {
            $doneQuizList = session('doneQuizList');
            $doneQuizList = [];
            session(['doneQuizList' => $doneQuizList]);
        }

        // ログイン画面に戻る
        return view('index');
      
    }
}