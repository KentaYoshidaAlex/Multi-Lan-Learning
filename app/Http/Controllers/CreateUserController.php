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

    public function reInput($loginId_userName, $loginPass)
    {
        //ユーザー作成画面表示
        return view('createUser/input', [
            'loginId_userName' => $loginId_userName, 'loginPass' => $loginPass
        ]);
    }

    public function check_content(StoreUserRequest $request)
    {
        $loginId_userName = $request->input('loginId_userName');
        $loginPass = $request->input('loginPass');

        //入力確認画面表示
        return view('createUser/check_content', compact('loginId_userName', 'loginPass'));
    }

    public function store(Request $request)
    {
        $createUser = CreateUser::create([
            'loginId_userName' => $request->loginId_userName,
            'loginPass' => $request->loginPass,
            'clearCount' => $request->clearCount,
            'missCount' => $request->missCount,
        ]);

        return view('createUser/store', compact('createUser'));

    }

}
