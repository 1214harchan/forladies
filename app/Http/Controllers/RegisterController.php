<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function register()
    {
        return view('forladies.register');
    }

    public function newuser(RegisterRequest $request){ 

        return redirect('register');
    }
}

//メソッド名・・・ページ表示:show,登録:storeの方がわかりやすい