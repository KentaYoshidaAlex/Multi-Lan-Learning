<?php

namespace App\Http\Controllers;

use App\Models\QuizDatum;
use App\Models\CreateUser;
use App\Models\AllQuizMusic;
use App\Models\Log;

use Illuminate\Http\Request;


class QuizMainController extends Controller
{     
    public function quizMain(Request $request) {

        // 言語が選択されていなかった場合、言語選択画面に戻す
        if ($request->language === '選択してください') {

            // 言語未選択時、変数代入
            $language_choice = 'no';
            
            //　インスタンス再代入
            $collectionNumber = $request->collectionNumber;
            $userName = $request->userName;
            $loginId = $request->loginId;

            // リクエストパラメータを元に、ログインユーザーデータ再取得
            $collection = CreateUser::where('loginId', $loginId)->get();

            // 再度loginResultに戻す
            return view('login/loginResult', compact('collectionNumber', 'loginId', 'userName', 'language_choice' , 'collection'));
        }
        $collectionNumber = $request->collectionNumber;


        // '学習開始' ＆'回答' 共通のrequest内データを変数に代入
        $language = $request->language;
        $bttn = $request->bttn;

        //既出問題文を入れる配列を初期化
        if (empty($doneQuizList)) {
            $doneQuizList = array();
        }

        // hiddenに埋め込んだオブジェクトを復元
        // $playerObj = New CreateUser();
        // $playerObj->forceFill(json_decode($request->collection,true));
        // dd($request->loginId);

        // 学習開始時
        if ($request->bttn === '学習開始') {

            // リクエストパラメータを元に、ユーザーデータを再取得
            $userObj = CreateUser::where('loginId', $request->loginId)->get();        
            foreach ($userObj as $player) { }

            // 学習画面→言語選択画面に戻る際に利用するため、代入
            $reLoginId = $player->loginId;
            $reLoginPass = $player->loginPass;

            // request内データを変数に代入
            $amountOfQuenstions = $request->amountOfQuenstions;
            $userName = $request->userName;

            // 全問題共通の効果音ファイルを再生するためのパスを取得
            foreach (AllQuizMusic::all() as $allQuizMusicData) { }

            // 選択した言語の問題を取得し、quizDataに代入
            $quizData = QuizDatum::
            where('language', $language)
            ->get();

            // 問題をランダムで出す為の番号取得
            $quizNo = mt_rand(1, count($quizData));
            
            // ランダムで問題文を取得
            $selectedObj = QuizDatum::
            where('language', $language)
            ->where('no',$quizNo)
            ->get();

            // 問題開始時(0),正解時(1),不正解時(2)を判定する変数用意
            $judgeNum = 0;

            // コレクション型からオブジェクト型を取得
            foreach ($selectedObj as $selectedQuiz) { }

            //　現在の問題数を表す変数初期化
            $currentQuizAmount = 0;

            // 問題文分岐の為、初期のカウント数代入
            $clearCount = 0;
            $missCount = 0;

            // sessionに値を保存
            session(['currentQuizAmount' => $currentQuizAmount]);
            session(['amountOfQuenstions' => $amountOfQuenstions]);
            session(['selectedQuiz' => $selectedQuiz]);
            session(['allQuizMusicData' => $allQuizMusicData]);
            session(['judgeNum' => $judgeNum]);
            session(['player' => $player]);     
            
            return view('quizMain/play', compact('clearCount', 'missCount','reLoginId','reLoginPass'));
        }


        // 1問目回答以降
        if ($request->bttn === '回答') {
            // dd($request);

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
            $reLoginId = $player->loginId;
            $reLoginPass = $player->loginPass;

            // 回答のlogを保存するためにLogインスタンス生成
            $log = New Log;

            // 正解不正解以外のlog情報を保存
            $log->loginId = $player->loginId;
            $log->userName = $player->userName;
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
                if(!((session('amountOfQuenstions') == '全問'))) {
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
                $restOfQuiz = QuizDatum::
                where('language', $doneQuiz->language)
                ->whereNotIn('no',$doneQuizList)
                ->get();

                // 残りの問題がある場合
                if(count($restOfQuiz)) {

                    // 出題していない問題のnoを、配列に保存
                    $restOfNo = [];
                    foreach ($restOfQuiz as $nextObj) { 
                        array_push($restOfNo, $nextObj->no);
                    }

                    // 残りの問題のnoをランダムで取得
                    $nextQuizNo = array_rand($restOfNo, 1);

                    // 次の問題をランダムで取得
                    $nextObj = QuizDatum::
                    where('language', $doneQuiz->language)
                    ->where('no',$restOfNo[$nextQuizNo])   
                    ->get();

                    // コレクション型からオブジェクト型を取得
                    foreach ($nextObj as $nextQuiz) { }
                    session(['selectedQuiz' => $nextQuiz]);
               
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

                // dd($player->loginId);

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

