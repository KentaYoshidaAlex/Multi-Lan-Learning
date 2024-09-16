<?php

namespace App\Http\Controllers;

use App\Models\CreateUser;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // リクエストパラメータの取得
        $loginId_userName = $request->loginId_userName;
        $loginPass = $request->loginPass;
        $bttn = $request->bttn;

        // リクエストパラメータを元に、ログインユーザーデータを取得
        $collection = CreateUser::
        where('loginId_userName', $loginId_userName)
        ->where('loginPass',$loginPass)
        ->get();

        // ログイン成否判定
        // 成功時
        if ($collection->count()) {

            // コレクション型からオブジェクト型を取得
            foreach ($collection as $userObject) { }

            // $collectionの数を代入
            $collectionNumber = $collection->count();

            // userObject情報代入
            $loginId_userName = $userObject->loginId_userName;

            if ($bttn === "ログイン") {

                // ログイン結果画面に遷移
                return view('login/loginResult', compact('collectionNumber','loginId_userName','collection'));

            }
        
        } else {
            // ログイン失敗時
            $collectionNumber = 0;

            // ログイン結果画面に遷移
            return view('login/loginResult', compact('collectionNumber'));

        }
    }
}