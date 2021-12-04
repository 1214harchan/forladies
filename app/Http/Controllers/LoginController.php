<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function login()
    {
        return view('forladies.login');
    }

    public function store(LoginRequest $request)
    {
        return redirect('login');
    }
}

//メソッド名・・・ページ表示:show,登録:storeの方がわかりやすい