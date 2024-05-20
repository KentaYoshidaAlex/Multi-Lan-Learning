<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateUser;
use App\Http\Requests\StoreUserRequest;

class CreateUserController extends Controller
{
    public function input()
    {
        //ユーザー作成画面表示
        return view('createUser/input');
    }

    public function reInput($loginId, $loginPass, $userName)
    {
        //ユーザー作成画面表示
        return view('createUser/input', [
            'loginId' => $loginId, 'loginPass' => $loginPass, 'userName' => $userName
        ]);
    }

    public function check_content(StoreUserRequest $request)
    {
        $loginId = $request->input('loginId');
        $loginPass = $request->input('loginPass');
        $userName = $request->input('userName');

        //入力確認画面表示
        return view('createUser/check_content', compact('loginId', 'loginPass', 'userName'));
    }

    public function store(Request $request)
    {
        $createUser = CreateUser::create([
            'loginId' => $request->loginId,
            'loginPass' => $request->loginPass,
            'userName' => $request->userName,
            'clearCount' => $request->clearCount,
            'missCount' => $request->missCount,
        ]);

        return view('createUser/store', compact('createUser'));

    }

}
